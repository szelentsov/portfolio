<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4ce9617595d825c08514bc892abe877781e6c5274c9e69ed67a92609b5c8d91c extends Twig_Template
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
        $__internal_229525302eda297e0e076c95bdf1ae26f68b22582d9d091b29f8f606959dac39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229525302eda297e0e076c95bdf1ae26f68b22582d9d091b29f8f606959dac39->enter($__internal_229525302eda297e0e076c95bdf1ae26f68b22582d9d091b29f8f606959dac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dd7088e0365b937a73b6cd0234492c4ad473c1be53d2b5c3b9d17eb361e02ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7088e0365b937a73b6cd0234492c4ad473c1be53d2b5c3b9d17eb361e02ad8->enter($__internal_dd7088e0365b937a73b6cd0234492c4ad473c1be53d2b5c3b9d17eb361e02ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_229525302eda297e0e076c95bdf1ae26f68b22582d9d091b29f8f606959dac39->leave($__internal_229525302eda297e0e076c95bdf1ae26f68b22582d9d091b29f8f606959dac39_prof);

        
        $__internal_dd7088e0365b937a73b6cd0234492c4ad473c1be53d2b5c3b9d17eb361e02ad8->leave($__internal_dd7088e0365b937a73b6cd0234492c4ad473c1be53d2b5c3b9d17eb361e02ad8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
