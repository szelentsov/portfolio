<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_f6e8b1988b22c6e6d27a1f55945064b743f4e7d1d73771ad9b620b75fbac2cae extends Twig_Template
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
        // line 22
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7485a8c49cc4c76bf5712b194a24b1275ab94798d891e7cf6685a8e5ebb56a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7485a8c49cc4c76bf5712b194a24b1275ab94798d891e7cf6685a8e5ebb56a16->enter($__internal_7485a8c49cc4c76bf5712b194a24b1275ab94798d891e7cf6685a8e5ebb56a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_a62bd9fed75e3eeb3307088e442326db9009269cbfa15f6ae55d71284566731d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62bd9fed75e3eeb3307088e442326db9009269cbfa15f6ae55d71284566731d->enter($__internal_a62bd9fed75e3eeb3307088e442326db9009269cbfa15f6ae55d71284566731d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7485a8c49cc4c76bf5712b194a24b1275ab94798d891e7cf6685a8e5ebb56a16->leave($__internal_7485a8c49cc4c76bf5712b194a24b1275ab94798d891e7cf6685a8e5ebb56a16_prof);

        
        $__internal_a62bd9fed75e3eeb3307088e442326db9009269cbfa15f6ae55d71284566731d->leave($__internal_a62bd9fed75e3eeb3307088e442326db9009269cbfa15f6ae55d71284566731d_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_04702e491974f078ca3a03f75e0b0750269b6959a326c01cb9a67a1065d42b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04702e491974f078ca3a03f75e0b0750269b6959a326c01cb9a67a1065d42b06->enter($__internal_04702e491974f078ca3a03f75e0b0750269b6959a326c01cb9a67a1065d42b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_89454d3571b94d42da37efacf6948a9934441d7a729453412566697ea3837d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89454d3571b94d42da37efacf6948a9934441d7a729453412566697ea3837d08->enter($__internal_89454d3571b94d42da37efacf6948a9934441d7a729453412566697ea3837d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_89454d3571b94d42da37efacf6948a9934441d7a729453412566697ea3837d08->leave($__internal_89454d3571b94d42da37efacf6948a9934441d7a729453412566697ea3837d08_prof);

        
        $__internal_04702e491974f078ca3a03f75e0b0750269b6959a326c01cb9a67a1065d42b06->leave($__internal_04702e491974f078ca3a03f75e0b0750269b6959a326c01cb9a67a1065d42b06_prof);

    }

    // line 12
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_81216ce98133fe2f4942a21b9b42e281f732dc29789d7a58386b0ecb0ff9eec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_81216ce98133fe2f4942a21b9b42e281f732dc29789d7a58386b0ecb0ff9eec0->enter($__internal_81216ce98133fe2f4942a21b9b42e281f732dc29789d7a58386b0ecb0ff9eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_30bbd2440349abc9eedd56fe9361d17fa83f5cb1aee02b4aa86112b89a179023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_30bbd2440349abc9eedd56fe9361d17fa83f5cb1aee02b4aa86112b89a179023->enter($__internal_30bbd2440349abc9eedd56fe9361d17fa83f5cb1aee02b4aa86112b89a179023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->getrender_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_30bbd2440349abc9eedd56fe9361d17fa83f5cb1aee02b4aa86112b89a179023->leave($__internal_30bbd2440349abc9eedd56fe9361d17fa83f5cb1aee02b4aa86112b89a179023_prof);

            
            $__internal_81216ce98133fe2f4942a21b9b42e281f732dc29789d7a58386b0ecb0ff9eec0->leave($__internal_81216ce98133fe2f4942a21b9b42e281f732dc29789d7a58386b0ecb0ff9eec0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  98 => 17,  90 => 15,  87 => 14,  82 => 13,  64 => 12,  51 => 25,  42 => 24,  32 => 22,  30 => 11,  18 => 22,);
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
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
