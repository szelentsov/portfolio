<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_dbfaef1d596566f073d24b95d69f47e6a6b38f0f7be5a8a3b567f73e9c944d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfaef1d596566f073d24b95d69f47e6a6b38f0f7be5a8a3b567f73e9c944d64->enter($__internal_dbfaef1d596566f073d24b95d69f47e6a6b38f0f7be5a8a3b567f73e9c944d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5c2cd7d464279fd1b6e82a8dcb2a34cc0a8040c2ac4079652673c039e8d8d9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2cd7d464279fd1b6e82a8dcb2a34cc0a8040c2ac4079652673c039e8d8d9fc->enter($__internal_5c2cd7d464279fd1b6e82a8dcb2a34cc0a8040c2ac4079652673c039e8d8d9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dbfaef1d596566f073d24b95d69f47e6a6b38f0f7be5a8a3b567f73e9c944d64->leave($__internal_dbfaef1d596566f073d24b95d69f47e6a6b38f0f7be5a8a3b567f73e9c944d64_prof);

        
        $__internal_5c2cd7d464279fd1b6e82a8dcb2a34cc0a8040c2ac4079652673c039e8d8d9fc->leave($__internal_5c2cd7d464279fd1b6e82a8dcb2a34cc0a8040c2ac4079652673c039e8d8d9fc_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
