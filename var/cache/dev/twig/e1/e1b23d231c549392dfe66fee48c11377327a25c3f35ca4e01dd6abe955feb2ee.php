<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_5e9e5e480304bac72fdf6fd4ea7c19ba1d726eb6bf774104ae6278d450416f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_603c8e762ac13bd239a9b971463ce43238cec4ae5614211bdfe28cd9efa987fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603c8e762ac13bd239a9b971463ce43238cec4ae5614211bdfe28cd9efa987fd->enter($__internal_603c8e762ac13bd239a9b971463ce43238cec4ae5614211bdfe28cd9efa987fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_5bd1350b3a6287dc7129012fe9d5f93dd742c305f91de00a5bf32e185db0d3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd1350b3a6287dc7129012fe9d5f93dd742c305f91de00a5bf32e185db0d3ef->enter($__internal_5bd1350b3a6287dc7129012fe9d5f93dd742c305f91de00a5bf32e185db0d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603c8e762ac13bd239a9b971463ce43238cec4ae5614211bdfe28cd9efa987fd->leave($__internal_603c8e762ac13bd239a9b971463ce43238cec4ae5614211bdfe28cd9efa987fd_prof);

        
        $__internal_5bd1350b3a6287dc7129012fe9d5f93dd742c305f91de00a5bf32e185db0d3ef->leave($__internal_5bd1350b3a6287dc7129012fe9d5f93dd742c305f91de00a5bf32e185db0d3ef_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b3a6982d8e1422a8a04e01fb635dd2d72a68580d9c1cf825ef2bfb230991ee2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a6982d8e1422a8a04e01fb635dd2d72a68580d9c1cf825ef2bfb230991ee2a->enter($__internal_b3a6982d8e1422a8a04e01fb635dd2d72a68580d9c1cf825ef2bfb230991ee2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9599d49fb04ff75e005fcb42855a266d0fd9ac5925e0ddc76e41c5661fbdda2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9599d49fb04ff75e005fcb42855a266d0fd9ac5925e0ddc76e41c5661fbdda2b->enter($__internal_9599d49fb04ff75e005fcb42855a266d0fd9ac5925e0ddc76e41c5661fbdda2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 23
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "inline", array())))) {
                    echo "<br>";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9599d49fb04ff75e005fcb42855a266d0fd9ac5925e0ddc76e41c5661fbdda2b->leave($__internal_9599d49fb04ff75e005fcb42855a266d0fd9ac5925e0ddc76e41c5661fbdda2b_prof);

        
        $__internal_b3a6982d8e1422a8a04e01fb635dd2d72a68580d9c1cf825ef2bfb230991ee2a->leave($__internal_b3a6982d8e1422a8a04e01fb635dd2d72a68580d9c1cf825ef2bfb230991ee2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  91 => 23,  89 => 22,  86 => 21,  78 => 19,  70 => 17,  67 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% for key, val in value %}
        {% if field_description.options.safe %}
            [{{ key }} => {{ val|raw }}]
        {% else %}
            [{{ key }} => {{ val }}]
        {% endif %}

        {% if not loop.last %}
            {% if field_description.options.inline is not defined or false == field_description.options.inline %}<br>{% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
