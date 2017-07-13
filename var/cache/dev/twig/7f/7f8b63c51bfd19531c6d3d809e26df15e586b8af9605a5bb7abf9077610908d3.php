<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_93d7021b517da734e640b1324a0e1a69120447637bd99b05523a1438e2da31a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d43023864625dc980dbd45cf3c406541919c05b9380f49f1113cde65a12ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d43023864625dc980dbd45cf3c406541919c05b9380f49f1113cde65a12ba4->enter($__internal_77d43023864625dc980dbd45cf3c406541919c05b9380f49f1113cde65a12ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_742b5add2268f5f524c78ac1e87cc58f2dc4d7fcdf385c69813af70172b18977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742b5add2268f5f524c78ac1e87cc58f2dc4d7fcdf385c69813af70172b18977->enter($__internal_742b5add2268f5f524c78ac1e87cc58f2dc4d7fcdf385c69813af70172b18977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d43023864625dc980dbd45cf3c406541919c05b9380f49f1113cde65a12ba4->leave($__internal_77d43023864625dc980dbd45cf3c406541919c05b9380f49f1113cde65a12ba4_prof);

        
        $__internal_742b5add2268f5f524c78ac1e87cc58f2dc4d7fcdf385c69813af70172b18977->leave($__internal_742b5add2268f5f524c78ac1e87cc58f2dc4d7fcdf385c69813af70172b18977_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_45f7536d0658ad7a890d3830a58fc75b6976782561bf371a940dc35c6a1cd0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f7536d0658ad7a890d3830a58fc75b6976782561bf371a940dc35c6a1cd0a7->enter($__internal_45f7536d0658ad7a890d3830a58fc75b6976782561bf371a940dc35c6a1cd0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e4a16c2e9818a20e2faa309e32fd88efa5155588da2a7bb587ba5d39ca1f872c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a16c2e9818a20e2faa309e32fd88efa5155588da2a7bb587ba5d39ca1f872c->enter($__internal_e4a16c2e9818a20e2faa309e32fd88efa5155588da2a7bb587ba5d39ca1f872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_e4a16c2e9818a20e2faa309e32fd88efa5155588da2a7bb587ba5d39ca1f872c->leave($__internal_e4a16c2e9818a20e2faa309e32fd88efa5155588da2a7bb587ba5d39ca1f872c_prof);

        
        $__internal_45f7536d0658ad7a890d3830a58fc75b6976782561bf371a940dc35c6a1cd0a7->leave($__internal_45f7536d0658ad7a890d3830a58fc75b6976782561bf371a940dc35c6a1cd0a7_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_861a75e877c1ccc2baad93ded6621c90c924f10942f11b002a6453de846d55a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861a75e877c1ccc2baad93ded6621c90c924f10942f11b002a6453de846d55a6->enter($__internal_861a75e877c1ccc2baad93ded6621c90c924f10942f11b002a6453de846d55a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_24b3ba7fb574030c6406f2e94f598dcb63b9c00b2417dd9b4299b5ca5311589d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b3ba7fb574030c6406f2e94f598dcb63b9c00b2417dd9b4299b5ca5311589d->enter($__internal_24b3ba7fb574030c6406f2e94f598dcb63b9c00b2417dd9b4299b5ca5311589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_24b3ba7fb574030c6406f2e94f598dcb63b9c00b2417dd9b4299b5ca5311589d->leave($__internal_24b3ba7fb574030c6406f2e94f598dcb63b9c00b2417dd9b4299b5ca5311589d_prof);

        
        $__internal_861a75e877c1ccc2baad93ded6621c90c924f10942f11b002a6453de846d55a6->leave($__internal_861a75e877c1ccc2baad93ded6621c90c924f10942f11b002a6453de846d55a6_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3956f5a17beae3bb460ee52b50ea938907fa20e792a90635643dff23167ca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3956f5a17beae3bb460ee52b50ea938907fa20e792a90635643dff23167ca93->enter($__internal_d3956f5a17beae3bb460ee52b50ea938907fa20e792a90635643dff23167ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_16ad6375d8702c63b87afcf9d08c7fcc2d38cd48d5c42db0e31bdc18ab7b6483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ad6375d8702c63b87afcf9d08c7fcc2d38cd48d5c42db0e31bdc18ab7b6483->enter($__internal_16ad6375d8702c63b87afcf9d08c7fcc2d38cd48d5c42db0e31bdc18ab7b6483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !(($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["action_label"] ?? $this->getContext($context, "action_label")), array(), ($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => ($context["action_label"] ?? $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_16ad6375d8702c63b87afcf9d08c7fcc2d38cd48d5c42db0e31bdc18ab7b6483->leave($__internal_16ad6375d8702c63b87afcf9d08c7fcc2d38cd48d5c42db0e31bdc18ab7b6483_prof);

        
        $__internal_d3956f5a17beae3bb460ee52b50ea938907fa20e792a90635643dff23167ca93->leave($__internal_d3956f5a17beae3bb460ee52b50ea938907fa20e792a90635643dff23167ca93_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
