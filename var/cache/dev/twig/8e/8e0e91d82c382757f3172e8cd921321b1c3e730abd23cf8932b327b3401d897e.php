<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0c5591926016353f2f30aba926164468ce2c6ac2a3d3700b114082a4ea8ff54b extends Twig_Template
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
        $__internal_12485a668eab2a69cc733985f3c6b6c0afdbc8dbe16fb4feb6bc5f4ec6ceacf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12485a668eab2a69cc733985f3c6b6c0afdbc8dbe16fb4feb6bc5f4ec6ceacf1->enter($__internal_12485a668eab2a69cc733985f3c6b6c0afdbc8dbe16fb4feb6bc5f4ec6ceacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2b858187cd12eac064f53f369b62ce6c9381969e14da335f047fb936603f0bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b858187cd12eac064f53f369b62ce6c9381969e14da335f047fb936603f0bfa->enter($__internal_2b858187cd12eac064f53f369b62ce6c9381969e14da335f047fb936603f0bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_12485a668eab2a69cc733985f3c6b6c0afdbc8dbe16fb4feb6bc5f4ec6ceacf1->leave($__internal_12485a668eab2a69cc733985f3c6b6c0afdbc8dbe16fb4feb6bc5f4ec6ceacf1_prof);

        
        $__internal_2b858187cd12eac064f53f369b62ce6c9381969e14da335f047fb936603f0bfa->leave($__internal_2b858187cd12eac064f53f369b62ce6c9381969e14da335f047fb936603f0bfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
