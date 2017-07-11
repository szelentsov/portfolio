<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2399ad4dbbe0276e36dadde0fc7e59089c05f74ef82e39d722063a7a2805eeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2399ad4dbbe0276e36dadde0fc7e59089c05f74ef82e39d722063a7a2805eeee->enter($__internal_2399ad4dbbe0276e36dadde0fc7e59089c05f74ef82e39d722063a7a2805eeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ae3a9af7c1a93c2472033b9f212d9464e35c401b49ec5b2bb3b359f8ea16ff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3a9af7c1a93c2472033b9f212d9464e35c401b49ec5b2bb3b359f8ea16ff71->enter($__internal_ae3a9af7c1a93c2472033b9f212d9464e35c401b49ec5b2bb3b359f8ea16ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2399ad4dbbe0276e36dadde0fc7e59089c05f74ef82e39d722063a7a2805eeee->leave($__internal_2399ad4dbbe0276e36dadde0fc7e59089c05f74ef82e39d722063a7a2805eeee_prof);

        
        $__internal_ae3a9af7c1a93c2472033b9f212d9464e35c401b49ec5b2bb3b359f8ea16ff71->leave($__internal_ae3a9af7c1a93c2472033b9f212d9464e35c401b49ec5b2bb3b359f8ea16ff71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f2bc3f7b76e43eb7e3a39621cc6284911f3f8fc50ee89148fa9b431755b5f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2bc3f7b76e43eb7e3a39621cc6284911f3f8fc50ee89148fa9b431755b5f31->enter($__internal_0f2bc3f7b76e43eb7e3a39621cc6284911f3f8fc50ee89148fa9b431755b5f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c7237263931607cd077a6ec880b4b01cacdc3e1f44270bbc2181087b7694d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7237263931607cd077a6ec880b4b01cacdc3e1f44270bbc2181087b7694d14->enter($__internal_1c7237263931607cd077a6ec880b4b01cacdc3e1f44270bbc2181087b7694d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1c7237263931607cd077a6ec880b4b01cacdc3e1f44270bbc2181087b7694d14->leave($__internal_1c7237263931607cd077a6ec880b4b01cacdc3e1f44270bbc2181087b7694d14_prof);

        
        $__internal_0f2bc3f7b76e43eb7e3a39621cc6284911f3f8fc50ee89148fa9b431755b5f31->leave($__internal_0f2bc3f7b76e43eb7e3a39621cc6284911f3f8fc50ee89148fa9b431755b5f31_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7577f7e2e2a42aba405dcb01d329f659b42aafac63e8395d1816caa14e815cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7577f7e2e2a42aba405dcb01d329f659b42aafac63e8395d1816caa14e815cd2->enter($__internal_7577f7e2e2a42aba405dcb01d329f659b42aafac63e8395d1816caa14e815cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f11ce7ce4d6aee22993aec9d388a7c8e5ae33e878c405adef922e901703209a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f11ce7ce4d6aee22993aec9d388a7c8e5ae33e878c405adef922e901703209a->enter($__internal_2f11ce7ce4d6aee22993aec9d388a7c8e5ae33e878c405adef922e901703209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2f11ce7ce4d6aee22993aec9d388a7c8e5ae33e878c405adef922e901703209a->leave($__internal_2f11ce7ce4d6aee22993aec9d388a7c8e5ae33e878c405adef922e901703209a_prof);

        
        $__internal_7577f7e2e2a42aba405dcb01d329f659b42aafac63e8395d1816caa14e815cd2->leave($__internal_7577f7e2e2a42aba405dcb01d329f659b42aafac63e8395d1816caa14e815cd2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_01cdb070e49f2a01d6fa0a52fc98420a1dd92b51ac64450a69bd7c94d4dad4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cdb070e49f2a01d6fa0a52fc98420a1dd92b51ac64450a69bd7c94d4dad4fb->enter($__internal_01cdb070e49f2a01d6fa0a52fc98420a1dd92b51ac64450a69bd7c94d4dad4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a90c83a27b91f11baa277d74124e19d9d7afa81b50ae368d8f736d27575b63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a90c83a27b91f11baa277d74124e19d9d7afa81b50ae368d8f736d27575b63e->enter($__internal_0a90c83a27b91f11baa277d74124e19d9d7afa81b50ae368d8f736d27575b63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a90c83a27b91f11baa277d74124e19d9d7afa81b50ae368d8f736d27575b63e->leave($__internal_0a90c83a27b91f11baa277d74124e19d9d7afa81b50ae368d8f736d27575b63e_prof);

        
        $__internal_01cdb070e49f2a01d6fa0a52fc98420a1dd92b51ac64450a69bd7c94d4dad4fb->leave($__internal_01cdb070e49f2a01d6fa0a52fc98420a1dd92b51ac64450a69bd7c94d4dad4fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/sergey/zsv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
