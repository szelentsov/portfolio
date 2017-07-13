<?php

/* security/login.html.twig */
class __TwigTemplate_b4b37596e0caa76fa4a969d19284fba94544fee310c6f20775e60ad5d4e69303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2420f5eb0a457195f216ff0a31986d2fe3b2fbbf188a7c62a3f7b90aa6ec8d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2420f5eb0a457195f216ff0a31986d2fe3b2fbbf188a7c62a3f7b90aa6ec8d3d->enter($__internal_2420f5eb0a457195f216ff0a31986d2fe3b2fbbf188a7c62a3f7b90aa6ec8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_539a5cdbd93eb917de73490ef930d7b07c5bf4be377a5f0ff82e7d3ae3c03570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539a5cdbd93eb917de73490ef930d7b07c5bf4be377a5f0ff82e7d3ae3c03570->enter($__internal_539a5cdbd93eb917de73490ef930d7b07c5bf4be377a5f0ff82e7d3ae3c03570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4 col-lg-offset-4 col-xs-12 adin-form-enter\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                <div class=\"col-lg-12\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
                <div class=\"col-lg-12\">
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>
                <div class=\"col-lg-12\">
                    <button type=\"submit\" class=\"btn btn-danger col-lg-10\">login</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_2420f5eb0a457195f216ff0a31986d2fe3b2fbbf188a7c62a3f7b90aa6ec8d3d->leave($__internal_2420f5eb0a457195f216ff0a31986d2fe3b2fbbf188a7c62a3f7b90aa6ec8d3d_prof);

        
        $__internal_539a5cdbd93eb917de73490ef930d7b07c5bf4be377a5f0ff82e7d3ae3c03570->leave($__internal_539a5cdbd93eb917de73490ef930d7b07c5bf4be377a5f0ff82e7d3ae3c03570_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad1a863e931c1e1e7a1e594542ab3834247d45dda1073efe6c9c76bd03ed51b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1a863e931c1e1e7a1e594542ab3834247d45dda1073efe6c9c76bd03ed51b5->enter($__internal_ad1a863e931c1e1e7a1e594542ab3834247d45dda1073efe6c9c76bd03ed51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99a0b9f22dde0adbcd44bcbc31ac67c0248ca0ff63157c81b8f2bc95c46afc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a0b9f22dde0adbcd44bcbc31ac67c0248ca0ff63157c81b8f2bc95c46afc32->enter($__internal_99a0b9f22dde0adbcd44bcbc31ac67c0248ca0ff63157c81b8f2bc95c46afc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_99a0b9f22dde0adbcd44bcbc31ac67c0248ca0ff63157c81b8f2bc95c46afc32->leave($__internal_99a0b9f22dde0adbcd44bcbc31ac67c0248ca0ff63157c81b8f2bc95c46afc32_prof);

        
        $__internal_ad1a863e931c1e1e7a1e594542ab3834247d45dda1073efe6c9c76bd03ed51b5->leave($__internal_ad1a863e931c1e1e7a1e594542ab3834247d45dda1073efe6c9c76bd03ed51b5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  89 => 8,  80 => 7,  55 => 19,  49 => 16,  43 => 12,  41 => 7,  37 => 5,  31 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" />
        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('main/css/main.css') }}\" />
{% endblock %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4 col-lg-offset-4 col-xs-12 adin-form-enter\">
            <form action=\"{{ path('login') }}\" method=\"post\">
                <div class=\"col-lg-12\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                </div>
                <div class=\"col-lg-12\">
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>
                <div class=\"col-lg-12\">
                    <button type=\"submit\" class=\"btn btn-danger col-lg-10\">login</button>
                </div>
            </form>
        </div>
    </div>
</div>

", "security/login.html.twig", "/home/sergey/portfolio_new/app/Resources/views/security/login.html.twig");
    }
}
