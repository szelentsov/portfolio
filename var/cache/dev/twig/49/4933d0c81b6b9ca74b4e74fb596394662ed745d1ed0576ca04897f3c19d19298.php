<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
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
        $__internal_0a05760ab9dc1108356beeca033ba0fe60bf17382c31488bb3664833dd05acde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a05760ab9dc1108356beeca033ba0fe60bf17382c31488bb3664833dd05acde->enter($__internal_0a05760ab9dc1108356beeca033ba0fe60bf17382c31488bb3664833dd05acde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0ba5fc98928addc6970784f208bc536be581d1e898a2c5d2e05712dc73d35490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba5fc98928addc6970784f208bc536be581d1e898a2c5d2e05712dc73d35490->enter($__internal_0ba5fc98928addc6970784f208bc536be581d1e898a2c5d2e05712dc73d35490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a05760ab9dc1108356beeca033ba0fe60bf17382c31488bb3664833dd05acde->leave($__internal_0a05760ab9dc1108356beeca033ba0fe60bf17382c31488bb3664833dd05acde_prof);

        
        $__internal_0ba5fc98928addc6970784f208bc536be581d1e898a2c5d2e05712dc73d35490->leave($__internal_0ba5fc98928addc6970784f208bc536be581d1e898a2c5d2e05712dc73d35490_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89ae7366c918b0983ae4369cbe9fbfa9a3ac9845348bbf05bf612a2d416ed18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ae7366c918b0983ae4369cbe9fbfa9a3ac9845348bbf05bf612a2d416ed18e->enter($__internal_89ae7366c918b0983ae4369cbe9fbfa9a3ac9845348bbf05bf612a2d416ed18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f3f08a314558a6b449e58bc878d1fdfa17cc03cbdb0144aca08b66f9b7c64c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3f08a314558a6b449e58bc878d1fdfa17cc03cbdb0144aca08b66f9b7c64c6->enter($__internal_5f3f08a314558a6b449e58bc878d1fdfa17cc03cbdb0144aca08b66f9b7c64c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5f3f08a314558a6b449e58bc878d1fdfa17cc03cbdb0144aca08b66f9b7c64c6->leave($__internal_5f3f08a314558a6b449e58bc878d1fdfa17cc03cbdb0144aca08b66f9b7c64c6_prof);

        
        $__internal_89ae7366c918b0983ae4369cbe9fbfa9a3ac9845348bbf05bf612a2d416ed18e->leave($__internal_89ae7366c918b0983ae4369cbe9fbfa9a3ac9845348bbf05bf612a2d416ed18e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1d89a672f4c03734d23cea31459322506f7dd8004397493162015dd21d75a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d89a672f4c03734d23cea31459322506f7dd8004397493162015dd21d75a24->enter($__internal_a1d89a672f4c03734d23cea31459322506f7dd8004397493162015dd21d75a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d5777de127abf5a3919306bd1167d80df698ad4c8fdf7ac48927907723bca83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5777de127abf5a3919306bd1167d80df698ad4c8fdf7ac48927907723bca83->enter($__internal_7d5777de127abf5a3919306bd1167d80df698ad4c8fdf7ac48927907723bca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d5777de127abf5a3919306bd1167d80df698ad4c8fdf7ac48927907723bca83->leave($__internal_7d5777de127abf5a3919306bd1167d80df698ad4c8fdf7ac48927907723bca83_prof);

        
        $__internal_a1d89a672f4c03734d23cea31459322506f7dd8004397493162015dd21d75a24->leave($__internal_a1d89a672f4c03734d23cea31459322506f7dd8004397493162015dd21d75a24_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
