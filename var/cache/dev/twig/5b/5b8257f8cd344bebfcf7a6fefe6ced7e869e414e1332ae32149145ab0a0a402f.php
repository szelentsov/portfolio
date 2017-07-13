<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_524d5f19be3530d5ba4aecd23d085c329ca36b05183a9695cb9288df4e91a69f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc7c312616aa4d3ddb96af13d2a904ceac6722703ef3dc40aa309c5682d6cdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7c312616aa4d3ddb96af13d2a904ceac6722703ef3dc40aa309c5682d6cdf7->enter($__internal_bc7c312616aa4d3ddb96af13d2a904ceac6722703ef3dc40aa309c5682d6cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_92894aea8ce8aab86cf3aa774dd171d3bf6152502de5e5ed460e20e663c988a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92894aea8ce8aab86cf3aa774dd171d3bf6152502de5e5ed460e20e663c988a8->enter($__internal_92894aea8ce8aab86cf3aa774dd171d3bf6152502de5e5ed460e20e663c988a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7c312616aa4d3ddb96af13d2a904ceac6722703ef3dc40aa309c5682d6cdf7->leave($__internal_bc7c312616aa4d3ddb96af13d2a904ceac6722703ef3dc40aa309c5682d6cdf7_prof);

        
        $__internal_92894aea8ce8aab86cf3aa774dd171d3bf6152502de5e5ed460e20e663c988a8->leave($__internal_92894aea8ce8aab86cf3aa774dd171d3bf6152502de5e5ed460e20e663c988a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_357e4cda3ec29762d165cf6a0703498a123ff93a124c5a555fa89489d863d73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357e4cda3ec29762d165cf6a0703498a123ff93a124c5a555fa89489d863d73a->enter($__internal_357e4cda3ec29762d165cf6a0703498a123ff93a124c5a555fa89489d863d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e76a3452dd9ac4dcd4bd8db174d722c34f51b3a3e0b5c7e24b524969558e68c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76a3452dd9ac4dcd4bd8db174d722c34f51b3a3e0b5c7e24b524969558e68c0->enter($__internal_e76a3452dd9ac4dcd4bd8db174d722c34f51b3a3e0b5c7e24b524969558e68c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_e76a3452dd9ac4dcd4bd8db174d722c34f51b3a3e0b5c7e24b524969558e68c0->leave($__internal_e76a3452dd9ac4dcd4bd8db174d722c34f51b3a3e0b5c7e24b524969558e68c0_prof);

        
        $__internal_357e4cda3ec29762d165cf6a0703498a123ff93a124c5a555fa89489d863d73a->leave($__internal_357e4cda3ec29762d165cf6a0703498a123ff93a124c5a555fa89489d863d73a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
