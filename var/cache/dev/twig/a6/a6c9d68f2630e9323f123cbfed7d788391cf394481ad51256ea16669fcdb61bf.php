<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d841193160d18b76aba9715e7cd49d9e8c6168d49718d79e06b85a043bb4f9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a7bd52f7af99ceee8058f8d9f33ccd3f653c0401be86f46af282b6ce6dd970f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7bd52f7af99ceee8058f8d9f33ccd3f653c0401be86f46af282b6ce6dd970f->enter($__internal_0a7bd52f7af99ceee8058f8d9f33ccd3f653c0401be86f46af282b6ce6dd970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_fd18785592ab821d1dfb0d49f97252d6118fcddb9f67f45271987c7f8cac2b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd18785592ab821d1dfb0d49f97252d6118fcddb9f67f45271987c7f8cac2b82->enter($__internal_fd18785592ab821d1dfb0d49f97252d6118fcddb9f67f45271987c7f8cac2b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_0a7bd52f7af99ceee8058f8d9f33ccd3f653c0401be86f46af282b6ce6dd970f->leave($__internal_0a7bd52f7af99ceee8058f8d9f33ccd3f653c0401be86f46af282b6ce6dd970f_prof);

        
        $__internal_fd18785592ab821d1dfb0d49f97252d6118fcddb9f67f45271987c7f8cac2b82->leave($__internal_fd18785592ab821d1dfb0d49f97252d6118fcddb9f67f45271987c7f8cac2b82_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
