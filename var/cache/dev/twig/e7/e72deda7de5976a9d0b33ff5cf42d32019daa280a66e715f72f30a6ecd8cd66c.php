<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_37738254cf98da3b92ed8f6d4299af9de04fad794eb7d507b6223ce130fca2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_130778f5150aad0a834f98a8e1b388a18b00db6145946a472c72d89e15801258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130778f5150aad0a834f98a8e1b388a18b00db6145946a472c72d89e15801258->enter($__internal_130778f5150aad0a834f98a8e1b388a18b00db6145946a472c72d89e15801258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_bc1d0a79750e58de1f149e995661e60d63d1796dc785b982f1cd75b7c8249ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d0a79750e58de1f149e995661e60d63d1796dc785b982f1cd75b7c8249ede->enter($__internal_bc1d0a79750e58de1f149e995661e60d63d1796dc785b982f1cd75b7c8249ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_130778f5150aad0a834f98a8e1b388a18b00db6145946a472c72d89e15801258->leave($__internal_130778f5150aad0a834f98a8e1b388a18b00db6145946a472c72d89e15801258_prof);

        
        $__internal_bc1d0a79750e58de1f149e995661e60d63d1796dc785b982f1cd75b7c8249ede->leave($__internal_bc1d0a79750e58de1f149e995661e60d63d1796dc785b982f1cd75b7c8249ede_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bfa2568d4ea718f4cd0665d317c264faf5c51a88601aa8f6c0bfc10b05de5bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa2568d4ea718f4cd0665d317c264faf5c51a88601aa8f6c0bfc10b05de5bb1->enter($__internal_bfa2568d4ea718f4cd0665d317c264faf5c51a88601aa8f6c0bfc10b05de5bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_223e6b54e9205f567c7e812803b6d76f29fa553fbe248244742f8b0e656d95a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223e6b54e9205f567c7e812803b6d76f29fa553fbe248244742f8b0e656d95a3->enter($__internal_223e6b54e9205f567c7e812803b6d76f29fa553fbe248244742f8b0e656d95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_223e6b54e9205f567c7e812803b6d76f29fa553fbe248244742f8b0e656d95a3->leave($__internal_223e6b54e9205f567c7e812803b6d76f29fa553fbe248244742f8b0e656d95a3_prof);

        
        $__internal_bfa2568d4ea718f4cd0665d317c264faf5c51a88601aa8f6c0bfc10b05de5bb1->leave($__internal_bfa2568d4ea718f4cd0665d317c264faf5c51a88601aa8f6c0bfc10b05de5bb1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_acfad27bf8c223b597b9b832b0140aabc36a5f28cd782e2fe628e8160df1cb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfad27bf8c223b597b9b832b0140aabc36a5f28cd782e2fe628e8160df1cb35->enter($__internal_acfad27bf8c223b597b9b832b0140aabc36a5f28cd782e2fe628e8160df1cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_0acf3cb9861d1f08ace657c26c02eaa8bda55c32149c8fca2d8795384b6c07d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf3cb9861d1f08ace657c26c02eaa8bda55c32149c8fca2d8795384b6c07d3->enter($__internal_0acf3cb9861d1f08ace657c26c02eaa8bda55c32149c8fca2d8795384b6c07d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_0acf3cb9861d1f08ace657c26c02eaa8bda55c32149c8fca2d8795384b6c07d3->leave($__internal_0acf3cb9861d1f08ace657c26c02eaa8bda55c32149c8fca2d8795384b6c07d3_prof);

        
        $__internal_acfad27bf8c223b597b9b832b0140aabc36a5f28cd782e2fe628e8160df1cb35->leave($__internal_acfad27bf8c223b597b9b832b0140aabc36a5f28cd782e2fe628e8160df1cb35_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_7827521c16300ec49de30592836c9c3bc4e36ec620e42ea3b0fc24a9e82755a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7827521c16300ec49de30592836c9c3bc4e36ec620e42ea3b0fc24a9e82755a3->enter($__internal_7827521c16300ec49de30592836c9c3bc4e36ec620e42ea3b0fc24a9e82755a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a782a34af25e00247d37dde47c725efaefb836e0d360ac5e2fbb15cce0b0bb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a782a34af25e00247d37dde47c725efaefb836e0d360ac5e2fbb15cce0b0bb7b->enter($__internal_a782a34af25e00247d37dde47c725efaefb836e0d360ac5e2fbb15cce0b0bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_a782a34af25e00247d37dde47c725efaefb836e0d360ac5e2fbb15cce0b0bb7b->leave($__internal_a782a34af25e00247d37dde47c725efaefb836e0d360ac5e2fbb15cce0b0bb7b_prof);

        
        $__internal_7827521c16300ec49de30592836c9c3bc4e36ec620e42ea3b0fc24a9e82755a3->leave($__internal_7827521c16300ec49de30592836c9c3bc4e36ec620e42ea3b0fc24a9e82755a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
