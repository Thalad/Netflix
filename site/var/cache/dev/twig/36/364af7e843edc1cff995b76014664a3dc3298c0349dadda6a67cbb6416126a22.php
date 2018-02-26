<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14d3d8ba891d22e8095fdf5e384162de2c41e69ac79c94734c896b2ad67e0f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ce9d1620e11715e817e3854853bb072a17f267bcd88cff42de4c76660426356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce9d1620e11715e817e3854853bb072a17f267bcd88cff42de4c76660426356->enter($__internal_6ce9d1620e11715e817e3854853bb072a17f267bcd88cff42de4c76660426356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9f599a0ca693cea3b016df7ae949b79ca1bd2c49699be1d16d85fdc081d8b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f599a0ca693cea3b016df7ae949b79ca1bd2c49699be1d16d85fdc081d8b21->enter($__internal_b9f599a0ca693cea3b016df7ae949b79ca1bd2c49699be1d16d85fdc081d8b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce9d1620e11715e817e3854853bb072a17f267bcd88cff42de4c76660426356->leave($__internal_6ce9d1620e11715e817e3854853bb072a17f267bcd88cff42de4c76660426356_prof);

        
        $__internal_b9f599a0ca693cea3b016df7ae949b79ca1bd2c49699be1d16d85fdc081d8b21->leave($__internal_b9f599a0ca693cea3b016df7ae949b79ca1bd2c49699be1d16d85fdc081d8b21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_102bdc55b0374c762eb30b9cb58c987d15dc95f8e308a3fe86b8d22b7aaf2f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102bdc55b0374c762eb30b9cb58c987d15dc95f8e308a3fe86b8d22b7aaf2f17->enter($__internal_102bdc55b0374c762eb30b9cb58c987d15dc95f8e308a3fe86b8d22b7aaf2f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_07fb52b7318ade6026084852d5bd421d5863d35a6c3ffbb34acf77aec88cbc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fb52b7318ade6026084852d5bd421d5863d35a6c3ffbb34acf77aec88cbc81->enter($__internal_07fb52b7318ade6026084852d5bd421d5863d35a6c3ffbb34acf77aec88cbc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_07fb52b7318ade6026084852d5bd421d5863d35a6c3ffbb34acf77aec88cbc81->leave($__internal_07fb52b7318ade6026084852d5bd421d5863d35a6c3ffbb34acf77aec88cbc81_prof);

        
        $__internal_102bdc55b0374c762eb30b9cb58c987d15dc95f8e308a3fe86b8d22b7aaf2f17->leave($__internal_102bdc55b0374c762eb30b9cb58c987d15dc95f8e308a3fe86b8d22b7aaf2f17_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dba9fb44c0164dcd2ba50d7e50a6c6d694d8df29c7c5421e87b8c16463873754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba9fb44c0164dcd2ba50d7e50a6c6d694d8df29c7c5421e87b8c16463873754->enter($__internal_dba9fb44c0164dcd2ba50d7e50a6c6d694d8df29c7c5421e87b8c16463873754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f03ff8fe6f82b7aac3d76d6b7c2738359b7201a688bf2e65854c2df067d7ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f03ff8fe6f82b7aac3d76d6b7c2738359b7201a688bf2e65854c2df067d7ddb->enter($__internal_6f03ff8fe6f82b7aac3d76d6b7c2738359b7201a688bf2e65854c2df067d7ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f03ff8fe6f82b7aac3d76d6b7c2738359b7201a688bf2e65854c2df067d7ddb->leave($__internal_6f03ff8fe6f82b7aac3d76d6b7c2738359b7201a688bf2e65854c2df067d7ddb_prof);

        
        $__internal_dba9fb44c0164dcd2ba50d7e50a6c6d694d8df29c7c5421e87b8c16463873754->leave($__internal_dba9fb44c0164dcd2ba50d7e50a6c6d694d8df29c7c5421e87b8c16463873754_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_adbd5fd94be44ddc682a90c24d1a18a83a05c2e7019bceccb11b6e5f52a6c7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbd5fd94be44ddc682a90c24d1a18a83a05c2e7019bceccb11b6e5f52a6c7f0->enter($__internal_adbd5fd94be44ddc682a90c24d1a18a83a05c2e7019bceccb11b6e5f52a6c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb10b3f6de445aadfebb0fb931adf3c8b906fb1f8ca894a4d24588dbca26722e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb10b3f6de445aadfebb0fb931adf3c8b906fb1f8ca894a4d24588dbca26722e->enter($__internal_eb10b3f6de445aadfebb0fb931adf3c8b906fb1f8ca894a4d24588dbca26722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eb10b3f6de445aadfebb0fb931adf3c8b906fb1f8ca894a4d24588dbca26722e->leave($__internal_eb10b3f6de445aadfebb0fb931adf3c8b906fb1f8ca894a4d24588dbca26722e_prof);

        
        $__internal_adbd5fd94be44ddc682a90c24d1a18a83a05c2e7019bceccb11b6e5f52a6c7f0->leave($__internal_adbd5fd94be44ddc682a90c24d1a18a83a05c2e7019bceccb11b6e5f52a6c7f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
