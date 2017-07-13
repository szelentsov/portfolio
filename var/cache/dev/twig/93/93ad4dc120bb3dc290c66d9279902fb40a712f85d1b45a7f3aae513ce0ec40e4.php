<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cbc99eca073cb222fb106b81437baca1e1bd6faa987db573fcf6d82485788f67 extends Twig_Template
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
        $__internal_a4ca3cbc10dd76afcb4492230c0be5322b3b1fdc122ed9cb72e20373b900142c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ca3cbc10dd76afcb4492230c0be5322b3b1fdc122ed9cb72e20373b900142c->enter($__internal_a4ca3cbc10dd76afcb4492230c0be5322b3b1fdc122ed9cb72e20373b900142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e2f90fdf7f176cd756494358c5d9cd8d891eefacc29b2a22a59608fe7cea5a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f90fdf7f176cd756494358c5d9cd8d891eefacc29b2a22a59608fe7cea5a44->enter($__internal_e2f90fdf7f176cd756494358c5d9cd8d891eefacc29b2a22a59608fe7cea5a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a4ca3cbc10dd76afcb4492230c0be5322b3b1fdc122ed9cb72e20373b900142c->leave($__internal_a4ca3cbc10dd76afcb4492230c0be5322b3b1fdc122ed9cb72e20373b900142c_prof);

        
        $__internal_e2f90fdf7f176cd756494358c5d9cd8d891eefacc29b2a22a59608fe7cea5a44->leave($__internal_e2f90fdf7f176cd756494358c5d9cd8d891eefacc29b2a22a59608fe7cea5a44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
