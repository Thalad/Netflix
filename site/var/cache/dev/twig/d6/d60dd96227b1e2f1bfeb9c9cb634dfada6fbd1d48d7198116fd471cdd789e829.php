<?php

/* security/Register.html.twig */
class __TwigTemplate_58bb8a17643bbb61c93f259b0bcdad40fbdb44cf02b3b953f858fb375cbeb23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbc421cafe682a56743e43bb9c922543cd98a6f3eb7af6d6aabe5a95d13f5797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc421cafe682a56743e43bb9c922543cd98a6f3eb7af6d6aabe5a95d13f5797->enter($__internal_dbc421cafe682a56743e43bb9c922543cd98a6f3eb7af6d6aabe5a95d13f5797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/Register.html.twig"));

        $__internal_cf29746e9b84628611660bffe459c27217fdab64472aa11955d4ec53acae861e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf29746e9b84628611660bffe459c27217fdab64472aa11955d4ec53acae861e->enter($__internal_cf29746e9b84628611660bffe459c27217fdab64472aa11955d4ec53acae861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/Register.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'row');
        echo "

<button type=\"submit\">Register!</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_dbc421cafe682a56743e43bb9c922543cd98a6f3eb7af6d6aabe5a95d13f5797->leave($__internal_dbc421cafe682a56743e43bb9c922543cd98a6f3eb7af6d6aabe5a95d13f5797_prof);

        
        $__internal_cf29746e9b84628611660bffe459c27217fdab64472aa11955d4ec53acae861e->leave($__internal_cf29746e9b84628611660bffe459c27217fdab64472aa11955d4ec53acae861e_prof);

    }

    public function getTemplateName()
    {
        return "security/Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(form) }}
    {{ form_row(form.lastName) }}
    {{ form_row(form.firstName) }}
    {{ form_row(form.email) }}
    {{ form_row(form.password.first) }}
    {{ form_row(form.password.second) }}

<button type=\"submit\">Register!</button>
{{ form_end(form) }}", "security/Register.html.twig", "/var/www/symfony/app/Resources/views/security/Register.html.twig");
    }
}
