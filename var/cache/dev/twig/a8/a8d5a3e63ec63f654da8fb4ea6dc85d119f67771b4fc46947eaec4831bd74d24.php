<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_5566a57f66d5189a7a1b0271bfb8e4ea3b829c6d052916ac190bbda190fa318c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5566a57f66d5189a7a1b0271bfb8e4ea3b829c6d052916ac190bbda190fa318c->enter($__internal_5566a57f66d5189a7a1b0271bfb8e4ea3b829c6d052916ac190bbda190fa318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ab05403083c5421131c15073da8b679fdab449a337a73e4eecea068568746023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab05403083c5421131c15073da8b679fdab449a337a73e4eecea068568746023->enter($__internal_ab05403083c5421131c15073da8b679fdab449a337a73e4eecea068568746023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5566a57f66d5189a7a1b0271bfb8e4ea3b829c6d052916ac190bbda190fa318c->leave($__internal_5566a57f66d5189a7a1b0271bfb8e4ea3b829c6d052916ac190bbda190fa318c_prof);

        
        $__internal_ab05403083c5421131c15073da8b679fdab449a337a73e4eecea068568746023->leave($__internal_ab05403083c5421131c15073da8b679fdab449a337a73e4eecea068568746023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
