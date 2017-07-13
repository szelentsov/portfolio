<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_a263c8cd5b8adccf2551814f2cde8e6f769cd69dffd46b44573b09f1ced3e72b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d58cd17781aacdfec5ad2ecee26a3d4b33195a9eae272b6d85908d46a8d2f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d58cd17781aacdfec5ad2ecee26a3d4b33195a9eae272b6d85908d46a8d2f52->enter($__internal_8d58cd17781aacdfec5ad2ecee26a3d4b33195a9eae272b6d85908d46a8d2f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_d6b836a07afe3376e8f5ce6c8c7da5feae727d5d4e4f48245d34572ae727bbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b836a07afe3376e8f5ce6c8c7da5feae727d5d4e4f48245d34572ae727bbb0->enter($__internal_d6b836a07afe3376e8f5ce6c8c7da5feae727d5d4e4f48245d34572ae727bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d58cd17781aacdfec5ad2ecee26a3d4b33195a9eae272b6d85908d46a8d2f52->leave($__internal_8d58cd17781aacdfec5ad2ecee26a3d4b33195a9eae272b6d85908d46a8d2f52_prof);

        
        $__internal_d6b836a07afe3376e8f5ce6c8c7da5feae727d5d4e4f48245d34572ae727bbb0->leave($__internal_d6b836a07afe3376e8f5ce6c8c7da5feae727d5d4e4f48245d34572ae727bbb0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
