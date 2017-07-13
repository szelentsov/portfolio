<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_9a779b030f9e4cf33aeb75d290bcab62c7fe1176220361337e1f883271631e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1ef14642b337050ce3d7bd728deea4f7250e742cb87ddce8dd491fb6ab3b99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ef14642b337050ce3d7bd728deea4f7250e742cb87ddce8dd491fb6ab3b99e->enter($__internal_e1ef14642b337050ce3d7bd728deea4f7250e742cb87ddce8dd491fb6ab3b99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_8dcaa70733d8d1f6bf8dfd83b3d0de0aa64d3a227fd6dc0e3a9c95b2a441ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcaa70733d8d1f6bf8dfd83b3d0de0aa64d3a227fd6dc0e3a9c95b2a441ebfc->enter($__internal_8dcaa70733d8d1f6bf8dfd83b3d0de0aa64d3a227fd6dc0e3a9c95b2a441ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ef14642b337050ce3d7bd728deea4f7250e742cb87ddce8dd491fb6ab3b99e->leave($__internal_e1ef14642b337050ce3d7bd728deea4f7250e742cb87ddce8dd491fb6ab3b99e_prof);

        
        $__internal_8dcaa70733d8d1f6bf8dfd83b3d0de0aa64d3a227fd6dc0e3a9c95b2a441ebfc->leave($__internal_8dcaa70733d8d1f6bf8dfd83b3d0de0aa64d3a227fd6dc0e3a9c95b2a441ebfc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_57bd4bc8a47e554d7d32578932e4ce9b34ca3d1547b3373194db95f283eadc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bd4bc8a47e554d7d32578932e4ce9b34ca3d1547b3373194db95f283eadc38->enter($__internal_57bd4bc8a47e554d7d32578932e4ce9b34ca3d1547b3373194db95f283eadc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_259ff5804655235a61e7842cbbbe738c5d243897588983164cb96aa0563df64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259ff5804655235a61e7842cbbbe738c5d243897588983164cb96aa0563df64a->enter($__internal_259ff5804655235a61e7842cbbbe738c5d243897588983164cb96aa0563df64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_259ff5804655235a61e7842cbbbe738c5d243897588983164cb96aa0563df64a->leave($__internal_259ff5804655235a61e7842cbbbe738c5d243897588983164cb96aa0563df64a_prof);

        
        $__internal_57bd4bc8a47e554d7d32578932e4ce9b34ca3d1547b3373194db95f283eadc38->leave($__internal_57bd4bc8a47e554d7d32578932e4ce9b34ca3d1547b3373194db95f283eadc38_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
