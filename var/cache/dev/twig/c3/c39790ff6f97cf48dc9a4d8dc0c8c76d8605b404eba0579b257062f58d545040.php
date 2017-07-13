<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_a078742b27b73a36e6db3b31d08a372b9a68d6a76179b6727c39c39cae956296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07ff5c2b27ac6e1e4e712300c368643819231b47978711fd9cec5e81d3b31a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ff5c2b27ac6e1e4e712300c368643819231b47978711fd9cec5e81d3b31a8f->enter($__internal_07ff5c2b27ac6e1e4e712300c368643819231b47978711fd9cec5e81d3b31a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_cd4a66b5422dd32234f023e477baf64f088b2553fd8844f80bf0d10d6e718f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a66b5422dd32234f023e477baf64f088b2553fd8844f80bf0d10d6e718f13->enter($__internal_cd4a66b5422dd32234f023e477baf64f088b2553fd8844f80bf0d10d6e718f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter(($context["is_diff"] ?? $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_07ff5c2b27ac6e1e4e712300c368643819231b47978711fd9cec5e81d3b31a8f->leave($__internal_07ff5c2b27ac6e1e4e712300c368643819231b47978711fd9cec5e81d3b31a8f_prof);

        
        $__internal_cd4a66b5422dd32234f023e477baf64f088b2553fd8844f80bf0d10d6e718f13->leave($__internal_cd4a66b5422dd32234f023e477baf64f088b2553fd8844f80bf0d10d6e718f13_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_cf93ce8f0037e6fa6d5d713a263b724a29610cd21e099a2919e662374585cbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf93ce8f0037e6fa6d5d713a263b724a29610cd21e099a2919e662374585cbbe->enter($__internal_cf93ce8f0037e6fa6d5d713a263b724a29610cd21e099a2919e662374585cbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_3c80212051144e956a13085d3e083942f7611bee6907d432e1b780ae37b4b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c80212051144e956a13085d3e083942f7611bee6907d432e1b780ae37b4b64e->enter($__internal_3c80212051144e956a13085d3e083942f7611bee6907d432e1b780ae37b4b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_3c80212051144e956a13085d3e083942f7611bee6907d432e1b780ae37b4b64e->leave($__internal_3c80212051144e956a13085d3e083942f7611bee6907d432e1b780ae37b4b64e_prof);

        
        $__internal_cf93ce8f0037e6fa6d5d713a263b724a29610cd21e099a2919e662374585cbbe->leave($__internal_cf93ce8f0037e6fa6d5d713a263b724a29610cd21e099a2919e662374585cbbe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_28e885dd612c5438eeb3986e2636797f0314feb2fd417d29e74f3b2d7000c709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e885dd612c5438eeb3986e2636797f0314feb2fd417d29e74f3b2d7000c709->enter($__internal_28e885dd612c5438eeb3986e2636797f0314feb2fd417d29e74f3b2d7000c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c907319123f4fe0f74b7029ab78ae814d897a148fcdb6d906bea42c90791c834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c907319123f4fe0f74b7029ab78ae814d897a148fcdb6d906bea42c90791c834->enter($__internal_c907319123f4fe0f74b7029ab78ae814d897a148fcdb6d906bea42c90791c834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c907319123f4fe0f74b7029ab78ae814d897a148fcdb6d906bea42c90791c834->leave($__internal_c907319123f4fe0f74b7029ab78ae814d897a148fcdb6d906bea42c90791c834_prof);

        
        $__internal_28e885dd612c5438eeb3986e2636797f0314feb2fd417d29e74f3b2d7000c709->leave($__internal_28e885dd612c5438eeb3986e2636797f0314feb2fd417d29e74f3b2d7000c709_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_96e26dde72b851620099e62ab4e4af42544c4b8298ea9dec380ef2702bfedd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e26dde72b851620099e62ab4e4af42544c4b8298ea9dec380ef2702bfedd71->enter($__internal_96e26dde72b851620099e62ab4e4af42544c4b8298ea9dec380ef2702bfedd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_6e33558fddd2cdba86634a25c78bb7f31e939583f68315107bdab5deca79b236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e33558fddd2cdba86634a25c78bb7f31e939583f68315107bdab5deca79b236->enter($__internal_6e33558fddd2cdba86634a25c78bb7f31e939583f68315107bdab5deca79b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo ($context["value"] ?? $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_6e33558fddd2cdba86634a25c78bb7f31e939583f68315107bdab5deca79b236->leave($__internal_6e33558fddd2cdba86634a25c78bb7f31e939583f68315107bdab5deca79b236_prof);

        
        $__internal_96e26dde72b851620099e62ab4e4af42544c4b8298ea9dec380ef2702bfedd71->leave($__internal_96e26dde72b851620099e62ab4e4af42544c4b8298ea9dec380ef2702bfedd71_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_8762ea273f5d79a52e09c40d8f36f3e456b2542c78f20a511620a6c5145f751b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8762ea273f5d79a52e09c40d8f36f3e456b2542c78f20a511620a6c5145f751b->enter($__internal_8762ea273f5d79a52e09c40d8f36f3e456b2542c78f20a511620a6c5145f751b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_1aabc70ce7f039c4c501b7559a7f38e293363d81b1a4d0f9587152e9a7a7cf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aabc70ce7f039c4c501b7559a7f38e293363d81b1a4d0f9587152e9a7a7cf9c->enter($__internal_1aabc70ce7f039c4c501b7559a7f38e293363d81b1a4d0f9587152e9a7a7cf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_1aabc70ce7f039c4c501b7559a7f38e293363d81b1a4d0f9587152e9a7a7cf9c->leave($__internal_1aabc70ce7f039c4c501b7559a7f38e293363d81b1a4d0f9587152e9a7a7cf9c_prof);

        
        $__internal_8762ea273f5d79a52e09c40d8f36f3e456b2542c78f20a511620a6c5145f751b->leave($__internal_8762ea273f5d79a52e09c40d8f36f3e456b2542c78f20a511620a6c5145f751b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
