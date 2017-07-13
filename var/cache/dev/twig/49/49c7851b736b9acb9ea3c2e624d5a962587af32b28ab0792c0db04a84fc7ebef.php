<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_bf602e184fe0e97243fcfe36d5c9fd758780973ce475995cdb234716c002dd26 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d023e32f23581a2cff4901f89b44d215c11d860458148146b20c2ec23597fe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d023e32f23581a2cff4901f89b44d215c11d860458148146b20c2ec23597fe02->enter($__internal_d023e32f23581a2cff4901f89b44d215c11d860458148146b20c2ec23597fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_eb11eda128a3a2d17c52ab42d7fd688d88009d4e9b6b07906fff7bc76f0e46c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb11eda128a3a2d17c52ab42d7fd688d88009d4e9b6b07906fff7bc76f0e46c1->enter($__internal_eb11eda128a3a2d17c52ab42d7fd688d88009d4e9b6b07906fff7bc76f0e46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d023e32f23581a2cff4901f89b44d215c11d860458148146b20c2ec23597fe02->leave($__internal_d023e32f23581a2cff4901f89b44d215c11d860458148146b20c2ec23597fe02_prof);

        
        $__internal_eb11eda128a3a2d17c52ab42d7fd688d88009d4e9b6b07906fff7bc76f0e46c1->leave($__internal_eb11eda128a3a2d17c52ab42d7fd688d88009d4e9b6b07906fff7bc76f0e46c1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_da9d74fb8aad4f84a37c427f7f1bba18ff70534b9f7834083aaa8338ad041131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9d74fb8aad4f84a37c427f7f1bba18ff70534b9f7834083aaa8338ad041131->enter($__internal_da9d74fb8aad4f84a37c427f7f1bba18ff70534b9f7834083aaa8338ad041131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_89b800106913fc3896b1b059aecea9fc4bcfebfc9457583bc91f8dd5f90349b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b800106913fc3896b1b059aecea9fc4bcfebfc9457583bc91f8dd5f90349b1->enter($__internal_89b800106913fc3896b1b059aecea9fc4bcfebfc9457583bc91f8dd5f90349b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array()), ($context["timezone"] ?? $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_89b800106913fc3896b1b059aecea9fc4bcfebfc9457583bc91f8dd5f90349b1->leave($__internal_89b800106913fc3896b1b059aecea9fc4bcfebfc9457583bc91f8dd5f90349b1_prof);

        
        $__internal_da9d74fb8aad4f84a37c427f7f1bba18ff70534b9f7834083aaa8338ad041131->leave($__internal_da9d74fb8aad4f84a37c427f7f1bba18ff70534b9f7834083aaa8338ad041131_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
