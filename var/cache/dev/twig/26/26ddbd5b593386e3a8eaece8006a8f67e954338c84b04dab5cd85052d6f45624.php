<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_d09492231935d6be3f26c828cdd76343493ed7154caf8caa775e822b964cb266 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b72e28a4f0b473bf2760006d14c4d3b512fb2d8db8ba76bd0791a8eba7308fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b72e28a4f0b473bf2760006d14c4d3b512fb2d8db8ba76bd0791a8eba7308fc->enter($__internal_0b72e28a4f0b473bf2760006d14c4d3b512fb2d8db8ba76bd0791a8eba7308fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_318b3f1584160298b2e2734283eb424f83b99f57d91bfa399a7a108cd8e2a30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318b3f1584160298b2e2734283eb424f83b99f57d91bfa399a7a108cd8e2a30c->enter($__internal_318b3f1584160298b2e2734283eb424f83b99f57d91bfa399a7a108cd8e2a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b72e28a4f0b473bf2760006d14c4d3b512fb2d8db8ba76bd0791a8eba7308fc->leave($__internal_0b72e28a4f0b473bf2760006d14c4d3b512fb2d8db8ba76bd0791a8eba7308fc_prof);

        
        $__internal_318b3f1584160298b2e2734283eb424f83b99f57d91bfa399a7a108cd8e2a30c->leave($__internal_318b3f1584160298b2e2734283eb424f83b99f57d91bfa399a7a108cd8e2a30c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb527407741b9a73df6d7e212aa532968c10fbdda55a6f207d60abbb1106ac21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb527407741b9a73df6d7e212aa532968c10fbdda55a6f207d60abbb1106ac21->enter($__internal_fb527407741b9a73df6d7e212aa532968c10fbdda55a6f207d60abbb1106ac21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7e99016e0f6af3439e5bfac7c499ef8bb0101638e6bc7cc41ec76618e31d7993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e99016e0f6af3439e5bfac7c499ef8bb0101638e6bc7cc41ec76618e31d7993->enter($__internal_7e99016e0f6af3439e5bfac7c499ef8bb0101638e6bc7cc41ec76618e31d7993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_7e99016e0f6af3439e5bfac7c499ef8bb0101638e6bc7cc41ec76618e31d7993->leave($__internal_7e99016e0f6af3439e5bfac7c499ef8bb0101638e6bc7cc41ec76618e31d7993_prof);

        
        $__internal_fb527407741b9a73df6d7e212aa532968c10fbdda55a6f207d60abbb1106ac21->leave($__internal_fb527407741b9a73df6d7e212aa532968c10fbdda55a6f207d60abbb1106ac21_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
