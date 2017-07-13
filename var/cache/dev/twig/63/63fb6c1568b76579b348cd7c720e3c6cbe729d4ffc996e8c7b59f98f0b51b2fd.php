<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cfe3c1753bd4b66d6cc5314c2ea9b358b9c6ec3a21f7c569cf9877a71f17c93 extends Twig_Template
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
        $__internal_4341ee85c9b1061378b7a3a9e291ea91cc555882e3f608f29113fb488acefc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4341ee85c9b1061378b7a3a9e291ea91cc555882e3f608f29113fb488acefc8c->enter($__internal_4341ee85c9b1061378b7a3a9e291ea91cc555882e3f608f29113fb488acefc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_20521d9be867c6015d5237d0b6bf019790eaa8083373e9284fa045f8a8844a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20521d9be867c6015d5237d0b6bf019790eaa8083373e9284fa045f8a8844a58->enter($__internal_20521d9be867c6015d5237d0b6bf019790eaa8083373e9284fa045f8a8844a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4341ee85c9b1061378b7a3a9e291ea91cc555882e3f608f29113fb488acefc8c->leave($__internal_4341ee85c9b1061378b7a3a9e291ea91cc555882e3f608f29113fb488acefc8c_prof);

        
        $__internal_20521d9be867c6015d5237d0b6bf019790eaa8083373e9284fa045f8a8844a58->leave($__internal_20521d9be867c6015d5237d0b6bf019790eaa8083373e9284fa045f8a8844a58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
