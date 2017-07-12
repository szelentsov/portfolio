<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_4ba46c34f04df3f3278b277043b5f61ebc713b416b2302a0e176a90978348880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba46c34f04df3f3278b277043b5f61ebc713b416b2302a0e176a90978348880->enter($__internal_4ba46c34f04df3f3278b277043b5f61ebc713b416b2302a0e176a90978348880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_aad478c1d32806db7e77a704c7a7fed05e40daacbbbd0d4413f5b5f9db5f8614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad478c1d32806db7e77a704c7a7fed05e40daacbbbd0d4413f5b5f9db5f8614->enter($__internal_aad478c1d32806db7e77a704c7a7fed05e40daacbbbd0d4413f5b5f9db5f8614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4ba46c34f04df3f3278b277043b5f61ebc713b416b2302a0e176a90978348880->leave($__internal_4ba46c34f04df3f3278b277043b5f61ebc713b416b2302a0e176a90978348880_prof);

        
        $__internal_aad478c1d32806db7e77a704c7a7fed05e40daacbbbd0d4413f5b5f9db5f8614->leave($__internal_aad478c1d32806db7e77a704c7a7fed05e40daacbbbd0d4413f5b5f9db5f8614_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
