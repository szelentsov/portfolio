<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fc0c854b592afe86848be2487d2518c215d78b104fcb846323e5347a21a593e7 extends Twig_Template
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
        $__internal_13ac4a876cc2504296b179616346ba7e558e2d834be5a0647843857cbb30077d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ac4a876cc2504296b179616346ba7e558e2d834be5a0647843857cbb30077d->enter($__internal_13ac4a876cc2504296b179616346ba7e558e2d834be5a0647843857cbb30077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f091cb044d99dbdd62fe32cfbff940494e538a0ef7b7c13c168211709ec3c853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f091cb044d99dbdd62fe32cfbff940494e538a0ef7b7c13c168211709ec3c853->enter($__internal_f091cb044d99dbdd62fe32cfbff940494e538a0ef7b7c13c168211709ec3c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_13ac4a876cc2504296b179616346ba7e558e2d834be5a0647843857cbb30077d->leave($__internal_13ac4a876cc2504296b179616346ba7e558e2d834be5a0647843857cbb30077d_prof);

        
        $__internal_f091cb044d99dbdd62fe32cfbff940494e538a0ef7b7c13c168211709ec3c853->leave($__internal_f091cb044d99dbdd62fe32cfbff940494e538a0ef7b7c13c168211709ec3c853_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
