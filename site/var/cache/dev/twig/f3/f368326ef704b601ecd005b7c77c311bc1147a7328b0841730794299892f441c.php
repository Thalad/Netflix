<?php

/* security/login.html.twig */
class __TwigTemplate_4f368daad573f6df5479ce9c2e7b9517a8a9efd7ddfad9492d71e4ac3642885b extends Twig_Template
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
        $__internal_8d329b2b7cf3db5babe15658f3bb716f12d78ebd2483b71ae329c438b083384b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d329b2b7cf3db5babe15658f3bb716f12d78ebd2483b71ae329c438b083384b->enter($__internal_8d329b2b7cf3db5babe15658f3bb716f12d78ebd2483b71ae329c438b083384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_ebee2dff84337db251d983b0bdd3dab7bd305469fa9c2932cb108b607fde8757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebee2dff84337db251d983b0bdd3dab7bd305469fa9c2932cb108b607fde8757->enter($__internal_ebee2dff84337db251d983b0bdd3dab7bd305469fa9c2932cb108b607fde8757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo " \" />
    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_8d329b2b7cf3db5babe15658f3bb716f12d78ebd2483b71ae329c438b083384b->leave($__internal_8d329b2b7cf3db5babe15658f3bb716f12d78ebd2483b71ae329c438b083384b_prof);

        
        $__internal_ebee2dff84337db251d983b0bdd3dab7bd305469fa9c2932cb108b607fde8757->leave($__internal_ebee2dff84337db251d983b0bdd3dab7bd305469fa9c2932cb108b607fde8757_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey }}</div>
{% endif %}
<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }} \" />
    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <button type=\"submit\">login</button>
</form>", "security/login.html.twig", "/var/www/symfony/app/Resources/views/security/login.html.twig");
    }
}
