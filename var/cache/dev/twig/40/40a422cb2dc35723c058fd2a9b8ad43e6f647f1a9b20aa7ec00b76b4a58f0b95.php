<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a3cfd1893d50ce0ef4ae9b71157c4bbf44cae8e6e0b7a63c8cd369e8daa0ef55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c51883ec3b6bd04d0a8590f13cfa2a9d71e0e764b7a2c926cba0b1e05df2db38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51883ec3b6bd04d0a8590f13cfa2a9d71e0e764b7a2c926cba0b1e05df2db38->enter($__internal_c51883ec3b6bd04d0a8590f13cfa2a9d71e0e764b7a2c926cba0b1e05df2db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_faf0b9c1ba3cf5cd710d207604e9bdc70f2b1d9bd552928fb38f2bfa53afaf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf0b9c1ba3cf5cd710d207604e9bdc70f2b1d9bd552928fb38f2bfa53afaf2e->enter($__internal_faf0b9c1ba3cf5cd710d207604e9bdc70f2b1d9bd552928fb38f2bfa53afaf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51883ec3b6bd04d0a8590f13cfa2a9d71e0e764b7a2c926cba0b1e05df2db38->leave($__internal_c51883ec3b6bd04d0a8590f13cfa2a9d71e0e764b7a2c926cba0b1e05df2db38_prof);

        
        $__internal_faf0b9c1ba3cf5cd710d207604e9bdc70f2b1d9bd552928fb38f2bfa53afaf2e->leave($__internal_faf0b9c1ba3cf5cd710d207604e9bdc70f2b1d9bd552928fb38f2bfa53afaf2e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f266629739e7b25f147b54c7a4dd1729abffbce479f2bcd487571e542e83aef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f266629739e7b25f147b54c7a4dd1729abffbce479f2bcd487571e542e83aef7->enter($__internal_f266629739e7b25f147b54c7a4dd1729abffbce479f2bcd487571e542e83aef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_f4fb6be46e1e13fafc3efb878a6493c49fbe42e4e7a3201f5de9111f04b1e092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fb6be46e1e13fafc3efb878a6493c49fbe42e4e7a3201f5de9111f04b1e092->enter($__internal_f4fb6be46e1e13fafc3efb878a6493c49fbe42e4e7a3201f5de9111f04b1e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_f4fb6be46e1e13fafc3efb878a6493c49fbe42e4e7a3201f5de9111f04b1e092->leave($__internal_f4fb6be46e1e13fafc3efb878a6493c49fbe42e4e7a3201f5de9111f04b1e092_prof);

        
        $__internal_f266629739e7b25f147b54c7a4dd1729abffbce479f2bcd487571e542e83aef7->leave($__internal_f266629739e7b25f147b54c7a4dd1729abffbce479f2bcd487571e542e83aef7_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a187f8f4cf5a613e67689b05ff7a7f2677cef3b53922408121b79febe19dc03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a187f8f4cf5a613e67689b05ff7a7f2677cef3b53922408121b79febe19dc03e->enter($__internal_a187f8f4cf5a613e67689b05ff7a7f2677cef3b53922408121b79febe19dc03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_f491a5c2ea3845e9430362f581f8239f43ea8ea50acea9037591ed63e94ff8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f491a5c2ea3845e9430362f581f8239f43ea8ea50acea9037591ed63e94ff8b6->enter($__internal_f491a5c2ea3845e9430362f581f8239f43ea8ea50acea9037591ed63e94ff8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_f491a5c2ea3845e9430362f581f8239f43ea8ea50acea9037591ed63e94ff8b6->leave($__internal_f491a5c2ea3845e9430362f581f8239f43ea8ea50acea9037591ed63e94ff8b6_prof);

        
        $__internal_a187f8f4cf5a613e67689b05ff7a7f2677cef3b53922408121b79febe19dc03e->leave($__internal_a187f8f4cf5a613e67689b05ff7a7f2677cef3b53922408121b79febe19dc03e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_52c528cfacc2615d926e30f9f2cefe395a77159bf796d9315120442ffedf724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c528cfacc2615d926e30f9f2cefe395a77159bf796d9315120442ffedf724f->enter($__internal_52c528cfacc2615d926e30f9f2cefe395a77159bf796d9315120442ffedf724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_205e6507e375c23f6f8c0856010cc49ae8b6ea7a4fa2b9e30319ba64d04c524d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205e6507e375c23f6f8c0856010cc49ae8b6ea7a4fa2b9e30319ba64d04c524d->enter($__internal_205e6507e375c23f6f8c0856010cc49ae8b6ea7a4fa2b9e30319ba64d04c524d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_205e6507e375c23f6f8c0856010cc49ae8b6ea7a4fa2b9e30319ba64d04c524d->leave($__internal_205e6507e375c23f6f8c0856010cc49ae8b6ea7a4fa2b9e30319ba64d04c524d_prof);

        
        $__internal_52c528cfacc2615d926e30f9f2cefe395a77159bf796d9315120442ffedf724f->leave($__internal_52c528cfacc2615d926e30f9f2cefe395a77159bf796d9315120442ffedf724f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
