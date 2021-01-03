<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/post/{id}", name="post")
     */
    public function postAction($id): Response
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->findById($id);

        return $this->render('blog/post-details.html.twig', [
            'post' => $post
        ]);
    }

    /**
     * @Route("/", name="index")
     */
    public function indexAction(): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findTenLast();

        return $this->render('blog/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/newAction", name="new_ticket")
     */
    public function newAction(Request $request): Response {
        $post = new Post();

        $form = $this->createFormBuilder($post)
            ->add('titre', TextType::class, ['label' => "Titre"])
            ->add('content', TextareaType::class,  ['attr' => ['class' => 'formcontent', 'rows' => 10], 'label' => 'Contenu' ])
            ->add('validate', SubmitType::class, ['label'=>'Valider'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();

            $date = new \DateTime();
            $post->setPublished($date);
            $post->setUrlAlias("/");
            $entityManager->persist($post);
            $entityManager->flush();
            $post->setUrlAlias("/post/" . $post->getId());
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('post', array('id' => $post->getId()));
        }

        return $this->render('blog/newTicket.html.twig', [
            'newTicketForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editAction/{id}", name="edit_ticket")
     * @IsGranted("ROLE_BLOG_ADMIN")
     */
    public function editAction($id, Request $request): Response {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findOneBy(array('id' => $id));

        $form = $this->createFormBuilder($post)
            ->add('titre', TextType::class, ['label' => "Titre"])
            ->add('content', TextareaType::class,  ['attr' => ['class' => 'formcontent', 'rows' => 10], 'label' => 'Contenu' ])
            ->add('validate', SubmitType::class, ['label'=>'Valider'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $post->setUrlAlias("/post/" . $post->getId());
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('post', array('id' => $post->getId()));
        }

        return $this->render('blog/newTicket.html.twig', [
            'newTicketForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deleteAction/{id}", name="delete_ticket")
     * @IsGranted("ROLE_BLOG_ADMIN")
     */
    public function deleteAction($id): Response
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findOneBy(array('id' => $id));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($post);
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }
}
