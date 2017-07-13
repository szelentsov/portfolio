<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_a79e54d86732bcf8e26d3a899bb504182add9cceed861ec3bd1441ccc77c70c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c98b8a9b3530dcdd3ceb81de748700ed62625ca5f1ed26a14fa45a8e311535e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c98b8a9b3530dcdd3ceb81de748700ed62625ca5f1ed26a14fa45a8e311535e->enter($__internal_0c98b8a9b3530dcdd3ceb81de748700ed62625ca5f1ed26a14fa45a8e311535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_5f4d8e1b846d7c47d50cc398b6fa4c6ecdcf3cea72659ab16e7b74792dec4f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4d8e1b846d7c47d50cc398b6fa4c6ecdcf3cea72659ab16e7b74792dec4f29->enter($__internal_5f4d8e1b846d7c47d50cc398b6fa4c6ecdcf3cea72659ab16e7b74792dec4f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c98b8a9b3530dcdd3ceb81de748700ed62625ca5f1ed26a14fa45a8e311535e->leave($__internal_0c98b8a9b3530dcdd3ceb81de748700ed62625ca5f1ed26a14fa45a8e311535e_prof);

        
        $__internal_5f4d8e1b846d7c47d50cc398b6fa4c6ecdcf3cea72659ab16e7b74792dec4f29->leave($__internal_5f4d8e1b846d7c47d50cc398b6fa4c6ecdcf3cea72659ab16e7b74792dec4f29_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_29c205f823594e9ae049d03c429e3519ae3a20c4c3338a4b539d3e3f14ae2f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c205f823594e9ae049d03c429e3519ae3a20c4c3338a4b539d3e3f14ae2f43->enter($__internal_29c205f823594e9ae049d03c429e3519ae3a20c4c3338a4b539d3e3f14ae2f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c518a5e19d9bb2a6c6e41c6f41d8bb2c47e855f0367ba0a59355d8cfde9fe5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c518a5e19d9bb2a6c6e41c6f41d8bb2c47e855f0367ba0a59355d8cfde9fe5af->enter($__internal_c518a5e19d9bb2a6c6e41c6f41d8bb2c47e855f0367ba0a59355d8cfde9fe5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_c518a5e19d9bb2a6c6e41c6f41d8bb2c47e855f0367ba0a59355d8cfde9fe5af->leave($__internal_c518a5e19d9bb2a6c6e41c6f41d8bb2c47e855f0367ba0a59355d8cfde9fe5af_prof);

        
        $__internal_29c205f823594e9ae049d03c429e3519ae3a20c4c3338a4b539d3e3f14ae2f43->leave($__internal_29c205f823594e9ae049d03c429e3519ae3a20c4c3338a4b539d3e3f14ae2f43_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_747b9eb86d94d6aebc22e84a7e2db87b48c87471f352940b1da574abeda8aa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747b9eb86d94d6aebc22e84a7e2db87b48c87471f352940b1da574abeda8aa77->enter($__internal_747b9eb86d94d6aebc22e84a7e2db87b48c87471f352940b1da574abeda8aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9d3c369a83d155b3a3c056df3e6523c1a81e26e48790cbc150b3d00d0b13b577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3c369a83d155b3a3c056df3e6523c1a81e26e48790cbc150b3d00d0b13b577->enter($__internal_9d3c369a83d155b3a3c056df3e6523c1a81e26e48790cbc150b3d00d0b13b577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_9d3c369a83d155b3a3c056df3e6523c1a81e26e48790cbc150b3d00d0b13b577->leave($__internal_9d3c369a83d155b3a3c056df3e6523c1a81e26e48790cbc150b3d00d0b13b577_prof);

        
        $__internal_747b9eb86d94d6aebc22e84a7e2db87b48c87471f352940b1da574abeda8aa77->leave($__internal_747b9eb86d94d6aebc22e84a7e2db87b48c87471f352940b1da574abeda8aa77_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_8da138f3c192ebd7849cff0dd790d68eaff9c47e322b10a1e02a9dba0a810313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da138f3c192ebd7849cff0dd790d68eaff9c47e322b10a1e02a9dba0a810313->enter($__internal_8da138f3c192ebd7849cff0dd790d68eaff9c47e322b10a1e02a9dba0a810313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8f21ef6c0cebae690170edb5c2ec7de92eec1f6ee48a13eda4f8a44205f68fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f21ef6c0cebae690170edb5c2ec7de92eec1f6ee48a13eda4f8a44205f68fe0->enter($__internal_8f21ef6c0cebae690170edb5c2ec7de92eec1f6ee48a13eda4f8a44205f68fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !(($context["query"] ?? $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if (($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
($context["query"] ?? $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_8f21ef6c0cebae690170edb5c2ec7de92eec1f6ee48a13eda4f8a44205f68fe0->leave($__internal_8f21ef6c0cebae690170edb5c2ec7de92eec1f6ee48a13eda4f8a44205f68fe0_prof);

        
        $__internal_8da138f3c192ebd7849cff0dd790d68eaff9c47e322b10a1e02a9dba0a810313->leave($__internal_8da138f3c192ebd7849cff0dd790d68eaff9c47e322b10a1e02a9dba0a810313_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
