<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_278cb4d12c91be51b6871a5147563b225dca6598f9a3a50c8cf139d801329230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddc50a4593910689fcd4f86fd75eac179207676e1006c6c439db06db07e96ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc50a4593910689fcd4f86fd75eac179207676e1006c6c439db06db07e96ee5->enter($__internal_ddc50a4593910689fcd4f86fd75eac179207676e1006c6c439db06db07e96ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_8d43beaca04499dbcf24f37b3f02bbc4b174eb5186a01e66fa33b9f815d14cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d43beaca04499dbcf24f37b3f02bbc4b174eb5186a01e66fa33b9f815d14cc7->enter($__internal_8d43beaca04499dbcf24f37b3f02bbc4b174eb5186a01e66fa33b9f815d14cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_ddc50a4593910689fcd4f86fd75eac179207676e1006c6c439db06db07e96ee5->leave($__internal_ddc50a4593910689fcd4f86fd75eac179207676e1006c6c439db06db07e96ee5_prof);

        
        $__internal_8d43beaca04499dbcf24f37b3f02bbc4b174eb5186a01e66fa33b9f815d14cc7->leave($__internal_8d43beaca04499dbcf24f37b3f02bbc4b174eb5186a01e66fa33b9f815d14cc7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e25fa5686befbfe22edb46ffb097fe28ce305f42d4071d0c4309422d99eeb54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25fa5686befbfe22edb46ffb097fe28ce305f42d4071d0c4309422d99eeb54a->enter($__internal_e25fa5686befbfe22edb46ffb097fe28ce305f42d4071d0c4309422d99eeb54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_17d1a90aaa5afecdbf77c973065579a812c7a508a2a7cb26f7542957ea7cfd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d1a90aaa5afecdbf77c973065579a812c7a508a2a7cb26f7542957ea7cfd4f->enter($__internal_17d1a90aaa5afecdbf77c973065579a812c7a508a2a7cb26f7542957ea7cfd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_17d1a90aaa5afecdbf77c973065579a812c7a508a2a7cb26f7542957ea7cfd4f->leave($__internal_17d1a90aaa5afecdbf77c973065579a812c7a508a2a7cb26f7542957ea7cfd4f_prof);

        
        $__internal_e25fa5686befbfe22edb46ffb097fe28ce305f42d4071d0c4309422d99eeb54a->leave($__internal_e25fa5686befbfe22edb46ffb097fe28ce305f42d4071d0c4309422d99eeb54a_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c23991dace0fa312b70b291ee10a317ad4d76f4c5d27364e699165f4fd932c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23991dace0fa312b70b291ee10a317ad4d76f4c5d27364e699165f4fd932c44->enter($__internal_c23991dace0fa312b70b291ee10a317ad4d76f4c5d27364e699165f4fd932c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_b4b701942d419bed149ad8184cd62e97b6e2c173cba5ebf17d084dae06650324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b701942d419bed149ad8184cd62e97b6e2c173cba5ebf17d084dae06650324->enter($__internal_b4b701942d419bed149ad8184cd62e97b6e2c173cba5ebf17d084dae06650324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_b4b701942d419bed149ad8184cd62e97b6e2c173cba5ebf17d084dae06650324->leave($__internal_b4b701942d419bed149ad8184cd62e97b6e2c173cba5ebf17d084dae06650324_prof);

        
        $__internal_c23991dace0fa312b70b291ee10a317ad4d76f4c5d27364e699165f4fd932c44->leave($__internal_c23991dace0fa312b70b291ee10a317ad4d76f4c5d27364e699165f4fd932c44_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_500dde183bcd3ede011d1c34856a3a8c3237ababee85d831ff83c01b39cb3a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500dde183bcd3ede011d1c34856a3a8c3237ababee85d831ff83c01b39cb3a39->enter($__internal_500dde183bcd3ede011d1c34856a3a8c3237ababee85d831ff83c01b39cb3a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_d8d71452dd11c49fa9eb97e72a4f3a61e461bebf493be2ac2111e2e0fd86346d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d71452dd11c49fa9eb97e72a4f3a61e461bebf493be2ac2111e2e0fd86346d->enter($__internal_d8d71452dd11c49fa9eb97e72a4f3a61e461bebf493be2ac2111e2e0fd86346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_d8d71452dd11c49fa9eb97e72a4f3a61e461bebf493be2ac2111e2e0fd86346d->leave($__internal_d8d71452dd11c49fa9eb97e72a4f3a61e461bebf493be2ac2111e2e0fd86346d_prof);

        
        $__internal_500dde183bcd3ede011d1c34856a3a8c3237ababee85d831ff83c01b39cb3a39->leave($__internal_500dde183bcd3ede011d1c34856a3a8c3237ababee85d831ff83c01b39cb3a39_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
