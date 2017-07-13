<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_6639f3cbe02de2984e33dbac8c943a9a230b0394fce8340e7d2e2946bc2b29b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef25fce52a592d6176d0cd65a1dcc4b80071081a001f9467a93721e2311d0682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef25fce52a592d6176d0cd65a1dcc4b80071081a001f9467a93721e2311d0682->enter($__internal_ef25fce52a592d6176d0cd65a1dcc4b80071081a001f9467a93721e2311d0682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_988b04eded996aa95caace6592f564667eab1c2de139bd3c4a54b5fac1f8eef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988b04eded996aa95caace6592f564667eab1c2de139bd3c4a54b5fac1f8eef8->enter($__internal_988b04eded996aa95caace6592f564667eab1c2de139bd3c4a54b5fac1f8eef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef25fce52a592d6176d0cd65a1dcc4b80071081a001f9467a93721e2311d0682->leave($__internal_ef25fce52a592d6176d0cd65a1dcc4b80071081a001f9467a93721e2311d0682_prof);

        
        $__internal_988b04eded996aa95caace6592f564667eab1c2de139bd3c4a54b5fac1f8eef8->leave($__internal_988b04eded996aa95caace6592f564667eab1c2de139bd3c4a54b5fac1f8eef8_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f64213e6da3ac7a00a89a83190e1258dd5b3df057b1f0a644e448266756774c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64213e6da3ac7a00a89a83190e1258dd5b3df057b1f0a644e448266756774c2->enter($__internal_f64213e6da3ac7a00a89a83190e1258dd5b3df057b1f0a644e448266756774c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12a34f375e0afe221cb95fd56b363e2ad32fea512b018686999fbc6689e2c884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a34f375e0afe221cb95fd56b363e2ad32fea512b018686999fbc6689e2c884->enter($__internal_12a34f375e0afe221cb95fd56b363e2ad32fea512b018686999fbc6689e2c884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_12a34f375e0afe221cb95fd56b363e2ad32fea512b018686999fbc6689e2c884->leave($__internal_12a34f375e0afe221cb95fd56b363e2ad32fea512b018686999fbc6689e2c884_prof);

        
        $__internal_f64213e6da3ac7a00a89a83190e1258dd5b3df057b1f0a644e448266756774c2->leave($__internal_f64213e6da3ac7a00a89a83190e1258dd5b3df057b1f0a644e448266756774c2_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_2dd64b6779f2e7ba854ed51f0ea0177ba9975923ed358ba9c08a0225f2761544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd64b6779f2e7ba854ed51f0ea0177ba9975923ed358ba9c08a0225f2761544->enter($__internal_2dd64b6779f2e7ba854ed51f0ea0177ba9975923ed358ba9c08a0225f2761544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_3e2bc0894eee4f7ee96d9cb0911976fb03f4370a44b64ca19260e979d1331da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2bc0894eee4f7ee96d9cb0911976fb03f4370a44b64ca19260e979d1331da9->enter($__internal_3e2bc0894eee4f7ee96d9cb0911976fb03f4370a44b64ca19260e979d1331da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e2bc0894eee4f7ee96d9cb0911976fb03f4370a44b64ca19260e979d1331da9->leave($__internal_3e2bc0894eee4f7ee96d9cb0911976fb03f4370a44b64ca19260e979d1331da9_prof);

        
        $__internal_2dd64b6779f2e7ba854ed51f0ea0177ba9975923ed358ba9c08a0225f2761544->leave($__internal_2dd64b6779f2e7ba854ed51f0ea0177ba9975923ed358ba9c08a0225f2761544_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e1fb21694a1c295f042b2fdd4f3bd01966d9ec3c3c5c199c302743424128e7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fb21694a1c295f042b2fdd4f3bd01966d9ec3c3c5c199c302743424128e7d6->enter($__internal_e1fb21694a1c295f042b2fdd4f3bd01966d9ec3c3c5c199c302743424128e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_f853e6522c3f9d53fb82117a71adca3d4efae8f6515645d5e0a767fd07c7cfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f853e6522c3f9d53fb82117a71adca3d4efae8f6515645d5e0a767fd07c7cfb1->enter($__internal_f853e6522c3f9d53fb82117a71adca3d4efae8f6515645d5e0a767fd07c7cfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_f853e6522c3f9d53fb82117a71adca3d4efae8f6515645d5e0a767fd07c7cfb1->leave($__internal_f853e6522c3f9d53fb82117a71adca3d4efae8f6515645d5e0a767fd07c7cfb1_prof);

        
        $__internal_e1fb21694a1c295f042b2fdd4f3bd01966d9ec3c3c5c199c302743424128e7d6->leave($__internal_e1fb21694a1c295f042b2fdd4f3bd01966d9ec3c3c5c199c302743424128e7d6_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9f0c7ca8ff2ccacd64aad4812e4d94c7233511e34d55bd60040b9b53abfc27bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0c7ca8ff2ccacd64aad4812e4d94c7233511e34d55bd60040b9b53abfc27bc->enter($__internal_9f0c7ca8ff2ccacd64aad4812e4d94c7233511e34d55bd60040b9b53abfc27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_34a761550d4fc31fb66e6cb881be45ce20e3568c9e7f2451c229ece553915c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a761550d4fc31fb66e6cb881be45ce20e3568c9e7f2451c229ece553915c9f->enter($__internal_34a761550d4fc31fb66e6cb881be45ce20e3568c9e7f2451c229ece553915c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_34a761550d4fc31fb66e6cb881be45ce20e3568c9e7f2451c229ece553915c9f->leave($__internal_34a761550d4fc31fb66e6cb881be45ce20e3568c9e7f2451c229ece553915c9f_prof);

        
        $__internal_9f0c7ca8ff2ccacd64aad4812e4d94c7233511e34d55bd60040b9b53abfc27bc->leave($__internal_9f0c7ca8ff2ccacd64aad4812e4d94c7233511e34d55bd60040b9b53abfc27bc_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_97f1ee77e918387fbbebf71961ada6e4f5844ed1754ffa3ff7a8331fb0b0fd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f1ee77e918387fbbebf71961ada6e4f5844ed1754ffa3ff7a8331fb0b0fd15->enter($__internal_97f1ee77e918387fbbebf71961ada6e4f5844ed1754ffa3ff7a8331fb0b0fd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_9ea0a87e461e8eed809a052862ccb3e9ef18de1fa4790bd369a5e651a0ec8d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea0a87e461e8eed809a052862ccb3e9ef18de1fa4790bd369a5e651a0ec8d71->enter($__internal_9ea0a87e461e8eed809a052862ccb3e9ef18de1fa4790bd369a5e651a0ec8d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_9ea0a87e461e8eed809a052862ccb3e9ef18de1fa4790bd369a5e651a0ec8d71->leave($__internal_9ea0a87e461e8eed809a052862ccb3e9ef18de1fa4790bd369a5e651a0ec8d71_prof);

        
        $__internal_97f1ee77e918387fbbebf71961ada6e4f5844ed1754ffa3ff7a8331fb0b0fd15->leave($__internal_97f1ee77e918387fbbebf71961ada6e4f5844ed1754ffa3ff7a8331fb0b0fd15_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
