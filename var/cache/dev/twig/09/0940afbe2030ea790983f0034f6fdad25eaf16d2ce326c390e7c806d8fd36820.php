<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_ea37fa9335847fb4bcf14e0749a0ffb36a3c450db7721ff23b283ec6e09afc03 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8220181453049b54414d4199bcdf04975641cc855e1830cbbbdd562091be1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8220181453049b54414d4199bcdf04975641cc855e1830cbbbdd562091be1d2->enter($__internal_a8220181453049b54414d4199bcdf04975641cc855e1830cbbbdd562091be1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_907be1a01079b6f69613b9b7a91fdb46e824788d677d460a54f446c7793d8927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907be1a01079b6f69613b9b7a91fdb46e824788d677d460a54f446c7793d8927->enter($__internal_907be1a01079b6f69613b9b7a91fdb46e824788d677d460a54f446c7793d8927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8220181453049b54414d4199bcdf04975641cc855e1830cbbbdd562091be1d2->leave($__internal_a8220181453049b54414d4199bcdf04975641cc855e1830cbbbdd562091be1d2_prof);

        
        $__internal_907be1a01079b6f69613b9b7a91fdb46e824788d677d460a54f446c7793d8927->leave($__internal_907be1a01079b6f69613b9b7a91fdb46e824788d677d460a54f446c7793d8927_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_30392cb5e8bfdc0560be4eba1316d0fc63d5a06024dc4dd21ec1de01cf9ea741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30392cb5e8bfdc0560be4eba1316d0fc63d5a06024dc4dd21ec1de01cf9ea741->enter($__internal_30392cb5e8bfdc0560be4eba1316d0fc63d5a06024dc4dd21ec1de01cf9ea741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a5c23b038dd75402bece02e7f618add0c20a1e41356cef62286b5b4f365839d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c23b038dd75402bece02e7f618add0c20a1e41356cef62286b5b4f365839d1->enter($__internal_a5c23b038dd75402bece02e7f618add0c20a1e41356cef62286b5b4f365839d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf(($context["valueFormat"] ?? $this->getContext($context, "valueFormat")), ($context["value"] ?? $this->getContext($context, "value"))), array(), ($context["translationDomain"] ?? $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_a5c23b038dd75402bece02e7f618add0c20a1e41356cef62286b5b4f365839d1->leave($__internal_a5c23b038dd75402bece02e7f618add0c20a1e41356cef62286b5b4f365839d1_prof);

        
        $__internal_30392cb5e8bfdc0560be4eba1316d0fc63d5a06024dc4dd21ec1de01cf9ea741->leave($__internal_30392cb5e8bfdc0560be4eba1316d0fc63d5a06024dc4dd21ec1de01cf9ea741_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
