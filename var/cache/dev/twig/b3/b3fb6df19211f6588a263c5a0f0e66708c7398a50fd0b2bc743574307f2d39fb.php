<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_416d9ef4726c1bffc088e27e01c1e78c667865556fff139964569b29ba224b86 extends Twig_Template
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
        $__internal_9b525f8ac79410007c47a40dfa1e1f2281919d6822a5f3bfb0fbfaa1934d1ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b525f8ac79410007c47a40dfa1e1f2281919d6822a5f3bfb0fbfaa1934d1ae4->enter($__internal_9b525f8ac79410007c47a40dfa1e1f2281919d6822a5f3bfb0fbfaa1934d1ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_77d34eea704d58e211a476e93c21f2e960fcff264a1ac812fe37473cc7a8aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d34eea704d58e211a476e93c21f2e960fcff264a1ac812fe37473cc7a8aaf2->enter($__internal_77d34eea704d58e211a476e93c21f2e960fcff264a1ac812fe37473cc7a8aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9b525f8ac79410007c47a40dfa1e1f2281919d6822a5f3bfb0fbfaa1934d1ae4->leave($__internal_9b525f8ac79410007c47a40dfa1e1f2281919d6822a5f3bfb0fbfaa1934d1ae4_prof);

        
        $__internal_77d34eea704d58e211a476e93c21f2e960fcff264a1ac812fe37473cc7a8aaf2->leave($__internal_77d34eea704d58e211a476e93c21f2e960fcff264a1ac812fe37473cc7a8aaf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
