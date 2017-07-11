<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_71fa6a32986e21d32239b61594aa103f5360dc5fbd97241430c53f28f4b1ef46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fa6a32986e21d32239b61594aa103f5360dc5fbd97241430c53f28f4b1ef46->enter($__internal_71fa6a32986e21d32239b61594aa103f5360dc5fbd97241430c53f28f4b1ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_797dc727bbaa1078973288b1801fd835176a2bdfe4fc8c3d7ba11f9ebd63dd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797dc727bbaa1078973288b1801fd835176a2bdfe4fc8c3d7ba11f9ebd63dd75->enter($__internal_797dc727bbaa1078973288b1801fd835176a2bdfe4fc8c3d7ba11f9ebd63dd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fa6a32986e21d32239b61594aa103f5360dc5fbd97241430c53f28f4b1ef46->leave($__internal_71fa6a32986e21d32239b61594aa103f5360dc5fbd97241430c53f28f4b1ef46_prof);

        
        $__internal_797dc727bbaa1078973288b1801fd835176a2bdfe4fc8c3d7ba11f9ebd63dd75->leave($__internal_797dc727bbaa1078973288b1801fd835176a2bdfe4fc8c3d7ba11f9ebd63dd75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd00e5776ec7a367cfae24d12347710d5e2ebabac3a8cf2b0653060b426b1e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd00e5776ec7a367cfae24d12347710d5e2ebabac3a8cf2b0653060b426b1e11->enter($__internal_cd00e5776ec7a367cfae24d12347710d5e2ebabac3a8cf2b0653060b426b1e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_122778807710c983f265680e0cd1e2592e67a0be84eb8f85d823be8bed1d2e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122778807710c983f265680e0cd1e2592e67a0be84eb8f85d823be8bed1d2e6f->enter($__internal_122778807710c983f265680e0cd1e2592e67a0be84eb8f85d823be8bed1d2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_122778807710c983f265680e0cd1e2592e67a0be84eb8f85d823be8bed1d2e6f->leave($__internal_122778807710c983f265680e0cd1e2592e67a0be84eb8f85d823be8bed1d2e6f_prof);

        
        $__internal_cd00e5776ec7a367cfae24d12347710d5e2ebabac3a8cf2b0653060b426b1e11->leave($__internal_cd00e5776ec7a367cfae24d12347710d5e2ebabac3a8cf2b0653060b426b1e11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dafa11b458260902075dcddb02061815e4302fde769c5f778e3d270494a2dbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafa11b458260902075dcddb02061815e4302fde769c5f778e3d270494a2dbc0->enter($__internal_dafa11b458260902075dcddb02061815e4302fde769c5f778e3d270494a2dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f1697be1339f198fb02e241fc6e6c5a9096e2a45ad0db432c52602c8b321a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1697be1339f198fb02e241fc6e6c5a9096e2a45ad0db432c52602c8b321a5c->enter($__internal_8f1697be1339f198fb02e241fc6e6c5a9096e2a45ad0db432c52602c8b321a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f1697be1339f198fb02e241fc6e6c5a9096e2a45ad0db432c52602c8b321a5c->leave($__internal_8f1697be1339f198fb02e241fc6e6c5a9096e2a45ad0db432c52602c8b321a5c_prof);

        
        $__internal_dafa11b458260902075dcddb02061815e4302fde769c5f778e3d270494a2dbc0->leave($__internal_dafa11b458260902075dcddb02061815e4302fde769c5f778e3d270494a2dbc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03ce2a7a12535f3d000211aa772eceb500f385c08d0035ca98a9e234b50db06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03ce2a7a12535f3d000211aa772eceb500f385c08d0035ca98a9e234b50db06->enter($__internal_b03ce2a7a12535f3d000211aa772eceb500f385c08d0035ca98a9e234b50db06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_decaf19db6b3602185fb153346012a83426608b5e209fb1c45101846a4b267d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decaf19db6b3602185fb153346012a83426608b5e209fb1c45101846a4b267d7->enter($__internal_decaf19db6b3602185fb153346012a83426608b5e209fb1c45101846a4b267d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_decaf19db6b3602185fb153346012a83426608b5e209fb1c45101846a4b267d7->leave($__internal_decaf19db6b3602185fb153346012a83426608b5e209fb1c45101846a4b267d7_prof);

        
        $__internal_b03ce2a7a12535f3d000211aa772eceb500f385c08d0035ca98a9e234b50db06->leave($__internal_b03ce2a7a12535f3d000211aa772eceb500f385c08d0035ca98a9e234b50db06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/sergey/zsv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
