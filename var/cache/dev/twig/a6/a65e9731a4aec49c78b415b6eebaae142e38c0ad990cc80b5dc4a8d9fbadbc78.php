<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_9cc9031114734f28423f23f02e3efc977c5fc08bcf5b1494afc8249e7c7d05d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14fd5fb1158a5a2177669f1ebc8162e5552d032246204640d7c280ecc14c3ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fd5fb1158a5a2177669f1ebc8162e5552d032246204640d7c280ecc14c3ae3->enter($__internal_14fd5fb1158a5a2177669f1ebc8162e5552d032246204640d7c280ecc14c3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_b7c1d0ac9a3b09694fcfb10312143d9e384728408150caa3c1f87b1547bebcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c1d0ac9a3b09694fcfb10312143d9e384728408150caa3c1f87b1547bebcc8->enter($__internal_b7c1d0ac9a3b09694fcfb10312143d9e384728408150caa3c1f87b1547bebcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_14fd5fb1158a5a2177669f1ebc8162e5552d032246204640d7c280ecc14c3ae3->leave($__internal_14fd5fb1158a5a2177669f1ebc8162e5552d032246204640d7c280ecc14c3ae3_prof);

        
        $__internal_b7c1d0ac9a3b09694fcfb10312143d9e384728408150caa3c1f87b1547bebcc8->leave($__internal_b7c1d0ac9a3b09694fcfb10312143d9e384728408150caa3c1f87b1547bebcc8_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_c48dcf9af4dca4feac03d87f23d83d4b6abd96b324b738d90f9496d7c4202db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48dcf9af4dca4feac03d87f23d83d4b6abd96b324b738d90f9496d7c4202db7->enter($__internal_c48dcf9af4dca4feac03d87f23d83d4b6abd96b324b738d90f9496d7c4202db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_efd88863f18c386132f304fe45e2e59a502a207c7c64f7329d1f591a633b8b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd88863f18c386132f304fe45e2e59a502a207c7c64f7329d1f591a633b8b63->enter($__internal_efd88863f18c386132f304fe45e2e59a502a207c7c64f7329d1f591a633b8b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ((($context["inline"] ?? $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_efd88863f18c386132f304fe45e2e59a502a207c7c64f7329d1f591a633b8b63->leave($__internal_efd88863f18c386132f304fe45e2e59a502a207c7c64f7329d1f591a633b8b63_prof);

        
        $__internal_c48dcf9af4dca4feac03d87f23d83d4b6abd96b324b738d90f9496d7c4202db7->leave($__internal_c48dcf9af4dca4feac03d87f23d83d4b6abd96b324b738d90f9496d7c4202db7_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_2e4319c1b5abb52766f395898113fd2241580101ae6b103b462f6c936026ced2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4319c1b5abb52766f395898113fd2241580101ae6b103b462f6c936026ced2->enter($__internal_2e4319c1b5abb52766f395898113fd2241580101ae6b103b462f6c936026ced2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8693e4fd2314d11c92be4a412c95a082a187aacca848e5e74e0c6235c322ba97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693e4fd2314d11c92be4a412c95a082a187aacca848e5e74e0c6235c322ba97->enter($__internal_8693e4fd2314d11c92be4a412c95a082a187aacca848e5e74e0c6235c322ba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_8693e4fd2314d11c92be4a412c95a082a187aacca848e5e74e0c6235c322ba97->leave($__internal_8693e4fd2314d11c92be4a412c95a082a187aacca848e5e74e0c6235c322ba97_prof);

        
        $__internal_2e4319c1b5abb52766f395898113fd2241580101ae6b103b462f6c936026ced2->leave($__internal_2e4319c1b5abb52766f395898113fd2241580101ae6b103b462f6c936026ced2_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_66ab78e7f42c4bca19626a54206bb53809ca328351040da21a5890439dcf2775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ab78e7f42c4bca19626a54206bb53809ca328351040da21a5890439dcf2775->enter($__internal_66ab78e7f42c4bca19626a54206bb53809ca328351040da21a5890439dcf2775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_3b70b122ba09e3a90da212eef0c2f2e8ffc42d721f03a11b759de789c9e474ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b70b122ba09e3a90da212eef0c2f2e8ffc42d721f03a11b759de789c9e474ca->enter($__internal_3b70b122ba09e3a90da212eef0c2f2e8ffc42d721f03a11b759de789c9e474ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3b70b122ba09e3a90da212eef0c2f2e8ffc42d721f03a11b759de789c9e474ca->leave($__internal_3b70b122ba09e3a90da212eef0c2f2e8ffc42d721f03a11b759de789c9e474ca_prof);

        
        $__internal_66ab78e7f42c4bca19626a54206bb53809ca328351040da21a5890439dcf2775->leave($__internal_66ab78e7f42c4bca19626a54206bb53809ca328351040da21a5890439dcf2775_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
