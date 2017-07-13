<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_222e5d83b10e65c30cbbab7283119f1b0ad0f3c98c357ab4c35053c202b8c76e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_47bd0dd1c9147acc385466b1263b97b0848ccf91f66c30e580d43ae37ef35278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bd0dd1c9147acc385466b1263b97b0848ccf91f66c30e580d43ae37ef35278->enter($__internal_47bd0dd1c9147acc385466b1263b97b0848ccf91f66c30e580d43ae37ef35278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_503674226ccd59727e9b0e9b186b57df0a987b19fed5f50306a6dbb79a493424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503674226ccd59727e9b0e9b186b57df0a987b19fed5f50306a6dbb79a493424->enter($__internal_503674226ccd59727e9b0e9b186b57df0a987b19fed5f50306a6dbb79a493424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47bd0dd1c9147acc385466b1263b97b0848ccf91f66c30e580d43ae37ef35278->leave($__internal_47bd0dd1c9147acc385466b1263b97b0848ccf91f66c30e580d43ae37ef35278_prof);

        
        $__internal_503674226ccd59727e9b0e9b186b57df0a987b19fed5f50306a6dbb79a493424->leave($__internal_503674226ccd59727e9b0e9b186b57df0a987b19fed5f50306a6dbb79a493424_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_73b45bc9f00b8432c814045fd907635ae99c8a9592caf15cbede15023aa22e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b45bc9f00b8432c814045fd907635ae99c8a9592caf15cbede15023aa22e95->enter($__internal_73b45bc9f00b8432c814045fd907635ae99c8a9592caf15cbede15023aa22e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4eca51201c9a5d305565d10254453ddeb8bf0c5a5cf588d0755706e4546de702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca51201c9a5d305565d10254453ddeb8bf0c5a5cf588d0755706e4546de702->enter($__internal_4eca51201c9a5d305565d10254453ddeb8bf0c5a5cf588d0755706e4546de702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4eca51201c9a5d305565d10254453ddeb8bf0c5a5cf588d0755706e4546de702->leave($__internal_4eca51201c9a5d305565d10254453ddeb8bf0c5a5cf588d0755706e4546de702_prof);

        
        $__internal_73b45bc9f00b8432c814045fd907635ae99c8a9592caf15cbede15023aa22e95->leave($__internal_73b45bc9f00b8432c814045fd907635ae99c8a9592caf15cbede15023aa22e95_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
