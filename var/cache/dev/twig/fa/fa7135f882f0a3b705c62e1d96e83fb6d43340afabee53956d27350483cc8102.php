<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_d52ab007dcc1684c06afc63e40e95db65f3a8ad2d9ffa3d6f1088cbb7b2b2486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad65dd533ce4652a8e2e38671311cc497c044d24d44838761b52a5f969f4bdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad65dd533ce4652a8e2e38671311cc497c044d24d44838761b52a5f969f4bdc8->enter($__internal_ad65dd533ce4652a8e2e38671311cc497c044d24d44838761b52a5f969f4bdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_0fbbf3db33e012e64e3ff876b45ec2cf4350aa818d1c45781f11bddc15780450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbbf3db33e012e64e3ff876b45ec2cf4350aa818d1c45781f11bddc15780450->enter($__internal_0fbbf3db33e012e64e3ff876b45ec2cf4350aa818d1c45781f11bddc15780450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad65dd533ce4652a8e2e38671311cc497c044d24d44838761b52a5f969f4bdc8->leave($__internal_ad65dd533ce4652a8e2e38671311cc497c044d24d44838761b52a5f969f4bdc8_prof);

        
        $__internal_0fbbf3db33e012e64e3ff876b45ec2cf4350aa818d1c45781f11bddc15780450->leave($__internal_0fbbf3db33e012e64e3ff876b45ec2cf4350aa818d1c45781f11bddc15780450_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
