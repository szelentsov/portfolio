<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_94e72a40afd88cdb874ee032503cd070e6154b4ac51920c839ea7357105b7f0d extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13254fe80a02f6776ac2b6d02ec5932a16319a064991281edf514490ec572145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13254fe80a02f6776ac2b6d02ec5932a16319a064991281edf514490ec572145->enter($__internal_13254fe80a02f6776ac2b6d02ec5932a16319a064991281edf514490ec572145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_e3eb4c6157852aca45246a77fd61a1ca6e4a9dec62d7e65d9625303dc86f9914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3eb4c6157852aca45246a77fd61a1ca6e4a9dec62d7e65d9625303dc86f9914->enter($__internal_e3eb4c6157852aca45246a77fd61a1ca6e4a9dec62d7e65d9625303dc86f9914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13254fe80a02f6776ac2b6d02ec5932a16319a064991281edf514490ec572145->leave($__internal_13254fe80a02f6776ac2b6d02ec5932a16319a064991281edf514490ec572145_prof);

        
        $__internal_e3eb4c6157852aca45246a77fd61a1ca6e4a9dec62d7e65d9625303dc86f9914->leave($__internal_e3eb4c6157852aca45246a77fd61a1ca6e4a9dec62d7e65d9625303dc86f9914_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d8ccf31b8bf67e55dee55c890e8399962b77ebcd8169178a22686e710deefbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ccf31b8bf67e55dee55c890e8399962b77ebcd8169178a22686e710deefbd7->enter($__internal_d8ccf31b8bf67e55dee55c890e8399962b77ebcd8169178a22686e710deefbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f98fd6e06506fcaf69903c38ae03bf8e64a2473550a5c5a9de46f4a8cab79476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98fd6e06506fcaf69903c38ae03bf8e64a2473550a5c5a9de46f4a8cab79476->enter($__internal_f98fd6e06506fcaf69903c38ae03bf8e64a2473550a5c5a9de46f4a8cab79476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f98fd6e06506fcaf69903c38ae03bf8e64a2473550a5c5a9de46f4a8cab79476->leave($__internal_f98fd6e06506fcaf69903c38ae03bf8e64a2473550a5c5a9de46f4a8cab79476_prof);

        
        $__internal_d8ccf31b8bf67e55dee55c890e8399962b77ebcd8169178a22686e710deefbd7->leave($__internal_d8ccf31b8bf67e55dee55c890e8399962b77ebcd8169178a22686e710deefbd7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
