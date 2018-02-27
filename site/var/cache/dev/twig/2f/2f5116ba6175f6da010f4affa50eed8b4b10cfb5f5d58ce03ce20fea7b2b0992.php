<?php

/* film/viewFilm.html.twig */
class __TwigTemplate_759b478161bf591b363822df93dcc26d2eaebaa8e739b7881c34c72991334719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b19250ed7d996b56765372f60a81dcc93ebeb52d2341c12bd6c985ed5b58afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b19250ed7d996b56765372f60a81dcc93ebeb52d2341c12bd6c985ed5b58afc->enter($__internal_1b19250ed7d996b56765372f60a81dcc93ebeb52d2341c12bd6c985ed5b58afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/viewFilm.html.twig"));

        $__internal_7d7d61b5f04de7aa6a90759ac00aafb742d0b5861ebfda58743f6e1c2a8b60be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7d61b5f04de7aa6a90759ac00aafb742d0b5861ebfda58743f6e1c2a8b60be->enter($__internal_7d7d61b5f04de7aa6a90759ac00aafb742d0b5861ebfda58743f6e1c2a8b60be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/viewFilm.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Detail du film</title>
    </head>
<body>
    <h1>Detail du film</h1>
        <a href=\"/app_dev.php/sign-out\">logout</a>
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["film"] ?? $this->getContext($context, "film")), "name", array()), "html", null, true);
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["film"] ?? $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "</p>
        <h3>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["film"] ?? $this->getContext($context, "film")), "date", array()), "d/Y"), "html", null, true);
        echo "</h3>
        <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["film"] ?? $this->getContext($context, "film")), "actor", array()), "html", null, true);
        echo "</h3>
        <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["film"] ?? $this->getContext($context, "film")), "note", array()), "html", null, true);
        echo "</h3>
         <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_list");
        echo "\">Liste des films</a>
    </body>
</html>";
        
        $__internal_1b19250ed7d996b56765372f60a81dcc93ebeb52d2341c12bd6c985ed5b58afc->leave($__internal_1b19250ed7d996b56765372f60a81dcc93ebeb52d2341c12bd6c985ed5b58afc_prof);

        
        $__internal_7d7d61b5f04de7aa6a90759ac00aafb742d0b5861ebfda58743f6e1c2a8b60be->leave($__internal_7d7d61b5f04de7aa6a90759ac00aafb742d0b5861ebfda58743f6e1c2a8b60be_prof);

    }

    public function getTemplateName()
    {
        return "film/viewFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <title>Detail du film</title>
    </head>
<body>
    <h1>Detail du film</h1>
        <a href=\"/app_dev.php/sign-out\">logout</a>
        <h2>{{ film.name }}</h2>
        <p>{{ film.description }}</p>
        <h3>{{ film.date|date(\"d/Y\") }}</h3>
        <h3>{{ film.actor }}</h3>
        <h3>{{ film.note }}</h3>
         <a href=\"{{ path('films_list')}}\">Liste des films</a>
    </body>
</html>", "film/viewFilm.html.twig", "/var/www/symfony/app/Resources/views/film/viewFilm.html.twig");
    }
}
