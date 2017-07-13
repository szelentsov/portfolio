<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ccb5645d2f2c5fef004da12ce8750de0f7db16d88d49c7503a6bc269ed5cba67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e8d19a9435d0c99c94e81dbc071ce723e796afd2725f00117e7b888d8ca9280d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d19a9435d0c99c94e81dbc071ce723e796afd2725f00117e7b888d8ca9280d->enter($__internal_e8d19a9435d0c99c94e81dbc071ce723e796afd2725f00117e7b888d8ca9280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1bfb23ccf8826982b2b0ca8276c6558da8776f27a8f0a1082e0ae12a3fe474f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfb23ccf8826982b2b0ca8276c6558da8776f27a8f0a1082e0ae12a3fe474f0->enter($__internal_1bfb23ccf8826982b2b0ca8276c6558da8776f27a8f0a1082e0ae12a3fe474f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d19a9435d0c99c94e81dbc071ce723e796afd2725f00117e7b888d8ca9280d->leave($__internal_e8d19a9435d0c99c94e81dbc071ce723e796afd2725f00117e7b888d8ca9280d_prof);

        
        $__internal_1bfb23ccf8826982b2b0ca8276c6558da8776f27a8f0a1082e0ae12a3fe474f0->leave($__internal_1bfb23ccf8826982b2b0ca8276c6558da8776f27a8f0a1082e0ae12a3fe474f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b54700f9d2d7b76c5494636ce081a2708c5ba2bbe2021fd72e6f0fbab8858d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54700f9d2d7b76c5494636ce081a2708c5ba2bbe2021fd72e6f0fbab8858d90->enter($__internal_b54700f9d2d7b76c5494636ce081a2708c5ba2bbe2021fd72e6f0fbab8858d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90cc5598a92585b166f31538fae2c36e75b9f1fbef22e550bdbee17cae18b35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cc5598a92585b166f31538fae2c36e75b9f1fbef22e550bdbee17cae18b35d->enter($__internal_90cc5598a92585b166f31538fae2c36e75b9f1fbef22e550bdbee17cae18b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_90cc5598a92585b166f31538fae2c36e75b9f1fbef22e550bdbee17cae18b35d->leave($__internal_90cc5598a92585b166f31538fae2c36e75b9f1fbef22e550bdbee17cae18b35d_prof);

        
        $__internal_b54700f9d2d7b76c5494636ce081a2708c5ba2bbe2021fd72e6f0fbab8858d90->leave($__internal_b54700f9d2d7b76c5494636ce081a2708c5ba2bbe2021fd72e6f0fbab8858d90_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_940d3394881b8dec7d9338c2e52ca1405ff453402cfb3b6790ca4a7a7efe72c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940d3394881b8dec7d9338c2e52ca1405ff453402cfb3b6790ca4a7a7efe72c1->enter($__internal_940d3394881b8dec7d9338c2e52ca1405ff453402cfb3b6790ca4a7a7efe72c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00c522d9e0ce6409cd317980a9ae959f387acefd6dd8e62b4644bb19771f70c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c522d9e0ce6409cd317980a9ae959f387acefd6dd8e62b4644bb19771f70c7->enter($__internal_00c522d9e0ce6409cd317980a9ae959f387acefd6dd8e62b4644bb19771f70c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00c522d9e0ce6409cd317980a9ae959f387acefd6dd8e62b4644bb19771f70c7->leave($__internal_00c522d9e0ce6409cd317980a9ae959f387acefd6dd8e62b4644bb19771f70c7_prof);

        
        $__internal_940d3394881b8dec7d9338c2e52ca1405ff453402cfb3b6790ca4a7a7efe72c1->leave($__internal_940d3394881b8dec7d9338c2e52ca1405ff453402cfb3b6790ca4a7a7efe72c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cd35c8283f260e3f95de8a0d5b885063a9abfd2c543d6b3969b2d57538faa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd35c8283f260e3f95de8a0d5b885063a9abfd2c543d6b3969b2d57538faa2d->enter($__internal_3cd35c8283f260e3f95de8a0d5b885063a9abfd2c543d6b3969b2d57538faa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f067061d75e0220d9c3dabda3767e39d8ad12dd88356eb2df101c169352f6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f067061d75e0220d9c3dabda3767e39d8ad12dd88356eb2df101c169352f6160->enter($__internal_f067061d75e0220d9c3dabda3767e39d8ad12dd88356eb2df101c169352f6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f067061d75e0220d9c3dabda3767e39d8ad12dd88356eb2df101c169352f6160->leave($__internal_f067061d75e0220d9c3dabda3767e39d8ad12dd88356eb2df101c169352f6160_prof);

        
        $__internal_3cd35c8283f260e3f95de8a0d5b885063a9abfd2c543d6b3969b2d57538faa2d->leave($__internal_3cd35c8283f260e3f95de8a0d5b885063a9abfd2c543d6b3969b2d57538faa2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
