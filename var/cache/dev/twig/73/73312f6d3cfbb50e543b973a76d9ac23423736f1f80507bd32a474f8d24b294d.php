<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_d0185a9d71f2dc3b4aee674381ddc2da0f30df460b75e266b108cdb8541da563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e1cd5776a864d2ea323607e6668750a3610617776c3c158e733454067db004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e1cd5776a864d2ea323607e6668750a3610617776c3c158e733454067db004->enter($__internal_04e1cd5776a864d2ea323607e6668750a3610617776c3c158e733454067db004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_a2054baca5bbdea6d0a0d19e9f3df9f3f59c4b1955ad505a69b551f0eb3aa523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2054baca5bbdea6d0a0d19e9f3df9f3f59c4b1955ad505a69b551f0eb3aa523->enter($__internal_a2054baca5bbdea6d0a0d19e9f3df9f3f59c4b1955ad505a69b551f0eb3aa523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e1cd5776a864d2ea323607e6668750a3610617776c3c158e733454067db004->leave($__internal_04e1cd5776a864d2ea323607e6668750a3610617776c3c158e733454067db004_prof);

        
        $__internal_a2054baca5bbdea6d0a0d19e9f3df9f3f59c4b1955ad505a69b551f0eb3aa523->leave($__internal_a2054baca5bbdea6d0a0d19e9f3df9f3f59c4b1955ad505a69b551f0eb3aa523_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
