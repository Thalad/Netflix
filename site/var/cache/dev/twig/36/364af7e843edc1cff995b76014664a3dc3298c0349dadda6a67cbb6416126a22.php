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
        $__internal_1079a25e24da57f26f5defab991d5f88bd6a60e31fc553c00a6579873e4671cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1079a25e24da57f26f5defab991d5f88bd6a60e31fc553c00a6579873e4671cc->enter($__internal_1079a25e24da57f26f5defab991d5f88bd6a60e31fc553c00a6579873e4671cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_532760d0a1fbfc4a6ca17912a1e0851d159367766f70ff20363a0d6b32f9f045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532760d0a1fbfc4a6ca17912a1e0851d159367766f70ff20363a0d6b32f9f045->enter($__internal_532760d0a1fbfc4a6ca17912a1e0851d159367766f70ff20363a0d6b32f9f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1079a25e24da57f26f5defab991d5f88bd6a60e31fc553c00a6579873e4671cc->leave($__internal_1079a25e24da57f26f5defab991d5f88bd6a60e31fc553c00a6579873e4671cc_prof);

        
        $__internal_532760d0a1fbfc4a6ca17912a1e0851d159367766f70ff20363a0d6b32f9f045->leave($__internal_532760d0a1fbfc4a6ca17912a1e0851d159367766f70ff20363a0d6b32f9f045_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a11c783f293361a54351c3e7bd5a410821c864dcd45d6a73a9fbeec04d727dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a11c783f293361a54351c3e7bd5a410821c864dcd45d6a73a9fbeec04d727dd->enter($__internal_9a11c783f293361a54351c3e7bd5a410821c864dcd45d6a73a9fbeec04d727dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58d63923d9b023b0ebb0bc6299b9c42163c8b5933cf8de82dbcf44e5f471c69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d63923d9b023b0ebb0bc6299b9c42163c8b5933cf8de82dbcf44e5f471c69a->enter($__internal_58d63923d9b023b0ebb0bc6299b9c42163c8b5933cf8de82dbcf44e5f471c69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_58d63923d9b023b0ebb0bc6299b9c42163c8b5933cf8de82dbcf44e5f471c69a->leave($__internal_58d63923d9b023b0ebb0bc6299b9c42163c8b5933cf8de82dbcf44e5f471c69a_prof);

        
        $__internal_9a11c783f293361a54351c3e7bd5a410821c864dcd45d6a73a9fbeec04d727dd->leave($__internal_9a11c783f293361a54351c3e7bd5a410821c864dcd45d6a73a9fbeec04d727dd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_216c860cfd1b0239ef8d71bc950617007c14d707b2b828c3178d33d5c28b2bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216c860cfd1b0239ef8d71bc950617007c14d707b2b828c3178d33d5c28b2bae->enter($__internal_216c860cfd1b0239ef8d71bc950617007c14d707b2b828c3178d33d5c28b2bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bc52ebff76fa9e38ebf2f25644feafaa9d3cb3fe5eee0f6a5f6334d4b9822fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc52ebff76fa9e38ebf2f25644feafaa9d3cb3fe5eee0f6a5f6334d4b9822fa->enter($__internal_4bc52ebff76fa9e38ebf2f25644feafaa9d3cb3fe5eee0f6a5f6334d4b9822fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bc52ebff76fa9e38ebf2f25644feafaa9d3cb3fe5eee0f6a5f6334d4b9822fa->leave($__internal_4bc52ebff76fa9e38ebf2f25644feafaa9d3cb3fe5eee0f6a5f6334d4b9822fa_prof);

        
        $__internal_216c860cfd1b0239ef8d71bc950617007c14d707b2b828c3178d33d5c28b2bae->leave($__internal_216c860cfd1b0239ef8d71bc950617007c14d707b2b828c3178d33d5c28b2bae_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_438101b3e06b899a167103bf7933ffaed27919e8e720b01da86cfc622113702f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438101b3e06b899a167103bf7933ffaed27919e8e720b01da86cfc622113702f->enter($__internal_438101b3e06b899a167103bf7933ffaed27919e8e720b01da86cfc622113702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb861091f10bb0dc5760f46907d9462237f03ae09afe155f243fed9186fcb6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb861091f10bb0dc5760f46907d9462237f03ae09afe155f243fed9186fcb6b8->enter($__internal_cb861091f10bb0dc5760f46907d9462237f03ae09afe155f243fed9186fcb6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cb861091f10bb0dc5760f46907d9462237f03ae09afe155f243fed9186fcb6b8->leave($__internal_cb861091f10bb0dc5760f46907d9462237f03ae09afe155f243fed9186fcb6b8_prof);

        
        $__internal_438101b3e06b899a167103bf7933ffaed27919e8e720b01da86cfc622113702f->leave($__internal_438101b3e06b899a167103bf7933ffaed27919e8e720b01da86cfc622113702f_prof);

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
