<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_218347e0ed60b2ed9bfd8fd265e925486e9f7960282cbf31eeb1298b18d7bc8d extends Twig_Template
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
        $__internal_9e3b8f41a904918b6f27f0624a0f05dfe5a1f997aa8a651485e1d3614e42e5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3b8f41a904918b6f27f0624a0f05dfe5a1f997aa8a651485e1d3614e42e5c9->enter($__internal_9e3b8f41a904918b6f27f0624a0f05dfe5a1f997aa8a651485e1d3614e42e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_306ab6c9bdf37477ccf8812207bc37d8ee697b08663a3edbc491b10075522c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ab6c9bdf37477ccf8812207bc37d8ee697b08663a3edbc491b10075522c1f->enter($__internal_306ab6c9bdf37477ccf8812207bc37d8ee697b08663a3edbc491b10075522c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3b8f41a904918b6f27f0624a0f05dfe5a1f997aa8a651485e1d3614e42e5c9->leave($__internal_9e3b8f41a904918b6f27f0624a0f05dfe5a1f997aa8a651485e1d3614e42e5c9_prof);

        
        $__internal_306ab6c9bdf37477ccf8812207bc37d8ee697b08663a3edbc491b10075522c1f->leave($__internal_306ab6c9bdf37477ccf8812207bc37d8ee697b08663a3edbc491b10075522c1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfb8c3967fde5c06a17fde10f9cf6ec89169f48c1ebd4f19d67d712b7c598c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb8c3967fde5c06a17fde10f9cf6ec89169f48c1ebd4f19d67d712b7c598c34->enter($__internal_cfb8c3967fde5c06a17fde10f9cf6ec89169f48c1ebd4f19d67d712b7c598c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5ce98c9f73319438c951cc346a30ea386bf473eb63b359a64476fe901bb5f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ce98c9f73319438c951cc346a30ea386bf473eb63b359a64476fe901bb5f64->enter($__internal_a5ce98c9f73319438c951cc346a30ea386bf473eb63b359a64476fe901bb5f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a5ce98c9f73319438c951cc346a30ea386bf473eb63b359a64476fe901bb5f64->leave($__internal_a5ce98c9f73319438c951cc346a30ea386bf473eb63b359a64476fe901bb5f64_prof);

        
        $__internal_cfb8c3967fde5c06a17fde10f9cf6ec89169f48c1ebd4f19d67d712b7c598c34->leave($__internal_cfb8c3967fde5c06a17fde10f9cf6ec89169f48c1ebd4f19d67d712b7c598c34_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36f1564933dd8508e3064ec53ff0c1742a5d8b5622d9f0dafccea32c95489655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f1564933dd8508e3064ec53ff0c1742a5d8b5622d9f0dafccea32c95489655->enter($__internal_36f1564933dd8508e3064ec53ff0c1742a5d8b5622d9f0dafccea32c95489655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4af91253cdbcc82de350cd97a7dbe740d8acce043bfc117c361415d462a3215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af91253cdbcc82de350cd97a7dbe740d8acce043bfc117c361415d462a3215e->enter($__internal_4af91253cdbcc82de350cd97a7dbe740d8acce043bfc117c361415d462a3215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4af91253cdbcc82de350cd97a7dbe740d8acce043bfc117c361415d462a3215e->leave($__internal_4af91253cdbcc82de350cd97a7dbe740d8acce043bfc117c361415d462a3215e_prof);

        
        $__internal_36f1564933dd8508e3064ec53ff0c1742a5d8b5622d9f0dafccea32c95489655->leave($__internal_36f1564933dd8508e3064ec53ff0c1742a5d8b5622d9f0dafccea32c95489655_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_579d347c3a5f802ca6e89c3fa7ba841a6e12d6677e1284a3e126c481e37051b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579d347c3a5f802ca6e89c3fa7ba841a6e12d6677e1284a3e126c481e37051b6->enter($__internal_579d347c3a5f802ca6e89c3fa7ba841a6e12d6677e1284a3e126c481e37051b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60806939bb96587c9e432984a432db50d64d055663c2413d626038de62d96d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60806939bb96587c9e432984a432db50d64d055663c2413d626038de62d96d47->enter($__internal_60806939bb96587c9e432984a432db50d64d055663c2413d626038de62d96d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_60806939bb96587c9e432984a432db50d64d055663c2413d626038de62d96d47->leave($__internal_60806939bb96587c9e432984a432db50d64d055663c2413d626038de62d96d47_prof);

        
        $__internal_579d347c3a5f802ca6e89c3fa7ba841a6e12d6677e1284a3e126c481e37051b6->leave($__internal_579d347c3a5f802ca6e89c3fa7ba841a6e12d6677e1284a3e126c481e37051b6_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
