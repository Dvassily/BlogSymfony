<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class APIController extends AbstractController
{
    /**
     * @Route("/api/tickets", name="apiArticles")
     */
    public function index(EntityManagerInterface $entityManager, Request $request): JsonResponse
    {
        $repository = $entityManager->getRepository(Post::class);

        $begin = $request->query->get('begin');
        $end = $request->query->get('end');

        $tickets = $repository->findAll();

        $result = [];
        foreach ($tickets as $ticket){
            $result[] = [
                'id' => $ticket->getId(),
                'titre' => $ticket->getTitre(),
                'url_alias' => $ticket->getUrlAlias(),
                'content' => $ticket->getContent(),
                'published' => $ticket->getPublished()
            ];
        }

        return new JsonResponse(['content' => $result ]);
    }
}