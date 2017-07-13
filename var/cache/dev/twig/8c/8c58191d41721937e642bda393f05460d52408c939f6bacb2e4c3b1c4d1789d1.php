<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_1e0a15aacc3fcb93221b3bc063c547fdce29758d606ac09f187f4aa0b0d66502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_f1fe36654782eb1a411028f314bdd96e3439ffb8a9ee1758f9cca68ce851581b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fe36654782eb1a411028f314bdd96e3439ffb8a9ee1758f9cca68ce851581b->enter($__internal_f1fe36654782eb1a411028f314bdd96e3439ffb8a9ee1758f9cca68ce851581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_2fbc38be349069ec8306aabdbca5e293d94eedc151288dc2ae2f3419d8326423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbc38be349069ec8306aabdbca5e293d94eedc151288dc2ae2f3419d8326423->enter($__internal_2fbc38be349069ec8306aabdbca5e293d94eedc151288dc2ae2f3419d8326423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fe36654782eb1a411028f314bdd96e3439ffb8a9ee1758f9cca68ce851581b->leave($__internal_f1fe36654782eb1a411028f314bdd96e3439ffb8a9ee1758f9cca68ce851581b_prof);

        
        $__internal_2fbc38be349069ec8306aabdbca5e293d94eedc151288dc2ae2f3419d8326423->leave($__internal_2fbc38be349069ec8306aabdbca5e293d94eedc151288dc2ae2f3419d8326423_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4fa04cbd9bcb495009c40f4bf39b012cfd6238bde92b2b0427bf43fcf8c9862c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa04cbd9bcb495009c40f4bf39b012cfd6238bde92b2b0427bf43fcf8c9862c->enter($__internal_4fa04cbd9bcb495009c40f4bf39b012cfd6238bde92b2b0427bf43fcf8c9862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_76e04a75814fd223c19ca8fa66148912185f5755829066101b2bfeef9952db1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e04a75814fd223c19ca8fa66148912185f5755829066101b2bfeef9952db1a->enter($__internal_76e04a75814fd223c19ca8fa66148912185f5755829066101b2bfeef9952db1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_76e04a75814fd223c19ca8fa66148912185f5755829066101b2bfeef9952db1a->leave($__internal_76e04a75814fd223c19ca8fa66148912185f5755829066101b2bfeef9952db1a_prof);

        
        $__internal_4fa04cbd9bcb495009c40f4bf39b012cfd6238bde92b2b0427bf43fcf8c9862c->leave($__internal_4fa04cbd9bcb495009c40f4bf39b012cfd6238bde92b2b0427bf43fcf8c9862c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
