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
        $__internal_6bc0ea34003148494f922ff5ce373d779835747c95d022314d7be67f5534f768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc0ea34003148494f922ff5ce373d779835747c95d022314d7be67f5534f768->enter($__internal_6bc0ea34003148494f922ff5ce373d779835747c95d022314d7be67f5534f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        $__internal_ceb237ffe49ce7910590841cc0018b3d5f67e8c230322510bab779204937fcf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb237ffe49ce7910590841cc0018b3d5f67e8c230322510bab779204937fcf6->enter($__internal_ceb237ffe49ce7910590841cc0018b3d5f67e8c230322510bab779204937fcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/listFilm.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Liste des films</title>
    </head>
    <body>
    <h1>Liste des films</h1>
    <button type=\"submit\">logout</button>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["films"] ?? $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 9
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "name", array()), "html", null, true);
            echo "</h2>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</h3>
        <h4>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["film"], "date", array()), "d/Y"), "html", null, true);
            echo "</h4>
        <h5>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "actor", array()), "html", null, true);
            echo "</h5>
        <h6>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "note", array()), "html", null, true);
            echo "</h6>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </body>
</html>";
        
        $__internal_6bc0ea34003148494f922ff5ce373d779835747c95d022314d7be67f5534f768->leave($__internal_6bc0ea34003148494f922ff5ce373d779835747c95d022314d7be67f5534f768_prof);

        
        $__internal_ceb237ffe49ce7910590841cc0018b3d5f67e8c230322510bab779204937fcf6->leave($__internal_ceb237ffe49ce7910590841cc0018b3d5f67e8c230322510bab779204937fcf6_prof);

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
        return array (  63 => 15,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  38 => 9,  34 => 8,  25 => 1,);
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
    <button type=\"submit\">logout</button>
    {% for film in films %}
        <h2>{{ film.name }}</h2>
        <h3>{{ film.description }}</h3>
        <h4>{{ film.date|date(\"d/Y\") }}</h4>
        <h5>{{ film.actor }}</h5>
        <h6>{{ film.note }}</h6>
    {% endfor %}
    </body>
</html>", "film/listFilm.html.twig", "/var/www/symfony/app/Resources/views/film/listFilm.html.twig");
    }
}
