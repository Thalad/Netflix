<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5be43bf46d57255f90e291b175fe45cf3d8abdd0ff3d34076a319d4477550da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be43bf46d57255f90e291b175fe45cf3d8abdd0ff3d34076a319d4477550da7->enter($__internal_5be43bf46d57255f90e291b175fe45cf3d8abdd0ff3d34076a319d4477550da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0e2cba71b41ca531c7dadca49399c51040954d2dc2678353b196815fc1ae4d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2cba71b41ca531c7dadca49399c51040954d2dc2678353b196815fc1ae4d6a->enter($__internal_0e2cba71b41ca531c7dadca49399c51040954d2dc2678353b196815fc1ae4d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5be43bf46d57255f90e291b175fe45cf3d8abdd0ff3d34076a319d4477550da7->leave($__internal_5be43bf46d57255f90e291b175fe45cf3d8abdd0ff3d34076a319d4477550da7_prof);

        
        $__internal_0e2cba71b41ca531c7dadca49399c51040954d2dc2678353b196815fc1ae4d6a->leave($__internal_0e2cba71b41ca531c7dadca49399c51040954d2dc2678353b196815fc1ae4d6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f421e78c533557e9b5b135e88c2a972f662a6ff296b068c638ea2a1540ef405a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f421e78c533557e9b5b135e88c2a972f662a6ff296b068c638ea2a1540ef405a->enter($__internal_f421e78c533557e9b5b135e88c2a972f662a6ff296b068c638ea2a1540ef405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c41653d2d1cd7e8498e3a8d4ab557a7fb2311e78422f14115d10698e49ffbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c41653d2d1cd7e8498e3a8d4ab557a7fb2311e78422f14115d10698e49ffbe2->enter($__internal_1c41653d2d1cd7e8498e3a8d4ab557a7fb2311e78422f14115d10698e49ffbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c41653d2d1cd7e8498e3a8d4ab557a7fb2311e78422f14115d10698e49ffbe2->leave($__internal_1c41653d2d1cd7e8498e3a8d4ab557a7fb2311e78422f14115d10698e49ffbe2_prof);

        
        $__internal_f421e78c533557e9b5b135e88c2a972f662a6ff296b068c638ea2a1540ef405a->leave($__internal_f421e78c533557e9b5b135e88c2a972f662a6ff296b068c638ea2a1540ef405a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e93a958d369d65205cab38b6632a077b2846b27d49a28636ea964831c0dc9fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93a958d369d65205cab38b6632a077b2846b27d49a28636ea964831c0dc9fc0->enter($__internal_e93a958d369d65205cab38b6632a077b2846b27d49a28636ea964831c0dc9fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_605646f93ac64127c150cf9799f9917343c8d2b4bd7d900c725f1f57f043a854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605646f93ac64127c150cf9799f9917343c8d2b4bd7d900c725f1f57f043a854->enter($__internal_605646f93ac64127c150cf9799f9917343c8d2b4bd7d900c725f1f57f043a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_605646f93ac64127c150cf9799f9917343c8d2b4bd7d900c725f1f57f043a854->leave($__internal_605646f93ac64127c150cf9799f9917343c8d2b4bd7d900c725f1f57f043a854_prof);

        
        $__internal_e93a958d369d65205cab38b6632a077b2846b27d49a28636ea964831c0dc9fc0->leave($__internal_e93a958d369d65205cab38b6632a077b2846b27d49a28636ea964831c0dc9fc0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e49ec699715574e3ff686a14b7b282bfbd47374b535a2c37422a926156cfcfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49ec699715574e3ff686a14b7b282bfbd47374b535a2c37422a926156cfcfe8->enter($__internal_e49ec699715574e3ff686a14b7b282bfbd47374b535a2c37422a926156cfcfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ed29505db2740b9960fb31309da2ca2af84544ee0621a71c78ee0091f799a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed29505db2740b9960fb31309da2ca2af84544ee0621a71c78ee0091f799a04->enter($__internal_7ed29505db2740b9960fb31309da2ca2af84544ee0621a71c78ee0091f799a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ed29505db2740b9960fb31309da2ca2af84544ee0621a71c78ee0091f799a04->leave($__internal_7ed29505db2740b9960fb31309da2ca2af84544ee0621a71c78ee0091f799a04_prof);

        
        $__internal_e49ec699715574e3ff686a14b7b282bfbd47374b535a2c37422a926156cfcfe8->leave($__internal_e49ec699715574e3ff686a14b7b282bfbd47374b535a2c37422a926156cfcfe8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4684933ccbc35c2c9ed25b56162e47f2ffd8af06d1d4189d808084633e68eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4684933ccbc35c2c9ed25b56162e47f2ffd8af06d1d4189d808084633e68eb9->enter($__internal_c4684933ccbc35c2c9ed25b56162e47f2ffd8af06d1d4189d808084633e68eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_968b9c24c432b9e75d837a27e692610bba8592057399516ebf0a74a88ea49db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968b9c24c432b9e75d837a27e692610bba8592057399516ebf0a74a88ea49db7->enter($__internal_968b9c24c432b9e75d837a27e692610bba8592057399516ebf0a74a88ea49db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_968b9c24c432b9e75d837a27e692610bba8592057399516ebf0a74a88ea49db7->leave($__internal_968b9c24c432b9e75d837a27e692610bba8592057399516ebf0a74a88ea49db7_prof);

        
        $__internal_c4684933ccbc35c2c9ed25b56162e47f2ffd8af06d1d4189d808084633e68eb9->leave($__internal_c4684933ccbc35c2c9ed25b56162e47f2ffd8af06d1d4189d808084633e68eb9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/app/Resources/views/base.html.twig");
    }
}
