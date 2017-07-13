<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_16229be880f1865a809f13cc7fd119348c62cf5b7e54e05356f9e87f57903982 extends Twig_Template
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
        $__internal_e992d9d9292ca902c9c792f421d26fd4e54e499a249f4cb949d4eb57aaf8730d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e992d9d9292ca902c9c792f421d26fd4e54e499a249f4cb949d4eb57aaf8730d->enter($__internal_e992d9d9292ca902c9c792f421d26fd4e54e499a249f4cb949d4eb57aaf8730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a09c1dddbf7600a992cb0f7d693804fd94338a25ea405027d37bd24a5992e475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09c1dddbf7600a992cb0f7d693804fd94338a25ea405027d37bd24a5992e475->enter($__internal_a09c1dddbf7600a992cb0f7d693804fd94338a25ea405027d37bd24a5992e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e992d9d9292ca902c9c792f421d26fd4e54e499a249f4cb949d4eb57aaf8730d->leave($__internal_e992d9d9292ca902c9c792f421d26fd4e54e499a249f4cb949d4eb57aaf8730d_prof);

        
        $__internal_a09c1dddbf7600a992cb0f7d693804fd94338a25ea405027d37bd24a5992e475->leave($__internal_a09c1dddbf7600a992cb0f7d693804fd94338a25ea405027d37bd24a5992e475_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
