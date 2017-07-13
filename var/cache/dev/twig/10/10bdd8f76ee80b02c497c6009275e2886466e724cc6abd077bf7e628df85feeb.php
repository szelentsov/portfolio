<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_2f9fb6c759a16e625a156bbc325d3f7c92dacb52c5aa25abd84bea95fbf9fbba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f37c71e9fa11889af42626adac9ea263efd1a54724d2b6ed440ad2085cca76a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37c71e9fa11889af42626adac9ea263efd1a54724d2b6ed440ad2085cca76a5->enter($__internal_f37c71e9fa11889af42626adac9ea263efd1a54724d2b6ed440ad2085cca76a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_f733fd26cab685e65ee35798858ed167db88418d4c04e077896b25e178fa5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f733fd26cab685e65ee35798858ed167db88418d4c04e077896b25e178fa5e62->enter($__internal_f733fd26cab685e65ee35798858ed167db88418d4c04e077896b25e178fa5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f37c71e9fa11889af42626adac9ea263efd1a54724d2b6ed440ad2085cca76a5->leave($__internal_f37c71e9fa11889af42626adac9ea263efd1a54724d2b6ed440ad2085cca76a5_prof);

        
        $__internal_f733fd26cab685e65ee35798858ed167db88418d4c04e077896b25e178fa5e62->leave($__internal_f733fd26cab685e65ee35798858ed167db88418d4c04e077896b25e178fa5e62_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_27d1a7d18c600194f08c333ca885920b0184b2815684207deede9136a9b5f77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d1a7d18c600194f08c333ca885920b0184b2815684207deede9136a9b5f77b->enter($__internal_27d1a7d18c600194f08c333ca885920b0184b2815684207deede9136a9b5f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_363d21f63fc917c5fc0f3572b8307337c602698bf5aa6f8b5efdc76321ca090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363d21f63fc917c5fc0f3572b8307337c602698bf5aa6f8b5efdc76321ca090e->enter($__internal_363d21f63fc917c5fc0f3572b8307337c602698bf5aa6f8b5efdc76321ca090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_363d21f63fc917c5fc0f3572b8307337c602698bf5aa6f8b5efdc76321ca090e->leave($__internal_363d21f63fc917c5fc0f3572b8307337c602698bf5aa6f8b5efdc76321ca090e_prof);

        
        $__internal_27d1a7d18c600194f08c333ca885920b0184b2815684207deede9136a9b5f77b->leave($__internal_27d1a7d18c600194f08c333ca885920b0184b2815684207deede9136a9b5f77b_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_61f148bcc1e4f854654c6617adc8c4ef46ae8dfc64fee2688321781bfa1533c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f148bcc1e4f854654c6617adc8c4ef46ae8dfc64fee2688321781bfa1533c4->enter($__internal_61f148bcc1e4f854654c6617adc8c4ef46ae8dfc64fee2688321781bfa1533c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_7b46bedaa7f4802aef2e70115babd170f2c7c52494f4eead1691e01263a0a47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b46bedaa7f4802aef2e70115babd170f2c7c52494f4eead1691e01263a0a47f->enter($__internal_7b46bedaa7f4802aef2e70115babd170f2c7c52494f4eead1691e01263a0a47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_7b46bedaa7f4802aef2e70115babd170f2c7c52494f4eead1691e01263a0a47f->leave($__internal_7b46bedaa7f4802aef2e70115babd170f2c7c52494f4eead1691e01263a0a47f_prof);

        
        $__internal_61f148bcc1e4f854654c6617adc8c4ef46ae8dfc64fee2688321781bfa1533c4->leave($__internal_61f148bcc1e4f854654c6617adc8c4ef46ae8dfc64fee2688321781bfa1533c4_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_3c03ec791e781bd12e96fc42a1b760883d3dfb6315bcdbe3e79193a7e2bd2e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c03ec791e781bd12e96fc42a1b760883d3dfb6315bcdbe3e79193a7e2bd2e05->enter($__internal_3c03ec791e781bd12e96fc42a1b760883d3dfb6315bcdbe3e79193a7e2bd2e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_aec21e68713d24c1ab084a4ce2d549ae5b6837bdd196f0861308692457e49ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec21e68713d24c1ab084a4ce2d549ae5b6837bdd196f0861308692457e49ccf->enter($__internal_aec21e68713d24c1ab084a4ce2d549ae5b6837bdd196f0861308692457e49ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_aec21e68713d24c1ab084a4ce2d549ae5b6837bdd196f0861308692457e49ccf->leave($__internal_aec21e68713d24c1ab084a4ce2d549ae5b6837bdd196f0861308692457e49ccf_prof);

        
        $__internal_3c03ec791e781bd12e96fc42a1b760883d3dfb6315bcdbe3e79193a7e2bd2e05->leave($__internal_3c03ec791e781bd12e96fc42a1b760883d3dfb6315bcdbe3e79193a7e2bd2e05_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_555a9364fdf35228226424a87f2dd012c7566389f72460db30dad235e3f69e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555a9364fdf35228226424a87f2dd012c7566389f72460db30dad235e3f69e51->enter($__internal_555a9364fdf35228226424a87f2dd012c7566389f72460db30dad235e3f69e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_9c6406fd99e9528dd54d82c5b70668adba37ae7a4bc74f67a087c7116f51cb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6406fd99e9528dd54d82c5b70668adba37ae7a4bc74f67a087c7116f51cb58->enter($__internal_9c6406fd99e9528dd54d82c5b70668adba37ae7a4bc74f67a087c7116f51cb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_9c6406fd99e9528dd54d82c5b70668adba37ae7a4bc74f67a087c7116f51cb58->leave($__internal_9c6406fd99e9528dd54d82c5b70668adba37ae7a4bc74f67a087c7116f51cb58_prof);

        
        $__internal_555a9364fdf35228226424a87f2dd012c7566389f72460db30dad235e3f69e51->leave($__internal_555a9364fdf35228226424a87f2dd012c7566389f72460db30dad235e3f69e51_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
