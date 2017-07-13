<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_0f5aea4c3ca99a998db572591b758c2d7a0b203a562977792662f58fa968f6c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fe65be1eaaa8b3b8e7ab27d8c34548e64b85a540bf819c99b33409c57956542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe65be1eaaa8b3b8e7ab27d8c34548e64b85a540bf819c99b33409c57956542->enter($__internal_5fe65be1eaaa8b3b8e7ab27d8c34548e64b85a540bf819c99b33409c57956542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_f84d59ffcb01cf70d41e3bb780f2f7d53ed217932c63da144f8d86727dbb4096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84d59ffcb01cf70d41e3bb780f2f7d53ed217932c63da144f8d86727dbb4096->enter($__internal_f84d59ffcb01cf70d41e3bb780f2f7d53ed217932c63da144f8d86727dbb4096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fe65be1eaaa8b3b8e7ab27d8c34548e64b85a540bf819c99b33409c57956542->leave($__internal_5fe65be1eaaa8b3b8e7ab27d8c34548e64b85a540bf819c99b33409c57956542_prof);

        
        $__internal_f84d59ffcb01cf70d41e3bb780f2f7d53ed217932c63da144f8d86727dbb4096->leave($__internal_f84d59ffcb01cf70d41e3bb780f2f7d53ed217932c63da144f8d86727dbb4096_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b2e419b7a9cef158829c5217bee0d7ce911d6d390ead849b45b5bbcf7d74a69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e419b7a9cef158829c5217bee0d7ce911d6d390ead849b45b5bbcf7d74a69f->enter($__internal_b2e419b7a9cef158829c5217bee0d7ce911d6d390ead849b45b5bbcf7d74a69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_caf3fb2fa0916f0e321f91b6dd4afecd65bf22cd504c37e341b9cdf0da23faea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf3fb2fa0916f0e321f91b6dd4afecd65bf22cd504c37e341b9cdf0da23faea->enter($__internal_caf3fb2fa0916f0e321f91b6dd4afecd65bf22cd504c37e341b9cdf0da23faea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_caf3fb2fa0916f0e321f91b6dd4afecd65bf22cd504c37e341b9cdf0da23faea->leave($__internal_caf3fb2fa0916f0e321f91b6dd4afecd65bf22cd504c37e341b9cdf0da23faea_prof);

        
        $__internal_b2e419b7a9cef158829c5217bee0d7ce911d6d390ead849b45b5bbcf7d74a69f->leave($__internal_b2e419b7a9cef158829c5217bee0d7ce911d6d390ead849b45b5bbcf7d74a69f_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_23cba150896e79dd4f875242a920bef8c4717e78ba505ea34c3ccb26036f0093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cba150896e79dd4f875242a920bef8c4717e78ba505ea34c3ccb26036f0093->enter($__internal_23cba150896e79dd4f875242a920bef8c4717e78ba505ea34c3ccb26036f0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_aebac25e0a18a5f3ddd8793d191595f720d12efe27278446fb5f8ec65db23afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebac25e0a18a5f3ddd8793d191595f720d12efe27278446fb5f8ec65db23afd->enter($__internal_aebac25e0a18a5f3ddd8793d191595f720d12efe27278446fb5f8ec65db23afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_aebac25e0a18a5f3ddd8793d191595f720d12efe27278446fb5f8ec65db23afd->leave($__internal_aebac25e0a18a5f3ddd8793d191595f720d12efe27278446fb5f8ec65db23afd_prof);

        
        $__internal_23cba150896e79dd4f875242a920bef8c4717e78ba505ea34c3ccb26036f0093->leave($__internal_23cba150896e79dd4f875242a920bef8c4717e78ba505ea34c3ccb26036f0093_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_d7a6f652eab160cb4f1ec4a4f445dce7a8e78ef09dbb506c5f579e5f531f189f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a6f652eab160cb4f1ec4a4f445dce7a8e78ef09dbb506c5f579e5f531f189f->enter($__internal_d7a6f652eab160cb4f1ec4a4f445dce7a8e78ef09dbb506c5f579e5f531f189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_94561587080f0b9f6d7fde13d69415e3badc65283a5b18e3d939f2c829e40551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94561587080f0b9f6d7fde13d69415e3badc65283a5b18e3d939f2c829e40551->enter($__internal_94561587080f0b9f6d7fde13d69415e3badc65283a5b18e3d939f2c829e40551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_94561587080f0b9f6d7fde13d69415e3badc65283a5b18e3d939f2c829e40551->leave($__internal_94561587080f0b9f6d7fde13d69415e3badc65283a5b18e3d939f2c829e40551_prof);

        
        $__internal_d7a6f652eab160cb4f1ec4a4f445dce7a8e78ef09dbb506c5f579e5f531f189f->leave($__internal_d7a6f652eab160cb4f1ec4a4f445dce7a8e78ef09dbb506c5f579e5f531f189f_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
