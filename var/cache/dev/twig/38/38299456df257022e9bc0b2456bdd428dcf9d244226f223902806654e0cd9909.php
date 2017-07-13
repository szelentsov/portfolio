<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_284133cc6ab4214a4402ecc52258e3bfefceb2591d1fc71dee96438e660a4042 extends Twig_Template
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
        $__internal_daa1ca0f651e24a79e445b5d3e02f94073018e1c3d35342481b4bad13f6aa865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa1ca0f651e24a79e445b5d3e02f94073018e1c3d35342481b4bad13f6aa865->enter($__internal_daa1ca0f651e24a79e445b5d3e02f94073018e1c3d35342481b4bad13f6aa865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_48c4badb66e37a3153e2e8cc36aa0a8a925c72a982787bdba050ad3c47d6a983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c4badb66e37a3153e2e8cc36aa0a8a925c72a982787bdba050ad3c47d6a983->enter($__internal_48c4badb66e37a3153e2e8cc36aa0a8a925c72a982787bdba050ad3c47d6a983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_daa1ca0f651e24a79e445b5d3e02f94073018e1c3d35342481b4bad13f6aa865->leave($__internal_daa1ca0f651e24a79e445b5d3e02f94073018e1c3d35342481b4bad13f6aa865_prof);

        
        $__internal_48c4badb66e37a3153e2e8cc36aa0a8a925c72a982787bdba050ad3c47d6a983->leave($__internal_48c4badb66e37a3153e2e8cc36aa0a8a925c72a982787bdba050ad3c47d6a983_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_958c2153f26a9100fd76ee790ef2bca8746643fbd1dab5deb7ec67f50b0a1689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958c2153f26a9100fd76ee790ef2bca8746643fbd1dab5deb7ec67f50b0a1689->enter($__internal_958c2153f26a9100fd76ee790ef2bca8746643fbd1dab5deb7ec67f50b0a1689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f47146a4584cf28ee5c729512a6814052da825f542dbc043e5cbb28ebf4c5b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47146a4584cf28ee5c729512a6814052da825f542dbc043e5cbb28ebf4c5b11->enter($__internal_f47146a4584cf28ee5c729512a6814052da825f542dbc043e5cbb28ebf4c5b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f47146a4584cf28ee5c729512a6814052da825f542dbc043e5cbb28ebf4c5b11->leave($__internal_f47146a4584cf28ee5c729512a6814052da825f542dbc043e5cbb28ebf4c5b11_prof);

        
        $__internal_958c2153f26a9100fd76ee790ef2bca8746643fbd1dab5deb7ec67f50b0a1689->leave($__internal_958c2153f26a9100fd76ee790ef2bca8746643fbd1dab5deb7ec67f50b0a1689_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb2b4a796fbad1fea2cd38984cbae7cdbf81f36eba2d36acbefa21d03c5b3a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2b4a796fbad1fea2cd38984cbae7cdbf81f36eba2d36acbefa21d03c5b3a27->enter($__internal_bb2b4a796fbad1fea2cd38984cbae7cdbf81f36eba2d36acbefa21d03c5b3a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d02cfa086c590e03c931841631fe1815614a934a6273cf9ea0c29c74c5fd1abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02cfa086c590e03c931841631fe1815614a934a6273cf9ea0c29c74c5fd1abd->enter($__internal_d02cfa086c590e03c931841631fe1815614a934a6273cf9ea0c29c74c5fd1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d02cfa086c590e03c931841631fe1815614a934a6273cf9ea0c29c74c5fd1abd->leave($__internal_d02cfa086c590e03c931841631fe1815614a934a6273cf9ea0c29c74c5fd1abd_prof);

        
        $__internal_bb2b4a796fbad1fea2cd38984cbae7cdbf81f36eba2d36acbefa21d03c5b3a27->leave($__internal_bb2b4a796fbad1fea2cd38984cbae7cdbf81f36eba2d36acbefa21d03c5b3a27_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3074d215f60785db38063ea5aed401466b33dc12d469205008254b46338ea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3074d215f60785db38063ea5aed401466b33dc12d469205008254b46338ea8e->enter($__internal_c3074d215f60785db38063ea5aed401466b33dc12d469205008254b46338ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16c8906e6328a358b99803d15098ec18edfa3cf94cf23bd9f730e1521e657b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c8906e6328a358b99803d15098ec18edfa3cf94cf23bd9f730e1521e657b10->enter($__internal_16c8906e6328a358b99803d15098ec18edfa3cf94cf23bd9f730e1521e657b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16c8906e6328a358b99803d15098ec18edfa3cf94cf23bd9f730e1521e657b10->leave($__internal_16c8906e6328a358b99803d15098ec18edfa3cf94cf23bd9f730e1521e657b10_prof);

        
        $__internal_c3074d215f60785db38063ea5aed401466b33dc12d469205008254b46338ea8e->leave($__internal_c3074d215f60785db38063ea5aed401466b33dc12d469205008254b46338ea8e_prof);

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
", "@Twig/layout.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
