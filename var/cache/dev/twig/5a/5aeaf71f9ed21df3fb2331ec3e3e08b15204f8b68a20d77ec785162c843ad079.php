<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_11d18456c084d1cb392a38c51c573892c3e3a25d0fb44a68b196dcb2309d372b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a868a1ba1fc8ffd2f28382473e2ad349c2ba7be42102f5ff5c3467f0e3c1a355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a868a1ba1fc8ffd2f28382473e2ad349c2ba7be42102f5ff5c3467f0e3c1a355->enter($__internal_a868a1ba1fc8ffd2f28382473e2ad349c2ba7be42102f5ff5c3467f0e3c1a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_863d99f40bc0df0d962bd361887c5a839d735f458bd9b36c2e2aaa336b881fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863d99f40bc0df0d962bd361887c5a839d735f458bd9b36c2e2aaa336b881fe2->enter($__internal_863d99f40bc0df0d962bd361887c5a839d735f458bd9b36c2e2aaa336b881fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a868a1ba1fc8ffd2f28382473e2ad349c2ba7be42102f5ff5c3467f0e3c1a355->leave($__internal_a868a1ba1fc8ffd2f28382473e2ad349c2ba7be42102f5ff5c3467f0e3c1a355_prof);

        
        $__internal_863d99f40bc0df0d962bd361887c5a839d735f458bd9b36c2e2aaa336b881fe2->leave($__internal_863d99f40bc0df0d962bd361887c5a839d735f458bd9b36c2e2aaa336b881fe2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a430235f7efc1dbd02e434dd6d76a0bf49a69631801dedec8aa0eabe5b717378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a430235f7efc1dbd02e434dd6d76a0bf49a69631801dedec8aa0eabe5b717378->enter($__internal_a430235f7efc1dbd02e434dd6d76a0bf49a69631801dedec8aa0eabe5b717378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75dad9059b3e903ee20472eca18fc5169e98eb73c6744e49a28fceacf8030afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dad9059b3e903ee20472eca18fc5169e98eb73c6744e49a28fceacf8030afb->enter($__internal_75dad9059b3e903ee20472eca18fc5169e98eb73c6744e49a28fceacf8030afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_75dad9059b3e903ee20472eca18fc5169e98eb73c6744e49a28fceacf8030afb->leave($__internal_75dad9059b3e903ee20472eca18fc5169e98eb73c6744e49a28fceacf8030afb_prof);

        
        $__internal_a430235f7efc1dbd02e434dd6d76a0bf49a69631801dedec8aa0eabe5b717378->leave($__internal_a430235f7efc1dbd02e434dd6d76a0bf49a69631801dedec8aa0eabe5b717378_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_79ad981f4579d63a9ada1b623cfd38de49424ba31d5a8c699f450c2f26b40efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ad981f4579d63a9ada1b623cfd38de49424ba31d5a8c699f450c2f26b40efa->enter($__internal_79ad981f4579d63a9ada1b623cfd38de49424ba31d5a8c699f450c2f26b40efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_455cf7882e252d2d4f9be9fd292603dfce58233e27eadb6f7a261941b6982e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455cf7882e252d2d4f9be9fd292603dfce58233e27eadb6f7a261941b6982e7c->enter($__internal_455cf7882e252d2d4f9be9fd292603dfce58233e27eadb6f7a261941b6982e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_455cf7882e252d2d4f9be9fd292603dfce58233e27eadb6f7a261941b6982e7c->leave($__internal_455cf7882e252d2d4f9be9fd292603dfce58233e27eadb6f7a261941b6982e7c_prof);

        
        $__internal_79ad981f4579d63a9ada1b623cfd38de49424ba31d5a8c699f450c2f26b40efa->leave($__internal_79ad981f4579d63a9ada1b623cfd38de49424ba31d5a8c699f450c2f26b40efa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
