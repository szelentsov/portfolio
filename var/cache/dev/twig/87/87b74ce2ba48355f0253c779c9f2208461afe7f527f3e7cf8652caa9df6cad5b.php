<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_1b326158c3031043193b36188c0871d73339d22cfbcfca6dd019d4602b0eff5a extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed103ff22e603b4090640f8b23412dcb3765bc3aa530ddca85225c526cd5c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed103ff22e603b4090640f8b23412dcb3765bc3aa530ddca85225c526cd5c0e->enter($__internal_5ed103ff22e603b4090640f8b23412dcb3765bc3aa530ddca85225c526cd5c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_1300d601690b6f13621ebb399ed7a6c0f10d64a5a1fb1b7441cdada9537212dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1300d601690b6f13621ebb399ed7a6c0f10d64a5a1fb1b7441cdada9537212dc->enter($__internal_1300d601690b6f13621ebb399ed7a6c0f10d64a5a1fb1b7441cdada9537212dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed103ff22e603b4090640f8b23412dcb3765bc3aa530ddca85225c526cd5c0e->leave($__internal_5ed103ff22e603b4090640f8b23412dcb3765bc3aa530ddca85225c526cd5c0e_prof);

        
        $__internal_1300d601690b6f13621ebb399ed7a6c0f10d64a5a1fb1b7441cdada9537212dc->leave($__internal_1300d601690b6f13621ebb399ed7a6c0f10d64a5a1fb1b7441cdada9537212dc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a05f0ce0b22731a62732ff409936ab1f4dc4cf225c1e53dc236bc577d11b2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a05f0ce0b22731a62732ff409936ab1f4dc4cf225c1e53dc236bc577d11b2a4->enter($__internal_8a05f0ce0b22731a62732ff409936ab1f4dc4cf225c1e53dc236bc577d11b2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6c6ab081b74eab1ea90df29e1e1575828bc6b8736acd408b06ec56a2a1857aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6ab081b74eab1ea90df29e1e1575828bc6b8736acd408b06ec56a2a1857aa1->enter($__internal_6c6ab081b74eab1ea90df29e1e1575828bc6b8736acd408b06ec56a2a1857aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_6c6ab081b74eab1ea90df29e1e1575828bc6b8736acd408b06ec56a2a1857aa1->leave($__internal_6c6ab081b74eab1ea90df29e1e1575828bc6b8736acd408b06ec56a2a1857aa1_prof);

        
        $__internal_8a05f0ce0b22731a62732ff409936ab1f4dc4cf225c1e53dc236bc577d11b2a4->leave($__internal_8a05f0ce0b22731a62732ff409936ab1f4dc4cf225c1e53dc236bc577d11b2a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
