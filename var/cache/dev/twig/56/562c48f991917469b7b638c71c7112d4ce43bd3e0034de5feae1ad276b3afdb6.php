<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_7626a2bded09a7639b1adb0b29f9e104cd552d2a4dda44005ec701475a949c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12eef797d3628e95fc8792e58467a0182bd3aa4932477a25a23fcc81cdbe4497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12eef797d3628e95fc8792e58467a0182bd3aa4932477a25a23fcc81cdbe4497->enter($__internal_12eef797d3628e95fc8792e58467a0182bd3aa4932477a25a23fcc81cdbe4497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_ee49de5612fee3b841daad3e0f55e1a2799a6875d1cb4ffe61cd95f20f87084c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee49de5612fee3b841daad3e0f55e1a2799a6875d1cb4ffe61cd95f20f87084c->enter($__internal_ee49de5612fee3b841daad3e0f55e1a2799a6875d1cb4ffe61cd95f20f87084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12eef797d3628e95fc8792e58467a0182bd3aa4932477a25a23fcc81cdbe4497->leave($__internal_12eef797d3628e95fc8792e58467a0182bd3aa4932477a25a23fcc81cdbe4497_prof);

        
        $__internal_ee49de5612fee3b841daad3e0f55e1a2799a6875d1cb4ffe61cd95f20f87084c->leave($__internal_ee49de5612fee3b841daad3e0f55e1a2799a6875d1cb4ffe61cd95f20f87084c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
