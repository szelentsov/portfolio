<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_dc6c36252481f3166829cde05d359066f560bcdffbc5ec6447205a6086445014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a064a351279484d9bbb96b7bd4775a9fb94621242a246b218712fd4d4efc1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a064a351279484d9bbb96b7bd4775a9fb94621242a246b218712fd4d4efc1be->enter($__internal_9a064a351279484d9bbb96b7bd4775a9fb94621242a246b218712fd4d4efc1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_bc995bbcdca287e7bb9a84bbda1112443eb668bcd37cb65511580a8c79df7f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc995bbcdca287e7bb9a84bbda1112443eb668bcd37cb65511580a8c79df7f30->enter($__internal_bc995bbcdca287e7bb9a84bbda1112443eb668bcd37cb65511580a8c79df7f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a064a351279484d9bbb96b7bd4775a9fb94621242a246b218712fd4d4efc1be->leave($__internal_9a064a351279484d9bbb96b7bd4775a9fb94621242a246b218712fd4d4efc1be_prof);

        
        $__internal_bc995bbcdca287e7bb9a84bbda1112443eb668bcd37cb65511580a8c79df7f30->leave($__internal_bc995bbcdca287e7bb9a84bbda1112443eb668bcd37cb65511580a8c79df7f30_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
