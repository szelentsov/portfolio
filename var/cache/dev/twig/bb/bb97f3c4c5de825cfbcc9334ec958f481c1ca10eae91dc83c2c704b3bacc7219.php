<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_589ee41a69b919bf7a8d6d73ae7b67f956679266225b6f70a541efb0534ff973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_532e321d6acf6312d396d326386ea448ad1950ace464cb6c8cd10390524fecac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532e321d6acf6312d396d326386ea448ad1950ace464cb6c8cd10390524fecac->enter($__internal_532e321d6acf6312d396d326386ea448ad1950ace464cb6c8cd10390524fecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_c042b1531ac4a0ef9a7f5d2e9e058d632c663aa7b2807720b82c89478020b39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c042b1531ac4a0ef9a7f5d2e9e058d632c663aa7b2807720b82c89478020b39a->enter($__internal_c042b1531ac4a0ef9a7f5d2e9e058d632c663aa7b2807720b82c89478020b39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532e321d6acf6312d396d326386ea448ad1950ace464cb6c8cd10390524fecac->leave($__internal_532e321d6acf6312d396d326386ea448ad1950ace464cb6c8cd10390524fecac_prof);

        
        $__internal_c042b1531ac4a0ef9a7f5d2e9e058d632c663aa7b2807720b82c89478020b39a->leave($__internal_c042b1531ac4a0ef9a7f5d2e9e058d632c663aa7b2807720b82c89478020b39a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9ffe5b69db32ce9d698ded42473ac76c67535077744ffc159f7cf47a945937cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffe5b69db32ce9d698ded42473ac76c67535077744ffc159f7cf47a945937cd->enter($__internal_9ffe5b69db32ce9d698ded42473ac76c67535077744ffc159f7cf47a945937cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_39244aa706bfd84a38f5db8bdb31fb6d1cce9003e83d8e34356c07e6121c5922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39244aa706bfd84a38f5db8bdb31fb6d1cce9003e83d8e34356c07e6121c5922->enter($__internal_39244aa706bfd84a38f5db8bdb31fb6d1cce9003e83d8e34356c07e6121c5922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_39244aa706bfd84a38f5db8bdb31fb6d1cce9003e83d8e34356c07e6121c5922->leave($__internal_39244aa706bfd84a38f5db8bdb31fb6d1cce9003e83d8e34356c07e6121c5922_prof);

        
        $__internal_9ffe5b69db32ce9d698ded42473ac76c67535077744ffc159f7cf47a945937cd->leave($__internal_9ffe5b69db32ce9d698ded42473ac76c67535077744ffc159f7cf47a945937cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
