<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_c273af5e483638f1187f25a328f767132188c187d9be59db7b2b19c98273e784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_ec42ae98b12bc8ff4eb6c164b77d9acbdc18985522d690dbc19982f176a3e9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec42ae98b12bc8ff4eb6c164b77d9acbdc18985522d690dbc19982f176a3e9ec->enter($__internal_ec42ae98b12bc8ff4eb6c164b77d9acbdc18985522d690dbc19982f176a3e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_5117fc1e0a5a6dc9cbd11204bf9b51cd4043f6842d69b28da16ffefd09c3c5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5117fc1e0a5a6dc9cbd11204bf9b51cd4043f6842d69b28da16ffefd09c3c5fb->enter($__internal_5117fc1e0a5a6dc9cbd11204bf9b51cd4043f6842d69b28da16ffefd09c3c5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec42ae98b12bc8ff4eb6c164b77d9acbdc18985522d690dbc19982f176a3e9ec->leave($__internal_ec42ae98b12bc8ff4eb6c164b77d9acbdc18985522d690dbc19982f176a3e9ec_prof);

        
        $__internal_5117fc1e0a5a6dc9cbd11204bf9b51cd4043f6842d69b28da16ffefd09c3c5fb->leave($__internal_5117fc1e0a5a6dc9cbd11204bf9b51cd4043f6842d69b28da16ffefd09c3c5fb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4562862ab3a599fc1286983c987296a6077d5cc6ac0b10cc6cf50c01fc3d69b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4562862ab3a599fc1286983c987296a6077d5cc6ac0b10cc6cf50c01fc3d69b8->enter($__internal_4562862ab3a599fc1286983c987296a6077d5cc6ac0b10cc6cf50c01fc3d69b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_05f2bd739eb5303d93b3ff0e8bac2ad50b4e5e76e4996c3228c4654fb6353485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f2bd739eb5303d93b3ff0e8bac2ad50b4e5e76e4996c3228c4654fb6353485->enter($__internal_05f2bd739eb5303d93b3ff0e8bac2ad50b4e5e76e4996c3228c4654fb6353485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_05f2bd739eb5303d93b3ff0e8bac2ad50b4e5e76e4996c3228c4654fb6353485->leave($__internal_05f2bd739eb5303d93b3ff0e8bac2ad50b4e5e76e4996c3228c4654fb6353485_prof);

        
        $__internal_4562862ab3a599fc1286983c987296a6077d5cc6ac0b10cc6cf50c01fc3d69b8->leave($__internal_4562862ab3a599fc1286983c987296a6077d5cc6ac0b10cc6cf50c01fc3d69b8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
