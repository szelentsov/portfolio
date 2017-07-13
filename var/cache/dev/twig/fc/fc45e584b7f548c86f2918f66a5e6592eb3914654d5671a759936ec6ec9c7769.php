<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_1b6b843d890c2bff0ba0f18c32b5eead1fcbcb097218ac678ff7e48c785a105d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2760cb5baa33572713dd49090c676f977afbf92369eb0e6012cc6943274c6e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2760cb5baa33572713dd49090c676f977afbf92369eb0e6012cc6943274c6e1d->enter($__internal_2760cb5baa33572713dd49090c676f977afbf92369eb0e6012cc6943274c6e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_e7370e6235426896a289c36b24896f4f48d0d8c415ce556dd58b8b23894f480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7370e6235426896a289c36b24896f4f48d0d8c415ce556dd58b8b23894f480d->enter($__internal_e7370e6235426896a289c36b24896f4f48d0d8c415ce556dd58b8b23894f480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2760cb5baa33572713dd49090c676f977afbf92369eb0e6012cc6943274c6e1d->leave($__internal_2760cb5baa33572713dd49090c676f977afbf92369eb0e6012cc6943274c6e1d_prof);

        
        $__internal_e7370e6235426896a289c36b24896f4f48d0d8c415ce556dd58b8b23894f480d->leave($__internal_e7370e6235426896a289c36b24896f4f48d0d8c415ce556dd58b8b23894f480d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef09713577f59752e1e5b1fc25768c5f8d582a5f83b0af7f2a6c8665ff5e5f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef09713577f59752e1e5b1fc25768c5f8d582a5f83b0af7f2a6c8665ff5e5f7f->enter($__internal_ef09713577f59752e1e5b1fc25768c5f8d582a5f83b0af7f2a6c8665ff5e5f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f46bfeb60dc196e07ee52d1450416bd77e07bbd58817b3f90a651296ec9ecb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46bfeb60dc196e07ee52d1450416bd77e07bbd58817b3f90a651296ec9ecb71->enter($__internal_f46bfeb60dc196e07ee52d1450416bd77e07bbd58817b3f90a651296ec9ecb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f46bfeb60dc196e07ee52d1450416bd77e07bbd58817b3f90a651296ec9ecb71->leave($__internal_f46bfeb60dc196e07ee52d1450416bd77e07bbd58817b3f90a651296ec9ecb71_prof);

        
        $__internal_ef09713577f59752e1e5b1fc25768c5f8d582a5f83b0af7f2a6c8665ff5e5f7f->leave($__internal_ef09713577f59752e1e5b1fc25768c5f8d582a5f83b0af7f2a6c8665ff5e5f7f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
