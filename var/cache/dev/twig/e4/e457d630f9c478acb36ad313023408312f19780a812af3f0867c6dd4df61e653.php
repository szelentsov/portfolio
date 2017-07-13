<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_25504bfc0d8bea8c6c612814a58e05a2d866821330836893a909d3cca1e2cfda extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8591107bf35664db234f1eedf3fedd32bb4106438cef23694a9f5b17df87832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8591107bf35664db234f1eedf3fedd32bb4106438cef23694a9f5b17df87832->enter($__internal_d8591107bf35664db234f1eedf3fedd32bb4106438cef23694a9f5b17df87832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_66f857fff6cc52b9286b62e09b3af7c75ef18c164bf4d65e8ecbc9e08000b6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f857fff6cc52b9286b62e09b3af7c75ef18c164bf4d65e8ecbc9e08000b6d3->enter($__internal_66f857fff6cc52b9286b62e09b3af7c75ef18c164bf4d65e8ecbc9e08000b6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8591107bf35664db234f1eedf3fedd32bb4106438cef23694a9f5b17df87832->leave($__internal_d8591107bf35664db234f1eedf3fedd32bb4106438cef23694a9f5b17df87832_prof);

        
        $__internal_66f857fff6cc52b9286b62e09b3af7c75ef18c164bf4d65e8ecbc9e08000b6d3->leave($__internal_66f857fff6cc52b9286b62e09b3af7c75ef18c164bf4d65e8ecbc9e08000b6d3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4de0bc6585e7aa5fdb6a310d5af2d06f19ed1a886c636cd2644ab9b2ca4331fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de0bc6585e7aa5fdb6a310d5af2d06f19ed1a886c636cd2644ab9b2ca4331fc->enter($__internal_4de0bc6585e7aa5fdb6a310d5af2d06f19ed1a886c636cd2644ab9b2ca4331fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e686ee7b4e8e061f895f61da1d8f4cb89d93116025d16bf2e90b8b89600f6a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e686ee7b4e8e061f895f61da1d8f4cb89d93116025d16bf2e90b8b89600f6a3e->enter($__internal_e686ee7b4e8e061f895f61da1d8f4cb89d93116025d16bf2e90b8b89600f6a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e686ee7b4e8e061f895f61da1d8f4cb89d93116025d16bf2e90b8b89600f6a3e->leave($__internal_e686ee7b4e8e061f895f61da1d8f4cb89d93116025d16bf2e90b8b89600f6a3e_prof);

        
        $__internal_4de0bc6585e7aa5fdb6a310d5af2d06f19ed1a886c636cd2644ab9b2ca4331fc->leave($__internal_4de0bc6585e7aa5fdb6a310d5af2d06f19ed1a886c636cd2644ab9b2ca4331fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
