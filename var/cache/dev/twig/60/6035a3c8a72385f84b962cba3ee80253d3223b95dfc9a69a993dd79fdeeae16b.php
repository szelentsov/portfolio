<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_725ed6a56a61ef9e2a3483914233d13c6ef4d5cb61a46d7b7537f34373c49339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2ae90c5dbb37f2a4bbd5b8b4b26e300be9b730f595dd89e824e4380f6b64b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ae90c5dbb37f2a4bbd5b8b4b26e300be9b730f595dd89e824e4380f6b64b85->enter($__internal_f2ae90c5dbb37f2a4bbd5b8b4b26e300be9b730f595dd89e824e4380f6b64b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_ec94f527a9b4b4343e6b2362028abf186e4f4a02a5dc78bb5fb65b8a5f516040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94f527a9b4b4343e6b2362028abf186e4f4a02a5dc78bb5fb65b8a5f516040->enter($__internal_ec94f527a9b4b4343e6b2362028abf186e4f4a02a5dc78bb5fb65b8a5f516040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ae90c5dbb37f2a4bbd5b8b4b26e300be9b730f595dd89e824e4380f6b64b85->leave($__internal_f2ae90c5dbb37f2a4bbd5b8b4b26e300be9b730f595dd89e824e4380f6b64b85_prof);

        
        $__internal_ec94f527a9b4b4343e6b2362028abf186e4f4a02a5dc78bb5fb65b8a5f516040->leave($__internal_ec94f527a9b4b4343e6b2362028abf186e4f4a02a5dc78bb5fb65b8a5f516040_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8bc02d4c6c9dcb1fce29be4fe922b3f4ab6b5d1d91a8fe3957837ee0549c1b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc02d4c6c9dcb1fce29be4fe922b3f4ab6b5d1d91a8fe3957837ee0549c1b52->enter($__internal_8bc02d4c6c9dcb1fce29be4fe922b3f4ab6b5d1d91a8fe3957837ee0549c1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_66148bdd726cec56a999ae9bf23ec5b5ad0c8ef1d05a97c85f86d518e4c2febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66148bdd726cec56a999ae9bf23ec5b5ad0c8ef1d05a97c85f86d518e4c2febc->enter($__internal_66148bdd726cec56a999ae9bf23ec5b5ad0c8ef1d05a97c85f86d518e4c2febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_66148bdd726cec56a999ae9bf23ec5b5ad0c8ef1d05a97c85f86d518e4c2febc->leave($__internal_66148bdd726cec56a999ae9bf23ec5b5ad0c8ef1d05a97c85f86d518e4c2febc_prof);

        
        $__internal_8bc02d4c6c9dcb1fce29be4fe922b3f4ab6b5d1d91a8fe3957837ee0549c1b52->leave($__internal_8bc02d4c6c9dcb1fce29be4fe922b3f4ab6b5d1d91a8fe3957837ee0549c1b52_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_b3a7cd13c7eed5823233eda10638e4a219c9189fb83bafd49c8c230677d239a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a7cd13c7eed5823233eda10638e4a219c9189fb83bafd49c8c230677d239a3->enter($__internal_b3a7cd13c7eed5823233eda10638e4a219c9189fb83bafd49c8c230677d239a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_2b89bcadcba44de0dc5de94d1b53eb8197b54f6ec0c8c081b19f61a527cd1717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89bcadcba44de0dc5de94d1b53eb8197b54f6ec0c8c081b19f61a527cd1717->enter($__internal_2b89bcadcba44de0dc5de94d1b53eb8197b54f6ec0c8c081b19f61a527cd1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_2b89bcadcba44de0dc5de94d1b53eb8197b54f6ec0c8c081b19f61a527cd1717->leave($__internal_2b89bcadcba44de0dc5de94d1b53eb8197b54f6ec0c8c081b19f61a527cd1717_prof);

        
        $__internal_b3a7cd13c7eed5823233eda10638e4a219c9189fb83bafd49c8c230677d239a3->leave($__internal_b3a7cd13c7eed5823233eda10638e4a219c9189fb83bafd49c8c230677d239a3_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_fe982991be81f5c4fc4714978e08ce06dc4bfa3958cd008d20b650cf7f027609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe982991be81f5c4fc4714978e08ce06dc4bfa3958cd008d20b650cf7f027609->enter($__internal_fe982991be81f5c4fc4714978e08ce06dc4bfa3958cd008d20b650cf7f027609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_e6bf4cfb1f58c3932a54b7c590e62bd1712a799bae6f438370b72b0dc52b3f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bf4cfb1f58c3932a54b7c590e62bd1712a799bae6f438370b72b0dc52b3f58->enter($__internal_e6bf4cfb1f58c3932a54b7c590e62bd1712a799bae6f438370b72b0dc52b3f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_e6bf4cfb1f58c3932a54b7c590e62bd1712a799bae6f438370b72b0dc52b3f58->leave($__internal_e6bf4cfb1f58c3932a54b7c590e62bd1712a799bae6f438370b72b0dc52b3f58_prof);

        
        $__internal_fe982991be81f5c4fc4714978e08ce06dc4bfa3958cd008d20b650cf7f027609->leave($__internal_fe982991be81f5c4fc4714978e08ce06dc4bfa3958cd008d20b650cf7f027609_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_6126e07eff50c4a0624d0d1807362fb81ef237a42665893e153d9bdc6b0d03db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6126e07eff50c4a0624d0d1807362fb81ef237a42665893e153d9bdc6b0d03db->enter($__internal_6126e07eff50c4a0624d0d1807362fb81ef237a42665893e153d9bdc6b0d03db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_2e443823c008b74fb71c48df6b788bc471c50fdb7e1c5366d901b6c0048bc5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e443823c008b74fb71c48df6b788bc471c50fdb7e1c5366d901b6c0048bc5ac->enter($__internal_2e443823c008b74fb71c48df6b788bc471c50fdb7e1c5366d901b6c0048bc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_2e443823c008b74fb71c48df6b788bc471c50fdb7e1c5366d901b6c0048bc5ac->leave($__internal_2e443823c008b74fb71c48df6b788bc471c50fdb7e1c5366d901b6c0048bc5ac_prof);

        
        $__internal_6126e07eff50c4a0624d0d1807362fb81ef237a42665893e153d9bdc6b0d03db->leave($__internal_6126e07eff50c4a0624d0d1807362fb81ef237a42665893e153d9bdc6b0d03db_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_e24d4a16b549bff62604d57b972db41e014986758dad2e1fc4302adc3380faaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24d4a16b549bff62604d57b972db41e014986758dad2e1fc4302adc3380faaf->enter($__internal_e24d4a16b549bff62604d57b972db41e014986758dad2e1fc4302adc3380faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_19435e24505420a801a7ce52beab67e2d6bf58be70556264b3e2e454b80a60aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19435e24505420a801a7ce52beab67e2d6bf58be70556264b3e2e454b80a60aa->enter($__internal_19435e24505420a801a7ce52beab67e2d6bf58be70556264b3e2e454b80a60aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_19435e24505420a801a7ce52beab67e2d6bf58be70556264b3e2e454b80a60aa->leave($__internal_19435e24505420a801a7ce52beab67e2d6bf58be70556264b3e2e454b80a60aa_prof);

        
        $__internal_e24d4a16b549bff62604d57b972db41e014986758dad2e1fc4302adc3380faaf->leave($__internal_e24d4a16b549bff62604d57b972db41e014986758dad2e1fc4302adc3380faaf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
