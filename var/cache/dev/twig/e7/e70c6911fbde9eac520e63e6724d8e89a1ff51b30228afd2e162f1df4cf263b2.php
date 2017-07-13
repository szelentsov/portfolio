<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_eb28fb25c96d4b51708ebf4d7e014461568d75723fb9f1ae6bb8d5806378b871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f3a528951ef54342f48a5e85fa8e4cfb5f2276e2fe141088e8f0018f1bc8b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3a528951ef54342f48a5e85fa8e4cfb5f2276e2fe141088e8f0018f1bc8b1d->enter($__internal_8f3a528951ef54342f48a5e85fa8e4cfb5f2276e2fe141088e8f0018f1bc8b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_c55d4efec7e258a0f8f5a062fb488a68accaba1bd4c70b907af6844b4bc23223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55d4efec7e258a0f8f5a062fb488a68accaba1bd4c70b907af6844b4bc23223->enter($__internal_c55d4efec7e258a0f8f5a062fb488a68accaba1bd4c70b907af6844b4bc23223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3a528951ef54342f48a5e85fa8e4cfb5f2276e2fe141088e8f0018f1bc8b1d->leave($__internal_8f3a528951ef54342f48a5e85fa8e4cfb5f2276e2fe141088e8f0018f1bc8b1d_prof);

        
        $__internal_c55d4efec7e258a0f8f5a062fb488a68accaba1bd4c70b907af6844b4bc23223->leave($__internal_c55d4efec7e258a0f8f5a062fb488a68accaba1bd4c70b907af6844b4bc23223_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_ce56368df1903cf9949a18ba5c8042f047041613657fdd535b99ca1a5ee1efe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce56368df1903cf9949a18ba5c8042f047041613657fdd535b99ca1a5ee1efe9->enter($__internal_ce56368df1903cf9949a18ba5c8042f047041613657fdd535b99ca1a5ee1efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d6377422ccc171fa8a42fb71fac41f46b9d8f526ea9978113c7d6b76d2002f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6377422ccc171fa8a42fb71fac41f46b9d8f526ea9978113c7d6b76d2002f50->enter($__internal_d6377422ccc171fa8a42fb71fac41f46b9d8f526ea9978113c7d6b76d2002f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_d6377422ccc171fa8a42fb71fac41f46b9d8f526ea9978113c7d6b76d2002f50->leave($__internal_d6377422ccc171fa8a42fb71fac41f46b9d8f526ea9978113c7d6b76d2002f50_prof);

        
        $__internal_ce56368df1903cf9949a18ba5c8042f047041613657fdd535b99ca1a5ee1efe9->leave($__internal_ce56368df1903cf9949a18ba5c8042f047041613657fdd535b99ca1a5ee1efe9_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/home/sergey/portfolio_new/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
