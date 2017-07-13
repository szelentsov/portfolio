<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_e6bebd232f261446d64012ef28e3f2d1b57ab8a313ae4efc0be8aa63f8221c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51fa4bf71a07f0c1003f66faa73d4adabcbe9e559dddc993e1452e475079c43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fa4bf71a07f0c1003f66faa73d4adabcbe9e559dddc993e1452e475079c43d->enter($__internal_51fa4bf71a07f0c1003f66faa73d4adabcbe9e559dddc993e1452e475079c43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        $__internal_0717689cbb3132cfae56a9d91031ee2ba68dfe1b982877b2b8ed985d928f84cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0717689cbb3132cfae56a9d91031ee2ba68dfe1b982877b2b8ed985d928f84cb->enter($__internal_0717689cbb3132cfae56a9d91031ee2ba68dfe1b982877b2b8ed985d928f84cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "create"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subClasses", array()))) {
                // line 14
                echo "        <li>
            <a class=\"sonata-action-element\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 22
                    echo "            <li>
                <a class=\"sonata-action-element\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
        }
        
        $__internal_51fa4bf71a07f0c1003f66faa73d4adabcbe9e559dddc993e1452e475079c43d->leave($__internal_51fa4bf71a07f0c1003f66faa73d4adabcbe9e559dddc993e1452e475079c43d_prof);

        
        $__internal_0717689cbb3132cfae56a9d91031ee2ba68dfe1b982877b2b8ed985d928f84cb->leave($__internal_0717689cbb3132cfae56a9d91031ee2ba68dfe1b982877b2b8ed985d928f84cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  61 => 25,  56 => 23,  53 => 22,  48 => 21,  41 => 17,  36 => 15,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <li>
            <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}
            </a>
        </li>
    {% else %}
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
{% endif %}
", "SonataAdminBundle:Button:create_button.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
