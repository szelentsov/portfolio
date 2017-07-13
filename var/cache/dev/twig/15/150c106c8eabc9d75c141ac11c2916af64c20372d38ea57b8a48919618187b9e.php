<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8a7a60ae130cda5782715b7dc423abacbe3738953c782f5d49287baa2c5ad6ef extends Twig_Template
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
        $__internal_84a4ab80d6fef2c179a5084e1fe10a3512db975ee8e6db5f646fa8dd62a4ffba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a4ab80d6fef2c179a5084e1fe10a3512db975ee8e6db5f646fa8dd62a4ffba->enter($__internal_84a4ab80d6fef2c179a5084e1fe10a3512db975ee8e6db5f646fa8dd62a4ffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ae7a78bd717667f55cfa27604192f398c3774dde8d6577a4693d591dae01bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7a78bd717667f55cfa27604192f398c3774dde8d6577a4693d591dae01bd76->enter($__internal_ae7a78bd717667f55cfa27604192f398c3774dde8d6577a4693d591dae01bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_84a4ab80d6fef2c179a5084e1fe10a3512db975ee8e6db5f646fa8dd62a4ffba->leave($__internal_84a4ab80d6fef2c179a5084e1fe10a3512db975ee8e6db5f646fa8dd62a4ffba_prof);

        
        $__internal_ae7a78bd717667f55cfa27604192f398c3774dde8d6577a4693d591dae01bd76->leave($__internal_ae7a78bd717667f55cfa27604192f398c3774dde8d6577a4693d591dae01bd76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
