<?php

/* security/login.html.twig */
class __TwigTemplate_b4b37596e0caa76fa4a969d19284fba94544fee310c6f20775e60ad5d4e69303 extends Twig_Template
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
        $__internal_f24c9c60882cc518146c64914806b428c7883bafed20264bcc8275743ffd409b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24c9c60882cc518146c64914806b428c7883bafed20264bcc8275743ffd409b->enter($__internal_f24c9c60882cc518146c64914806b428c7883bafed20264bcc8275743ffd409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_d90e40db5e0f27f74b6336744a946bb94c8a2fe355d89dca55fe3c66b6b3a419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90e40db5e0f27f74b6336744a946bb94c8a2fe355d89dca55fe3c66b6b3a419->enter($__internal_d90e40db5e0f27f74b6336744a946bb94c8a2fe355d89dca55fe3c66b6b3a419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "
<form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />


    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_f24c9c60882cc518146c64914806b428c7883bafed20264bcc8275743ffd409b->leave($__internal_f24c9c60882cc518146c64914806b428c7883bafed20264bcc8275743ffd409b_prof);

        
        $__internal_d90e40db5e0f27f74b6336744a946bb94c8a2fe355d89dca55fe3c66b6b3a419->leave($__internal_d90e40db5e0f27f74b6336744a946bb94c8a2fe355d89dca55fe3c66b6b3a419_prof);

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
        return array (  44 => 8,  39 => 6,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
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
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />


    <button type=\"submit\">login</button>
</form>
", "security/login.html.twig", "/home/sergey/portfolio_new/app/Resources/views/security/login.html.twig");
    }
}
