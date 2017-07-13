<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_87021afaa1237b41c0f465c0fd58f3493e6ff5b409ef045d2803252545fde925 extends Twig_Template
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
        $__internal_7df20cc6e6b75270f295c0f881da254e60229d7bcb2895e27adcc8611dbb652e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df20cc6e6b75270f295c0f881da254e60229d7bcb2895e27adcc8611dbb652e->enter($__internal_7df20cc6e6b75270f295c0f881da254e60229d7bcb2895e27adcc8611dbb652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_946d728284375b4f5bfb3314aa9f7edf1a85b48c0b89cbce7e5c97fddb3644ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946d728284375b4f5bfb3314aa9f7edf1a85b48c0b89cbce7e5c97fddb3644ac->enter($__internal_946d728284375b4f5bfb3314aa9f7edf1a85b48c0b89cbce7e5c97fddb3644ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7df20cc6e6b75270f295c0f881da254e60229d7bcb2895e27adcc8611dbb652e->leave($__internal_7df20cc6e6b75270f295c0f881da254e60229d7bcb2895e27adcc8611dbb652e_prof);

        
        $__internal_946d728284375b4f5bfb3314aa9f7edf1a85b48c0b89cbce7e5c97fddb3644ac->leave($__internal_946d728284375b4f5bfb3314aa9f7edf1a85b48c0b89cbce7e5c97fddb3644ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
