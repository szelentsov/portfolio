<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_045f5fb7c333ccdd5b62a9d740c7acb988a445737e29c969f591bc29fa33121e extends Twig_Template
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
        $__internal_3769b270661588a63bf0cb6103a565eec14f733dc90c19240e8927ebe7fe8f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3769b270661588a63bf0cb6103a565eec14f733dc90c19240e8927ebe7fe8f51->enter($__internal_3769b270661588a63bf0cb6103a565eec14f733dc90c19240e8927ebe7fe8f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_acf81daa951db7e98593cc696723d3dce4746cdd287d8dbaee238bba853a0b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf81daa951db7e98593cc696723d3dce4746cdd287d8dbaee238bba853a0b9d->enter($__internal_acf81daa951db7e98593cc696723d3dce4746cdd287d8dbaee238bba853a0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3769b270661588a63bf0cb6103a565eec14f733dc90c19240e8927ebe7fe8f51->leave($__internal_3769b270661588a63bf0cb6103a565eec14f733dc90c19240e8927ebe7fe8f51_prof);

        
        $__internal_acf81daa951db7e98593cc696723d3dce4746cdd287d8dbaee238bba853a0b9d->leave($__internal_acf81daa951db7e98593cc696723d3dce4746cdd287d8dbaee238bba853a0b9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
