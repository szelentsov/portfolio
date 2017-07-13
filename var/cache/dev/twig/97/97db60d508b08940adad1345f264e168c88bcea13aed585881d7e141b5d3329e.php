<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_d8e168920e05fba6c0cdf8223024df7f8dec9754bafde7fcc0867047875230ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf3e5a99e7ee291da0c6cfa1a4a642f152019d749edf489a91b3e17f8bcb18d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3e5a99e7ee291da0c6cfa1a4a642f152019d749edf489a91b3e17f8bcb18d2->enter($__internal_bf3e5a99e7ee291da0c6cfa1a4a642f152019d749edf489a91b3e17f8bcb18d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_6f2670f8f5cec186aa6e25dc83aa9d0e691cf41a5ed37add4b8745b98552be7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2670f8f5cec186aa6e25dc83aa9d0e691cf41a5ed37add4b8745b98552be7a->enter($__internal_6f2670f8f5cec186aa6e25dc83aa9d0e691cf41a5ed37add4b8745b98552be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3e5a99e7ee291da0c6cfa1a4a642f152019d749edf489a91b3e17f8bcb18d2->leave($__internal_bf3e5a99e7ee291da0c6cfa1a4a642f152019d749edf489a91b3e17f8bcb18d2_prof);

        
        $__internal_6f2670f8f5cec186aa6e25dc83aa9d0e691cf41a5ed37add4b8745b98552be7a->leave($__internal_6f2670f8f5cec186aa6e25dc83aa9d0e691cf41a5ed37add4b8745b98552be7a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_334bbaadeaa7ccb99d12611f7bb7afc5cb8e1d8f82ae9b68b80b4c946d6592c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334bbaadeaa7ccb99d12611f7bb7afc5cb8e1d8f82ae9b68b80b4c946d6592c4->enter($__internal_334bbaadeaa7ccb99d12611f7bb7afc5cb8e1d8f82ae9b68b80b4c946d6592c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_a7dc27d25aa4b0651aae857bd9c98ea12440ceee075ac18a21e8c81d4d189c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dc27d25aa4b0651aae857bd9c98ea12440ceee075ac18a21e8c81d4d189c70->enter($__internal_a7dc27d25aa4b0651aae857bd9c98ea12440ceee075ac18a21e8c81d4d189c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_a7dc27d25aa4b0651aae857bd9c98ea12440ceee075ac18a21e8c81d4d189c70->leave($__internal_a7dc27d25aa4b0651aae857bd9c98ea12440ceee075ac18a21e8c81d4d189c70_prof);

        
        $__internal_334bbaadeaa7ccb99d12611f7bb7afc5cb8e1d8f82ae9b68b80b4c946d6592c4->leave($__internal_334bbaadeaa7ccb99d12611f7bb7afc5cb8e1d8f82ae9b68b80b4c946d6592c4_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_8d8b5e661794c5e26f410af37e4b3c8524bb0bee93d68f4ba3d55d4b340533fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8b5e661794c5e26f410af37e4b3c8524bb0bee93d68f4ba3d55d4b340533fe->enter($__internal_8d8b5e661794c5e26f410af37e4b3c8524bb0bee93d68f4ba3d55d4b340533fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1c4f4093085cf307481137f098961ea1f3203f414816f314b16d84512a481563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4f4093085cf307481137f098961ea1f3203f414816f314b16d84512a481563->enter($__internal_1c4f4093085cf307481137f098961ea1f3203f414816f314b16d84512a481563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1c4f4093085cf307481137f098961ea1f3203f414816f314b16d84512a481563->leave($__internal_1c4f4093085cf307481137f098961ea1f3203f414816f314b16d84512a481563_prof);

        
        $__internal_8d8b5e661794c5e26f410af37e4b3c8524bb0bee93d68f4ba3d55d4b340533fe->leave($__internal_8d8b5e661794c5e26f410af37e4b3c8524bb0bee93d68f4ba3d55d4b340533fe_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_cd14bc3d23dded562af1d848fde37e04042711d0965d2d20a6b9af96a732a941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd14bc3d23dded562af1d848fde37e04042711d0965d2d20a6b9af96a732a941->enter($__internal_cd14bc3d23dded562af1d848fde37e04042711d0965d2d20a6b9af96a732a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_c5e40bf2209d4437e5c5b7a38878dcf53f328972b4e309df9c1bfdda408434fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e40bf2209d4437e5c5b7a38878dcf53f328972b4e309df9c1bfdda408434fa->enter($__internal_c5e40bf2209d4437e5c5b7a38878dcf53f328972b4e309df9c1bfdda408434fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c5e40bf2209d4437e5c5b7a38878dcf53f328972b4e309df9c1bfdda408434fa->leave($__internal_c5e40bf2209d4437e5c5b7a38878dcf53f328972b4e309df9c1bfdda408434fa_prof);

        
        $__internal_cd14bc3d23dded562af1d848fde37e04042711d0965d2d20a6b9af96a732a941->leave($__internal_cd14bc3d23dded562af1d848fde37e04042711d0965d2d20a6b9af96a732a941_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_0591ab978a5ba794c6c427d8dd3377602f7f674466f0785b9da68e191f90c769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0591ab978a5ba794c6c427d8dd3377602f7f674466f0785b9da68e191f90c769->enter($__internal_0591ab978a5ba794c6c427d8dd3377602f7f674466f0785b9da68e191f90c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_83d7c71fb4dbd6663d8b5218251ce161c4e2037b66b6712261bcd8f8fb712873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d7c71fb4dbd6663d8b5218251ce161c4e2037b66b6712261bcd8f8fb712873->enter($__internal_83d7c71fb4dbd6663d8b5218251ce161c4e2037b66b6712261bcd8f8fb712873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_83d7c71fb4dbd6663d8b5218251ce161c4e2037b66b6712261bcd8f8fb712873->leave($__internal_83d7c71fb4dbd6663d8b5218251ce161c4e2037b66b6712261bcd8f8fb712873_prof);

        
        $__internal_0591ab978a5ba794c6c427d8dd3377602f7f674466f0785b9da68e191f90c769->leave($__internal_0591ab978a5ba794c6c427d8dd3377602f7f674466f0785b9da68e191f90c769_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
