<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_5a616ea7c3f42bade56609a1c2f8da0d57543d090f45810f444d79441331de23 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a5ded27d240d2370cc5799f253bb913d01d4367a9f94c4df704bc80088593f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a5ded27d240d2370cc5799f253bb913d01d4367a9f94c4df704bc80088593f->enter($__internal_97a5ded27d240d2370cc5799f253bb913d01d4367a9f94c4df704bc80088593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_2915789188d05d038a2c7a03d012abbcc416336bd6b2b8148474a3ca92e81a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2915789188d05d038a2c7a03d012abbcc416336bd6b2b8148474a3ca92e81a1c->enter($__internal_2915789188d05d038a2c7a03d012abbcc416336bd6b2b8148474a3ca92e81a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a5ded27d240d2370cc5799f253bb913d01d4367a9f94c4df704bc80088593f->leave($__internal_97a5ded27d240d2370cc5799f253bb913d01d4367a9f94c4df704bc80088593f_prof);

        
        $__internal_2915789188d05d038a2c7a03d012abbcc416336bd6b2b8148474a3ca92e81a1c->leave($__internal_2915789188d05d038a2c7a03d012abbcc416336bd6b2b8148474a3ca92e81a1c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a339d923447c6a75342d1991591426b778d2f26a177fc1f7d1fea7191749d1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a339d923447c6a75342d1991591426b778d2f26a177fc1f7d1fea7191749d1bf->enter($__internal_a339d923447c6a75342d1991591426b778d2f26a177fc1f7d1fea7191749d1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_55fe3f9c39041e4f0068c2d617954487da8e17b3cf6b4a44dad4e002c90e0ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fe3f9c39041e4f0068c2d617954487da8e17b3cf6b4a44dad4e002c90e0ec8->enter($__internal_55fe3f9c39041e4f0068c2d617954487da8e17b3cf6b4a44dad4e002c90e0ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_55fe3f9c39041e4f0068c2d617954487da8e17b3cf6b4a44dad4e002c90e0ec8->leave($__internal_55fe3f9c39041e4f0068c2d617954487da8e17b3cf6b4a44dad4e002c90e0ec8_prof);

        
        $__internal_a339d923447c6a75342d1991591426b778d2f26a177fc1f7d1fea7191749d1bf->leave($__internal_a339d923447c6a75342d1991591426b778d2f26a177fc1f7d1fea7191749d1bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
