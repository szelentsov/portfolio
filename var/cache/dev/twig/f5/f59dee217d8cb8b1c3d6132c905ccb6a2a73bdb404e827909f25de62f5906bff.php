<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_16714b648d30c40db49a16ccd96ddf724c2c8c3ff0975616a9ab762e5643671a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd4f710ac6d3722520dbfcf09a3819f1fd0c10b0882d5cf7d1f9af21bd14eee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4f710ac6d3722520dbfcf09a3819f1fd0c10b0882d5cf7d1f9af21bd14eee5->enter($__internal_cd4f710ac6d3722520dbfcf09a3819f1fd0c10b0882d5cf7d1f9af21bd14eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig"));

        $__internal_c763821f18069e4c8c11b778c3cca8d77a68576066d81827e8d4cc56c2ff8075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763821f18069e4c8c11b778c3cca8d77a68576066d81827e8d4cc56c2ff8075->enter($__internal_c763821f18069e4c8c11b778c3cca8d77a68576066d81827e8d4cc56c2ff8075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig"));

        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "hasassociationadmin", array())) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array())), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()) == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array())) > 0)) {
                        // line 22
                        echo "                        ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 22)->display($context);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array())) > 0)) {
                    // line 25
                    echo "                    ";
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array());
                    // line 26
                    echo "                    ";
                    $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 26)->display($context);
                    // line 27
                    echo "
                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
                echo "
            ";
            }
            // line 32
            echo "
        </span>

        ";
            // line 35
            $context["display_create_button"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 36
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) &&             // line 37
($context["btn_add"] ?? $this->getContext($context, "btn_add"))) && ( !$this->getAttribute($this->getAttribute($this->getAttribute(            // line 39
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "limit", array(), "any", true, true) || (twig_length_filter($this->env, $this->getAttribute(            // line 40
($context["form"] ?? $this->getContext($context, "form")), "children", array())) < $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "limit", array()))));
            // line 42
            echo "
        ";
            // line 43
            if (($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 44
                echo "
            ";
                // line 45
                if (($context["display_create_button"] ?? $this->getContext($context, "display_create_button"))) {
                    // line 46
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 50
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 51
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 52
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 61
                echo "
            ";
                // line 63
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 64
                    echo "                ";
                    if (($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()) == "table")) {
                        // line 65
                        echo "                    ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 65)->display($context);
                        // line 66
                        echo "                ";
                    } else {
                        // line 67
                        echo "                    ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 67)->display($context);
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            ";
                }
                // line 70
                echo "
            ";
                // line 72
                echo "            ";
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 72)->display($context);
                // line 73
                echo "
        ";
            } else {
                // line 75
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 76
                if (($context["display_create_button"] ?? $this->getContext($context, "display_create_button"))) {
                    // line 77
                    echo "                    <a
                        href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 80
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 81
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 90
                echo "            </span>

            ";
                // line 92
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 92)->display($context);
                // line 93
                echo "
            ";
                // line 94
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 94)->display($context);
                // line 95
                echo "        ";
            }
            // line 96
            echo "    </div>
";
        }
        
        $__internal_cd4f710ac6d3722520dbfcf09a3819f1fd0c10b0882d5cf7d1f9af21bd14eee5->leave($__internal_cd4f710ac6d3722520dbfcf09a3819f1fd0c10b0882d5cf7d1f9af21bd14eee5_prof);

        
        $__internal_c763821f18069e4c8c11b778c3cca8d77a68576066d81827e8d4cc56c2ff8075->leave($__internal_c763821f18069e4c8c11b778c3cca8d77a68576066d81827e8d4cc56c2ff8075_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 96,  218 => 95,  216 => 94,  213 => 93,  211 => 92,  207 => 90,  201 => 87,  195 => 84,  190 => 82,  187 => 81,  185 => 80,  184 => 78,  181 => 77,  179 => 76,  174 => 75,  170 => 73,  167 => 72,  164 => 70,  161 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  146 => 64,  143 => 63,  140 => 61,  133 => 57,  127 => 54,  122 => 52,  119 => 51,  117 => 50,  116 => 48,  110 => 46,  108 => 45,  105 => 44,  103 => 43,  100 => 42,  98 => 40,  97 => 39,  96 => 37,  95 => 36,  94 => 35,  89 => 32,  83 => 30,  80 => 29,  76 => 27,  73 => 26,  70 => 25,  67 => 24,  64 => 23,  61 => 22,  58 => 21,  55 => 20,  53 => 19,  49 => 18,  45 => 17,  42 => 16,  32 => 13,  27 => 12,  25 => 11,);
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
{% if not sonata_admin.field_description.hasassociationadmin %}
    {% for element in value %}
        {{ element|render_relation_element(sonata_admin.field_description) }}
    {% endfor %}
{% else %}

    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig' %}
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    {% set associationAdmin = sonata_admin.field_description.associationadmin %}
                    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig' %}

                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% set display_create_button = sonata_admin.field_description.associationadmin.hasroute('create')
            and sonata_admin.field_description.associationadmin.isGranted('CREATE')
            and btn_add
            and (
                sonata_admin.field_description.options.limit is not defined or
                form.children|length < sonata_admin.field_description.options.limit
            ) %}

        {% if sonata_admin.edit == 'inline' %}

            {% if display_create_button %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                </span>
            {% endif %}

            {# add code for the sortable options #}
            {% if sonata_admin.field_description.options.sortable is defined %}
                {% if sonata_admin.inline == 'table' %}
                    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_table.html.twig' %}
                {% else %}
                    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig' %}
                {% endif %}
            {% endif %}

            {# include association code #}
            {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig' %}

        {% else %}
            <span id=\"field_actions_{{ id }}\" >
                {% if display_create_button %}
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig' %}

            {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}
        {% endif %}
    </div>
{% endif %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
