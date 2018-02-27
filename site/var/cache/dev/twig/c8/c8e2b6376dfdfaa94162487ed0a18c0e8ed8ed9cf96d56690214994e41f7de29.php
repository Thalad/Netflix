<?php

/* film/addFilm.html.twig */
class __TwigTemplate_5f2668f0e27fab43e9e0812345a911bb616e42a9a041b329d0c64aab82748fb6 extends Twig_Template
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
        $__internal_7b57f95373fac92fcbe16df7582f77acc191787c8278e17417a1ace15b06ddb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b57f95373fac92fcbe16df7582f77acc191787c8278e17417a1ace15b06ddb3->enter($__internal_7b57f95373fac92fcbe16df7582f77acc191787c8278e17417a1ace15b06ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/addFilm.html.twig"));

        $__internal_852fc516b51390d4144c86d92dec2f0020c0046441db232c0cdfbfb2979061ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852fc516b51390d4144c86d92dec2f0020c0046441db232c0cdfbfb2979061ba->enter($__internal_852fc516b51390d4144c86d92dec2f0020c0046441db232c0cdfbfb2979061ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/addFilm.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Ajout d'un film</title>
    </head>
    <body>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_7b57f95373fac92fcbe16df7582f77acc191787c8278e17417a1ace15b06ddb3->leave($__internal_7b57f95373fac92fcbe16df7582f77acc191787c8278e17417a1ace15b06ddb3_prof);

        
        $__internal_852fc516b51390d4144c86d92dec2f0020c0046441db232c0cdfbfb2979061ba->leave($__internal_852fc516b51390d4144c86d92dec2f0020c0046441db232c0cdfbfb2979061ba_prof);

    }

    public function getTemplateName()
    {
        return "film/addFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  25 => 1,);
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
        <title>Ajout d'un film</title>
    </head>
    <body>
        {{ form(form) }}
    </body>
</html>", "film/addFilm.html.twig", "/var/www/symfony/app/Resources/views/film/addFilm.html.twig");
    }
}
