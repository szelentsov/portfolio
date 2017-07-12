<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_682b987239ab077c9ab4cd91a72815eddbbb37e82556a1063ddacfb76f5840d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682b987239ab077c9ab4cd91a72815eddbbb37e82556a1063ddacfb76f5840d6->enter($__internal_682b987239ab077c9ab4cd91a72815eddbbb37e82556a1063ddacfb76f5840d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c84595d012f9c870ac6347d43f3db4c05e6ba212e6a913ffaec82862e6645afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84595d012f9c870ac6347d43f3db4c05e6ba212e6a913ffaec82862e6645afb->enter($__internal_c84595d012f9c870ac6347d43f3db4c05e6ba212e6a913ffaec82862e6645afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_682b987239ab077c9ab4cd91a72815eddbbb37e82556a1063ddacfb76f5840d6->leave($__internal_682b987239ab077c9ab4cd91a72815eddbbb37e82556a1063ddacfb76f5840d6_prof);

        
        $__internal_c84595d012f9c870ac6347d43f3db4c05e6ba212e6a913ffaec82862e6645afb->leave($__internal_c84595d012f9c870ac6347d43f3db4c05e6ba212e6a913ffaec82862e6645afb_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
