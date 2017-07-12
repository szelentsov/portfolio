<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
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
        $__internal_306e290f5d018d3c716bd8f50a8a2e9faa6d8d15fdd3e4d99e6e4b298a8cdc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306e290f5d018d3c716bd8f50a8a2e9faa6d8d15fdd3e4d99e6e4b298a8cdc67->enter($__internal_306e290f5d018d3c716bd8f50a8a2e9faa6d8d15fdd3e4d99e6e4b298a8cdc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f2e08261fe04241af6fd74f000ceaf9f7b1e224c9831e0f424225ab2c6ae88fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e08261fe04241af6fd74f000ceaf9f7b1e224c9831e0f424225ab2c6ae88fd->enter($__internal_f2e08261fe04241af6fd74f000ceaf9f7b1e224c9831e0f424225ab2c6ae88fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306e290f5d018d3c716bd8f50a8a2e9faa6d8d15fdd3e4d99e6e4b298a8cdc67->leave($__internal_306e290f5d018d3c716bd8f50a8a2e9faa6d8d15fdd3e4d99e6e4b298a8cdc67_prof);

        
        $__internal_f2e08261fe04241af6fd74f000ceaf9f7b1e224c9831e0f424225ab2c6ae88fd->leave($__internal_f2e08261fe04241af6fd74f000ceaf9f7b1e224c9831e0f424225ab2c6ae88fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c4cf799e1c46f1a823121d4b23b832cb535e3d2ca6c87b7f1f395b113093e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4cf799e1c46f1a823121d4b23b832cb535e3d2ca6c87b7f1f395b113093e80->enter($__internal_4c4cf799e1c46f1a823121d4b23b832cb535e3d2ca6c87b7f1f395b113093e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10401b66275709fa717992852671d209e658b97e3487a0c01ac00e76fb9541b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10401b66275709fa717992852671d209e658b97e3487a0c01ac00e76fb9541b8->enter($__internal_10401b66275709fa717992852671d209e658b97e3487a0c01ac00e76fb9541b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10401b66275709fa717992852671d209e658b97e3487a0c01ac00e76fb9541b8->leave($__internal_10401b66275709fa717992852671d209e658b97e3487a0c01ac00e76fb9541b8_prof);

        
        $__internal_4c4cf799e1c46f1a823121d4b23b832cb535e3d2ca6c87b7f1f395b113093e80->leave($__internal_4c4cf799e1c46f1a823121d4b23b832cb535e3d2ca6c87b7f1f395b113093e80_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d4acb7d5b9a6693644a79a2c039cdb69e4a71384fc2e3ec2a5090f51599093f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4acb7d5b9a6693644a79a2c039cdb69e4a71384fc2e3ec2a5090f51599093f->enter($__internal_3d4acb7d5b9a6693644a79a2c039cdb69e4a71384fc2e3ec2a5090f51599093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4fd4ff712b2451506f1776f5142394c74238fbe4b988c0b929773b9bc8b580c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fd4ff712b2451506f1776f5142394c74238fbe4b988c0b929773b9bc8b580c->enter($__internal_b4fd4ff712b2451506f1776f5142394c74238fbe4b988c0b929773b9bc8b580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b4fd4ff712b2451506f1776f5142394c74238fbe4b988c0b929773b9bc8b580c->leave($__internal_b4fd4ff712b2451506f1776f5142394c74238fbe4b988c0b929773b9bc8b580c_prof);

        
        $__internal_3d4acb7d5b9a6693644a79a2c039cdb69e4a71384fc2e3ec2a5090f51599093f->leave($__internal_3d4acb7d5b9a6693644a79a2c039cdb69e4a71384fc2e3ec2a5090f51599093f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b55688ec58cad36bbc45e7e2ffaaae96fc79602a86435ad1e7bff0a02a2bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b55688ec58cad36bbc45e7e2ffaaae96fc79602a86435ad1e7bff0a02a2bc5->enter($__internal_77b55688ec58cad36bbc45e7e2ffaaae96fc79602a86435ad1e7bff0a02a2bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80415044fb0617c2edcb119e145da17ab3f07126224be26cb4261ec9283c935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80415044fb0617c2edcb119e145da17ab3f07126224be26cb4261ec9283c935e->enter($__internal_80415044fb0617c2edcb119e145da17ab3f07126224be26cb4261ec9283c935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_80415044fb0617c2edcb119e145da17ab3f07126224be26cb4261ec9283c935e->leave($__internal_80415044fb0617c2edcb119e145da17ab3f07126224be26cb4261ec9283c935e_prof);

        
        $__internal_77b55688ec58cad36bbc45e7e2ffaaae96fc79602a86435ad1e7bff0a02a2bc5->leave($__internal_77b55688ec58cad36bbc45e7e2ffaaae96fc79602a86435ad1e7bff0a02a2bc5_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
