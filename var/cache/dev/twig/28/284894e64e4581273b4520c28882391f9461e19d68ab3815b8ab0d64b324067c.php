<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_6e83a0d5bbde4912b5404bea345284cf10baf90daa326906a876e491d7cd8a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_30c7a205a35d5dec8c6c4137cd5cf9c4459806c4f7774ccc7f0d32ca1ab05a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c7a205a35d5dec8c6c4137cd5cf9c4459806c4f7774ccc7f0d32ca1ab05a30->enter($__internal_30c7a205a35d5dec8c6c4137cd5cf9c4459806c4f7774ccc7f0d32ca1ab05a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_56c113a3c1225dec595335e335abc995a786ffeac0d041c30b7f8e52a7dfab84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c113a3c1225dec595335e335abc995a786ffeac0d041c30b7f8e52a7dfab84->enter($__internal_56c113a3c1225dec595335e335abc995a786ffeac0d041c30b7f8e52a7dfab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c7a205a35d5dec8c6c4137cd5cf9c4459806c4f7774ccc7f0d32ca1ab05a30->leave($__internal_30c7a205a35d5dec8c6c4137cd5cf9c4459806c4f7774ccc7f0d32ca1ab05a30_prof);

        
        $__internal_56c113a3c1225dec595335e335abc995a786ffeac0d041c30b7f8e52a7dfab84->leave($__internal_56c113a3c1225dec595335e335abc995a786ffeac0d041c30b7f8e52a7dfab84_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4fc1eee86987c8fd3a778febc57357bb93087b0ead208e75c69baa0206fa496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fc1eee86987c8fd3a778febc57357bb93087b0ead208e75c69baa0206fa496->enter($__internal_b4fc1eee86987c8fd3a778febc57357bb93087b0ead208e75c69baa0206fa496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5f8d9cb113098bfdbf095f594a75e34fe9447fa187a26478f552b8dbdc292b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8d9cb113098bfdbf095f594a75e34fe9447fa187a26478f552b8dbdc292b81->enter($__internal_5f8d9cb113098bfdbf095f594a75e34fe9447fa187a26478f552b8dbdc292b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_5f8d9cb113098bfdbf095f594a75e34fe9447fa187a26478f552b8dbdc292b81->leave($__internal_5f8d9cb113098bfdbf095f594a75e34fe9447fa187a26478f552b8dbdc292b81_prof);

        
        $__internal_b4fc1eee86987c8fd3a778febc57357bb93087b0ead208e75c69baa0206fa496->leave($__internal_b4fc1eee86987c8fd3a778febc57357bb93087b0ead208e75c69baa0206fa496_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
