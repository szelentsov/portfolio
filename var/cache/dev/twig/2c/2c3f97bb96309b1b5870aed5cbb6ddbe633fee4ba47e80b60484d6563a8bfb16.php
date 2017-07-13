<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a9354c43cf228d9b3e3c7536e53989f8e2c3e4f1cc34ff9eaad4e3e5ef40399d extends Twig_Template
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
        $__internal_c1e440e5aa33810bf23f3042e496fabf81e9f9b824e82d08c355f45e9ee4e755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e440e5aa33810bf23f3042e496fabf81e9f9b824e82d08c355f45e9ee4e755->enter($__internal_c1e440e5aa33810bf23f3042e496fabf81e9f9b824e82d08c355f45e9ee4e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c149e39d56f2857f1d433270d8e734442a09a4871816f3b4d025a5e739b7f542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c149e39d56f2857f1d433270d8e734442a09a4871816f3b4d025a5e739b7f542->enter($__internal_c149e39d56f2857f1d433270d8e734442a09a4871816f3b4d025a5e739b7f542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c1e440e5aa33810bf23f3042e496fabf81e9f9b824e82d08c355f45e9ee4e755->leave($__internal_c1e440e5aa33810bf23f3042e496fabf81e9f9b824e82d08c355f45e9ee4e755_prof);

        
        $__internal_c149e39d56f2857f1d433270d8e734442a09a4871816f3b4d025a5e739b7f542->leave($__internal_c149e39d56f2857f1d433270d8e734442a09a4871816f3b4d025a5e739b7f542_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
