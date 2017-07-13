<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_a5691b5bb144e78d7cebe5284f3310c4e4bbed789c2c227c09073821fa5b6415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aef0b45dc93137d4a02b490de3f9e45be7c4cddf622a66769234d67d071b4479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef0b45dc93137d4a02b490de3f9e45be7c4cddf622a66769234d67d071b4479->enter($__internal_aef0b45dc93137d4a02b490de3f9e45be7c4cddf622a66769234d67d071b4479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_fb7a2fa536153347034ed5348a68384f116f262377ce2c825360488e5edd0555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7a2fa536153347034ed5348a68384f116f262377ce2c825360488e5edd0555->enter($__internal_fb7a2fa536153347034ed5348a68384f116f262377ce2c825360488e5edd0555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["revision"] ?? $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_aef0b45dc93137d4a02b490de3f9e45be7c4cddf622a66769234d67d071b4479->leave($__internal_aef0b45dc93137d4a02b490de3f9e45be7c4cddf622a66769234d67d071b4479_prof);

        
        $__internal_fb7a2fa536153347034ed5348a68384f116f262377ce2c825360488e5edd0555->leave($__internal_fb7a2fa536153347034ed5348a68384f116f262377ce2c825360488e5edd0555_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
