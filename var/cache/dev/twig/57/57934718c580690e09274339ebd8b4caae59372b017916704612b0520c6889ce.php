<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_6ca73b6b27cff984cda6fde00b8dafe7673bb534d42f1920e25a83f45281ab67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01ba22b93162323d83f23d5d60b06a9b6ae9136c5b8d27059f6569eb0d800219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ba22b93162323d83f23d5d60b06a9b6ae9136c5b8d27059f6569eb0d800219->enter($__internal_01ba22b93162323d83f23d5d60b06a9b6ae9136c5b8d27059f6569eb0d800219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_355004f535da4b2f979bd535dd60f009067e784b4dabbdb4d5e2c7c3e438591a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355004f535da4b2f979bd535dd60f009067e784b4dabbdb4d5e2c7c3e438591a->enter($__internal_355004f535da4b2f979bd535dd60f009067e784b4dabbdb4d5e2c7c3e438591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ba22b93162323d83f23d5d60b06a9b6ae9136c5b8d27059f6569eb0d800219->leave($__internal_01ba22b93162323d83f23d5d60b06a9b6ae9136c5b8d27059f6569eb0d800219_prof);

        
        $__internal_355004f535da4b2f979bd535dd60f009067e784b4dabbdb4d5e2c7c3e438591a->leave($__internal_355004f535da4b2f979bd535dd60f009067e784b4dabbdb4d5e2c7c3e438591a_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_243783170332252bed9397acb6c425ed4c0de8f79180c92a4d9032394d7592e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243783170332252bed9397acb6c425ed4c0de8f79180c92a4d9032394d7592e7->enter($__internal_243783170332252bed9397acb6c425ed4c0de8f79180c92a4d9032394d7592e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_67edc19057b3e4aab87d6dbb2ad0723808507112dca8a4b8c2e7fb4b351d1ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67edc19057b3e4aab87d6dbb2ad0723808507112dca8a4b8c2e7fb4b351d1ee0->enter($__internal_67edc19057b3e4aab87d6dbb2ad0723808507112dca8a4b8c2e7fb4b351d1ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_67edc19057b3e4aab87d6dbb2ad0723808507112dca8a4b8c2e7fb4b351d1ee0->leave($__internal_67edc19057b3e4aab87d6dbb2ad0723808507112dca8a4b8c2e7fb4b351d1ee0_prof);

        
        $__internal_243783170332252bed9397acb6c425ed4c0de8f79180c92a4d9032394d7592e7->leave($__internal_243783170332252bed9397acb6c425ed4c0de8f79180c92a4d9032394d7592e7_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_0bcf48560543b40ef2dba78a4a8e2790619e67d402dba909237e9d461c478348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcf48560543b40ef2dba78a4a8e2790619e67d402dba909237e9d461c478348->enter($__internal_0bcf48560543b40ef2dba78a4a8e2790619e67d402dba909237e9d461c478348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_37e3a746212da7e6736933a1a67f29d3bc3d49f663dad9b83017ba42fe085eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e3a746212da7e6736933a1a67f29d3bc3d49f663dad9b83017ba42fe085eeb->enter($__internal_37e3a746212da7e6736933a1a67f29d3bc3d49f663dad9b83017ba42fe085eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_37e3a746212da7e6736933a1a67f29d3bc3d49f663dad9b83017ba42fe085eeb->leave($__internal_37e3a746212da7e6736933a1a67f29d3bc3d49f663dad9b83017ba42fe085eeb_prof);

        
        $__internal_0bcf48560543b40ef2dba78a4a8e2790619e67d402dba909237e9d461c478348->leave($__internal_0bcf48560543b40ef2dba78a4a8e2790619e67d402dba909237e9d461c478348_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
