<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_053cca76b320aa254f5c764440a9c65058c3a94b225c3cfc8bf0433dc4366c45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23ad13a0d12060446b079d927af3eed815c4a2d941774eaa160561614ebcda12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ad13a0d12060446b079d927af3eed815c4a2d941774eaa160561614ebcda12->enter($__internal_23ad13a0d12060446b079d927af3eed815c4a2d941774eaa160561614ebcda12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_eb56e2828a0d366f73569f5f0db19980b08e351b39476a0b09776d0d04b7a099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb56e2828a0d366f73569f5f0db19980b08e351b39476a0b09776d0d04b7a099->enter($__internal_eb56e2828a0d366f73569f5f0db19980b08e351b39476a0b09776d0d04b7a099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ad13a0d12060446b079d927af3eed815c4a2d941774eaa160561614ebcda12->leave($__internal_23ad13a0d12060446b079d927af3eed815c4a2d941774eaa160561614ebcda12_prof);

        
        $__internal_eb56e2828a0d366f73569f5f0db19980b08e351b39476a0b09776d0d04b7a099->leave($__internal_eb56e2828a0d366f73569f5f0db19980b08e351b39476a0b09776d0d04b7a099_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
