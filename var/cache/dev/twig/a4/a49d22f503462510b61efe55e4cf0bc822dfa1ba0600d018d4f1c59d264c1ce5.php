<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_805d7cdcad5145b87d6e53b9dd5598529e891fa004c36b063e9a2927c3264d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a14e199b8dca54f8b54aa77fbd1ad9e71cae970ccba6fefc54d96ecdd60f1860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14e199b8dca54f8b54aa77fbd1ad9e71cae970ccba6fefc54d96ecdd60f1860->enter($__internal_a14e199b8dca54f8b54aa77fbd1ad9e71cae970ccba6fefc54d96ecdd60f1860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_705b3d855b47667774a431bcf5ed8e8157d68d1ea4ad1dec674ea6be7d45ad98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705b3d855b47667774a431bcf5ed8e8157d68d1ea4ad1dec674ea6be7d45ad98->enter($__internal_705b3d855b47667774a431bcf5ed8e8157d68d1ea4ad1dec674ea6be7d45ad98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14e199b8dca54f8b54aa77fbd1ad9e71cae970ccba6fefc54d96ecdd60f1860->leave($__internal_a14e199b8dca54f8b54aa77fbd1ad9e71cae970ccba6fefc54d96ecdd60f1860_prof);

        
        $__internal_705b3d855b47667774a431bcf5ed8e8157d68d1ea4ad1dec674ea6be7d45ad98->leave($__internal_705b3d855b47667774a431bcf5ed8e8157d68d1ea4ad1dec674ea6be7d45ad98_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
