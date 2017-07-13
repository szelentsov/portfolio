<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_5e573dd684d383ba32fc81f3f17ecee6ee82a07a2107a17183841a5b4adc0e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94536adb994c9c1493a39bb2c91ee327d9fd62cd87a190c1dc9a979a8fe89e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94536adb994c9c1493a39bb2c91ee327d9fd62cd87a190c1dc9a979a8fe89e08->enter($__internal_94536adb994c9c1493a39bb2c91ee327d9fd62cd87a190c1dc9a979a8fe89e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_080a9c4c08b9fbd17479c58e5cef074d1fae52203ac9bfae89ec736b22162d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080a9c4c08b9fbd17479c58e5cef074d1fae52203ac9bfae89ec736b22162d43->enter($__internal_080a9c4c08b9fbd17479c58e5cef074d1fae52203ac9bfae89ec736b22162d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94536adb994c9c1493a39bb2c91ee327d9fd62cd87a190c1dc9a979a8fe89e08->leave($__internal_94536adb994c9c1493a39bb2c91ee327d9fd62cd87a190c1dc9a979a8fe89e08_prof);

        
        $__internal_080a9c4c08b9fbd17479c58e5cef074d1fae52203ac9bfae89ec736b22162d43->leave($__internal_080a9c4c08b9fbd17479c58e5cef074d1fae52203ac9bfae89ec736b22162d43_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
