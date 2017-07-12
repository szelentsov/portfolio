<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_4271d7d2fb12e6d56bb6ec3f0c94e14d61ce8d1c5f1da873ce05c1e9a3386969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4271d7d2fb12e6d56bb6ec3f0c94e14d61ce8d1c5f1da873ce05c1e9a3386969->enter($__internal_4271d7d2fb12e6d56bb6ec3f0c94e14d61ce8d1c5f1da873ce05c1e9a3386969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0e4db06bea197fd8675aafccad1a5b50ac7b9ebc30af7058358d2f3b7ea6fe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4db06bea197fd8675aafccad1a5b50ac7b9ebc30af7058358d2f3b7ea6fe93->enter($__internal_0e4db06bea197fd8675aafccad1a5b50ac7b9ebc30af7058358d2f3b7ea6fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4271d7d2fb12e6d56bb6ec3f0c94e14d61ce8d1c5f1da873ce05c1e9a3386969->leave($__internal_4271d7d2fb12e6d56bb6ec3f0c94e14d61ce8d1c5f1da873ce05c1e9a3386969_prof);

        
        $__internal_0e4db06bea197fd8675aafccad1a5b50ac7b9ebc30af7058358d2f3b7ea6fe93->leave($__internal_0e4db06bea197fd8675aafccad1a5b50ac7b9ebc30af7058358d2f3b7ea6fe93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbd462a97a0ab8b68feccb5554022bebcee2972269940d02ad6c7eaffdf29d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd462a97a0ab8b68feccb5554022bebcee2972269940d02ad6c7eaffdf29d78->enter($__internal_bbd462a97a0ab8b68feccb5554022bebcee2972269940d02ad6c7eaffdf29d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_395628e4680a0f28cb38b64fbfa1c62ffd2f49ec0bc9c8b0cb41bf4b6bd6df19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395628e4680a0f28cb38b64fbfa1c62ffd2f49ec0bc9c8b0cb41bf4b6bd6df19->enter($__internal_395628e4680a0f28cb38b64fbfa1c62ffd2f49ec0bc9c8b0cb41bf4b6bd6df19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_395628e4680a0f28cb38b64fbfa1c62ffd2f49ec0bc9c8b0cb41bf4b6bd6df19->leave($__internal_395628e4680a0f28cb38b64fbfa1c62ffd2f49ec0bc9c8b0cb41bf4b6bd6df19_prof);

        
        $__internal_bbd462a97a0ab8b68feccb5554022bebcee2972269940d02ad6c7eaffdf29d78->leave($__internal_bbd462a97a0ab8b68feccb5554022bebcee2972269940d02ad6c7eaffdf29d78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22bdf25332582c94cee5a186350b9d1624dad29747c7403bab7f77d02624a840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bdf25332582c94cee5a186350b9d1624dad29747c7403bab7f77d02624a840->enter($__internal_22bdf25332582c94cee5a186350b9d1624dad29747c7403bab7f77d02624a840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0e346dffcef011a71c94bb680a4b2b6688d8a6a070bdea5df43151f1931152c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e346dffcef011a71c94bb680a4b2b6688d8a6a070bdea5df43151f1931152c->enter($__internal_d0e346dffcef011a71c94bb680a4b2b6688d8a6a070bdea5df43151f1931152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0e346dffcef011a71c94bb680a4b2b6688d8a6a070bdea5df43151f1931152c->leave($__internal_d0e346dffcef011a71c94bb680a4b2b6688d8a6a070bdea5df43151f1931152c_prof);

        
        $__internal_22bdf25332582c94cee5a186350b9d1624dad29747c7403bab7f77d02624a840->leave($__internal_22bdf25332582c94cee5a186350b9d1624dad29747c7403bab7f77d02624a840_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df2e96d11de66d5a33a071c1558c4ebdf57209fdd7f3514d055f52e852bc5f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2e96d11de66d5a33a071c1558c4ebdf57209fdd7f3514d055f52e852bc5f40->enter($__internal_df2e96d11de66d5a33a071c1558c4ebdf57209fdd7f3514d055f52e852bc5f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ba6d92a236502f0b5726d387421762ff22b82024184de9742ab74560c59de68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba6d92a236502f0b5726d387421762ff22b82024184de9742ab74560c59de68->enter($__internal_5ba6d92a236502f0b5726d387421762ff22b82024184de9742ab74560c59de68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ba6d92a236502f0b5726d387421762ff22b82024184de9742ab74560c59de68->leave($__internal_5ba6d92a236502f0b5726d387421762ff22b82024184de9742ab74560c59de68_prof);

        
        $__internal_df2e96d11de66d5a33a071c1558c4ebdf57209fdd7f3514d055f52e852bc5f40->leave($__internal_df2e96d11de66d5a33a071c1558c4ebdf57209fdd7f3514d055f52e852bc5f40_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
