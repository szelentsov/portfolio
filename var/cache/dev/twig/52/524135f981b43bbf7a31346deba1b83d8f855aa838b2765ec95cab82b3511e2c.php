<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7694b9468e1172afd5e17664b499d213846c3ada7eaf44e6071b37416bf41058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7694b9468e1172afd5e17664b499d213846c3ada7eaf44e6071b37416bf41058->enter($__internal_7694b9468e1172afd5e17664b499d213846c3ada7eaf44e6071b37416bf41058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a02d3f79d326c27c6e4dbe89ad2d170b98dc5ba7062d50c9981ea33e325adaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02d3f79d326c27c6e4dbe89ad2d170b98dc5ba7062d50c9981ea33e325adaa6->enter($__internal_a02d3f79d326c27c6e4dbe89ad2d170b98dc5ba7062d50c9981ea33e325adaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7694b9468e1172afd5e17664b499d213846c3ada7eaf44e6071b37416bf41058->leave($__internal_7694b9468e1172afd5e17664b499d213846c3ada7eaf44e6071b37416bf41058_prof);

        
        $__internal_a02d3f79d326c27c6e4dbe89ad2d170b98dc5ba7062d50c9981ea33e325adaa6->leave($__internal_a02d3f79d326c27c6e4dbe89ad2d170b98dc5ba7062d50c9981ea33e325adaa6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dd70e180570061db8260cf0733572298b5d9f18c0be7c6c8c8a374e5ffe4923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd70e180570061db8260cf0733572298b5d9f18c0be7c6c8c8a374e5ffe4923->enter($__internal_6dd70e180570061db8260cf0733572298b5d9f18c0be7c6c8c8a374e5ffe4923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b594ff0c253d0ff0ba9938f8021cce17cf144966379c1df3748d114c22844fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b594ff0c253d0ff0ba9938f8021cce17cf144966379c1df3748d114c22844fc2->enter($__internal_b594ff0c253d0ff0ba9938f8021cce17cf144966379c1df3748d114c22844fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b594ff0c253d0ff0ba9938f8021cce17cf144966379c1df3748d114c22844fc2->leave($__internal_b594ff0c253d0ff0ba9938f8021cce17cf144966379c1df3748d114c22844fc2_prof);

        
        $__internal_6dd70e180570061db8260cf0733572298b5d9f18c0be7c6c8c8a374e5ffe4923->leave($__internal_6dd70e180570061db8260cf0733572298b5d9f18c0be7c6c8c8a374e5ffe4923_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aec557a7a99e1f48da87587bcbeef4b3896f36ffc679413f6f22608649290ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aec557a7a99e1f48da87587bcbeef4b3896f36ffc679413f6f22608649290ab->enter($__internal_0aec557a7a99e1f48da87587bcbeef4b3896f36ffc679413f6f22608649290ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7241d8b5f17b0ede4c6a0ec132f947c5917cd65ad77ff96455f241dc4510ab03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7241d8b5f17b0ede4c6a0ec132f947c5917cd65ad77ff96455f241dc4510ab03->enter($__internal_7241d8b5f17b0ede4c6a0ec132f947c5917cd65ad77ff96455f241dc4510ab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7241d8b5f17b0ede4c6a0ec132f947c5917cd65ad77ff96455f241dc4510ab03->leave($__internal_7241d8b5f17b0ede4c6a0ec132f947c5917cd65ad77ff96455f241dc4510ab03_prof);

        
        $__internal_0aec557a7a99e1f48da87587bcbeef4b3896f36ffc679413f6f22608649290ab->leave($__internal_0aec557a7a99e1f48da87587bcbeef4b3896f36ffc679413f6f22608649290ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
