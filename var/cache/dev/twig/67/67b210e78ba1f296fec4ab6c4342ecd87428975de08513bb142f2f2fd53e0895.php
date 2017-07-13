<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_05ffa4011de3393a5827ab47f5c8bbabbb0c720a8dd1ad4dc529e6f077916b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca6d8e702311a4fa417237fbb8006ba1da01b8b6b098670c00188326d9be370a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6d8e702311a4fa417237fbb8006ba1da01b8b6b098670c00188326d9be370a->enter($__internal_ca6d8e702311a4fa417237fbb8006ba1da01b8b6b098670c00188326d9be370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_96107acc73ff5075087d9bb45f99f718117056e900e3a3f7d4c80d3e3125bb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96107acc73ff5075087d9bb45f99f718117056e900e3a3f7d4c80d3e3125bb8a->enter($__internal_96107acc73ff5075087d9bb45f99f718117056e900e3a3f7d4c80d3e3125bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_ca6d8e702311a4fa417237fbb8006ba1da01b8b6b098670c00188326d9be370a->leave($__internal_ca6d8e702311a4fa417237fbb8006ba1da01b8b6b098670c00188326d9be370a_prof);

        
        $__internal_96107acc73ff5075087d9bb45f99f718117056e900e3a3f7d4c80d3e3125bb8a->leave($__internal_96107acc73ff5075087d9bb45f99f718117056e900e3a3f7d4c80d3e3125bb8a_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_d0cd5f41b616f7a5f76d76bc695c6e6d09eff6b47eb52392502d65a697b25c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cd5f41b616f7a5f76d76bc695c6e6d09eff6b47eb52392502d65a697b25c55->enter($__internal_d0cd5f41b616f7a5f76d76bc695c6e6d09eff6b47eb52392502d65a697b25c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_e16094e1c8f6a8caf049005e6fe6f2feafd0e2809d0603ecbc911b8f6c52dc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16094e1c8f6a8caf049005e6fe6f2feafd0e2809d0603ecbc911b8f6c52dc66->enter($__internal_e16094e1c8f6a8caf049005e6fe6f2feafd0e2809d0603ecbc911b8f6c52dc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((($context["no_padding"] ?? $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e16094e1c8f6a8caf049005e6fe6f2feafd0e2809d0603ecbc911b8f6c52dc66->leave($__internal_e16094e1c8f6a8caf049005e6fe6f2feafd0e2809d0603ecbc911b8f6c52dc66_prof);

        
        $__internal_d0cd5f41b616f7a5f76d76bc695c6e6d09eff6b47eb52392502d65a697b25c55->leave($__internal_d0cd5f41b616f7a5f76d76bc695c6e6d09eff6b47eb52392502d65a697b25c55_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_7ba8b6980879bacd7c3e0312d338565ec9f72b17201ee61697c2a3603b7fed13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba8b6980879bacd7c3e0312d338565ec9f72b17201ee61697c2a3603b7fed13->enter($__internal_7ba8b6980879bacd7c3e0312d338565ec9f72b17201ee61697c2a3603b7fed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_856deff02fa81105552c4f14a6fde606e6a6fccb52f908d46443536977b83f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856deff02fa81105552c4f14a6fde606e6a6fccb52f908d46443536977b83f87->enter($__internal_856deff02fa81105552c4f14a6fde606e6a6fccb52f908d46443536977b83f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_856deff02fa81105552c4f14a6fde606e6a6fccb52f908d46443536977b83f87->leave($__internal_856deff02fa81105552c4f14a6fde606e6a6fccb52f908d46443536977b83f87_prof);

        
        $__internal_7ba8b6980879bacd7c3e0312d338565ec9f72b17201ee61697c2a3603b7fed13->leave($__internal_7ba8b6980879bacd7c3e0312d338565ec9f72b17201ee61697c2a3603b7fed13_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_c785af5586902eb4331a3bd2a31bf3397fea5bab76cd62ab9207388e48eb879c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c785af5586902eb4331a3bd2a31bf3397fea5bab76cd62ab9207388e48eb879c->enter($__internal_c785af5586902eb4331a3bd2a31bf3397fea5bab76cd62ab9207388e48eb879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_226d76793bc88f3da039eed7fde3ef1d4471488360a8644a2b1b18df9e331506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226d76793bc88f3da039eed7fde3ef1d4471488360a8644a2b1b18df9e331506->enter($__internal_226d76793bc88f3da039eed7fde3ef1d4471488360a8644a2b1b18df9e331506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_226d76793bc88f3da039eed7fde3ef1d4471488360a8644a2b1b18df9e331506->leave($__internal_226d76793bc88f3da039eed7fde3ef1d4471488360a8644a2b1b18df9e331506_prof);

        
        $__internal_c785af5586902eb4331a3bd2a31bf3397fea5bab76cd62ab9207388e48eb879c->leave($__internal_c785af5586902eb4331a3bd2a31bf3397fea5bab76cd62ab9207388e48eb879c_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_718d6c6535c7bfd2484f73a2423aca419a9c7cdaa29a63184e907e9c59dc7799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_718d6c6535c7bfd2484f73a2423aca419a9c7cdaa29a63184e907e9c59dc7799->enter($__internal_718d6c6535c7bfd2484f73a2423aca419a9c7cdaa29a63184e907e9c59dc7799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_bed1b036eedcce9ac73f9e9e343a19ef1f96df978907485d14b84d36645ef036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bed1b036eedcce9ac73f9e9e343a19ef1f96df978907485d14b84d36645ef036->enter($__internal_bed1b036eedcce9ac73f9e9e343a19ef1f96df978907485d14b84d36645ef036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_bed1b036eedcce9ac73f9e9e343a19ef1f96df978907485d14b84d36645ef036->leave($__internal_bed1b036eedcce9ac73f9e9e343a19ef1f96df978907485d14b84d36645ef036_prof);

            
            $__internal_718d6c6535c7bfd2484f73a2423aca419a9c7cdaa29a63184e907e9c59dc7799->leave($__internal_718d6c6535c7bfd2484f73a2423aca419a9c7cdaa29a63184e907e9c59dc7799_prof);

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
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
