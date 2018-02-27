<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f44c0d88bc607e26126c513b3b56d873d69024c2f752453e53efc9d7f1593b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44c0d88bc607e26126c513b3b56d873d69024c2f752453e53efc9d7f1593b78->enter($__internal_f44c0d88bc607e26126c513b3b56d873d69024c2f752453e53efc9d7f1593b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_91c2ee03fec7756df6e2467faa1e396e461282d0cd630f1e5bf14e7d3e4bdb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c2ee03fec7756df6e2467faa1e396e461282d0cd630f1e5bf14e7d3e4bdb44->enter($__internal_91c2ee03fec7756df6e2467faa1e396e461282d0cd630f1e5bf14e7d3e4bdb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44c0d88bc607e26126c513b3b56d873d69024c2f752453e53efc9d7f1593b78->leave($__internal_f44c0d88bc607e26126c513b3b56d873d69024c2f752453e53efc9d7f1593b78_prof);

        
        $__internal_91c2ee03fec7756df6e2467faa1e396e461282d0cd630f1e5bf14e7d3e4bdb44->leave($__internal_91c2ee03fec7756df6e2467faa1e396e461282d0cd630f1e5bf14e7d3e4bdb44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62508f9ff9d280e1014756d9f8192a4562ff68b420e273e55b15178243b3477b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62508f9ff9d280e1014756d9f8192a4562ff68b420e273e55b15178243b3477b->enter($__internal_62508f9ff9d280e1014756d9f8192a4562ff68b420e273e55b15178243b3477b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48202e32a274f83944e3ac48334afd2ab73ea3274ba17186d090c70c9423c332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48202e32a274f83944e3ac48334afd2ab73ea3274ba17186d090c70c9423c332->enter($__internal_48202e32a274f83944e3ac48334afd2ab73ea3274ba17186d090c70c9423c332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_48202e32a274f83944e3ac48334afd2ab73ea3274ba17186d090c70c9423c332->leave($__internal_48202e32a274f83944e3ac48334afd2ab73ea3274ba17186d090c70c9423c332_prof);

        
        $__internal_62508f9ff9d280e1014756d9f8192a4562ff68b420e273e55b15178243b3477b->leave($__internal_62508f9ff9d280e1014756d9f8192a4562ff68b420e273e55b15178243b3477b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce3ffd92fd6fd15c80969ae8ae03665e682c11eb3e09769e852d5d23bbbf9db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3ffd92fd6fd15c80969ae8ae03665e682c11eb3e09769e852d5d23bbbf9db2->enter($__internal_ce3ffd92fd6fd15c80969ae8ae03665e682c11eb3e09769e852d5d23bbbf9db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1e1800d94a5d313d18156c879927e2c4613105a7afa83f778bd26f9c0b7ed30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e1800d94a5d313d18156c879927e2c4613105a7afa83f778bd26f9c0b7ed30->enter($__internal_a1e1800d94a5d313d18156c879927e2c4613105a7afa83f778bd26f9c0b7ed30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a1e1800d94a5d313d18156c879927e2c4613105a7afa83f778bd26f9c0b7ed30->leave($__internal_a1e1800d94a5d313d18156c879927e2c4613105a7afa83f778bd26f9c0b7ed30_prof);

        
        $__internal_ce3ffd92fd6fd15c80969ae8ae03665e682c11eb3e09769e852d5d23bbbf9db2->leave($__internal_ce3ffd92fd6fd15c80969ae8ae03665e682c11eb3e09769e852d5d23bbbf9db2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2452f598d2f3992a5a1a409eb960c045b0b958f0675ddfc965b31ff25d3a3fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2452f598d2f3992a5a1a409eb960c045b0b958f0675ddfc965b31ff25d3a3fe2->enter($__internal_2452f598d2f3992a5a1a409eb960c045b0b958f0675ddfc965b31ff25d3a3fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07988921a85a450063d4601c621c2a4cad1ff3f51f668f63d83548e4836f5293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07988921a85a450063d4601c621c2a4cad1ff3f51f668f63d83548e4836f5293->enter($__internal_07988921a85a450063d4601c621c2a4cad1ff3f51f668f63d83548e4836f5293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_07988921a85a450063d4601c621c2a4cad1ff3f51f668f63d83548e4836f5293->leave($__internal_07988921a85a450063d4601c621c2a4cad1ff3f51f668f63d83548e4836f5293_prof);

        
        $__internal_2452f598d2f3992a5a1a409eb960c045b0b958f0675ddfc965b31ff25d3a3fe2->leave($__internal_2452f598d2f3992a5a1a409eb960c045b0b958f0675ddfc965b31ff25d3a3fe2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
