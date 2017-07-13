<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_da404db59c80dc07c2ca05690b7572d1724716f4b6a10706c303167b0dca0a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_76e6bd9c957c68b16893e28ff2d4baa6a87bd7332352f97bb90fff3af2a8bbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e6bd9c957c68b16893e28ff2d4baa6a87bd7332352f97bb90fff3af2a8bbdc->enter($__internal_76e6bd9c957c68b16893e28ff2d4baa6a87bd7332352f97bb90fff3af2a8bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_39e599d251b646b3ba1a74f2cf5c8ddf8106cf3a7bc46ee8b19429bc801143f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e599d251b646b3ba1a74f2cf5c8ddf8106cf3a7bc46ee8b19429bc801143f9->enter($__internal_39e599d251b646b3ba1a74f2cf5c8ddf8106cf3a7bc46ee8b19429bc801143f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e6bd9c957c68b16893e28ff2d4baa6a87bd7332352f97bb90fff3af2a8bbdc->leave($__internal_76e6bd9c957c68b16893e28ff2d4baa6a87bd7332352f97bb90fff3af2a8bbdc_prof);

        
        $__internal_39e599d251b646b3ba1a74f2cf5c8ddf8106cf3a7bc46ee8b19429bc801143f9->leave($__internal_39e599d251b646b3ba1a74f2cf5c8ddf8106cf3a7bc46ee8b19429bc801143f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac9a76a4391ae7361da4b15efd8c5b6239e48bfe5f3906b09ff273806723112d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9a76a4391ae7361da4b15efd8c5b6239e48bfe5f3906b09ff273806723112d->enter($__internal_ac9a76a4391ae7361da4b15efd8c5b6239e48bfe5f3906b09ff273806723112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5f01483dbad5e68151c207344a0f54345ec4fc8eb6a129969098a138d564e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f01483dbad5e68151c207344a0f54345ec4fc8eb6a129969098a138d564e7c->enter($__internal_c5f01483dbad5e68151c207344a0f54345ec4fc8eb6a129969098a138d564e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5f01483dbad5e68151c207344a0f54345ec4fc8eb6a129969098a138d564e7c->leave($__internal_c5f01483dbad5e68151c207344a0f54345ec4fc8eb6a129969098a138d564e7c_prof);

        
        $__internal_ac9a76a4391ae7361da4b15efd8c5b6239e48bfe5f3906b09ff273806723112d->leave($__internal_ac9a76a4391ae7361da4b15efd8c5b6239e48bfe5f3906b09ff273806723112d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4dd6afde38ab81aebcf6703c82d20c725c73a43a3159674a7355c1e229a51862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd6afde38ab81aebcf6703c82d20c725c73a43a3159674a7355c1e229a51862->enter($__internal_4dd6afde38ab81aebcf6703c82d20c725c73a43a3159674a7355c1e229a51862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0eb9899eb14006f93d758bc249f3df7140e637874543b3ab2cd02dd4dd21fabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb9899eb14006f93d758bc249f3df7140e637874543b3ab2cd02dd4dd21fabe->enter($__internal_0eb9899eb14006f93d758bc249f3df7140e637874543b3ab2cd02dd4dd21fabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0eb9899eb14006f93d758bc249f3df7140e637874543b3ab2cd02dd4dd21fabe->leave($__internal_0eb9899eb14006f93d758bc249f3df7140e637874543b3ab2cd02dd4dd21fabe_prof);

        
        $__internal_4dd6afde38ab81aebcf6703c82d20c725c73a43a3159674a7355c1e229a51862->leave($__internal_4dd6afde38ab81aebcf6703c82d20c725c73a43a3159674a7355c1e229a51862_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a522ac1c6f69cab0237958d439ca3157a5961844702b1bac5a05db201ff7c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a522ac1c6f69cab0237958d439ca3157a5961844702b1bac5a05db201ff7c96->enter($__internal_8a522ac1c6f69cab0237958d439ca3157a5961844702b1bac5a05db201ff7c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eca9854f70ad21da557f63b45364055917147e15c02f258b9890fb4b6bfe6913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca9854f70ad21da557f63b45364055917147e15c02f258b9890fb4b6bfe6913->enter($__internal_eca9854f70ad21da557f63b45364055917147e15c02f258b9890fb4b6bfe6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eca9854f70ad21da557f63b45364055917147e15c02f258b9890fb4b6bfe6913->leave($__internal_eca9854f70ad21da557f63b45364055917147e15c02f258b9890fb4b6bfe6913_prof);

        
        $__internal_8a522ac1c6f69cab0237958d439ca3157a5961844702b1bac5a05db201ff7c96->leave($__internal_8a522ac1c6f69cab0237958d439ca3157a5961844702b1bac5a05db201ff7c96_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
