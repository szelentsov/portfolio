<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_fe75cc8efde2cb9df03920f192c863d92b46408cad640dec0c68adec8cf4976e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c30848bb940d8d90c84e6dd2dde1bd3d673b1a79441f46acccaee311131c2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c30848bb940d8d90c84e6dd2dde1bd3d673b1a79441f46acccaee311131c2fc->enter($__internal_0c30848bb940d8d90c84e6dd2dde1bd3d673b1a79441f46acccaee311131c2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_cc9d25cc430bd484a8ea062f7c2bc60b35cf6d5db76b50f449991990ab4b4cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9d25cc430bd484a8ea062f7c2bc60b35cf6d5db76b50f449991990ab4b4cd1->enter($__internal_cc9d25cc430bd484a8ea062f7c2bc60b35cf6d5db76b50f449991990ab4b4cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c30848bb940d8d90c84e6dd2dde1bd3d673b1a79441f46acccaee311131c2fc->leave($__internal_0c30848bb940d8d90c84e6dd2dde1bd3d673b1a79441f46acccaee311131c2fc_prof);

        
        $__internal_cc9d25cc430bd484a8ea062f7c2bc60b35cf6d5db76b50f449991990ab4b4cd1->leave($__internal_cc9d25cc430bd484a8ea062f7c2bc60b35cf6d5db76b50f449991990ab4b4cd1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
