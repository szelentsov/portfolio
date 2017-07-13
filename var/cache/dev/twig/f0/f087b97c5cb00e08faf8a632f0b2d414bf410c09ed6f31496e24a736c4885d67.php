<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_8fa9c49df982566437d3272febde265d6a8d0ad9eeba4a57e93260b38de6bcbd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eafa7dbdb7afc33c9d7f3ec53253c43f7e77e1283eea248825707a7d638c742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eafa7dbdb7afc33c9d7f3ec53253c43f7e77e1283eea248825707a7d638c742->enter($__internal_0eafa7dbdb7afc33c9d7f3ec53253c43f7e77e1283eea248825707a7d638c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_40eaba26787530d02c1199424a53311c2c8fd38ea91361ec71359784e77d77da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eaba26787530d02c1199424a53311c2c8fd38ea91361ec71359784e77d77da->enter($__internal_40eaba26787530d02c1199424a53311c2c8fd38ea91361ec71359784e77d77da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eafa7dbdb7afc33c9d7f3ec53253c43f7e77e1283eea248825707a7d638c742->leave($__internal_0eafa7dbdb7afc33c9d7f3ec53253c43f7e77e1283eea248825707a7d638c742_prof);

        
        $__internal_40eaba26787530d02c1199424a53311c2c8fd38ea91361ec71359784e77d77da->leave($__internal_40eaba26787530d02c1199424a53311c2c8fd38ea91361ec71359784e77d77da_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a629aa80d5a2bfa4553cd94c95a4a6fa5d42d36d127ce6b879c457ca5ab50ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a629aa80d5a2bfa4553cd94c95a4a6fa5d42d36d127ce6b879c457ca5ab50ef6->enter($__internal_a629aa80d5a2bfa4553cd94c95a4a6fa5d42d36d127ce6b879c457ca5ab50ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8cd6a7b2965250d4cb47a61796721e5d9bf47b4019fd91f4d91d7931cc13f2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd6a7b2965250d4cb47a61796721e5d9bf47b4019fd91f4d91d7931cc13f2f8->enter($__internal_8cd6a7b2965250d4cb47a61796721e5d9bf47b4019fd91f4d91d7931cc13f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_8cd6a7b2965250d4cb47a61796721e5d9bf47b4019fd91f4d91d7931cc13f2f8->leave($__internal_8cd6a7b2965250d4cb47a61796721e5d9bf47b4019fd91f4d91d7931cc13f2f8_prof);

        
        $__internal_a629aa80d5a2bfa4553cd94c95a4a6fa5d42d36d127ce6b879c457ca5ab50ef6->leave($__internal_a629aa80d5a2bfa4553cd94c95a4a6fa5d42d36d127ce6b879c457ca5ab50ef6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
