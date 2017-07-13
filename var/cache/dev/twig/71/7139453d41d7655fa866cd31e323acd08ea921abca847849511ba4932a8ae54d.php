<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_d329217ce01a474c9c159f3ffce2ca92889cfb50b017aad6b3d20d6409b97172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb34d8cace765c9feac5b498f994a8baa3845de286d8842e5f924e6b4bc3b2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb34d8cace765c9feac5b498f994a8baa3845de286d8842e5f924e6b4bc3b2a9->enter($__internal_eb34d8cace765c9feac5b498f994a8baa3845de286d8842e5f924e6b4bc3b2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $__internal_2ef810ff7b9582bae4efb45e6e0fdb7106598ebb88a16ca7d558376c2b99226d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef810ff7b9582bae4efb45e6e0fdb7106598ebb88a16ca7d558376c2b99226d->enter($__internal_2ef810ff7b9582bae4efb45e6e0fdb7106598ebb88a16ca7d558376c2b99226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb34d8cace765c9feac5b498f994a8baa3845de286d8842e5f924e6b4bc3b2a9->leave($__internal_eb34d8cace765c9feac5b498f994a8baa3845de286d8842e5f924e6b4bc3b2a9_prof);

        
        $__internal_2ef810ff7b9582bae4efb45e6e0fdb7106598ebb88a16ca7d558376c2b99226d->leave($__internal_2ef810ff7b9582bae4efb45e6e0fdb7106598ebb88a16ca7d558376c2b99226d_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_8de1e610f676c57e8398fee655f8f88104bc6dcd1b801f6dba80ca3654fca8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de1e610f676c57e8398fee655f8f88104bc6dcd1b801f6dba80ca3654fca8fe->enter($__internal_8de1e610f676c57e8398fee655f8f88104bc6dcd1b801f6dba80ca3654fca8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6930359b1ea1cdd362d344bf59f5c8ce82e3179d52d349f70ad0e4caf3d379cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6930359b1ea1cdd362d344bf59f5c8ce82e3179d52d349f70ad0e4caf3d379cc->enter($__internal_6930359b1ea1cdd362d344bf59f5c8ce82e3179d52d349f70ad0e4caf3d379cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_6930359b1ea1cdd362d344bf59f5c8ce82e3179d52d349f70ad0e4caf3d379cc->leave($__internal_6930359b1ea1cdd362d344bf59f5c8ce82e3179d52d349f70ad0e4caf3d379cc_prof);

        
        $__internal_8de1e610f676c57e8398fee655f8f88104bc6dcd1b801f6dba80ca3654fca8fe->leave($__internal_8de1e610f676c57e8398fee655f8f88104bc6dcd1b801f6dba80ca3654fca8fe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
