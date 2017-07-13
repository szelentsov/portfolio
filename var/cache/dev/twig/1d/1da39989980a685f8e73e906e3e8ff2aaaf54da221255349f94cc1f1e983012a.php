<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_b6f6ff56f2639adb1d7abd7dca2599a3ce5d1342f3880389b34426a72b8f58ba extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_000573fffe39383faaeb5b754e27bcbfcfb3762b774eb7202c24c9ef7775a067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000573fffe39383faaeb5b754e27bcbfcfb3762b774eb7202c24c9ef7775a067->enter($__internal_000573fffe39383faaeb5b754e27bcbfcfb3762b774eb7202c24c9ef7775a067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_9837d39670b838b9a44a39cf8b926e4bae270dd70323fc1dcbac5468bb917ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9837d39670b838b9a44a39cf8b926e4bae270dd70323fc1dcbac5468bb917ff9->enter($__internal_9837d39670b838b9a44a39cf8b926e4bae270dd70323fc1dcbac5468bb917ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000573fffe39383faaeb5b754e27bcbfcfb3762b774eb7202c24c9ef7775a067->leave($__internal_000573fffe39383faaeb5b754e27bcbfcfb3762b774eb7202c24c9ef7775a067_prof);

        
        $__internal_9837d39670b838b9a44a39cf8b926e4bae270dd70323fc1dcbac5468bb917ff9->leave($__internal_9837d39670b838b9a44a39cf8b926e4bae270dd70323fc1dcbac5468bb917ff9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f24fc467d2f222b23b87559d958dafac40b8f517ef1f2c9a86664698a430e1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24fc467d2f222b23b87559d958dafac40b8f517ef1f2c9a86664698a430e1f8->enter($__internal_f24fc467d2f222b23b87559d958dafac40b8f517ef1f2c9a86664698a430e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_51844a49314716f4290d5606d97f3035bdfe5a270c7815238f37b715a30f5034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51844a49314716f4290d5606d97f3035bdfe5a270c7815238f37b715a30f5034->enter($__internal_51844a49314716f4290d5606d97f3035bdfe5a270c7815238f37b715a30f5034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_51844a49314716f4290d5606d97f3035bdfe5a270c7815238f37b715a30f5034->leave($__internal_51844a49314716f4290d5606d97f3035bdfe5a270c7815238f37b715a30f5034_prof);

        
        $__internal_f24fc467d2f222b23b87559d958dafac40b8f517ef1f2c9a86664698a430e1f8->leave($__internal_f24fc467d2f222b23b87559d958dafac40b8f517ef1f2c9a86664698a430e1f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
