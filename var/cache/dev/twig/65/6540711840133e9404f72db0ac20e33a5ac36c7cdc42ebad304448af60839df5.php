<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_ccce3ffd8c98e24ad59f04e730a9f92e83a339390ef38d51ddb2ef669862384d extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32a0accd7e5cb93e63a7429d4c615aa9ebfc4fca1626718b9a0e9729085b74f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a0accd7e5cb93e63a7429d4c615aa9ebfc4fca1626718b9a0e9729085b74f2->enter($__internal_32a0accd7e5cb93e63a7429d4c615aa9ebfc4fca1626718b9a0e9729085b74f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_fab36c459c87e1e79263dab9bac360b4718e1f97424dc83f976b6692a1aa6446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab36c459c87e1e79263dab9bac360b4718e1f97424dc83f976b6692a1aa6446->enter($__internal_fab36c459c87e1e79263dab9bac360b4718e1f97424dc83f976b6692a1aa6446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a0accd7e5cb93e63a7429d4c615aa9ebfc4fca1626718b9a0e9729085b74f2->leave($__internal_32a0accd7e5cb93e63a7429d4c615aa9ebfc4fca1626718b9a0e9729085b74f2_prof);

        
        $__internal_fab36c459c87e1e79263dab9bac360b4718e1f97424dc83f976b6692a1aa6446->leave($__internal_fab36c459c87e1e79263dab9bac360b4718e1f97424dc83f976b6692a1aa6446_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3baeab8b14a37d5a9d4a6ce529f8c9937ba05aadfa7c2cad57b5ce13d6562eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3baeab8b14a37d5a9d4a6ce529f8c9937ba05aadfa7c2cad57b5ce13d6562eb8->enter($__internal_3baeab8b14a37d5a9d4a6ce529f8c9937ba05aadfa7c2cad57b5ce13d6562eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_de45e969d6bfc535f0595412d99120f2a3f873f56b116b0e6e666875380bed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de45e969d6bfc535f0595412d99120f2a3f873f56b116b0e6e666875380bed8c->enter($__internal_de45e969d6bfc535f0595412d99120f2a3f873f56b116b0e6e666875380bed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_de45e969d6bfc535f0595412d99120f2a3f873f56b116b0e6e666875380bed8c->leave($__internal_de45e969d6bfc535f0595412d99120f2a3f873f56b116b0e6e666875380bed8c_prof);

        
        $__internal_3baeab8b14a37d5a9d4a6ce529f8c9937ba05aadfa7c2cad57b5ce13d6562eb8->leave($__internal_3baeab8b14a37d5a9d4a6ce529f8c9937ba05aadfa7c2cad57b5ce13d6562eb8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
