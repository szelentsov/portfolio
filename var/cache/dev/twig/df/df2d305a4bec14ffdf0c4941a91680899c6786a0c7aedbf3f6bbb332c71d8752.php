<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_3a3ab36172274843e239798aa2e0e03ad4e613fbe958e7830078e022309c7b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ac5864ce018f2aa3e2fd27a3c9fa146db474bc12e61650f5858b3da5b4d2fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac5864ce018f2aa3e2fd27a3c9fa146db474bc12e61650f5858b3da5b4d2fa6->enter($__internal_1ac5864ce018f2aa3e2fd27a3c9fa146db474bc12e61650f5858b3da5b4d2fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_4a2cf414c7a7ef02f1f7a9ef2efe6d2ccc4cb553ae60dbae76b1a14f53f734f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2cf414c7a7ef02f1f7a9ef2efe6d2ccc4cb553ae60dbae76b1a14f53f734f7->enter($__internal_4a2cf414c7a7ef02f1f7a9ef2efe6d2ccc4cb553ae60dbae76b1a14f53f734f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac5864ce018f2aa3e2fd27a3c9fa146db474bc12e61650f5858b3da5b4d2fa6->leave($__internal_1ac5864ce018f2aa3e2fd27a3c9fa146db474bc12e61650f5858b3da5b4d2fa6_prof);

        
        $__internal_4a2cf414c7a7ef02f1f7a9ef2efe6d2ccc4cb553ae60dbae76b1a14f53f734f7->leave($__internal_4a2cf414c7a7ef02f1f7a9ef2efe6d2ccc4cb553ae60dbae76b1a14f53f734f7_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cee1bec00fdc1ba0b1d1c94a9ecf7809d0733716f1ca26b21651af8373ef6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cee1bec00fdc1ba0b1d1c94a9ecf7809d0733716f1ca26b21651af8373ef6f0->enter($__internal_1cee1bec00fdc1ba0b1d1c94a9ecf7809d0733716f1ca26b21651af8373ef6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9c75f677cdff00839fab620531c372ea199984ec68a10c5446c7e48c9aae69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c75f677cdff00839fab620531c372ea199984ec68a10c5446c7e48c9aae69b->enter($__internal_b9c75f677cdff00839fab620531c372ea199984ec68a10c5446c7e48c9aae69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_b9c75f677cdff00839fab620531c372ea199984ec68a10c5446c7e48c9aae69b->leave($__internal_b9c75f677cdff00839fab620531c372ea199984ec68a10c5446c7e48c9aae69b_prof);

        
        $__internal_1cee1bec00fdc1ba0b1d1c94a9ecf7809d0733716f1ca26b21651af8373ef6f0->leave($__internal_1cee1bec00fdc1ba0b1d1c94a9ecf7809d0733716f1ca26b21651af8373ef6f0_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e66e752e9caf8403f3f1f8864dcfe79f7895315aab31dd346e46ab6fe339efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e66e752e9caf8403f3f1f8864dcfe79f7895315aab31dd346e46ab6fe339efa->enter($__internal_7e66e752e9caf8403f3f1f8864dcfe79f7895315aab31dd346e46ab6fe339efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_015ee17ad0614c5cd1a108df174d20ad65abf902dafc409b1210ee34fcd5fc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015ee17ad0614c5cd1a108df174d20ad65abf902dafc409b1210ee34fcd5fc8f->enter($__internal_015ee17ad0614c5cd1a108df174d20ad65abf902dafc409b1210ee34fcd5fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["action"] ?? $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute(($context["admin"] ?? null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_015ee17ad0614c5cd1a108df174d20ad65abf902dafc409b1210ee34fcd5fc8f->leave($__internal_015ee17ad0614c5cd1a108df174d20ad65abf902dafc409b1210ee34fcd5fc8f_prof);

        
        $__internal_7e66e752e9caf8403f3f1f8864dcfe79f7895315aab31dd346e46ab6fe339efa->leave($__internal_7e66e752e9caf8403f3f1f8864dcfe79f7895315aab31dd346e46ab6fe339efa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
