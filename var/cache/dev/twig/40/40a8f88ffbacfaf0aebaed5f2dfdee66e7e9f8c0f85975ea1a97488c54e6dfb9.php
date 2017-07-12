<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1e5409ee4b732728ec4bc4dbcc317fd0a9c85b19d25aff8cd0515c9fb3314b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1e5409ee4b732728ec4bc4dbcc317fd0a9c85b19d25aff8cd0515c9fb3314b->enter($__internal_ec1e5409ee4b732728ec4bc4dbcc317fd0a9c85b19d25aff8cd0515c9fb3314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1c4cfd61251e1cd55dbb98a3fcf234977b6450ede4589919e6d9b656260c0955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4cfd61251e1cd55dbb98a3fcf234977b6450ede4589919e6d9b656260c0955->enter($__internal_1c4cfd61251e1cd55dbb98a3fcf234977b6450ede4589919e6d9b656260c0955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1e5409ee4b732728ec4bc4dbcc317fd0a9c85b19d25aff8cd0515c9fb3314b->leave($__internal_ec1e5409ee4b732728ec4bc4dbcc317fd0a9c85b19d25aff8cd0515c9fb3314b_prof);

        
        $__internal_1c4cfd61251e1cd55dbb98a3fcf234977b6450ede4589919e6d9b656260c0955->leave($__internal_1c4cfd61251e1cd55dbb98a3fcf234977b6450ede4589919e6d9b656260c0955_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5315c90a8c821ac519e570dd86dfaddc60b39fcac4ab3fb4dd615caa7eae2028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5315c90a8c821ac519e570dd86dfaddc60b39fcac4ab3fb4dd615caa7eae2028->enter($__internal_5315c90a8c821ac519e570dd86dfaddc60b39fcac4ab3fb4dd615caa7eae2028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c60ae0029883c65b9538a7d277b098b0752b072e9c8ad281f3ba89a8794ca9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c60ae0029883c65b9538a7d277b098b0752b072e9c8ad281f3ba89a8794ca9b->enter($__internal_4c60ae0029883c65b9538a7d277b098b0752b072e9c8ad281f3ba89a8794ca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c60ae0029883c65b9538a7d277b098b0752b072e9c8ad281f3ba89a8794ca9b->leave($__internal_4c60ae0029883c65b9538a7d277b098b0752b072e9c8ad281f3ba89a8794ca9b_prof);

        
        $__internal_5315c90a8c821ac519e570dd86dfaddc60b39fcac4ab3fb4dd615caa7eae2028->leave($__internal_5315c90a8c821ac519e570dd86dfaddc60b39fcac4ab3fb4dd615caa7eae2028_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_138850ae849298458c602e08e04f172f18505809532262846b3f62cd995c88fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138850ae849298458c602e08e04f172f18505809532262846b3f62cd995c88fa->enter($__internal_138850ae849298458c602e08e04f172f18505809532262846b3f62cd995c88fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cb939c2117f59390d1522a095b9faddef9a33aa12ea4be96ad12332aded176b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb939c2117f59390d1522a095b9faddef9a33aa12ea4be96ad12332aded176b->enter($__internal_2cb939c2117f59390d1522a095b9faddef9a33aa12ea4be96ad12332aded176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2cb939c2117f59390d1522a095b9faddef9a33aa12ea4be96ad12332aded176b->leave($__internal_2cb939c2117f59390d1522a095b9faddef9a33aa12ea4be96ad12332aded176b_prof);

        
        $__internal_138850ae849298458c602e08e04f172f18505809532262846b3f62cd995c88fa->leave($__internal_138850ae849298458c602e08e04f172f18505809532262846b3f62cd995c88fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c767bf0b3db3d76198102c3bfa2b2435ffcd9b3b33162120c0931d1084f49d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c767bf0b3db3d76198102c3bfa2b2435ffcd9b3b33162120c0931d1084f49d90->enter($__internal_c767bf0b3db3d76198102c3bfa2b2435ffcd9b3b33162120c0931d1084f49d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62b5f82acc4999f68a070e990ba33aa0577b177d02a14d49f21adcbcbecf8c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b5f82acc4999f68a070e990ba33aa0577b177d02a14d49f21adcbcbecf8c4d->enter($__internal_62b5f82acc4999f68a070e990ba33aa0577b177d02a14d49f21adcbcbecf8c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_62b5f82acc4999f68a070e990ba33aa0577b177d02a14d49f21adcbcbecf8c4d->leave($__internal_62b5f82acc4999f68a070e990ba33aa0577b177d02a14d49f21adcbcbecf8c4d_prof);

        
        $__internal_c767bf0b3db3d76198102c3bfa2b2435ffcd9b3b33162120c0931d1084f49d90->leave($__internal_c767bf0b3db3d76198102c3bfa2b2435ffcd9b3b33162120c0931d1084f49d90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
