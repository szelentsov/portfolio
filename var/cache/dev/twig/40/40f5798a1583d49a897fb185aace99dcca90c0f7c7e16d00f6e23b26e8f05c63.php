<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_ff9eacf7d99b16a6a825cb43910d6c55c6fe8063cbc83a2065c4387a1e190f4e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9fd500a27545f39762647169d18d0e8b29d26678f2409ea50f078892917c5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fd500a27545f39762647169d18d0e8b29d26678f2409ea50f078892917c5b2->enter($__internal_a9fd500a27545f39762647169d18d0e8b29d26678f2409ea50f078892917c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_28a59e5dedf3ee205a0feb0e811bf66179651581bde376190299fe3e976eca43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a59e5dedf3ee205a0feb0e811bf66179651581bde376190299fe3e976eca43->enter($__internal_28a59e5dedf3ee205a0feb0e811bf66179651581bde376190299fe3e976eca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9fd500a27545f39762647169d18d0e8b29d26678f2409ea50f078892917c5b2->leave($__internal_a9fd500a27545f39762647169d18d0e8b29d26678f2409ea50f078892917c5b2_prof);

        
        $__internal_28a59e5dedf3ee205a0feb0e811bf66179651581bde376190299fe3e976eca43->leave($__internal_28a59e5dedf3ee205a0feb0e811bf66179651581bde376190299fe3e976eca43_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
