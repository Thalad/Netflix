<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e37bac9e70147177685e173ef7ba11c815d0caef367c3e8c4cb6de21f760d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e37bac9e70147177685e173ef7ba11c815d0caef367c3e8c4cb6de21f760d75->enter($__internal_2e37bac9e70147177685e173ef7ba11c815d0caef367c3e8c4cb6de21f760d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7a59f5958d2dd2bea83f89969e02670bb5fb42aae8a09916019db7fb1f98486b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a59f5958d2dd2bea83f89969e02670bb5fb42aae8a09916019db7fb1f98486b->enter($__internal_7a59f5958d2dd2bea83f89969e02670bb5fb42aae8a09916019db7fb1f98486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e37bac9e70147177685e173ef7ba11c815d0caef367c3e8c4cb6de21f760d75->leave($__internal_2e37bac9e70147177685e173ef7ba11c815d0caef367c3e8c4cb6de21f760d75_prof);

        
        $__internal_7a59f5958d2dd2bea83f89969e02670bb5fb42aae8a09916019db7fb1f98486b->leave($__internal_7a59f5958d2dd2bea83f89969e02670bb5fb42aae8a09916019db7fb1f98486b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16aa8c896b4f7d96eb174e221be01376542d5adf59c1b76aa16eb05198a150db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16aa8c896b4f7d96eb174e221be01376542d5adf59c1b76aa16eb05198a150db->enter($__internal_16aa8c896b4f7d96eb174e221be01376542d5adf59c1b76aa16eb05198a150db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec258d3735e493e2001a7eff702d1f2b973e0ea92efb3cfb1ad6e58f2a58fd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec258d3735e493e2001a7eff702d1f2b973e0ea92efb3cfb1ad6e58f2a58fd7c->enter($__internal_ec258d3735e493e2001a7eff702d1f2b973e0ea92efb3cfb1ad6e58f2a58fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec258d3735e493e2001a7eff702d1f2b973e0ea92efb3cfb1ad6e58f2a58fd7c->leave($__internal_ec258d3735e493e2001a7eff702d1f2b973e0ea92efb3cfb1ad6e58f2a58fd7c_prof);

        
        $__internal_16aa8c896b4f7d96eb174e221be01376542d5adf59c1b76aa16eb05198a150db->leave($__internal_16aa8c896b4f7d96eb174e221be01376542d5adf59c1b76aa16eb05198a150db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cff62b3ef70f487d2331654ae4dd66f0138f8280f6cb91ab780db3344edf502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cff62b3ef70f487d2331654ae4dd66f0138f8280f6cb91ab780db3344edf502->enter($__internal_0cff62b3ef70f487d2331654ae4dd66f0138f8280f6cb91ab780db3344edf502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8ea1fe2322bfd25d588f258847145c47a66ee4aa852ad514f6b692e4f4a4058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ea1fe2322bfd25d588f258847145c47a66ee4aa852ad514f6b692e4f4a4058->enter($__internal_e8ea1fe2322bfd25d588f258847145c47a66ee4aa852ad514f6b692e4f4a4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8ea1fe2322bfd25d588f258847145c47a66ee4aa852ad514f6b692e4f4a4058->leave($__internal_e8ea1fe2322bfd25d588f258847145c47a66ee4aa852ad514f6b692e4f4a4058_prof);

        
        $__internal_0cff62b3ef70f487d2331654ae4dd66f0138f8280f6cb91ab780db3344edf502->leave($__internal_0cff62b3ef70f487d2331654ae4dd66f0138f8280f6cb91ab780db3344edf502_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a48b78ce5f4b320202c1dc8f06a158c9222658ca04750e0aecffa7f0c1edcfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48b78ce5f4b320202c1dc8f06a158c9222658ca04750e0aecffa7f0c1edcfcc->enter($__internal_a48b78ce5f4b320202c1dc8f06a158c9222658ca04750e0aecffa7f0c1edcfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58892641ca8b3c2e53a463f13ce2f2d0bc3c0c1077925ad872d9872a66778b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58892641ca8b3c2e53a463f13ce2f2d0bc3c0c1077925ad872d9872a66778b2a->enter($__internal_58892641ca8b3c2e53a463f13ce2f2d0bc3c0c1077925ad872d9872a66778b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58892641ca8b3c2e53a463f13ce2f2d0bc3c0c1077925ad872d9872a66778b2a->leave($__internal_58892641ca8b3c2e53a463f13ce2f2d0bc3c0c1077925ad872d9872a66778b2a_prof);

        
        $__internal_a48b78ce5f4b320202c1dc8f06a158c9222658ca04750e0aecffa7f0c1edcfcc->leave($__internal_a48b78ce5f4b320202c1dc8f06a158c9222658ca04750e0aecffa7f0c1edcfcc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
