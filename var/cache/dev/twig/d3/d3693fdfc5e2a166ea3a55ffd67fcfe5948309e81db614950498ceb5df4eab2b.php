<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_452460a44d9df7a7c5c3ea1b346284b0aaa3ebdbe76afb735ea5c875268a75c6 extends Twig_Template
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
        $__internal_698ed9c979ce7bc19e15dfdd7ee48d28b362a1fb9f1ca81c63e39b24f68d94a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698ed9c979ce7bc19e15dfdd7ee48d28b362a1fb9f1ca81c63e39b24f68d94a8->enter($__internal_698ed9c979ce7bc19e15dfdd7ee48d28b362a1fb9f1ca81c63e39b24f68d94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ed28317ddc075225b85c9f29bcc8c3f51d3a802b356b8621375f1b211695dab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed28317ddc075225b85c9f29bcc8c3f51d3a802b356b8621375f1b211695dab5->enter($__internal_ed28317ddc075225b85c9f29bcc8c3f51d3a802b356b8621375f1b211695dab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_698ed9c979ce7bc19e15dfdd7ee48d28b362a1fb9f1ca81c63e39b24f68d94a8->leave($__internal_698ed9c979ce7bc19e15dfdd7ee48d28b362a1fb9f1ca81c63e39b24f68d94a8_prof);

        
        $__internal_ed28317ddc075225b85c9f29bcc8c3f51d3a802b356b8621375f1b211695dab5->leave($__internal_ed28317ddc075225b85c9f29bcc8c3f51d3a802b356b8621375f1b211695dab5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
