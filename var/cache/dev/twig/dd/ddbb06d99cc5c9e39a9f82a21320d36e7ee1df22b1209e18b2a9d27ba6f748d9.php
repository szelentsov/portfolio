<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_515b982391320903ba3f436c371350c8e7421173aff8be19798ca6190d820780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb5b19d58cd40f5b75af19e0e9ebe93bf5a83c5fc5d7604a9657cdb07dfc2cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5b19d58cd40f5b75af19e0e9ebe93bf5a83c5fc5d7604a9657cdb07dfc2cd1->enter($__internal_fb5b19d58cd40f5b75af19e0e9ebe93bf5a83c5fc5d7604a9657cdb07dfc2cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_16cadcd9f5d430b56370588ece3d3d78108854b96f0e330871f548ff5172252e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cadcd9f5d430b56370588ece3d3d78108854b96f0e330871f548ff5172252e->enter($__internal_16cadcd9f5d430b56370588ece3d3d78108854b96f0e330871f548ff5172252e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_fb5b19d58cd40f5b75af19e0e9ebe93bf5a83c5fc5d7604a9657cdb07dfc2cd1->leave($__internal_fb5b19d58cd40f5b75af19e0e9ebe93bf5a83c5fc5d7604a9657cdb07dfc2cd1_prof);

        
        $__internal_16cadcd9f5d430b56370588ece3d3d78108854b96f0e330871f548ff5172252e->leave($__internal_16cadcd9f5d430b56370588ece3d3d78108854b96f0e330871f548ff5172252e_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_023aaf8c0408dcad11443a9b3a90063097335e031271a7fa2802f5e446fc2782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023aaf8c0408dcad11443a9b3a90063097335e031271a7fa2802f5e446fc2782->enter($__internal_023aaf8c0408dcad11443a9b3a90063097335e031271a7fa2802f5e446fc2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_d3c50d13585d2555bc9cfdfa90ea52329086493cbc00d00f3db7e6832f996566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c50d13585d2555bc9cfdfa90ea52329086493cbc00d00f3db7e6832f996566->enter($__internal_d3c50d13585d2555bc9cfdfa90ea52329086493cbc00d00f3db7e6832f996566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_d3c50d13585d2555bc9cfdfa90ea52329086493cbc00d00f3db7e6832f996566->leave($__internal_d3c50d13585d2555bc9cfdfa90ea52329086493cbc00d00f3db7e6832f996566_prof);

        
        $__internal_023aaf8c0408dcad11443a9b3a90063097335e031271a7fa2802f5e446fc2782->leave($__internal_023aaf8c0408dcad11443a9b3a90063097335e031271a7fa2802f5e446fc2782_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_01dce4b4431bd67761cd6515be83f80004fbfc475aaeea3174a753a30ffd41e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dce4b4431bd67761cd6515be83f80004fbfc475aaeea3174a753a30ffd41e0->enter($__internal_01dce4b4431bd67761cd6515be83f80004fbfc475aaeea3174a753a30ffd41e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_ebd245334e6abb285be0394082ad5345d6acc7e5c38960c0dedcf315767904ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd245334e6abb285be0394082ad5345d6acc7e5c38960c0dedcf315767904ab->enter($__internal_ebd245334e6abb285be0394082ad5345d6acc7e5c38960c0dedcf315767904ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_ebd245334e6abb285be0394082ad5345d6acc7e5c38960c0dedcf315767904ab->leave($__internal_ebd245334e6abb285be0394082ad5345d6acc7e5c38960c0dedcf315767904ab_prof);

        
        $__internal_01dce4b4431bd67761cd6515be83f80004fbfc475aaeea3174a753a30ffd41e0->leave($__internal_01dce4b4431bd67761cd6515be83f80004fbfc475aaeea3174a753a30ffd41e0_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_183b1effec3ff60cd0c6a8410fe84fb619b8a3a4d85899b2cacfe5e7f356a94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183b1effec3ff60cd0c6a8410fe84fb619b8a3a4d85899b2cacfe5e7f356a94a->enter($__internal_183b1effec3ff60cd0c6a8410fe84fb619b8a3a4d85899b2cacfe5e7f356a94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_bea6fc877e64038ba787a56e3071f9ea439c3a9575bbe6b8fad02fcdf36eb941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea6fc877e64038ba787a56e3071f9ea439c3a9575bbe6b8fad02fcdf36eb941->enter($__internal_bea6fc877e64038ba787a56e3071f9ea439c3a9575bbe6b8fad02fcdf36eb941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_bea6fc877e64038ba787a56e3071f9ea439c3a9575bbe6b8fad02fcdf36eb941->leave($__internal_bea6fc877e64038ba787a56e3071f9ea439c3a9575bbe6b8fad02fcdf36eb941_prof);

        
        $__internal_183b1effec3ff60cd0c6a8410fe84fb619b8a3a4d85899b2cacfe5e7f356a94a->leave($__internal_183b1effec3ff60cd0c6a8410fe84fb619b8a3a4d85899b2cacfe5e7f356a94a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
