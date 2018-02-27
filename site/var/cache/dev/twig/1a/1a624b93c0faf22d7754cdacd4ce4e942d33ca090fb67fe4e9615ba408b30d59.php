<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7b6ea27a706f66da5d28251b52981f743c9c125fbbb648e38b994e383742fa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63726df2bcadbd7223af22c38696db3dc45ad14872995ba06aa4fdb5125d6b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63726df2bcadbd7223af22c38696db3dc45ad14872995ba06aa4fdb5125d6b91->enter($__internal_63726df2bcadbd7223af22c38696db3dc45ad14872995ba06aa4fdb5125d6b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c9b7d46d07ba55140fcfcc62e16eb7247351df66988234a04ba8c18da947e4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b7d46d07ba55140fcfcc62e16eb7247351df66988234a04ba8c18da947e4ed->enter($__internal_c9b7d46d07ba55140fcfcc62e16eb7247351df66988234a04ba8c18da947e4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_63726df2bcadbd7223af22c38696db3dc45ad14872995ba06aa4fdb5125d6b91->leave($__internal_63726df2bcadbd7223af22c38696db3dc45ad14872995ba06aa4fdb5125d6b91_prof);

        
        $__internal_c9b7d46d07ba55140fcfcc62e16eb7247351df66988234a04ba8c18da947e4ed->leave($__internal_c9b7d46d07ba55140fcfcc62e16eb7247351df66988234a04ba8c18da947e4ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_516e380fffa80634427e831cc4fd1197ffaa06ab100c8c697b2a78c999f6ea73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516e380fffa80634427e831cc4fd1197ffaa06ab100c8c697b2a78c999f6ea73->enter($__internal_516e380fffa80634427e831cc4fd1197ffaa06ab100c8c697b2a78c999f6ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15b65473ec1916ae24779565b7a69e7b918d5096f8401de1fcce2d51a8d5604e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b65473ec1916ae24779565b7a69e7b918d5096f8401de1fcce2d51a8d5604e->enter($__internal_15b65473ec1916ae24779565b7a69e7b918d5096f8401de1fcce2d51a8d5604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_15b65473ec1916ae24779565b7a69e7b918d5096f8401de1fcce2d51a8d5604e->leave($__internal_15b65473ec1916ae24779565b7a69e7b918d5096f8401de1fcce2d51a8d5604e_prof);

        
        $__internal_516e380fffa80634427e831cc4fd1197ffaa06ab100c8c697b2a78c999f6ea73->leave($__internal_516e380fffa80634427e831cc4fd1197ffaa06ab100c8c697b2a78c999f6ea73_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c8777ecaa3396470bcc575fe70321d6b2d97919d6f1d22360187d8063b57f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8777ecaa3396470bcc575fe70321d6b2d97919d6f1d22360187d8063b57f34->enter($__internal_0c8777ecaa3396470bcc575fe70321d6b2d97919d6f1d22360187d8063b57f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7961b3e15afded0cee3ca3eecbdefec56db49880e1349d49dbe1558f3855bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7961b3e15afded0cee3ca3eecbdefec56db49880e1349d49dbe1558f3855bb9->enter($__internal_d7961b3e15afded0cee3ca3eecbdefec56db49880e1349d49dbe1558f3855bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d7961b3e15afded0cee3ca3eecbdefec56db49880e1349d49dbe1558f3855bb9->leave($__internal_d7961b3e15afded0cee3ca3eecbdefec56db49880e1349d49dbe1558f3855bb9_prof);

        
        $__internal_0c8777ecaa3396470bcc575fe70321d6b2d97919d6f1d22360187d8063b57f34->leave($__internal_0c8777ecaa3396470bcc575fe70321d6b2d97919d6f1d22360187d8063b57f34_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_495fa86993dac1c9a73017999c255b4039308b44c3e095ca266fb1b3d90a2baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495fa86993dac1c9a73017999c255b4039308b44c3e095ca266fb1b3d90a2baa->enter($__internal_495fa86993dac1c9a73017999c255b4039308b44c3e095ca266fb1b3d90a2baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0f8887fd9098e3fc5b30dd52928f7589dc3a7a13d1f6ac114cdf95c25dca157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f8887fd9098e3fc5b30dd52928f7589dc3a7a13d1f6ac114cdf95c25dca157->enter($__internal_b0f8887fd9098e3fc5b30dd52928f7589dc3a7a13d1f6ac114cdf95c25dca157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0f8887fd9098e3fc5b30dd52928f7589dc3a7a13d1f6ac114cdf95c25dca157->leave($__internal_b0f8887fd9098e3fc5b30dd52928f7589dc3a7a13d1f6ac114cdf95c25dca157_prof);

        
        $__internal_495fa86993dac1c9a73017999c255b4039308b44c3e095ca266fb1b3d90a2baa->leave($__internal_495fa86993dac1c9a73017999c255b4039308b44c3e095ca266fb1b3d90a2baa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
