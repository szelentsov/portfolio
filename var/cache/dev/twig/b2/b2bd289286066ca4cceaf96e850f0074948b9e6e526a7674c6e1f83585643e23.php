<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_ea483f0e9731b2f53b551fdb69b3be7a4da3f1979dfda228478e445e8efc8086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a34dfd12afbe71cf65a45262cd2e7f5e3a7f37e9e39cb156564d8568af1a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a34dfd12afbe71cf65a45262cd2e7f5e3a7f37e9e39cb156564d8568af1a95->enter($__internal_96a34dfd12afbe71cf65a45262cd2e7f5e3a7f37e9e39cb156564d8568af1a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_a14f9dc2e44783139e2afeefccf3819b7bcd9608566a59a2c1a4da815b2bee27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14f9dc2e44783139e2afeefccf3819b7bcd9608566a59a2c1a4da815b2bee27->enter($__internal_a14f9dc2e44783139e2afeefccf3819b7bcd9608566a59a2c1a4da815b2bee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a34dfd12afbe71cf65a45262cd2e7f5e3a7f37e9e39cb156564d8568af1a95->leave($__internal_96a34dfd12afbe71cf65a45262cd2e7f5e3a7f37e9e39cb156564d8568af1a95_prof);

        
        $__internal_a14f9dc2e44783139e2afeefccf3819b7bcd9608566a59a2c1a4da815b2bee27->leave($__internal_a14f9dc2e44783139e2afeefccf3819b7bcd9608566a59a2c1a4da815b2bee27_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_557fa74f5ef2315d4c69df6ace86795e9808e95689cdc562cfcaeaf66a13f21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557fa74f5ef2315d4c69df6ace86795e9808e95689cdc562cfcaeaf66a13f21c->enter($__internal_557fa74f5ef2315d4c69df6ace86795e9808e95689cdc562cfcaeaf66a13f21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3a584cf6e30c96e50194a4edbe6780d5336072b117a14e31adb822f3b0c504bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a584cf6e30c96e50194a4edbe6780d5336072b117a14e31adb822f3b0c504bc->enter($__internal_3a584cf6e30c96e50194a4edbe6780d5336072b117a14e31adb822f3b0c504bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3a584cf6e30c96e50194a4edbe6780d5336072b117a14e31adb822f3b0c504bc->leave($__internal_3a584cf6e30c96e50194a4edbe6780d5336072b117a14e31adb822f3b0c504bc_prof);

        
        $__internal_557fa74f5ef2315d4c69df6ace86795e9808e95689cdc562cfcaeaf66a13f21c->leave($__internal_557fa74f5ef2315d4c69df6ace86795e9808e95689cdc562cfcaeaf66a13f21c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
