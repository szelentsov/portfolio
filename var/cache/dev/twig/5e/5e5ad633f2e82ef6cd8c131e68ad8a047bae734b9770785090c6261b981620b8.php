<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_d2a8c5cc510395e497b03b129691dd75c166c3b414c68b50987c0d9875c07c5a extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a6be1cd43b181de3f8e5c1ae7717d19a5575ba9871ef24401ef5ffe8f534282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6be1cd43b181de3f8e5c1ae7717d19a5575ba9871ef24401ef5ffe8f534282->enter($__internal_6a6be1cd43b181de3f8e5c1ae7717d19a5575ba9871ef24401ef5ffe8f534282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_4fabb1f0a401109862333598cf7f6a9f1babbe030124985230d36c3abbd52a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fabb1f0a401109862333598cf7f6a9f1babbe030124985230d36c3abbd52a87->enter($__internal_4fabb1f0a401109862333598cf7f6a9f1babbe030124985230d36c3abbd52a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6be1cd43b181de3f8e5c1ae7717d19a5575ba9871ef24401ef5ffe8f534282->leave($__internal_6a6be1cd43b181de3f8e5c1ae7717d19a5575ba9871ef24401ef5ffe8f534282_prof);

        
        $__internal_4fabb1f0a401109862333598cf7f6a9f1babbe030124985230d36c3abbd52a87->leave($__internal_4fabb1f0a401109862333598cf7f6a9f1babbe030124985230d36c3abbd52a87_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d0d9d0614902514cc1d608897ae14a3a3d2f81a0048264d895e6f08382c52559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d9d0614902514cc1d608897ae14a3a3d2f81a0048264d895e6f08382c52559->enter($__internal_d0d9d0614902514cc1d608897ae14a3a3d2f81a0048264d895e6f08382c52559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_910b4d561e8278327f31d3b7d3392d57b90cdc6ef39dc64c5fa231369a6fe6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910b4d561e8278327f31d3b7d3392d57b90cdc6ef39dc64c5fa231369a6fe6a7->enter($__internal_910b4d561e8278327f31d3b7d3392d57b90cdc6ef39dc64c5fa231369a6fe6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_910b4d561e8278327f31d3b7d3392d57b90cdc6ef39dc64c5fa231369a6fe6a7->leave($__internal_910b4d561e8278327f31d3b7d3392d57b90cdc6ef39dc64c5fa231369a6fe6a7_prof);

        
        $__internal_d0d9d0614902514cc1d608897ae14a3a3d2f81a0048264d895e6f08382c52559->leave($__internal_d0d9d0614902514cc1d608897ae14a3a3d2f81a0048264d895e6f08382c52559_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
