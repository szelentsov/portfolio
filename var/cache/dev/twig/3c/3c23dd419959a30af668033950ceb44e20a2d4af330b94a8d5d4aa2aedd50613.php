<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_bd4b10d736a0be938f55f0fad67066521d5172c4995f68d4263160e198f7e915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a58df4f31a44ba632568bd03663c105c95b5f358e4b6901e494b0aa1c4e742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a58df4f31a44ba632568bd03663c105c95b5f358e4b6901e494b0aa1c4e742->enter($__internal_b6a58df4f31a44ba632568bd03663c105c95b5f358e4b6901e494b0aa1c4e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_fa094b925d1e1e4bcb259eac0accd2f586318dbcbf2ebe1fd24c299749114a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa094b925d1e1e4bcb259eac0accd2f586318dbcbf2ebe1fd24c299749114a00->enter($__internal_fa094b925d1e1e4bcb259eac0accd2f586318dbcbf2ebe1fd24c299749114a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["filter_form"] ?? $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_b6a58df4f31a44ba632568bd03663c105c95b5f358e4b6901e494b0aa1c4e742->leave($__internal_b6a58df4f31a44ba632568bd03663c105c95b5f358e4b6901e494b0aa1c4e742_prof);

        
        $__internal_fa094b925d1e1e4bcb259eac0accd2f586318dbcbf2ebe1fd24c299749114a00->leave($__internal_fa094b925d1e1e4bcb259eac0accd2f586318dbcbf2ebe1fd24c299749114a00_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_eb0ef5d59de6e0a2e8eda15582a69f40761e750f018838f5be99033c769f4cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0ef5d59de6e0a2e8eda15582a69f40761e750f018838f5be99033c769f4cc6->enter($__internal_eb0ef5d59de6e0a2e8eda15582a69f40761e750f018838f5be99033c769f4cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f60636a637a470408b2ccc2de136fc136baeb341593be14e9992144fe96b7293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60636a637a470408b2ccc2de136fc136baeb341593be14e9992144fe96b7293->enter($__internal_f60636a637a470408b2ccc2de136fc136baeb341593be14e9992144fe96b7293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_f60636a637a470408b2ccc2de136fc136baeb341593be14e9992144fe96b7293->leave($__internal_f60636a637a470408b2ccc2de136fc136baeb341593be14e9992144fe96b7293_prof);

        
        $__internal_eb0ef5d59de6e0a2e8eda15582a69f40761e750f018838f5be99033c769f4cc6->leave($__internal_eb0ef5d59de6e0a2e8eda15582a69f40761e750f018838f5be99033c769f4cc6_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b2ffcee3bf5fc6ed3bd48222c2f5dbbd7f5a9af216ed77de062c6b192162061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2ffcee3bf5fc6ed3bd48222c2f5dbbd7f5a9af216ed77de062c6b192162061->enter($__internal_5b2ffcee3bf5fc6ed3bd48222c2f5dbbd7f5a9af216ed77de062c6b192162061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aacdb7a1536337af0bef08219c300887e8b79dfd2f31c189adeb978c3030373e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacdb7a1536337af0bef08219c300887e8b79dfd2f31c189adeb978c3030373e->enter($__internal_aacdb7a1536337af0bef08219c300887e8b79dfd2f31c189adeb978c3030373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_aacdb7a1536337af0bef08219c300887e8b79dfd2f31c189adeb978c3030373e->leave($__internal_aacdb7a1536337af0bef08219c300887e8b79dfd2f31c189adeb978c3030373e_prof);

        
        $__internal_5b2ffcee3bf5fc6ed3bd48222c2f5dbbd7f5a9af216ed77de062c6b192162061->leave($__internal_5b2ffcee3bf5fc6ed3bd48222c2f5dbbd7f5a9af216ed77de062c6b192162061_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
