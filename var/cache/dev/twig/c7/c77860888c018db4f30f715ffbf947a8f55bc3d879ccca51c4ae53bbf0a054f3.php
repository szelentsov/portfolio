<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_f5f8153feea4dfdb310e8cee6466f700126bfebf2d7791fb2bc4250d01a31985 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_656b45e2abbf99d9a84ad7c428597fee8f8bb81604d5a18bbe4ab2a3da00d0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656b45e2abbf99d9a84ad7c428597fee8f8bb81604d5a18bbe4ab2a3da00d0e7->enter($__internal_656b45e2abbf99d9a84ad7c428597fee8f8bb81604d5a18bbe4ab2a3da00d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_b94c183d06cd04d91c4ca96b59b1b41cc1827eea26678b8d00dc17bf8d39bd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94c183d06cd04d91c4ca96b59b1b41cc1827eea26678b8d00dc17bf8d39bd3d->enter($__internal_b94c183d06cd04d91c4ca96b59b1b41cc1827eea26678b8d00dc17bf8d39bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656b45e2abbf99d9a84ad7c428597fee8f8bb81604d5a18bbe4ab2a3da00d0e7->leave($__internal_656b45e2abbf99d9a84ad7c428597fee8f8bb81604d5a18bbe4ab2a3da00d0e7_prof);

        
        $__internal_b94c183d06cd04d91c4ca96b59b1b41cc1827eea26678b8d00dc17bf8d39bd3d->leave($__internal_b94c183d06cd04d91c4ca96b59b1b41cc1827eea26678b8d00dc17bf8d39bd3d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_17a01d939dbe072f8e6519608a9acefffa25027834f2558847048f25ce74318d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a01d939dbe072f8e6519608a9acefffa25027834f2558847048f25ce74318d->enter($__internal_17a01d939dbe072f8e6519608a9acefffa25027834f2558847048f25ce74318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bc82718468f8bef82811ac1c43468a0059b60a58051ddb8bd9751bbea0b60a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc82718468f8bef82811ac1c43468a0059b60a58051ddb8bd9751bbea0b60a50->enter($__internal_bc82718468f8bef82811ac1c43468a0059b60a58051ddb8bd9751bbea0b60a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_bc82718468f8bef82811ac1c43468a0059b60a58051ddb8bd9751bbea0b60a50->leave($__internal_bc82718468f8bef82811ac1c43468a0059b60a58051ddb8bd9751bbea0b60a50_prof);

        
        $__internal_17a01d939dbe072f8e6519608a9acefffa25027834f2558847048f25ce74318d->leave($__internal_17a01d939dbe072f8e6519608a9acefffa25027834f2558847048f25ce74318d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
