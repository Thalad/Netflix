<?php

/* film/listFilm.html.twig */
class __TwigTemplate_0eab9ae52a998c8ffd336bd0c292e9225643ed8e365550f1dd9bf729f469ca2a extends Twig_Template
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
        $__internal_2dc340a276049720af316c88690949df9c5dcaa12f533a4f315cf8902edda06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc340a276049720af316c88690949df9c5dcaa12f533a4f315cf8902edda06d->enter($__internal_2dc340a276049720af316c88690949df9c5dcaa12f533a4f315cf8902edda06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        $__internal_f94ecdede5159267731faccc50f4144ac86dab22f8d4f192d3f938a254c4ba59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94ecdede5159267731faccc50f4144ac86dab22f8d4f192d3f938a254c4ba59->enter($__internal_f94ecdede5159267731faccc50f4144ac86dab22f8d4f192d3f938a254c4ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Liste des films</title>
    </head>
    <body>
    <h1>Liste des films</h1>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">logout</a>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["films"] ?? $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 9
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "name", array()), "html", null, true);
            echo "</h2>
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("film_view", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">Detail du film</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </body>
</html>";
        
        $__internal_2dc340a276049720af316c88690949df9c5dcaa12f533a4f315cf8902edda06d->leave($__internal_2dc340a276049720af316c88690949df9c5dcaa12f533a4f315cf8902edda06d_prof);

        
        $__internal_f94ecdede5159267731faccc50f4144ac86dab22f8d4f192d3f938a254c4ba59->leave($__internal_f94ecdede5159267731faccc50f4144ac86dab22f8d4f192d3f938a254c4ba59_prof);

    }

    public function getTemplateName()
    {
        return "film/listFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  46 => 10,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
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
        <title>Liste des films</title>
    </head>
    <body>
    <h1>Liste des films</h1>
        <a href=\"{{ path('logout') }}\">logout</a>
        {% for film in films %}
            <h2>{{ film.name }}</h2>
            <a href=\"{{ path('film_view', {'id': film.id}) }}\">Detail du film</a>
        {% endfor %}
    </body>
</html>", "film/listFilm.html.twig", "/var/www/symfony/app/Resources/views/film/listFilm.html.twig");
    }
}