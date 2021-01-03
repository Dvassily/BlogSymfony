<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/newTicket.html.twig */
class __TwigTemplate_f3315929095779b98bd8adb9acf6ede552a4c02866c8c498e91cd4ef17eecae2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/newTicket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/newTicket.html.twig"));

        // line 1
        echo "<h2>Nouveau billet</h2>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newTicketForm"]) || array_key_exists("newTicketForm", $context) ? $context["newTicketForm"] : (function () { throw new RuntimeError('Variable "newTicketForm" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newTicketForm"]) || array_key_exists("newTicketForm", $context) ? $context["newTicketForm"] : (function () { throw new RuntimeError('Variable "newTicketForm" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), 'row');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newTicketForm"]) || array_key_exists("newTicketForm", $context) ? $context["newTicketForm"] : (function () { throw new RuntimeError('Variable "newTicketForm" does not exist.', 4, $this->source); })()), "content", [], "any", false, false, false, 4), 'row');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newTicketForm"]) || array_key_exists("newTicketForm", $context) ? $context["newTicketForm"] : (function () { throw new RuntimeError('Variable "newTicketForm" does not exist.', 5, $this->source); })()), "validate", [], "any", false, false, false, 5), 'row', ["label" => "Valider"]);
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newTicketForm"]) || array_key_exists("newTicketForm", $context) ? $context["newTicketForm"] : (function () { throw new RuntimeError('Variable "newTicketForm" does not exist.', 6, $this->source); })()), 'form_end');
        echo "
<a href=\"/\">Retour à l'accueil</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/newTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Nouveau billet</h2>
{{ form_start(newTicketForm) }}
{{ form_row(newTicketForm.titre) }}
{{ form_row(newTicketForm.content) }}
{{ form_row(newTicketForm.validate, {'label' : 'Valider'})}}
{{ form_end(newTicketForm) }}
<a href=\"/\">Retour à l'accueil</a>", "blog/newTicket.html.twig", "/home/basil/Etudes/M2/S3/Eapp/symfony/BlogSymfony/BlogBasil/templates/blog/newTicket.html.twig");
    }
}
