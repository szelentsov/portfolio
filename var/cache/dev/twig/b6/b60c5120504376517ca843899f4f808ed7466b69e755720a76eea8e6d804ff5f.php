<?php

/* SonataAdminBundle:CRUD:tree.html.twig */
class __TwigTemplate_bc64fedb90a9a36bbd673a734bf073f4578f7adf75ef6461d3ed57b4dbb07f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:tree.html.twig", 16);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1c2249076b40f4c406b2a3244f7afc8ba537c1555d77f4c5571b4ba2d5bed15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c2249076b40f4c406b2a3244f7afc8ba537c1555d77f4c5571b4ba2d5bed15->enter($__internal_c1c2249076b40f4c406b2a3244f7afc8ba537c1555d77f4c5571b4ba2d5bed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:tree.html.twig"));

        $__internal_03d0d0d11a929f818fe7c875f4dffecfdaf3f1102d883f1751188a901ba8b055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d0d0d11a929f818fe7c875f4dffecfdaf3f1102d883f1751188a901ba8b055->enter($__internal_03d0d0d11a929f818fe7c875f4dffecfdaf3f1102d883f1751188a901ba8b055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:tree.html.twig"));

        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c2249076b40f4c406b2a3244f7afc8ba537c1555d77f4c5571b4ba2d5bed15->leave($__internal_c1c2249076b40f4c406b2a3244f7afc8ba537c1555d77f4c5571b4ba2d5bed15_prof);

        
        $__internal_03d0d0d11a929f818fe7c875f4dffecfdaf3f1102d883f1751188a901ba8b055->leave($__internal_03d0d0d11a929f818fe7c875f4dffecfdaf3f1102d883f1751188a901ba8b055_prof);

    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3484e7fa1bb219bc2880c3ef78872f1b3be79ab645edbac83b2b60eaabf5adf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3484e7fa1bb219bc2880c3ef78872f1b3be79ab645edbac83b2b60eaabf5adf8->enter($__internal_3484e7fa1bb219bc2880c3ef78872f1b3be79ab645edbac83b2b60eaabf5adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4145537cc128502b22ff2c04b4204098c7474ba5d795e1d92ea0b2d83cf767b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4145537cc128502b22ff2c04b4204098c7474ba5d795e1d92ea0b2d83cf767b6->enter($__internal_4145537cc128502b22ff2c04b4204098c7474ba5d795e1d92ea0b2d83cf767b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 41
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:list_tab_menu.html.twig", "SonataAdminBundle:CRUD:tree.html.twig", 41)->display(array("mode" => "tree", "action" =>         // line 43
($context["action"] ?? $this->getContext($context, "action")), "admin" =>         // line 44
($context["admin"] ?? $this->getContext($context, "admin"))));
        
        $__internal_4145537cc128502b22ff2c04b4204098c7474ba5d795e1d92ea0b2d83cf767b6->leave($__internal_4145537cc128502b22ff2c04b4204098c7474ba5d795e1d92ea0b2d83cf767b6_prof);

        
        $__internal_3484e7fa1bb219bc2880c3ef78872f1b3be79ab645edbac83b2b60eaabf5adf8->leave($__internal_3484e7fa1bb219bc2880c3ef78872f1b3be79ab645edbac83b2b60eaabf5adf8_prof);

    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_bc4ab725a56a0c858837a4452e00da44d621c9818921e19c0b9b5072aec0ded8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4ab725a56a0c858837a4452e00da44d621c9818921e19c0b9b5072aec0ded8->enter($__internal_bc4ab725a56a0c858837a4452e00da44d621c9818921e19c0b9b5072aec0ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_439dec7260e8474477d7f0bb566f499a61dbe8000a5b51cbea31cc1e715fccdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439dec7260e8474477d7f0bb566f499a61dbe8000a5b51cbea31cc1e715fccdc->enter($__internal_439dec7260e8474477d7f0bb566f499a61dbe8000a5b51cbea31cc1e715fccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("element.tree_site_label", array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentSite"] ?? $this->getContext($context, "currentSite")), "name", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contexts"] ?? $this->getContext($context, "contexts")));
        foreach ($context['_seq'] as $context["_key"] => $context["context"]) {
            // line 60
            echo "                                <li>
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "tree", 1 => array("context" => $this->getAttribute($context["context"], "id", array()))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 62
            if ((($context["currentContext"] ?? $this->getContext($context, "currentContext")) && ($this->getAttribute($context["context"], "id", array()) == $this->getAttribute(($context["currentContext"] ?? $this->getContext($context, "currentContext")), "id", array())))) {
                // line 63
                echo "                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            </span>
                                        ";
            }
            // line 67
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "name", array()), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 76
        echo $context["tree"]->getnavigate_child(($context["collection"] ?? $this->getContext($context, "collection")), ($context["admin"] ?? $this->getContext($context, "admin")), true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_439dec7260e8474477d7f0bb566f499a61dbe8000a5b51cbea31cc1e715fccdc->leave($__internal_439dec7260e8474477d7f0bb566f499a61dbe8000a5b51cbea31cc1e715fccdc_prof);

        
        $__internal_bc4ab725a56a0c858837a4452e00da44d621c9818921e19c0b9b5072aec0ded8->leave($__internal_bc4ab725a56a0c858837a4452e00da44d621c9818921e19c0b9b5072aec0ded8_prof);

    }

    // line 19
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d9b704220e70d26c1df7a0371c7957e703a377691ccac8c7fb724c5dc57a1a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d9b704220e70d26c1df7a0371c7957e703a377691ccac8c7fb724c5dc57a1a3c->enter($__internal_d9b704220e70d26c1df7a0371c7957e703a377691ccac8c7fb724c5dc57a1a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            $__internal_2d40c06a36ab57df8b00a3b8417281907df9dab18ea818c2dce24a9d2403c315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2d40c06a36ab57df8b00a3b8417281907df9dab18ea818c2dce24a9d2403c315->enter($__internal_2d40c06a36ab57df8b00a3b8417281907df9dab18ea818c2dce24a9d2403c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 20
            echo "    <ul";
            if (($context["root"] ?? $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !($context["root"] ?? $this->getContext($context, "root"))) {
                    // line 22
                    echo "            <li>
                <div class=\"sonata-tree__item\">
                    ";
                    // line 24
                    if ($this->getAttribute($context["element"], "parent", array())) {
                        echo "<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>";
                    }
                    // line 25
                    echo "                    <i class=\"fa fa-code\" aria-hidden=\"true\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", array()), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">edit <i class=\"fa fa-magic\" aria-hidden=\"true\"></i></a>
                    ";
                    // line 29
                    if (true) {
                        echo "<span class=\"label label-warning pull-right\">true</span>";
                    }
                    // line 30
                    echo "                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => ($context["admin"] ?? $this->getContext($context, "admin")), 2 => false), "method");
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_2d40c06a36ab57df8b00a3b8417281907df9dab18ea818c2dce24a9d2403c315->leave($__internal_2d40c06a36ab57df8b00a3b8417281907df9dab18ea818c2dce24a9d2403c315_prof);

            
            $__internal_d9b704220e70d26c1df7a0371c7957e703a377691ccac8c7fb724c5dc57a1a3c->leave($__internal_d9b704220e70d26c1df7a0371c7957e703a377691ccac8c7fb724c5dc57a1a3c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 37,  218 => 35,  212 => 33,  210 => 32,  206 => 30,  202 => 29,  198 => 28,  194 => 27,  188 => 26,  185 => 25,  181 => 24,  177 => 22,  172 => 21,  165 => 20,  145 => 19,  130 => 76,  123 => 71,  112 => 67,  106 => 63,  104 => 62,  100 => 61,  97 => 60,  93 => 59,  87 => 56,  81 => 53,  75 => 49,  66 => 48,  56 => 44,  55 => 43,  53 => 41,  44 => 40,  34 => 16,  32 => 18,  11 => 16,);
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

{#
    This template is not used at all, it is just a template that you can use to create
    your own custom tree view.
#}
{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}

{% import _self as tree %}
{% macro navigate_child(collection, admin, root) %}
    <ul{% if root %} class=\"sonata-tree\"{% endif %}>
        {% for element in collection if not root %}
            <li>
                <div class=\"sonata-tree__item\">
                    {% if element.parent %}<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>{% endif %}
                    <i class=\"fa fa-code\" aria-hidden=\"true\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"{{ admin.generateObjectUrl('edit', element) }}\">{{ element.name }}</a>
                    <i class=\"text-muted\">{{ element.description }}</i>
                    <a class=\"label label-default pull-right\" href=\"{{ admin.generateObjectUrl('edit', element) }}\">edit <i class=\"fa fa-magic\" aria-hidden=\"true\"></i></a>
                    {% if true %}<span class=\"label label-warning pull-right\">true</span>{% endif %}
                </div>

                {% if element.children|length %}
                    {{ _self.navigate_child(element.children, admin, false) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block tab_menu %}
    {% include 'SonataAdminBundle:CRUD:list_tab_menu.html.twig' with {
        'mode':   'tree',
        'action': action,
        'admin':  admin,
    } only %}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    {{ 'element.tree_site_label'|trans({}, admin.translationdomain) }}
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">{{ currentSite.name }}</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {% for context in contexts %}
                                <li>
                                    <a href=\"{{ admin.generateUrl('tree', { 'context': context.id }) }}\">
                                        {% if currentContext and context.id == currentContext.id %}
                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            </span>
                                        {% endif %}
                                        {{ site.name }}
                                    </a>
                                </li>
                            {% endfor%}
                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                {{ tree.navigate_child(collection, admin, true) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:tree.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/tree.html.twig");
    }
}
