<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_3e68b5a1e70a478a42ca737caa8c11b1c426cb1a994a8a7d4a9ae01d88be7a22 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33e1d82b82f71d53e018f237aa78ded5d5b1eae2c4a9dce68d4819a0313d469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33e1d82b82f71d53e018f237aa78ded5d5b1eae2c4a9dce68d4819a0313d469->enter($__internal_f33e1d82b82f71d53e018f237aa78ded5d5b1eae2c4a9dce68d4819a0313d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_69e155a2d269257b38f5b021895a7074d0c8b5ce543610931d00598542c688ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e155a2d269257b38f5b021895a7074d0c8b5ce543610931d00598542c688ac->enter($__internal_69e155a2d269257b38f5b021895a7074d0c8b5ce543610931d00598542c688ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33e1d82b82f71d53e018f237aa78ded5d5b1eae2c4a9dce68d4819a0313d469->leave($__internal_f33e1d82b82f71d53e018f237aa78ded5d5b1eae2c4a9dce68d4819a0313d469_prof);

        
        $__internal_69e155a2d269257b38f5b021895a7074d0c8b5ce543610931d00598542c688ac->leave($__internal_69e155a2d269257b38f5b021895a7074d0c8b5ce543610931d00598542c688ac_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_db484f2b811c1994e9d478e671794402f80f5fbf1482acbce364d0add17528b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db484f2b811c1994e9d478e671794402f80f5fbf1482acbce364d0add17528b2->enter($__internal_db484f2b811c1994e9d478e671794402f80f5fbf1482acbce364d0add17528b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7bffcebeea94b41d5beb7155e6392e3ef601597865c4bdc2ca965bd7699b7d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bffcebeea94b41d5beb7155e6392e3ef601597865c4bdc2ca965bd7699b7d7c->enter($__internal_7bffcebeea94b41d5beb7155e6392e3ef601597865c4bdc2ca965bd7699b7d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_7bffcebeea94b41d5beb7155e6392e3ef601597865c4bdc2ca965bd7699b7d7c->leave($__internal_7bffcebeea94b41d5beb7155e6392e3ef601597865c4bdc2ca965bd7699b7d7c_prof);

        
        $__internal_db484f2b811c1994e9d478e671794402f80f5fbf1482acbce364d0add17528b2->leave($__internal_db484f2b811c1994e9d478e671794402f80f5fbf1482acbce364d0add17528b2_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_5622ab79b2c6840e0127cfa8a1cc81e8814aef72fa050440a50d04e07d87d9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5622ab79b2c6840e0127cfa8a1cc81e8814aef72fa050440a50d04e07d87d9c8->enter($__internal_5622ab79b2c6840e0127cfa8a1cc81e8814aef72fa050440a50d04e07d87d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_c44e371d448d2749ed932341e9f4753c41a5d283089a9fe1bf46da3598e16e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44e371d448d2749ed932341e9f4753c41a5d283089a9fe1bf46da3598e16e41->enter($__internal_c44e371d448d2749ed932341e9f4753c41a5d283089a9fe1bf46da3598e16e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_c44e371d448d2749ed932341e9f4753c41a5d283089a9fe1bf46da3598e16e41->leave($__internal_c44e371d448d2749ed932341e9f4753c41a5d283089a9fe1bf46da3598e16e41_prof);

        
        $__internal_5622ab79b2c6840e0127cfa8a1cc81e8814aef72fa050440a50d04e07d87d9c8->leave($__internal_5622ab79b2c6840e0127cfa8a1cc81e8814aef72fa050440a50d04e07d87d9c8_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_790c689735f210d8a0d5f108a19e8a77a861e7d6a13da66aa273e12d320969ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790c689735f210d8a0d5f108a19e8a77a861e7d6a13da66aa273e12d320969ab->enter($__internal_790c689735f210d8a0d5f108a19e8a77a861e7d6a13da66aa273e12d320969ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_4a05c66a3ddb197f61c093b2b42d993bd647b7ef8bcd81a65911cdb778467f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a05c66a3ddb197f61c093b2b42d993bd647b7ef8bcd81a65911cdb778467f82->enter($__internal_4a05c66a3ddb197f61c093b2b42d993bd647b7ef8bcd81a65911cdb778467f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_4a05c66a3ddb197f61c093b2b42d993bd647b7ef8bcd81a65911cdb778467f82->leave($__internal_4a05c66a3ddb197f61c093b2b42d993bd647b7ef8bcd81a65911cdb778467f82_prof);

        
        $__internal_790c689735f210d8a0d5f108a19e8a77a861e7d6a13da66aa273e12d320969ab->leave($__internal_790c689735f210d8a0d5f108a19e8a77a861e7d6a13da66aa273e12d320969ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
