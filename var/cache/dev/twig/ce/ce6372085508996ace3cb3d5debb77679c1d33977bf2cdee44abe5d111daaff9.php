<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_82eac81642f4c8df029806cb35c449ab5711e7c2cd3005f8162a667c93bbb96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82eac81642f4c8df029806cb35c449ab5711e7c2cd3005f8162a667c93bbb96f->enter($__internal_82eac81642f4c8df029806cb35c449ab5711e7c2cd3005f8162a667c93bbb96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4b2605ac96bea03f49a7dadd308e292b71aa46d5fe226c72b387f0669ce363a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2605ac96bea03f49a7dadd308e292b71aa46d5fe226c72b387f0669ce363a9->enter($__internal_4b2605ac96bea03f49a7dadd308e292b71aa46d5fe226c72b387f0669ce363a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_82eac81642f4c8df029806cb35c449ab5711e7c2cd3005f8162a667c93bbb96f->leave($__internal_82eac81642f4c8df029806cb35c449ab5711e7c2cd3005f8162a667c93bbb96f_prof);

        
        $__internal_4b2605ac96bea03f49a7dadd308e292b71aa46d5fe226c72b387f0669ce363a9->leave($__internal_4b2605ac96bea03f49a7dadd308e292b71aa46d5fe226c72b387f0669ce363a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
