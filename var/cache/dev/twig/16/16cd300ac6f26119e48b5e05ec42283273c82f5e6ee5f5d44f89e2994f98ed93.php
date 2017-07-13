<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_03c8278eb6966642fd6dd7f564583623df7a992692551786a3c08fc49d81de75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23eaa23b91dd2d4a0590e419e8ba54404383c3489afc230735176ca0cfed18cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23eaa23b91dd2d4a0590e419e8ba54404383c3489afc230735176ca0cfed18cb->enter($__internal_23eaa23b91dd2d4a0590e419e8ba54404383c3489afc230735176ca0cfed18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_8de819bfdefe90b7bc1c39c44794001a158d4817cf38598b0466407a73ff9aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de819bfdefe90b7bc1c39c44794001a158d4817cf38598b0466407a73ff9aba->enter($__internal_8de819bfdefe90b7bc1c39c44794001a158d4817cf38598b0466407a73ff9aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_23eaa23b91dd2d4a0590e419e8ba54404383c3489afc230735176ca0cfed18cb->leave($__internal_23eaa23b91dd2d4a0590e419e8ba54404383c3489afc230735176ca0cfed18cb_prof);

        
        $__internal_8de819bfdefe90b7bc1c39c44794001a158d4817cf38598b0466407a73ff9aba->leave($__internal_8de819bfdefe90b7bc1c39c44794001a158d4817cf38598b0466407a73ff9aba_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_93b1b9dd3100e0b61f408296bbf2c3fe22cecdd099cf74138aa7f642f8c6d570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b1b9dd3100e0b61f408296bbf2c3fe22cecdd099cf74138aa7f642f8c6d570->enter($__internal_93b1b9dd3100e0b61f408296bbf2c3fe22cecdd099cf74138aa7f642f8c6d570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_29fbdb17c6daf2c5450ec6fa0b306b0498e637d710bbd86887c9274989beebc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fbdb17c6daf2c5450ec6fa0b306b0498e637d710bbd86887c9274989beebc4->enter($__internal_29fbdb17c6daf2c5450ec6fa0b306b0498e637d710bbd86887c9274989beebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_29fbdb17c6daf2c5450ec6fa0b306b0498e637d710bbd86887c9274989beebc4->leave($__internal_29fbdb17c6daf2c5450ec6fa0b306b0498e637d710bbd86887c9274989beebc4_prof);

        
        $__internal_93b1b9dd3100e0b61f408296bbf2c3fe22cecdd099cf74138aa7f642f8c6d570->leave($__internal_93b1b9dd3100e0b61f408296bbf2c3fe22cecdd099cf74138aa7f642f8c6d570_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
