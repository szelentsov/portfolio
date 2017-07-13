<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_6cd3090a6ccbaa9f603bbdce6a694987ca0a2233bda2b8617e42d2841066b198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13e95d07794743aa0a87b11f2a4825046d24ceab2eed8600825d3b13c65b4d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e95d07794743aa0a87b11f2a4825046d24ceab2eed8600825d3b13c65b4d05->enter($__internal_13e95d07794743aa0a87b11f2a4825046d24ceab2eed8600825d3b13c65b4d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_f486f307f46796bc8a13c51aee8b91a5e41b0a06bf43c7e2c3c9a3814f9f6f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f486f307f46796bc8a13c51aee8b91a5e41b0a06bf43c7e2c3c9a3814f9f6f16->enter($__internal_f486f307f46796bc8a13c51aee8b91a5e41b0a06bf43c7e2c3c9a3814f9f6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e95d07794743aa0a87b11f2a4825046d24ceab2eed8600825d3b13c65b4d05->leave($__internal_13e95d07794743aa0a87b11f2a4825046d24ceab2eed8600825d3b13c65b4d05_prof);

        
        $__internal_f486f307f46796bc8a13c51aee8b91a5e41b0a06bf43c7e2c3c9a3814f9f6f16->leave($__internal_f486f307f46796bc8a13c51aee8b91a5e41b0a06bf43c7e2c3c9a3814f9f6f16_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ca42e752bbabe86bb6099de5b743b68ecf2e74072e3c72de9b85525451a7b143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca42e752bbabe86bb6099de5b743b68ecf2e74072e3c72de9b85525451a7b143->enter($__internal_ca42e752bbabe86bb6099de5b743b68ecf2e74072e3c72de9b85525451a7b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dbc8c0960e3199d190f4c046c4cd2fb55fca102cebfa03ecdafbd469553b6f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc8c0960e3199d190f4c046c4cd2fb55fca102cebfa03ecdafbd469553b6f1e->enter($__internal_dbc8c0960e3199d190f4c046c4cd2fb55fca102cebfa03ecdafbd469553b6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_dbc8c0960e3199d190f4c046c4cd2fb55fca102cebfa03ecdafbd469553b6f1e->leave($__internal_dbc8c0960e3199d190f4c046c4cd2fb55fca102cebfa03ecdafbd469553b6f1e_prof);

        
        $__internal_ca42e752bbabe86bb6099de5b743b68ecf2e74072e3c72de9b85525451a7b143->leave($__internal_ca42e752bbabe86bb6099de5b743b68ecf2e74072e3c72de9b85525451a7b143_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
