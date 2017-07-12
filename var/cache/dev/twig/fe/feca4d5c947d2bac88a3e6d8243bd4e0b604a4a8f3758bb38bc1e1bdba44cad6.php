<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_5fdc29193e66ad3f2cde9b54a96e429d312588685c73dc808364569bc1e4a4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdc29193e66ad3f2cde9b54a96e429d312588685c73dc808364569bc1e4a4f5->enter($__internal_5fdc29193e66ad3f2cde9b54a96e429d312588685c73dc808364569bc1e4a4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a3aa93b4f7e7f91b6300cb8a0a96d80879e5a04dd0ba2349bf483d5ed9e97c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3aa93b4f7e7f91b6300cb8a0a96d80879e5a04dd0ba2349bf483d5ed9e97c97->enter($__internal_a3aa93b4f7e7f91b6300cb8a0a96d80879e5a04dd0ba2349bf483d5ed9e97c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5fdc29193e66ad3f2cde9b54a96e429d312588685c73dc808364569bc1e4a4f5->leave($__internal_5fdc29193e66ad3f2cde9b54a96e429d312588685c73dc808364569bc1e4a4f5_prof);

        
        $__internal_a3aa93b4f7e7f91b6300cb8a0a96d80879e5a04dd0ba2349bf483d5ed9e97c97->leave($__internal_a3aa93b4f7e7f91b6300cb8a0a96d80879e5a04dd0ba2349bf483d5ed9e97c97_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
