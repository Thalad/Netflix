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
        $__internal_35acc6fadd83a23908858cb253c60201ba61270349519f5cf9b03b9ac3be20ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35acc6fadd83a23908858cb253c60201ba61270349519f5cf9b03b9ac3be20ef->enter($__internal_35acc6fadd83a23908858cb253c60201ba61270349519f5cf9b03b9ac3be20ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15dbd68b344cd55f2d2e9cfc971e3aa2fa23aa32f55df5fcc6b5b2e892a66cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dbd68b344cd55f2d2e9cfc971e3aa2fa23aa32f55df5fcc6b5b2e892a66cab->enter($__internal_15dbd68b344cd55f2d2e9cfc971e3aa2fa23aa32f55df5fcc6b5b2e892a66cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35acc6fadd83a23908858cb253c60201ba61270349519f5cf9b03b9ac3be20ef->leave($__internal_35acc6fadd83a23908858cb253c60201ba61270349519f5cf9b03b9ac3be20ef_prof);

        
        $__internal_15dbd68b344cd55f2d2e9cfc971e3aa2fa23aa32f55df5fcc6b5b2e892a66cab->leave($__internal_15dbd68b344cd55f2d2e9cfc971e3aa2fa23aa32f55df5fcc6b5b2e892a66cab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39efdbe89b3569f7c56a509fed4b204d2c941d3e7d29396dfd51b0bae3ca6819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39efdbe89b3569f7c56a509fed4b204d2c941d3e7d29396dfd51b0bae3ca6819->enter($__internal_39efdbe89b3569f7c56a509fed4b204d2c941d3e7d29396dfd51b0bae3ca6819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c7fb661e673e733986dc5f39392d16307596239600ba1e69e53d9bf42d72f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7fb661e673e733986dc5f39392d16307596239600ba1e69e53d9bf42d72f66->enter($__internal_4c7fb661e673e733986dc5f39392d16307596239600ba1e69e53d9bf42d72f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c7fb661e673e733986dc5f39392d16307596239600ba1e69e53d9bf42d72f66->leave($__internal_4c7fb661e673e733986dc5f39392d16307596239600ba1e69e53d9bf42d72f66_prof);

        
        $__internal_39efdbe89b3569f7c56a509fed4b204d2c941d3e7d29396dfd51b0bae3ca6819->leave($__internal_39efdbe89b3569f7c56a509fed4b204d2c941d3e7d29396dfd51b0bae3ca6819_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43785b2109e64e03f5ebe514ecf53c7309572d10fd5e7291dd6b3840c3d300c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43785b2109e64e03f5ebe514ecf53c7309572d10fd5e7291dd6b3840c3d300c7->enter($__internal_43785b2109e64e03f5ebe514ecf53c7309572d10fd5e7291dd6b3840c3d300c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d0e281c80bbfe1a184a9b2148150672ca4630dc2c580b4b38b7661102823d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0e281c80bbfe1a184a9b2148150672ca4630dc2c580b4b38b7661102823d43->enter($__internal_5d0e281c80bbfe1a184a9b2148150672ca4630dc2c580b4b38b7661102823d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d0e281c80bbfe1a184a9b2148150672ca4630dc2c580b4b38b7661102823d43->leave($__internal_5d0e281c80bbfe1a184a9b2148150672ca4630dc2c580b4b38b7661102823d43_prof);

        
        $__internal_43785b2109e64e03f5ebe514ecf53c7309572d10fd5e7291dd6b3840c3d300c7->leave($__internal_43785b2109e64e03f5ebe514ecf53c7309572d10fd5e7291dd6b3840c3d300c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35b7b854466ef06b128e80426121a4d34bb729cc48530f62abda81ebf542301d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b7b854466ef06b128e80426121a4d34bb729cc48530f62abda81ebf542301d->enter($__internal_35b7b854466ef06b128e80426121a4d34bb729cc48530f62abda81ebf542301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da24d2be8dea7edc6baafffb2ebf0f6e028e8dcdcb0c73c261dd1199f3109be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da24d2be8dea7edc6baafffb2ebf0f6e028e8dcdcb0c73c261dd1199f3109be3->enter($__internal_da24d2be8dea7edc6baafffb2ebf0f6e028e8dcdcb0c73c261dd1199f3109be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da24d2be8dea7edc6baafffb2ebf0f6e028e8dcdcb0c73c261dd1199f3109be3->leave($__internal_da24d2be8dea7edc6baafffb2ebf0f6e028e8dcdcb0c73c261dd1199f3109be3_prof);

        
        $__internal_35b7b854466ef06b128e80426121a4d34bb729cc48530f62abda81ebf542301d->leave($__internal_35b7b854466ef06b128e80426121a4d34bb729cc48530f62abda81ebf542301d_prof);

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
