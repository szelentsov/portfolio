<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_699e314504b26b769aecb8725148a2b3208c5138ec56b74c378572ab99edb0eb extends Twig_Template
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
        $__internal_096402facb6f6aa5914134cca1a15b552a44ae0deb724d47fff6f84f676489a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096402facb6f6aa5914134cca1a15b552a44ae0deb724d47fff6f84f676489a4->enter($__internal_096402facb6f6aa5914134cca1a15b552a44ae0deb724d47fff6f84f676489a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e88e77af4ffb193ea8d704661bd0a8b230050f73c0ef3ecea3f3e3154d8d4d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88e77af4ffb193ea8d704661bd0a8b230050f73c0ef3ecea3f3e3154d8d4d18->enter($__internal_e88e77af4ffb193ea8d704661bd0a8b230050f73c0ef3ecea3f3e3154d8d4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_096402facb6f6aa5914134cca1a15b552a44ae0deb724d47fff6f84f676489a4->leave($__internal_096402facb6f6aa5914134cca1a15b552a44ae0deb724d47fff6f84f676489a4_prof);

        
        $__internal_e88e77af4ffb193ea8d704661bd0a8b230050f73c0ef3ecea3f3e3154d8d4d18->leave($__internal_e88e77af4ffb193ea8d704661bd0a8b230050f73c0ef3ecea3f3e3154d8d4d18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
