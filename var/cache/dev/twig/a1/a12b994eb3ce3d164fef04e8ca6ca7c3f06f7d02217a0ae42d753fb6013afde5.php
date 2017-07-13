<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_da98e9930b35633ccfc93ca3f2826c890477359238e33f278a7761c0007fd47f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427cb7ed1015e130f815e070146200471fbeb3213f7b0fd173aff92efb4c88ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427cb7ed1015e130f815e070146200471fbeb3213f7b0fd173aff92efb4c88ea->enter($__internal_427cb7ed1015e130f815e070146200471fbeb3213f7b0fd173aff92efb4c88ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_12e9d78fb90af97bf3a7c1eb979f37fd7d6e749b390f5c49a0d3854f684afd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e9d78fb90af97bf3a7c1eb979f37fd7d6e749b390f5c49a0d3854f684afd40->enter($__internal_12e9d78fb90af97bf3a7c1eb979f37fd7d6e749b390f5c49a0d3854f684afd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_427cb7ed1015e130f815e070146200471fbeb3213f7b0fd173aff92efb4c88ea->leave($__internal_427cb7ed1015e130f815e070146200471fbeb3213f7b0fd173aff92efb4c88ea_prof);

        
        $__internal_12e9d78fb90af97bf3a7c1eb979f37fd7d6e749b390f5c49a0d3854f684afd40->leave($__internal_12e9d78fb90af97bf3a7c1eb979f37fd7d6e749b390f5c49a0d3854f684afd40_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
