<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_adb312358ce51344d6b4eaa7a37c8a1d2f451af87b48e9443aa8dfd14f655d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb312358ce51344d6b4eaa7a37c8a1d2f451af87b48e9443aa8dfd14f655d38->enter($__internal_adb312358ce51344d6b4eaa7a37c8a1d2f451af87b48e9443aa8dfd14f655d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fb19412418b1a1d98cba6be873b71633f2d81c987a64879bf328a25de69a79a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb19412418b1a1d98cba6be873b71633f2d81c987a64879bf328a25de69a79a8->enter($__internal_fb19412418b1a1d98cba6be873b71633f2d81c987a64879bf328a25de69a79a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb312358ce51344d6b4eaa7a37c8a1d2f451af87b48e9443aa8dfd14f655d38->leave($__internal_adb312358ce51344d6b4eaa7a37c8a1d2f451af87b48e9443aa8dfd14f655d38_prof);

        
        $__internal_fb19412418b1a1d98cba6be873b71633f2d81c987a64879bf328a25de69a79a8->leave($__internal_fb19412418b1a1d98cba6be873b71633f2d81c987a64879bf328a25de69a79a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_179db7d2c609d7be774aa249a0eee121be308990e29594ffc917d3e79eb24500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179db7d2c609d7be774aa249a0eee121be308990e29594ffc917d3e79eb24500->enter($__internal_179db7d2c609d7be774aa249a0eee121be308990e29594ffc917d3e79eb24500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_698d1cb272b53154598cca79286f945b9acd70adccc65d1928f9c52c5c0fe5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698d1cb272b53154598cca79286f945b9acd70adccc65d1928f9c52c5c0fe5e4->enter($__internal_698d1cb272b53154598cca79286f945b9acd70adccc65d1928f9c52c5c0fe5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_698d1cb272b53154598cca79286f945b9acd70adccc65d1928f9c52c5c0fe5e4->leave($__internal_698d1cb272b53154598cca79286f945b9acd70adccc65d1928f9c52c5c0fe5e4_prof);

        
        $__internal_179db7d2c609d7be774aa249a0eee121be308990e29594ffc917d3e79eb24500->leave($__internal_179db7d2c609d7be774aa249a0eee121be308990e29594ffc917d3e79eb24500_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32605a160e0caa5189f2c655792d04e9db7e2e8d21b74c19f45aaccd7c436348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32605a160e0caa5189f2c655792d04e9db7e2e8d21b74c19f45aaccd7c436348->enter($__internal_32605a160e0caa5189f2c655792d04e9db7e2e8d21b74c19f45aaccd7c436348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80c53aa9a79c13d3eade2a2933f18f7cd07430a97d4aa2817351036652ceff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c53aa9a79c13d3eade2a2933f18f7cd07430a97d4aa2817351036652ceff26->enter($__internal_80c53aa9a79c13d3eade2a2933f18f7cd07430a97d4aa2817351036652ceff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_80c53aa9a79c13d3eade2a2933f18f7cd07430a97d4aa2817351036652ceff26->leave($__internal_80c53aa9a79c13d3eade2a2933f18f7cd07430a97d4aa2817351036652ceff26_prof);

        
        $__internal_32605a160e0caa5189f2c655792d04e9db7e2e8d21b74c19f45aaccd7c436348->leave($__internal_32605a160e0caa5189f2c655792d04e9db7e2e8d21b74c19f45aaccd7c436348_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13aa4834de32f6688b8e19eade9ee26d4eed423bab3dcf2feffe2e72ac9504e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13aa4834de32f6688b8e19eade9ee26d4eed423bab3dcf2feffe2e72ac9504e2->enter($__internal_13aa4834de32f6688b8e19eade9ee26d4eed423bab3dcf2feffe2e72ac9504e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea5ff5ee01359530d4ecfd136b59a870fe638eeaa3a91a2c22cc2338de6d88fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5ff5ee01359530d4ecfd136b59a870fe638eeaa3a91a2c22cc2338de6d88fc->enter($__internal_ea5ff5ee01359530d4ecfd136b59a870fe638eeaa3a91a2c22cc2338de6d88fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea5ff5ee01359530d4ecfd136b59a870fe638eeaa3a91a2c22cc2338de6d88fc->leave($__internal_ea5ff5ee01359530d4ecfd136b59a870fe638eeaa3a91a2c22cc2338de6d88fc_prof);

        
        $__internal_13aa4834de32f6688b8e19eade9ee26d4eed423bab3dcf2feffe2e72ac9504e2->leave($__internal_13aa4834de32f6688b8e19eade9ee26d4eed423bab3dcf2feffe2e72ac9504e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/home/sergey/zsv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
