<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_1fc8e5178da4f3bcc4331ad6bfd010797e7f309a688e29639dc6b9264f2c8a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_38cafd0e157b76f0353f16c3fe5f903d073b6e908de179348599f8ddcdee112e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cafd0e157b76f0353f16c3fe5f903d073b6e908de179348599f8ddcdee112e->enter($__internal_38cafd0e157b76f0353f16c3fe5f903d073b6e908de179348599f8ddcdee112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_4e16129d5171e3851da261646d5d7c41422e72ed85f241c1eb0f1fd9e6f1539c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e16129d5171e3851da261646d5d7c41422e72ed85f241c1eb0f1fd9e6f1539c->enter($__internal_4e16129d5171e3851da261646d5d7c41422e72ed85f241c1eb0f1fd9e6f1539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38cafd0e157b76f0353f16c3fe5f903d073b6e908de179348599f8ddcdee112e->leave($__internal_38cafd0e157b76f0353f16c3fe5f903d073b6e908de179348599f8ddcdee112e_prof);

        
        $__internal_4e16129d5171e3851da261646d5d7c41422e72ed85f241c1eb0f1fd9e6f1539c->leave($__internal_4e16129d5171e3851da261646d5d7c41422e72ed85f241c1eb0f1fd9e6f1539c_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_e15df5e38c73e809d68a67f9635c5c6293b7b4b1805b9b54355e5ffc64ac4a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15df5e38c73e809d68a67f9635c5c6293b7b4b1805b9b54355e5ffc64ac4a1e->enter($__internal_e15df5e38c73e809d68a67f9635c5c6293b7b4b1805b9b54355e5ffc64ac4a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9c903fcccd48b1944429589d1ee8db323c615f6682f21fc73c75c2bda1e36d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c903fcccd48b1944429589d1ee8db323c615f6682f21fc73c75c2bda1e36d9a->enter($__internal_9c903fcccd48b1944429589d1ee8db323c615f6682f21fc73c75c2bda1e36d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9c903fcccd48b1944429589d1ee8db323c615f6682f21fc73c75c2bda1e36d9a->leave($__internal_9c903fcccd48b1944429589d1ee8db323c615f6682f21fc73c75c2bda1e36d9a_prof);

        
        $__internal_e15df5e38c73e809d68a67f9635c5c6293b7b4b1805b9b54355e5ffc64ac4a1e->leave($__internal_e15df5e38c73e809d68a67f9635c5c6293b7b4b1805b9b54355e5ffc64ac4a1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
