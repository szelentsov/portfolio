<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_898f90098a88eda5a9a6f536fe9eff1ecd04b8ffb44e880502dceee9142cafa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_811fee0f10dfa6de3ec7b6009a61e5729374cfa1ba07e4901d9c366292d9f827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811fee0f10dfa6de3ec7b6009a61e5729374cfa1ba07e4901d9c366292d9f827->enter($__internal_811fee0f10dfa6de3ec7b6009a61e5729374cfa1ba07e4901d9c366292d9f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_f30187a45dbf630505544ef0c466bd51d695ee000aed0bc531f282302121070c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30187a45dbf630505544ef0c466bd51d695ee000aed0bc531f282302121070c->enter($__internal_f30187a45dbf630505544ef0c466bd51d695ee000aed0bc531f282302121070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811fee0f10dfa6de3ec7b6009a61e5729374cfa1ba07e4901d9c366292d9f827->leave($__internal_811fee0f10dfa6de3ec7b6009a61e5729374cfa1ba07e4901d9c366292d9f827_prof);

        
        $__internal_f30187a45dbf630505544ef0c466bd51d695ee000aed0bc531f282302121070c->leave($__internal_f30187a45dbf630505544ef0c466bd51d695ee000aed0bc531f282302121070c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b048dbdac3926156c11ab5777e90531f6f61da444bc6c9fbcfee13ac5ddcab9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b048dbdac3926156c11ab5777e90531f6f61da444bc6c9fbcfee13ac5ddcab9e->enter($__internal_b048dbdac3926156c11ab5777e90531f6f61da444bc6c9fbcfee13ac5ddcab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e8a95b391c392052a61d705f940d5dad65b8e449c68a682cf732d7d9a9cc96a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a95b391c392052a61d705f940d5dad65b8e449c68a682cf732d7d9a9cc96a3->enter($__internal_e8a95b391c392052a61d705f940d5dad65b8e449c68a682cf732d7d9a9cc96a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_e8a95b391c392052a61d705f940d5dad65b8e449c68a682cf732d7d9a9cc96a3->leave($__internal_e8a95b391c392052a61d705f940d5dad65b8e449c68a682cf732d7d9a9cc96a3_prof);

        
        $__internal_b048dbdac3926156c11ab5777e90531f6f61da444bc6c9fbcfee13ac5ddcab9e->leave($__internal_b048dbdac3926156c11ab5777e90531f6f61da444bc6c9fbcfee13ac5ddcab9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
