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
        $__internal_a55a62370f25da34ff41b7ad2db0ac2e043cd1b45001e5f66b35cb30220549d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55a62370f25da34ff41b7ad2db0ac2e043cd1b45001e5f66b35cb30220549d3->enter($__internal_a55a62370f25da34ff41b7ad2db0ac2e043cd1b45001e5f66b35cb30220549d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbfb3590024a23d017b3e4f7e7f5f1e845bcc23b757030ecb75b0834eb4c5dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfb3590024a23d017b3e4f7e7f5f1e845bcc23b757030ecb75b0834eb4c5dd1->enter($__internal_dbfb3590024a23d017b3e4f7e7f5f1e845bcc23b757030ecb75b0834eb4c5dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55a62370f25da34ff41b7ad2db0ac2e043cd1b45001e5f66b35cb30220549d3->leave($__internal_a55a62370f25da34ff41b7ad2db0ac2e043cd1b45001e5f66b35cb30220549d3_prof);

        
        $__internal_dbfb3590024a23d017b3e4f7e7f5f1e845bcc23b757030ecb75b0834eb4c5dd1->leave($__internal_dbfb3590024a23d017b3e4f7e7f5f1e845bcc23b757030ecb75b0834eb4c5dd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb77a161e101498a1c46514fa4bdafc393f248a567421a81102d77a75f1f58c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb77a161e101498a1c46514fa4bdafc393f248a567421a81102d77a75f1f58c3->enter($__internal_cb77a161e101498a1c46514fa4bdafc393f248a567421a81102d77a75f1f58c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08db2000f9e8ccc13bd7671bb616d9224cf1fa9ebabc6ea52c4d2cee000a96f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08db2000f9e8ccc13bd7671bb616d9224cf1fa9ebabc6ea52c4d2cee000a96f8->enter($__internal_08db2000f9e8ccc13bd7671bb616d9224cf1fa9ebabc6ea52c4d2cee000a96f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_08db2000f9e8ccc13bd7671bb616d9224cf1fa9ebabc6ea52c4d2cee000a96f8->leave($__internal_08db2000f9e8ccc13bd7671bb616d9224cf1fa9ebabc6ea52c4d2cee000a96f8_prof);

        
        $__internal_cb77a161e101498a1c46514fa4bdafc393f248a567421a81102d77a75f1f58c3->leave($__internal_cb77a161e101498a1c46514fa4bdafc393f248a567421a81102d77a75f1f58c3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_125701c53fd1cea0f6a52237df15543dad5499c80be28f2d3190a6f59d73c1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125701c53fd1cea0f6a52237df15543dad5499c80be28f2d3190a6f59d73c1a3->enter($__internal_125701c53fd1cea0f6a52237df15543dad5499c80be28f2d3190a6f59d73c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7437e81198aed4fdb8f22b40f0b7f63ccffb13fde2d667a7056f4093647d486c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7437e81198aed4fdb8f22b40f0b7f63ccffb13fde2d667a7056f4093647d486c->enter($__internal_7437e81198aed4fdb8f22b40f0b7f63ccffb13fde2d667a7056f4093647d486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7437e81198aed4fdb8f22b40f0b7f63ccffb13fde2d667a7056f4093647d486c->leave($__internal_7437e81198aed4fdb8f22b40f0b7f63ccffb13fde2d667a7056f4093647d486c_prof);

        
        $__internal_125701c53fd1cea0f6a52237df15543dad5499c80be28f2d3190a6f59d73c1a3->leave($__internal_125701c53fd1cea0f6a52237df15543dad5499c80be28f2d3190a6f59d73c1a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e076861a32b02fc2f54e3a695364aad4858e47fe38c6bb1ca8a4b6823874a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e076861a32b02fc2f54e3a695364aad4858e47fe38c6bb1ca8a4b6823874a6a->enter($__internal_6e076861a32b02fc2f54e3a695364aad4858e47fe38c6bb1ca8a4b6823874a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6dcc02407e408cf1d95ed66fcf080d49911f5e1c31bfeab67898a818d99409b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcc02407e408cf1d95ed66fcf080d49911f5e1c31bfeab67898a818d99409b3->enter($__internal_6dcc02407e408cf1d95ed66fcf080d49911f5e1c31bfeab67898a818d99409b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6dcc02407e408cf1d95ed66fcf080d49911f5e1c31bfeab67898a818d99409b3->leave($__internal_6dcc02407e408cf1d95ed66fcf080d49911f5e1c31bfeab67898a818d99409b3_prof);

        
        $__internal_6e076861a32b02fc2f54e3a695364aad4858e47fe38c6bb1ca8a4b6823874a6a->leave($__internal_6e076861a32b02fc2f54e3a695364aad4858e47fe38c6bb1ca8a4b6823874a6a_prof);

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
