<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a6491eb1e0942d53c5df20e94f3108ad52f8aa425232d3521eba1d4921f99571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee0a13b5c7d7caf489df57a3fac413aac39263fe3365acb4803332aeba643ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0a13b5c7d7caf489df57a3fac413aac39263fe3365acb4803332aeba643ee7->enter($__internal_ee0a13b5c7d7caf489df57a3fac413aac39263fe3365acb4803332aeba643ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f7656eee3235174cd10aadd36e97d81ec05226e0b57ea563a765649d365fa047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7656eee3235174cd10aadd36e97d81ec05226e0b57ea563a765649d365fa047->enter($__internal_f7656eee3235174cd10aadd36e97d81ec05226e0b57ea563a765649d365fa047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0a13b5c7d7caf489df57a3fac413aac39263fe3365acb4803332aeba643ee7->leave($__internal_ee0a13b5c7d7caf489df57a3fac413aac39263fe3365acb4803332aeba643ee7_prof);

        
        $__internal_f7656eee3235174cd10aadd36e97d81ec05226e0b57ea563a765649d365fa047->leave($__internal_f7656eee3235174cd10aadd36e97d81ec05226e0b57ea563a765649d365fa047_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74337a1628c1f0057abcc2f3a2966cc7c3c56bfdd0fd2342d8b80610f290c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74337a1628c1f0057abcc2f3a2966cc7c3c56bfdd0fd2342d8b80610f290c4e->enter($__internal_c74337a1628c1f0057abcc2f3a2966cc7c3c56bfdd0fd2342d8b80610f290c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4022b9e2430455ec65ff40ba8a93767ea79473205ebf8fa42dc1937698cd7ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4022b9e2430455ec65ff40ba8a93767ea79473205ebf8fa42dc1937698cd7ff4->enter($__internal_4022b9e2430455ec65ff40ba8a93767ea79473205ebf8fa42dc1937698cd7ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4022b9e2430455ec65ff40ba8a93767ea79473205ebf8fa42dc1937698cd7ff4->leave($__internal_4022b9e2430455ec65ff40ba8a93767ea79473205ebf8fa42dc1937698cd7ff4_prof);

        
        $__internal_c74337a1628c1f0057abcc2f3a2966cc7c3c56bfdd0fd2342d8b80610f290c4e->leave($__internal_c74337a1628c1f0057abcc2f3a2966cc7c3c56bfdd0fd2342d8b80610f290c4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b18c08c7587d6098ada7f84a6a4d5e01aa6de16eb5ec5eab152de7c3f35b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b18c08c7587d6098ada7f84a6a4d5e01aa6de16eb5ec5eab152de7c3f35b48->enter($__internal_60b18c08c7587d6098ada7f84a6a4d5e01aa6de16eb5ec5eab152de7c3f35b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d385c10fe83367774a2a4abd087de398f5a1b1167e2c7a6552592f1bb56da3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d385c10fe83367774a2a4abd087de398f5a1b1167e2c7a6552592f1bb56da3e2->enter($__internal_d385c10fe83367774a2a4abd087de398f5a1b1167e2c7a6552592f1bb56da3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d385c10fe83367774a2a4abd087de398f5a1b1167e2c7a6552592f1bb56da3e2->leave($__internal_d385c10fe83367774a2a4abd087de398f5a1b1167e2c7a6552592f1bb56da3e2_prof);

        
        $__internal_60b18c08c7587d6098ada7f84a6a4d5e01aa6de16eb5ec5eab152de7c3f35b48->leave($__internal_60b18c08c7587d6098ada7f84a6a4d5e01aa6de16eb5ec5eab152de7c3f35b48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
