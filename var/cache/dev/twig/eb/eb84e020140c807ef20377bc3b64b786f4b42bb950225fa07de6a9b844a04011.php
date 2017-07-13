<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_1c6340880448c6bfd667a38efa54fbd98a3e7545820901ee045af1c825b215c2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55fac06c62b2b24e93ec290c7f69f06d09ff09b3d76f36d7b506ecabef1eb9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fac06c62b2b24e93ec290c7f69f06d09ff09b3d76f36d7b506ecabef1eb9a7->enter($__internal_55fac06c62b2b24e93ec290c7f69f06d09ff09b3d76f36d7b506ecabef1eb9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_b7a4119f0ceacbc8be97dd5ab28809fba99de39ee4b53e0c9e5c8f7edef6d021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a4119f0ceacbc8be97dd5ab28809fba99de39ee4b53e0c9e5c8f7edef6d021->enter($__internal_b7a4119f0ceacbc8be97dd5ab28809fba99de39ee4b53e0c9e5c8f7edef6d021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fac06c62b2b24e93ec290c7f69f06d09ff09b3d76f36d7b506ecabef1eb9a7->leave($__internal_55fac06c62b2b24e93ec290c7f69f06d09ff09b3d76f36d7b506ecabef1eb9a7_prof);

        
        $__internal_b7a4119f0ceacbc8be97dd5ab28809fba99de39ee4b53e0c9e5c8f7edef6d021->leave($__internal_b7a4119f0ceacbc8be97dd5ab28809fba99de39ee4b53e0c9e5c8f7edef6d021_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_dbc87cad8a71be8448482bd3fdeda000283ec8a777ce59db9abb8eec06cb3bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc87cad8a71be8448482bd3fdeda000283ec8a777ce59db9abb8eec06cb3bda->enter($__internal_dbc87cad8a71be8448482bd3fdeda000283ec8a777ce59db9abb8eec06cb3bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ce8d8e6b7abd87c9552dc784e33b779717ba4464a1bbcfef696b5c236ad9437a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8d8e6b7abd87c9552dc784e33b779717ba4464a1bbcfef696b5c236ad9437a->enter($__internal_ce8d8e6b7abd87c9552dc784e33b779717ba4464a1bbcfef696b5c236ad9437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_ce8d8e6b7abd87c9552dc784e33b779717ba4464a1bbcfef696b5c236ad9437a->leave($__internal_ce8d8e6b7abd87c9552dc784e33b779717ba4464a1bbcfef696b5c236ad9437a_prof);

        
        $__internal_dbc87cad8a71be8448482bd3fdeda000283ec8a777ce59db9abb8eec06cb3bda->leave($__internal_dbc87cad8a71be8448482bd3fdeda000283ec8a777ce59db9abb8eec06cb3bda_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
