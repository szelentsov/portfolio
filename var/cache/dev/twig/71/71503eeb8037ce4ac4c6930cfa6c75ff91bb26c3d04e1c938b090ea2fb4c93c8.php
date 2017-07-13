<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_8c8a06ed0a09b1ee63d961d127626f714bdbbcb7face177200ad8b1d407e5133 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48d653931f95af9820a395fd37fee4566a1da1c499589982ed3abfb8a3f3467e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d653931f95af9820a395fd37fee4566a1da1c499589982ed3abfb8a3f3467e->enter($__internal_48d653931f95af9820a395fd37fee4566a1da1c499589982ed3abfb8a3f3467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_19724109211e68dea7f5fea1ba9945a506f2583e8db2b05e2eb23eba74578be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19724109211e68dea7f5fea1ba9945a506f2583e8db2b05e2eb23eba74578be2->enter($__internal_19724109211e68dea7f5fea1ba9945a506f2583e8db2b05e2eb23eba74578be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d653931f95af9820a395fd37fee4566a1da1c499589982ed3abfb8a3f3467e->leave($__internal_48d653931f95af9820a395fd37fee4566a1da1c499589982ed3abfb8a3f3467e_prof);

        
        $__internal_19724109211e68dea7f5fea1ba9945a506f2583e8db2b05e2eb23eba74578be2->leave($__internal_19724109211e68dea7f5fea1ba9945a506f2583e8db2b05e2eb23eba74578be2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_812ff97b64ea03b3401d07b35a285e75fcfb862ac73d56c5a9dcf5be792a9eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ff97b64ea03b3401d07b35a285e75fcfb862ac73d56c5a9dcf5be792a9eb7->enter($__internal_812ff97b64ea03b3401d07b35a285e75fcfb862ac73d56c5a9dcf5be792a9eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_7d67cf7cc528613591f20f2db48f9646f9fbb850a0a7e4e4d6a1be256837ddf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d67cf7cc528613591f20f2db48f9646f9fbb850a0a7e4e4d6a1be256837ddf4->enter($__internal_7d67cf7cc528613591f20f2db48f9646f9fbb850a0a7e4e4d6a1be256837ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7d67cf7cc528613591f20f2db48f9646f9fbb850a0a7e4e4d6a1be256837ddf4->leave($__internal_7d67cf7cc528613591f20f2db48f9646f9fbb850a0a7e4e4d6a1be256837ddf4_prof);

        
        $__internal_812ff97b64ea03b3401d07b35a285e75fcfb862ac73d56c5a9dcf5be792a9eb7->leave($__internal_812ff97b64ea03b3401d07b35a285e75fcfb862ac73d56c5a9dcf5be792a9eb7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
