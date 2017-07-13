<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_d6eafdb72a7d330de227d84f052af1405fe8ee74a64532b6b63bfd5bbade760c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a73defe11558640264808fa4ed50c1b12f419dbf0ce8e15c546f8cb978cadee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a73defe11558640264808fa4ed50c1b12f419dbf0ce8e15c546f8cb978cadee->enter($__internal_1a73defe11558640264808fa4ed50c1b12f419dbf0ce8e15c546f8cb978cadee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_cf571753329b8b07c5d97f28bf8d2c81ff1119f034c6f7e5b18af137e67d2621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf571753329b8b07c5d97f28bf8d2c81ff1119f034c6f7e5b18af137e67d2621->enter($__internal_cf571753329b8b07c5d97f28bf8d2c81ff1119f034c6f7e5b18af137e67d2621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a73defe11558640264808fa4ed50c1b12f419dbf0ce8e15c546f8cb978cadee->leave($__internal_1a73defe11558640264808fa4ed50c1b12f419dbf0ce8e15c546f8cb978cadee_prof);

        
        $__internal_cf571753329b8b07c5d97f28bf8d2c81ff1119f034c6f7e5b18af137e67d2621->leave($__internal_cf571753329b8b07c5d97f28bf8d2c81ff1119f034c6f7e5b18af137e67d2621_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_cba58b2a3da927553012b91082281e932193a8e793727203b47718be54bcb46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba58b2a3da927553012b91082281e932193a8e793727203b47718be54bcb46c->enter($__internal_cba58b2a3da927553012b91082281e932193a8e793727203b47718be54bcb46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_117ab000d7629ae2e4e6071268e15783e12aaa412bd421f7e5f3899e1ece3bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117ab000d7629ae2e4e6071268e15783e12aaa412bd421f7e5f3899e1ece3bbd->enter($__internal_117ab000d7629ae2e4e6071268e15783e12aaa412bd421f7e5f3899e1ece3bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_117ab000d7629ae2e4e6071268e15783e12aaa412bd421f7e5f3899e1ece3bbd->leave($__internal_117ab000d7629ae2e4e6071268e15783e12aaa412bd421f7e5f3899e1ece3bbd_prof);

        
        $__internal_cba58b2a3da927553012b91082281e932193a8e793727203b47718be54bcb46c->leave($__internal_cba58b2a3da927553012b91082281e932193a8e793727203b47718be54bcb46c_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_e3c7c04e920a5a73c4c5237e6b592eb201ffb2b6b86f962894e0cd494db611fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c7c04e920a5a73c4c5237e6b592eb201ffb2b6b86f962894e0cd494db611fd->enter($__internal_e3c7c04e920a5a73c4c5237e6b592eb201ffb2b6b86f962894e0cd494db611fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_e1f7cb25848c60c0a2e69ae41dc1bb0824b4f929bfa846d95433f2becb0ea83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f7cb25848c60c0a2e69ae41dc1bb0824b4f929bfa846d95433f2becb0ea83d->enter($__internal_e1f7cb25848c60c0a2e69ae41dc1bb0824b4f929bfa846d95433f2becb0ea83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_e1f7cb25848c60c0a2e69ae41dc1bb0824b4f929bfa846d95433f2becb0ea83d->leave($__internal_e1f7cb25848c60c0a2e69ae41dc1bb0824b4f929bfa846d95433f2becb0ea83d_prof);

        
        $__internal_e3c7c04e920a5a73c4c5237e6b592eb201ffb2b6b86f962894e0cd494db611fd->leave($__internal_e3c7c04e920a5a73c4c5237e6b592eb201ffb2b6b86f962894e0cd494db611fd_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_f336a4fa98bcab12fb3384d2cf777fd0639884614642ac38aeaed678903d2e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f336a4fa98bcab12fb3384d2cf777fd0639884614642ac38aeaed678903d2e2e->enter($__internal_f336a4fa98bcab12fb3384d2cf777fd0639884614642ac38aeaed678903d2e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_53d4c87e36781d79767b24ee75bfb232f2c8a92a6baea71177eae9d54a97464a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d4c87e36781d79767b24ee75bfb232f2c8a92a6baea71177eae9d54a97464a->enter($__internal_53d4c87e36781d79767b24ee75bfb232f2c8a92a6baea71177eae9d54a97464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53d4c87e36781d79767b24ee75bfb232f2c8a92a6baea71177eae9d54a97464a->leave($__internal_53d4c87e36781d79767b24ee75bfb232f2c8a92a6baea71177eae9d54a97464a_prof);

        
        $__internal_f336a4fa98bcab12fb3384d2cf777fd0639884614642ac38aeaed678903d2e2e->leave($__internal_f336a4fa98bcab12fb3384d2cf777fd0639884614642ac38aeaed678903d2e2e_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_4c18a5eb6fd429039fbf7b01b1c562a47b6818914c04b69a5a28b779ca974661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c18a5eb6fd429039fbf7b01b1c562a47b6818914c04b69a5a28b779ca974661->enter($__internal_4c18a5eb6fd429039fbf7b01b1c562a47b6818914c04b69a5a28b779ca974661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_c4089c9b3197d39a4a25c09ab99123bf58681f0858fdd3e82892d47fc91eff4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4089c9b3197d39a4a25c09ab99123bf58681f0858fdd3e82892d47fc91eff4f->enter($__internal_c4089c9b3197d39a4a25c09ab99123bf58681f0858fdd3e82892d47fc91eff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4089c9b3197d39a4a25c09ab99123bf58681f0858fdd3e82892d47fc91eff4f->leave($__internal_c4089c9b3197d39a4a25c09ab99123bf58681f0858fdd3e82892d47fc91eff4f_prof);

        
        $__internal_4c18a5eb6fd429039fbf7b01b1c562a47b6818914c04b69a5a28b779ca974661->leave($__internal_4c18a5eb6fd429039fbf7b01b1c562a47b6818914c04b69a5a28b779ca974661_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_33a9d7525fa1353d9f718a47a1c8572ebb8f34007986748f504d3116ec24005c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a9d7525fa1353d9f718a47a1c8572ebb8f34007986748f504d3116ec24005c->enter($__internal_33a9d7525fa1353d9f718a47a1c8572ebb8f34007986748f504d3116ec24005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_42cddd9c9971d18817573ff17b1095eb6af6648a68e0435e6a95095609d39c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cddd9c9971d18817573ff17b1095eb6af6648a68e0435e6a95095609d39c3f->enter($__internal_42cddd9c9971d18817573ff17b1095eb6af6648a68e0435e6a95095609d39c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_42cddd9c9971d18817573ff17b1095eb6af6648a68e0435e6a95095609d39c3f->leave($__internal_42cddd9c9971d18817573ff17b1095eb6af6648a68e0435e6a95095609d39c3f_prof);

        
        $__internal_33a9d7525fa1353d9f718a47a1c8572ebb8f34007986748f504d3116ec24005c->leave($__internal_33a9d7525fa1353d9f718a47a1c8572ebb8f34007986748f504d3116ec24005c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
