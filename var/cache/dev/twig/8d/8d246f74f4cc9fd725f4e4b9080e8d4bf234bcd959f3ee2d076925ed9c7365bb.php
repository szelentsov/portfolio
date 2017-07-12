<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_2c5a231999b0e8e91ffbe86f726833b52f91561c4f2f4285e5c4fb3484bd681d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5a231999b0e8e91ffbe86f726833b52f91561c4f2f4285e5c4fb3484bd681d->enter($__internal_2c5a231999b0e8e91ffbe86f726833b52f91561c4f2f4285e5c4fb3484bd681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_89c3fd6a27b11f008db196e6c9d33183f9a5a3dfc10200a7c6a101ef5a472dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c3fd6a27b11f008db196e6c9d33183f9a5a3dfc10200a7c6a101ef5a472dfa->enter($__internal_89c3fd6a27b11f008db196e6c9d33183f9a5a3dfc10200a7c6a101ef5a472dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c5a231999b0e8e91ffbe86f726833b52f91561c4f2f4285e5c4fb3484bd681d->leave($__internal_2c5a231999b0e8e91ffbe86f726833b52f91561c4f2f4285e5c4fb3484bd681d_prof);

        
        $__internal_89c3fd6a27b11f008db196e6c9d33183f9a5a3dfc10200a7c6a101ef5a472dfa->leave($__internal_89c3fd6a27b11f008db196e6c9d33183f9a5a3dfc10200a7c6a101ef5a472dfa_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
