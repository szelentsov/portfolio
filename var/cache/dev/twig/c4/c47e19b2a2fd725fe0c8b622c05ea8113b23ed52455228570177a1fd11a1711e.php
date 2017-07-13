<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_69888fa37dfa7352d840780a31b64cc0501ea42f19ddbb9c593560140f3c5a4c extends Twig_Template
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
        $__internal_ef46703e25b534c65b58c6a889ec9ce737ba1b8e412200b9f9ad85ca7bccca01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef46703e25b534c65b58c6a889ec9ce737ba1b8e412200b9f9ad85ca7bccca01->enter($__internal_ef46703e25b534c65b58c6a889ec9ce737ba1b8e412200b9f9ad85ca7bccca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fc4f8ae9c0003ef0bee53be1420dd882af72709a6e501502b65f89c04015cced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4f8ae9c0003ef0bee53be1420dd882af72709a6e501502b65f89c04015cced->enter($__internal_fc4f8ae9c0003ef0bee53be1420dd882af72709a6e501502b65f89c04015cced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ef46703e25b534c65b58c6a889ec9ce737ba1b8e412200b9f9ad85ca7bccca01->leave($__internal_ef46703e25b534c65b58c6a889ec9ce737ba1b8e412200b9f9ad85ca7bccca01_prof);

        
        $__internal_fc4f8ae9c0003ef0bee53be1420dd882af72709a6e501502b65f89c04015cced->leave($__internal_fc4f8ae9c0003ef0bee53be1420dd882af72709a6e501502b65f89c04015cced_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
