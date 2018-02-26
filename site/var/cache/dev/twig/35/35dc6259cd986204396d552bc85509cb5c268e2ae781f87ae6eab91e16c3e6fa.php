<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6fee036cb0d8c0f40c4092e13e471d3627b7439960e874cb4032f4d9918f6a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_693c041d7f25746adc76ab4d262ba28ea02f2ac9c561dd1dc93c88fbe990a01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693c041d7f25746adc76ab4d262ba28ea02f2ac9c561dd1dc93c88fbe990a01f->enter($__internal_693c041d7f25746adc76ab4d262ba28ea02f2ac9c561dd1dc93c88fbe990a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fa513646d999368af4fc3cbda5ab945b323d65db9188a9de39b733c3c341c243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa513646d999368af4fc3cbda5ab945b323d65db9188a9de39b733c3c341c243->enter($__internal_fa513646d999368af4fc3cbda5ab945b323d65db9188a9de39b733c3c341c243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693c041d7f25746adc76ab4d262ba28ea02f2ac9c561dd1dc93c88fbe990a01f->leave($__internal_693c041d7f25746adc76ab4d262ba28ea02f2ac9c561dd1dc93c88fbe990a01f_prof);

        
        $__internal_fa513646d999368af4fc3cbda5ab945b323d65db9188a9de39b733c3c341c243->leave($__internal_fa513646d999368af4fc3cbda5ab945b323d65db9188a9de39b733c3c341c243_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_793f65848e19d9c3db03b77a6b9e0ba1d875f15d0d0aeaf7129d106edf5a4e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793f65848e19d9c3db03b77a6b9e0ba1d875f15d0d0aeaf7129d106edf5a4e60->enter($__internal_793f65848e19d9c3db03b77a6b9e0ba1d875f15d0d0aeaf7129d106edf5a4e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17e62a11b3277fa5b71fdc53ba66f8f8fbe6f568d1f451182cf078707438c96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e62a11b3277fa5b71fdc53ba66f8f8fbe6f568d1f451182cf078707438c96a->enter($__internal_17e62a11b3277fa5b71fdc53ba66f8f8fbe6f568d1f451182cf078707438c96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_17e62a11b3277fa5b71fdc53ba66f8f8fbe6f568d1f451182cf078707438c96a->leave($__internal_17e62a11b3277fa5b71fdc53ba66f8f8fbe6f568d1f451182cf078707438c96a_prof);

        
        $__internal_793f65848e19d9c3db03b77a6b9e0ba1d875f15d0d0aeaf7129d106edf5a4e60->leave($__internal_793f65848e19d9c3db03b77a6b9e0ba1d875f15d0d0aeaf7129d106edf5a4e60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
