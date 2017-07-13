<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_e854fd6bb625f75588b2cfac12eae3a655d1c6a627854a1b4b156c157034ed71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c817148a283211e0cd5fd361d67da471e76922fb4175e5d84ac1df2ecf4a946c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c817148a283211e0cd5fd361d67da471e76922fb4175e5d84ac1df2ecf4a946c->enter($__internal_c817148a283211e0cd5fd361d67da471e76922fb4175e5d84ac1df2ecf4a946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_ab2beafd49397b2fb60d74b9d46c435491a43fd631a9739653445a239371800a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2beafd49397b2fb60d74b9d46c435491a43fd631a9739653445a239371800a->enter($__internal_ab2beafd49397b2fb60d74b9d46c435491a43fd631a9739653445a239371800a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_c817148a283211e0cd5fd361d67da471e76922fb4175e5d84ac1df2ecf4a946c->leave($__internal_c817148a283211e0cd5fd361d67da471e76922fb4175e5d84ac1df2ecf4a946c_prof);

        
        $__internal_ab2beafd49397b2fb60d74b9d46c435491a43fd631a9739653445a239371800a->leave($__internal_ab2beafd49397b2fb60d74b9d46c435491a43fd631a9739653445a239371800a_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_d405d776d19960baac28cc64450edc8ea3aa70cf93354025ed8a3ff1ff872434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d405d776d19960baac28cc64450edc8ea3aa70cf93354025ed8a3ff1ff872434->enter($__internal_d405d776d19960baac28cc64450edc8ea3aa70cf93354025ed8a3ff1ff872434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_e02c9efafeca167f06ff38f546b55fa515350e1fe6485b3ad83c4ed9d91f15c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02c9efafeca167f06ff38f546b55fa515350e1fe6485b3ad83c4ed9d91f15c0->enter($__internal_e02c9efafeca167f06ff38f546b55fa515350e1fe6485b3ad83c4ed9d91f15c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_e02c9efafeca167f06ff38f546b55fa515350e1fe6485b3ad83c4ed9d91f15c0->leave($__internal_e02c9efafeca167f06ff38f546b55fa515350e1fe6485b3ad83c4ed9d91f15c0_prof);

        
        $__internal_d405d776d19960baac28cc64450edc8ea3aa70cf93354025ed8a3ff1ff872434->leave($__internal_d405d776d19960baac28cc64450edc8ea3aa70cf93354025ed8a3ff1ff872434_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_8e07e847462558d5bbaa5dcfad04e3275a671fbeb8c5a2de1de3360cf8a13906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e07e847462558d5bbaa5dcfad04e3275a671fbeb8c5a2de1de3360cf8a13906->enter($__internal_8e07e847462558d5bbaa5dcfad04e3275a671fbeb8c5a2de1de3360cf8a13906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_50cafcd50223ea522e7a9c23add8e06d0966858cfcc8ff013227dd244c8c8034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cafcd50223ea522e7a9c23add8e06d0966858cfcc8ff013227dd244c8c8034->enter($__internal_50cafcd50223ea522e7a9c23add8e06d0966858cfcc8ff013227dd244c8c8034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_50cafcd50223ea522e7a9c23add8e06d0966858cfcc8ff013227dd244c8c8034->leave($__internal_50cafcd50223ea522e7a9c23add8e06d0966858cfcc8ff013227dd244c8c8034_prof);

        
        $__internal_8e07e847462558d5bbaa5dcfad04e3275a671fbeb8c5a2de1de3360cf8a13906->leave($__internal_8e07e847462558d5bbaa5dcfad04e3275a671fbeb8c5a2de1de3360cf8a13906_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_7d4e177d5f307eee33122348d6f7e78cfbd045f886d1d3871f31a7d3367b278a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4e177d5f307eee33122348d6f7e78cfbd045f886d1d3871f31a7d3367b278a->enter($__internal_7d4e177d5f307eee33122348d6f7e78cfbd045f886d1d3871f31a7d3367b278a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_a074cefa1fe4b5ff7f7603911a989fcd443a84d581d368dd4f1f5b29cf07589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a074cefa1fe4b5ff7f7603911a989fcd443a84d581d368dd4f1f5b29cf07589a->enter($__internal_a074cefa1fe4b5ff7f7603911a989fcd443a84d581d368dd4f1f5b29cf07589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_a074cefa1fe4b5ff7f7603911a989fcd443a84d581d368dd4f1f5b29cf07589a->leave($__internal_a074cefa1fe4b5ff7f7603911a989fcd443a84d581d368dd4f1f5b29cf07589a_prof);

        
        $__internal_7d4e177d5f307eee33122348d6f7e78cfbd045f886d1d3871f31a7d3367b278a->leave($__internal_7d4e177d5f307eee33122348d6f7e78cfbd045f886d1d3871f31a7d3367b278a_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_4060e9467413924b5cf66e5ef5e59081cdafdc236bca5e7b2eb75af86a24c794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4060e9467413924b5cf66e5ef5e59081cdafdc236bca5e7b2eb75af86a24c794->enter($__internal_4060e9467413924b5cf66e5ef5e59081cdafdc236bca5e7b2eb75af86a24c794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_5fc515f9f69a587032c250f08b9ad09b200c82ea53bbbe29f215c171cca313c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc515f9f69a587032c250f08b9ad09b200c82ea53bbbe29f215c171cca313c9->enter($__internal_5fc515f9f69a587032c250f08b9ad09b200c82ea53bbbe29f215c171cca313c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5fc515f9f69a587032c250f08b9ad09b200c82ea53bbbe29f215c171cca313c9->leave($__internal_5fc515f9f69a587032c250f08b9ad09b200c82ea53bbbe29f215c171cca313c9_prof);

        
        $__internal_4060e9467413924b5cf66e5ef5e59081cdafdc236bca5e7b2eb75af86a24c794->leave($__internal_4060e9467413924b5cf66e5ef5e59081cdafdc236bca5e7b2eb75af86a24c794_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
