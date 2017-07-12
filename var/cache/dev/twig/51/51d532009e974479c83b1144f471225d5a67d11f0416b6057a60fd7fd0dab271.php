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
        $__internal_549f860bd2ae4098e62224179470dd1e2c6b3501ca7dc5c55e7e51a2750b9b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549f860bd2ae4098e62224179470dd1e2c6b3501ca7dc5c55e7e51a2750b9b7a->enter($__internal_549f860bd2ae4098e62224179470dd1e2c6b3501ca7dc5c55e7e51a2750b9b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5f9d0d5079bf9d4aaf64cfaf39c04aa6c2c8b4a70ac713a470d0b9665fc536a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9d0d5079bf9d4aaf64cfaf39c04aa6c2c8b4a70ac713a470d0b9665fc536a5->enter($__internal_5f9d0d5079bf9d4aaf64cfaf39c04aa6c2c8b4a70ac713a470d0b9665fc536a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_549f860bd2ae4098e62224179470dd1e2c6b3501ca7dc5c55e7e51a2750b9b7a->leave($__internal_549f860bd2ae4098e62224179470dd1e2c6b3501ca7dc5c55e7e51a2750b9b7a_prof);

        
        $__internal_5f9d0d5079bf9d4aaf64cfaf39c04aa6c2c8b4a70ac713a470d0b9665fc536a5->leave($__internal_5f9d0d5079bf9d4aaf64cfaf39c04aa6c2c8b4a70ac713a470d0b9665fc536a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7505ded411fe3802e397e753d7aa1e55f613b22ee9c93517a0c472bd208c636d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7505ded411fe3802e397e753d7aa1e55f613b22ee9c93517a0c472bd208c636d->enter($__internal_7505ded411fe3802e397e753d7aa1e55f613b22ee9c93517a0c472bd208c636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07646b95f8d05b781293ea20a7ee947e3b9b4bd2285f7909d886ad2416a2a4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07646b95f8d05b781293ea20a7ee947e3b9b4bd2285f7909d886ad2416a2a4a3->enter($__internal_07646b95f8d05b781293ea20a7ee947e3b9b4bd2285f7909d886ad2416a2a4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_07646b95f8d05b781293ea20a7ee947e3b9b4bd2285f7909d886ad2416a2a4a3->leave($__internal_07646b95f8d05b781293ea20a7ee947e3b9b4bd2285f7909d886ad2416a2a4a3_prof);

        
        $__internal_7505ded411fe3802e397e753d7aa1e55f613b22ee9c93517a0c472bd208c636d->leave($__internal_7505ded411fe3802e397e753d7aa1e55f613b22ee9c93517a0c472bd208c636d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9835223c46655ca2b166b6e73429cac983b00c951acbeb4bfb7293278657d371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9835223c46655ca2b166b6e73429cac983b00c951acbeb4bfb7293278657d371->enter($__internal_9835223c46655ca2b166b6e73429cac983b00c951acbeb4bfb7293278657d371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d947e87486ecbb7390fba2f5fd032136aa5e152715a806e48d4fb253ad581e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d947e87486ecbb7390fba2f5fd032136aa5e152715a806e48d4fb253ad581e7b->enter($__internal_d947e87486ecbb7390fba2f5fd032136aa5e152715a806e48d4fb253ad581e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d947e87486ecbb7390fba2f5fd032136aa5e152715a806e48d4fb253ad581e7b->leave($__internal_d947e87486ecbb7390fba2f5fd032136aa5e152715a806e48d4fb253ad581e7b_prof);

        
        $__internal_9835223c46655ca2b166b6e73429cac983b00c951acbeb4bfb7293278657d371->leave($__internal_9835223c46655ca2b166b6e73429cac983b00c951acbeb4bfb7293278657d371_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58574d9fa3ba68c06ea17f105706d3dc6e1bfc8298c406d794a20e39ec62619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58574d9fa3ba68c06ea17f105706d3dc6e1bfc8298c406d794a20e39ec62619->enter($__internal_b58574d9fa3ba68c06ea17f105706d3dc6e1bfc8298c406d794a20e39ec62619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb7bb8e54bf676a28b4d6f76e9d6071c9191a45721b95481e0fa6aa9ecc05178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7bb8e54bf676a28b4d6f76e9d6071c9191a45721b95481e0fa6aa9ecc05178->enter($__internal_fb7bb8e54bf676a28b4d6f76e9d6071c9191a45721b95481e0fa6aa9ecc05178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb7bb8e54bf676a28b4d6f76e9d6071c9191a45721b95481e0fa6aa9ecc05178->leave($__internal_fb7bb8e54bf676a28b4d6f76e9d6071c9191a45721b95481e0fa6aa9ecc05178_prof);

        
        $__internal_b58574d9fa3ba68c06ea17f105706d3dc6e1bfc8298c406d794a20e39ec62619->leave($__internal_b58574d9fa3ba68c06ea17f105706d3dc6e1bfc8298c406d794a20e39ec62619_prof);

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
", "@Twig/layout.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
