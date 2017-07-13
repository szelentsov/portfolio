<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_e117930b72be4cb2fa9fcd278552c5fe684e64eb2c3d97e10e5c726a3c675a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e6a03fd685c0f879e44b7e104707e1b97148161da742d58ebcbcc7558dea2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e6a03fd685c0f879e44b7e104707e1b97148161da742d58ebcbcc7558dea2a->enter($__internal_26e6a03fd685c0f879e44b7e104707e1b97148161da742d58ebcbcc7558dea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_16b6d5485f629dcc9e139df559ee91a67d17095d4513a6954f49a04576125467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b6d5485f629dcc9e139df559ee91a67d17095d4513a6954f49a04576125467->enter($__internal_16b6d5485f629dcc9e139df559ee91a67d17095d4513a6954f49a04576125467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e6a03fd685c0f879e44b7e104707e1b97148161da742d58ebcbcc7558dea2a->leave($__internal_26e6a03fd685c0f879e44b7e104707e1b97148161da742d58ebcbcc7558dea2a_prof);

        
        $__internal_16b6d5485f629dcc9e139df559ee91a67d17095d4513a6954f49a04576125467->leave($__internal_16b6d5485f629dcc9e139df559ee91a67d17095d4513a6954f49a04576125467_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_0560c10c1c6a2c2c49dec947f9c6a6ba9ff9f8d5c4fe024522dccc23bbdb3e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0560c10c1c6a2c2c49dec947f9c6a6ba9ff9f8d5c4fe024522dccc23bbdb3e39->enter($__internal_0560c10c1c6a2c2c49dec947f9c6a6ba9ff9f8d5c4fe024522dccc23bbdb3e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_3f6d7f973f6ae82937489a044a767f8d4f5c3218206bab6677fab3187c0c4368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6d7f973f6ae82937489a044a767f8d4f5c3218206bab6677fab3187c0c4368->enter($__internal_3f6d7f973f6ae82937489a044a767f8d4f5c3218206bab6677fab3187c0c4368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")), ($context["object_compare"] ?? $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_3f6d7f973f6ae82937489a044a767f8d4f5c3218206bab6677fab3187c0c4368->leave($__internal_3f6d7f973f6ae82937489a044a767f8d4f5c3218206bab6677fab3187c0c4368_prof);

        
        $__internal_0560c10c1c6a2c2c49dec947f9c6a6ba9ff9f8d5c4fe024522dccc23bbdb3e39->leave($__internal_0560c10c1c6a2c2c49dec947f9c6a6ba9ff9f8d5c4fe024522dccc23bbdb3e39_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
