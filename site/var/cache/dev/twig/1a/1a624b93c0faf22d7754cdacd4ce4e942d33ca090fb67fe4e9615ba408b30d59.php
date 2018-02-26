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
        $__internal_2ca98c70e9d45b11b164e794d291a8d606a75df6f10947cf17db257ac50e4a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca98c70e9d45b11b164e794d291a8d606a75df6f10947cf17db257ac50e4a0a->enter($__internal_2ca98c70e9d45b11b164e794d291a8d606a75df6f10947cf17db257ac50e4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4fdfa1190b426b04cfc4dccc1534ef109cd4a34c0628c8485ec48102d219e6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdfa1190b426b04cfc4dccc1534ef109cd4a34c0628c8485ec48102d219e6b8->enter($__internal_4fdfa1190b426b04cfc4dccc1534ef109cd4a34c0628c8485ec48102d219e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2ca98c70e9d45b11b164e794d291a8d606a75df6f10947cf17db257ac50e4a0a->leave($__internal_2ca98c70e9d45b11b164e794d291a8d606a75df6f10947cf17db257ac50e4a0a_prof);

        
        $__internal_4fdfa1190b426b04cfc4dccc1534ef109cd4a34c0628c8485ec48102d219e6b8->leave($__internal_4fdfa1190b426b04cfc4dccc1534ef109cd4a34c0628c8485ec48102d219e6b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65c93acba9ef10256c94485f8598d01cb5fe23ea51881941fe523ea12e232a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c93acba9ef10256c94485f8598d01cb5fe23ea51881941fe523ea12e232a52->enter($__internal_65c93acba9ef10256c94485f8598d01cb5fe23ea51881941fe523ea12e232a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0670407ae9d11ae6ea14e14b6c1f63e23fd7c886aa68be926d5f6349ed0d99db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0670407ae9d11ae6ea14e14b6c1f63e23fd7c886aa68be926d5f6349ed0d99db->enter($__internal_0670407ae9d11ae6ea14e14b6c1f63e23fd7c886aa68be926d5f6349ed0d99db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0670407ae9d11ae6ea14e14b6c1f63e23fd7c886aa68be926d5f6349ed0d99db->leave($__internal_0670407ae9d11ae6ea14e14b6c1f63e23fd7c886aa68be926d5f6349ed0d99db_prof);

        
        $__internal_65c93acba9ef10256c94485f8598d01cb5fe23ea51881941fe523ea12e232a52->leave($__internal_65c93acba9ef10256c94485f8598d01cb5fe23ea51881941fe523ea12e232a52_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a11093c5184ad2fd204ae297e6bd8c879728680675a435dbe85cd295064ac82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11093c5184ad2fd204ae297e6bd8c879728680675a435dbe85cd295064ac82f->enter($__internal_a11093c5184ad2fd204ae297e6bd8c879728680675a435dbe85cd295064ac82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e070cf8767fb545d8a5aac94ea640a0b735f7025d0fcec20de9b9a6bf4185219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e070cf8767fb545d8a5aac94ea640a0b735f7025d0fcec20de9b9a6bf4185219->enter($__internal_e070cf8767fb545d8a5aac94ea640a0b735f7025d0fcec20de9b9a6bf4185219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e070cf8767fb545d8a5aac94ea640a0b735f7025d0fcec20de9b9a6bf4185219->leave($__internal_e070cf8767fb545d8a5aac94ea640a0b735f7025d0fcec20de9b9a6bf4185219_prof);

        
        $__internal_a11093c5184ad2fd204ae297e6bd8c879728680675a435dbe85cd295064ac82f->leave($__internal_a11093c5184ad2fd204ae297e6bd8c879728680675a435dbe85cd295064ac82f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_27681b7de0540ee2149b7d5daee56909a60809fa60cde186a92a447750be75f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27681b7de0540ee2149b7d5daee56909a60809fa60cde186a92a447750be75f2->enter($__internal_27681b7de0540ee2149b7d5daee56909a60809fa60cde186a92a447750be75f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_548157d1aaf9a013a3672a562b1981db79840937d2b218f0673efb4bef6d07a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548157d1aaf9a013a3672a562b1981db79840937d2b218f0673efb4bef6d07a6->enter($__internal_548157d1aaf9a013a3672a562b1981db79840937d2b218f0673efb4bef6d07a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_548157d1aaf9a013a3672a562b1981db79840937d2b218f0673efb4bef6d07a6->leave($__internal_548157d1aaf9a013a3672a562b1981db79840937d2b218f0673efb4bef6d07a6_prof);

        
        $__internal_27681b7de0540ee2149b7d5daee56909a60809fa60cde186a92a447750be75f2->leave($__internal_27681b7de0540ee2149b7d5daee56909a60809fa60cde186a92a447750be75f2_prof);

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
