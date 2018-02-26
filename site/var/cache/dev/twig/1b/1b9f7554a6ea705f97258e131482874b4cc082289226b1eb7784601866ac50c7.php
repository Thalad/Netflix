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
        $__internal_f35f691e49ffa372bd823cb85577c809b6af6c9b20377ae89c5060276f9ccde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f691e49ffa372bd823cb85577c809b6af6c9b20377ae89c5060276f9ccde7->enter($__internal_f35f691e49ffa372bd823cb85577c809b6af6c9b20377ae89c5060276f9ccde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_251c3392a291bd7cdee8d145c9fa8d3fd893dcbdaae1870ba20d2831219a032c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251c3392a291bd7cdee8d145c9fa8d3fd893dcbdaae1870ba20d2831219a032c->enter($__internal_251c3392a291bd7cdee8d145c9fa8d3fd893dcbdaae1870ba20d2831219a032c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f35f691e49ffa372bd823cb85577c809b6af6c9b20377ae89c5060276f9ccde7->leave($__internal_f35f691e49ffa372bd823cb85577c809b6af6c9b20377ae89c5060276f9ccde7_prof);

        
        $__internal_251c3392a291bd7cdee8d145c9fa8d3fd893dcbdaae1870ba20d2831219a032c->leave($__internal_251c3392a291bd7cdee8d145c9fa8d3fd893dcbdaae1870ba20d2831219a032c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6adc16a7755eafdd1c65d0dd00c426e13dda57a0ff3cad5206a4fa2d820e5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6adc16a7755eafdd1c65d0dd00c426e13dda57a0ff3cad5206a4fa2d820e5aa->enter($__internal_e6adc16a7755eafdd1c65d0dd00c426e13dda57a0ff3cad5206a4fa2d820e5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6389ba242741fa41f94e2f363c32afee558a0bd17ba1f6823a73513f20b03819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6389ba242741fa41f94e2f363c32afee558a0bd17ba1f6823a73513f20b03819->enter($__internal_6389ba242741fa41f94e2f363c32afee558a0bd17ba1f6823a73513f20b03819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6389ba242741fa41f94e2f363c32afee558a0bd17ba1f6823a73513f20b03819->leave($__internal_6389ba242741fa41f94e2f363c32afee558a0bd17ba1f6823a73513f20b03819_prof);

        
        $__internal_e6adc16a7755eafdd1c65d0dd00c426e13dda57a0ff3cad5206a4fa2d820e5aa->leave($__internal_e6adc16a7755eafdd1c65d0dd00c426e13dda57a0ff3cad5206a4fa2d820e5aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86c9cd1490395f3e21696a8af8313dda2d51a2dc74d13a6c543a77714677a032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c9cd1490395f3e21696a8af8313dda2d51a2dc74d13a6c543a77714677a032->enter($__internal_86c9cd1490395f3e21696a8af8313dda2d51a2dc74d13a6c543a77714677a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f223a626562499c6d1c52463070cec5d6363640a6dc99196dff670082aa7ae2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f223a626562499c6d1c52463070cec5d6363640a6dc99196dff670082aa7ae2e->enter($__internal_f223a626562499c6d1c52463070cec5d6363640a6dc99196dff670082aa7ae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f223a626562499c6d1c52463070cec5d6363640a6dc99196dff670082aa7ae2e->leave($__internal_f223a626562499c6d1c52463070cec5d6363640a6dc99196dff670082aa7ae2e_prof);

        
        $__internal_86c9cd1490395f3e21696a8af8313dda2d51a2dc74d13a6c543a77714677a032->leave($__internal_86c9cd1490395f3e21696a8af8313dda2d51a2dc74d13a6c543a77714677a032_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d82ba41477fca22d465d14f643eba10108e3976bd20196488d4b2e9fd7c92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d82ba41477fca22d465d14f643eba10108e3976bd20196488d4b2e9fd7c92c->enter($__internal_99d82ba41477fca22d465d14f643eba10108e3976bd20196488d4b2e9fd7c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7589206c1e851d1967dfa0c02686b497501f8c289be5c57f1df4673c1f338ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7589206c1e851d1967dfa0c02686b497501f8c289be5c57f1df4673c1f338ccd->enter($__internal_7589206c1e851d1967dfa0c02686b497501f8c289be5c57f1df4673c1f338ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7589206c1e851d1967dfa0c02686b497501f8c289be5c57f1df4673c1f338ccd->leave($__internal_7589206c1e851d1967dfa0c02686b497501f8c289be5c57f1df4673c1f338ccd_prof);

        
        $__internal_99d82ba41477fca22d465d14f643eba10108e3976bd20196488d4b2e9fd7c92c->leave($__internal_99d82ba41477fca22d465d14f643eba10108e3976bd20196488d4b2e9fd7c92c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44994d8807e520c672d9e0a77cda42266d6483a9bbf30789b73ab518bc35b2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44994d8807e520c672d9e0a77cda42266d6483a9bbf30789b73ab518bc35b2c6->enter($__internal_44994d8807e520c672d9e0a77cda42266d6483a9bbf30789b73ab518bc35b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe01887a4fabeef56f8834f4db5f80aa138a953249380bd5d3b20d808e2a48d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe01887a4fabeef56f8834f4db5f80aa138a953249380bd5d3b20d808e2a48d5->enter($__internal_fe01887a4fabeef56f8834f4db5f80aa138a953249380bd5d3b20d808e2a48d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe01887a4fabeef56f8834f4db5f80aa138a953249380bd5d3b20d808e2a48d5->leave($__internal_fe01887a4fabeef56f8834f4db5f80aa138a953249380bd5d3b20d808e2a48d5_prof);

        
        $__internal_44994d8807e520c672d9e0a77cda42266d6483a9bbf30789b73ab518bc35b2c6->leave($__internal_44994d8807e520c672d9e0a77cda42266d6483a9bbf30789b73ab518bc35b2c6_prof);

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
