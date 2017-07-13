<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_db10b3c2f21c04e2f59dd9769b3584ae80bbf917b9b06f81501f5ada610fe98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4609cd79ac7415427a375e62233c8f628d9266b2e5b5bede7f4ab0a4f9f11bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4609cd79ac7415427a375e62233c8f628d9266b2e5b5bede7f4ab0a4f9f11bb->enter($__internal_e4609cd79ac7415427a375e62233c8f628d9266b2e5b5bede7f4ab0a4f9f11bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b72915477fdbe3052b4c6f763c806d99036b3b483b08bbdf27c2049195ea9988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72915477fdbe3052b4c6f763c806d99036b3b483b08bbdf27c2049195ea9988->enter($__internal_b72915477fdbe3052b4c6f763c806d99036b3b483b08bbdf27c2049195ea9988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4609cd79ac7415427a375e62233c8f628d9266b2e5b5bede7f4ab0a4f9f11bb->leave($__internal_e4609cd79ac7415427a375e62233c8f628d9266b2e5b5bede7f4ab0a4f9f11bb_prof);

        
        $__internal_b72915477fdbe3052b4c6f763c806d99036b3b483b08bbdf27c2049195ea9988->leave($__internal_b72915477fdbe3052b4c6f763c806d99036b3b483b08bbdf27c2049195ea9988_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d448b704642213b40290e443c4c9153289753203b4c2a2bcdd555856f527e58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d448b704642213b40290e443c4c9153289753203b4c2a2bcdd555856f527e58f->enter($__internal_d448b704642213b40290e443c4c9153289753203b4c2a2bcdd555856f527e58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c3d048f1015cbfae12ab34214641ff73baeb2b8460eef8aaa8c1f714dfae7b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d048f1015cbfae12ab34214641ff73baeb2b8460eef8aaa8c1f714dfae7b67->enter($__internal_c3d048f1015cbfae12ab34214641ff73baeb2b8460eef8aaa8c1f714dfae7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c3d048f1015cbfae12ab34214641ff73baeb2b8460eef8aaa8c1f714dfae7b67->leave($__internal_c3d048f1015cbfae12ab34214641ff73baeb2b8460eef8aaa8c1f714dfae7b67_prof);

        
        $__internal_d448b704642213b40290e443c4c9153289753203b4c2a2bcdd555856f527e58f->leave($__internal_d448b704642213b40290e443c4c9153289753203b4c2a2bcdd555856f527e58f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c487ca3f3d18c0c9f83a9147a5cba6e14676e74663281b38fa556aa5f871b1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c487ca3f3d18c0c9f83a9147a5cba6e14676e74663281b38fa556aa5f871b1b2->enter($__internal_c487ca3f3d18c0c9f83a9147a5cba6e14676e74663281b38fa556aa5f871b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82086a74f965ee5540d14f07a5d88eeb348fa4ba4dd5d3a377b2ec778790008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82086a74f965ee5540d14f07a5d88eeb348fa4ba4dd5d3a377b2ec778790008b->enter($__internal_82086a74f965ee5540d14f07a5d88eeb348fa4ba4dd5d3a377b2ec778790008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_82086a74f965ee5540d14f07a5d88eeb348fa4ba4dd5d3a377b2ec778790008b->leave($__internal_82086a74f965ee5540d14f07a5d88eeb348fa4ba4dd5d3a377b2ec778790008b_prof);

        
        $__internal_c487ca3f3d18c0c9f83a9147a5cba6e14676e74663281b38fa556aa5f871b1b2->leave($__internal_c487ca3f3d18c0c9f83a9147a5cba6e14676e74663281b38fa556aa5f871b1b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
