<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_611bfc3983e59d7d8eec42c7251b614f6eaba36f98bf08b52783564ff15d4fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6179c4c6999402772c63ea84c2c925400d750e9171bc34623ff6a71b6fc36181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6179c4c6999402772c63ea84c2c925400d750e9171bc34623ff6a71b6fc36181->enter($__internal_6179c4c6999402772c63ea84c2c925400d750e9171bc34623ff6a71b6fc36181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_c67e97beae3b8f30b2775a69e80e2850547e4c49e23dc93364917caae644343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e97beae3b8f30b2775a69e80e2850547e4c49e23dc93364917caae644343c->enter($__internal_c67e97beae3b8f30b2775a69e80e2850547e4c49e23dc93364917caae644343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6179c4c6999402772c63ea84c2c925400d750e9171bc34623ff6a71b6fc36181->leave($__internal_6179c4c6999402772c63ea84c2c925400d750e9171bc34623ff6a71b6fc36181_prof);

        
        $__internal_c67e97beae3b8f30b2775a69e80e2850547e4c49e23dc93364917caae644343c->leave($__internal_c67e97beae3b8f30b2775a69e80e2850547e4c49e23dc93364917caae644343c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
