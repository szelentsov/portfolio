<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d7e2f09d721c5d2885302fca7fda67db5810c07092f13ba44d060502a9cead81 extends Twig_Template
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
        $__internal_606f98ac436bcee61eab7f994ab75b74649bea6fdc7c31cdb49f8cc749f25923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606f98ac436bcee61eab7f994ab75b74649bea6fdc7c31cdb49f8cc749f25923->enter($__internal_606f98ac436bcee61eab7f994ab75b74649bea6fdc7c31cdb49f8cc749f25923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_129623c2e70ac5c3f6b8202702edabe27dea7074fa5cc0d761e17474cf1abc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129623c2e70ac5c3f6b8202702edabe27dea7074fa5cc0d761e17474cf1abc93->enter($__internal_129623c2e70ac5c3f6b8202702edabe27dea7074fa5cc0d761e17474cf1abc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_606f98ac436bcee61eab7f994ab75b74649bea6fdc7c31cdb49f8cc749f25923->leave($__internal_606f98ac436bcee61eab7f994ab75b74649bea6fdc7c31cdb49f8cc749f25923_prof);

        
        $__internal_129623c2e70ac5c3f6b8202702edabe27dea7074fa5cc0d761e17474cf1abc93->leave($__internal_129623c2e70ac5c3f6b8202702edabe27dea7074fa5cc0d761e17474cf1abc93_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/sergey/portfolio_new/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
