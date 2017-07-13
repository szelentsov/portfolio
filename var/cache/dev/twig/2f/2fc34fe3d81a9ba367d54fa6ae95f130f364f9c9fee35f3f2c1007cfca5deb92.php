<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_9363f433c407a7bafa399edced3b91ef4c029cf8ccac29a425b39bd201b363e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29fbb83854874affa92e472ddf10c09f69b5bc036dc204e3bb1f5b8ad0980a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fbb83854874affa92e472ddf10c09f69b5bc036dc204e3bb1f5b8ad0980a4f->enter($__internal_29fbb83854874affa92e472ddf10c09f69b5bc036dc204e3bb1f5b8ad0980a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_25d0800a0d90d2cf595bf4d4bbd9d8f9a8b13e91e3fd0a0643ca2b966a34cec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d0800a0d90d2cf595bf4d4bbd9d8f9a8b13e91e3fd0a0643ca2b966a34cec3->enter($__internal_25d0800a0d90d2cf595bf4d4bbd9d8f9a8b13e91e3fd0a0643ca2b966a34cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29fbb83854874affa92e472ddf10c09f69b5bc036dc204e3bb1f5b8ad0980a4f->leave($__internal_29fbb83854874affa92e472ddf10c09f69b5bc036dc204e3bb1f5b8ad0980a4f_prof);

        
        $__internal_25d0800a0d90d2cf595bf4d4bbd9d8f9a8b13e91e3fd0a0643ca2b966a34cec3->leave($__internal_25d0800a0d90d2cf595bf4d4bbd9d8f9a8b13e91e3fd0a0643ca2b966a34cec3_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_8f5b3e2114509d351d8276d52b16f334b9e416bb3795a9589496a61a2b86aa02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5b3e2114509d351d8276d52b16f334b9e416bb3795a9589496a61a2b86aa02->enter($__internal_8f5b3e2114509d351d8276d52b16f334b9e416bb3795a9589496a61a2b86aa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_a8e0812fb71d330f1ff3bf9d5b18f27f6db7f367526c9e1e858f203ddf52c972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e0812fb71d330f1ff3bf9d5b18f27f6db7f367526c9e1e858f203ddf52c972->enter($__internal_a8e0812fb71d330f1ff3bf9d5b18f27f6db7f367526c9e1e858f203ddf52c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_a8e0812fb71d330f1ff3bf9d5b18f27f6db7f367526c9e1e858f203ddf52c972->leave($__internal_a8e0812fb71d330f1ff3bf9d5b18f27f6db7f367526c9e1e858f203ddf52c972_prof);

        
        $__internal_8f5b3e2114509d351d8276d52b16f334b9e416bb3795a9589496a61a2b86aa02->leave($__internal_8f5b3e2114509d351d8276d52b16f334b9e416bb3795a9589496a61a2b86aa02_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_f46ad8c5e053c20a272ff6b712d66e26857db95119906ab900867edc023847a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46ad8c5e053c20a272ff6b712d66e26857db95119906ab900867edc023847a4->enter($__internal_f46ad8c5e053c20a272ff6b712d66e26857db95119906ab900867edc023847a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7272ecf6c07071d248826c9d165620422737329cc2da2ea4f8ba9c1f3d4c1182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7272ecf6c07071d248826c9d165620422737329cc2da2ea4f8ba9c1f3d4c1182->enter($__internal_7272ecf6c07071d248826c9d165620422737329cc2da2ea4f8ba9c1f3d4c1182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7272ecf6c07071d248826c9d165620422737329cc2da2ea4f8ba9c1f3d4c1182->leave($__internal_7272ecf6c07071d248826c9d165620422737329cc2da2ea4f8ba9c1f3d4c1182_prof);

        
        $__internal_f46ad8c5e053c20a272ff6b712d66e26857db95119906ab900867edc023847a4->leave($__internal_f46ad8c5e053c20a272ff6b712d66e26857db95119906ab900867edc023847a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  97 => 29,  94 => 28,  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
