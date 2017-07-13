<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_2639f04b2979bba4797c19ed226a8714d60e4d5d22a8cde4e0ca006ba8070912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_81932b667680d159194b9efc4162cfab2120e4b9568447578ecfb90169cdae81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81932b667680d159194b9efc4162cfab2120e4b9568447578ecfb90169cdae81->enter($__internal_81932b667680d159194b9efc4162cfab2120e4b9568447578ecfb90169cdae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_771ba8446aa03940b62cf6afa4a569d219d029863eb2c5696e8610c2f3e8b1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771ba8446aa03940b62cf6afa4a569d219d029863eb2c5696e8610c2f3e8b1a9->enter($__internal_771ba8446aa03940b62cf6afa4a569d219d029863eb2c5696e8610c2f3e8b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81932b667680d159194b9efc4162cfab2120e4b9568447578ecfb90169cdae81->leave($__internal_81932b667680d159194b9efc4162cfab2120e4b9568447578ecfb90169cdae81_prof);

        
        $__internal_771ba8446aa03940b62cf6afa4a569d219d029863eb2c5696e8610c2f3e8b1a9->leave($__internal_771ba8446aa03940b62cf6afa4a569d219d029863eb2c5696e8610c2f3e8b1a9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_16464b1a5b5fd79de96cde6163ed24fc23077d7f9897dc8ad23be506dc860400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16464b1a5b5fd79de96cde6163ed24fc23077d7f9897dc8ad23be506dc860400->enter($__internal_16464b1a5b5fd79de96cde6163ed24fc23077d7f9897dc8ad23be506dc860400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_75ffbc92d2b0769f37292b373da969cd0dc20317217b8e21a4fd198ed358f6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ffbc92d2b0769f37292b373da969cd0dc20317217b8e21a4fd198ed358f6a7->enter($__internal_75ffbc92d2b0769f37292b373da969cd0dc20317217b8e21a4fd198ed358f6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_75ffbc92d2b0769f37292b373da969cd0dc20317217b8e21a4fd198ed358f6a7->leave($__internal_75ffbc92d2b0769f37292b373da969cd0dc20317217b8e21a4fd198ed358f6a7_prof);

        
        $__internal_16464b1a5b5fd79de96cde6163ed24fc23077d7f9897dc8ad23be506dc860400->leave($__internal_16464b1a5b5fd79de96cde6163ed24fc23077d7f9897dc8ad23be506dc860400_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
