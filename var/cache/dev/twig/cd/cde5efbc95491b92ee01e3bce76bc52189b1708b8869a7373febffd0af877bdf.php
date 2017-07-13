<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_98d307b0a0e3b36e9c2b2f0bf391444278522efa36e90622919448937ae7bc5d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8b58bc6c19ea67fb452d9cb5e641e8d58fc0e493b83ddccc9c32ae4f8049163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b58bc6c19ea67fb452d9cb5e641e8d58fc0e493b83ddccc9c32ae4f8049163->enter($__internal_f8b58bc6c19ea67fb452d9cb5e641e8d58fc0e493b83ddccc9c32ae4f8049163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_4bb047fc95cc6bff3df1c37ecca4ad31a9a4e244cc781c1587a468ca874a6b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb047fc95cc6bff3df1c37ecca4ad31a9a4e244cc781c1587a468ca874a6b0f->enter($__internal_4bb047fc95cc6bff3df1c37ecca4ad31a9a4e244cc781c1587a468ca874a6b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b58bc6c19ea67fb452d9cb5e641e8d58fc0e493b83ddccc9c32ae4f8049163->leave($__internal_f8b58bc6c19ea67fb452d9cb5e641e8d58fc0e493b83ddccc9c32ae4f8049163_prof);

        
        $__internal_4bb047fc95cc6bff3df1c37ecca4ad31a9a4e244cc781c1587a468ca874a6b0f->leave($__internal_4bb047fc95cc6bff3df1c37ecca4ad31a9a4e244cc781c1587a468ca874a6b0f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ccdc5eefe99fcb4f50d2ad3a0164d6e6309cb8a0243e4e33ad958c793cbdfe4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdc5eefe99fcb4f50d2ad3a0164d6e6309cb8a0243e4e33ad958c793cbdfe4f->enter($__internal_ccdc5eefe99fcb4f50d2ad3a0164d6e6309cb8a0243e4e33ad958c793cbdfe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_10c011d0c974e701f93bb7d349c0305bcc4810b5a10ae86f6293d973554f5ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c011d0c974e701f93bb7d349c0305bcc4810b5a10ae86f6293d973554f5ae4->enter($__internal_10c011d0c974e701f93bb7d349c0305bcc4810b5a10ae86f6293d973554f5ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_10c011d0c974e701f93bb7d349c0305bcc4810b5a10ae86f6293d973554f5ae4->leave($__internal_10c011d0c974e701f93bb7d349c0305bcc4810b5a10ae86f6293d973554f5ae4_prof);

        
        $__internal_ccdc5eefe99fcb4f50d2ad3a0164d6e6309cb8a0243e4e33ad958c793cbdfe4f->leave($__internal_ccdc5eefe99fcb4f50d2ad3a0164d6e6309cb8a0243e4e33ad958c793cbdfe4f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
