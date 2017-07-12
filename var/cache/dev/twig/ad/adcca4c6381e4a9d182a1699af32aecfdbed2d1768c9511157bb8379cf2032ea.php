<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_cc7b1d541741fbb3da1a002231aa469078e9a217012c6537c289b09fc94ba3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7b1d541741fbb3da1a002231aa469078e9a217012c6537c289b09fc94ba3e8->enter($__internal_cc7b1d541741fbb3da1a002231aa469078e9a217012c6537c289b09fc94ba3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f1262461e52520a9484cb6070a769aa5e8218504b8ef28c128397364db244d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1262461e52520a9484cb6070a769aa5e8218504b8ef28c128397364db244d7c->enter($__internal_f1262461e52520a9484cb6070a769aa5e8218504b8ef28c128397364db244d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cc7b1d541741fbb3da1a002231aa469078e9a217012c6537c289b09fc94ba3e8->leave($__internal_cc7b1d541741fbb3da1a002231aa469078e9a217012c6537c289b09fc94ba3e8_prof);

        
        $__internal_f1262461e52520a9484cb6070a769aa5e8218504b8ef28c128397364db244d7c->leave($__internal_f1262461e52520a9484cb6070a769aa5e8218504b8ef28c128397364db244d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
