<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8412f07cfd60fb6d60778b5750e5f98d4d3a34259e6c15eb2546448e6d03be36 extends Twig_Template
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
        $__internal_75db52653626d76934568acb78aa6346bb8c3e34cf30e7e4b801f5554bcb0f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75db52653626d76934568acb78aa6346bb8c3e34cf30e7e4b801f5554bcb0f20->enter($__internal_75db52653626d76934568acb78aa6346bb8c3e34cf30e7e4b801f5554bcb0f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3072f620bb5552ac6bdf961db30f95d7c722dc1e4f67f869adc29ea7da799334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3072f620bb5552ac6bdf961db30f95d7c722dc1e4f67f869adc29ea7da799334->enter($__internal_3072f620bb5552ac6bdf961db30f95d7c722dc1e4f67f869adc29ea7da799334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_75db52653626d76934568acb78aa6346bb8c3e34cf30e7e4b801f5554bcb0f20->leave($__internal_75db52653626d76934568acb78aa6346bb8c3e34cf30e7e4b801f5554bcb0f20_prof);

        
        $__internal_3072f620bb5552ac6bdf961db30f95d7c722dc1e4f67f869adc29ea7da799334->leave($__internal_3072f620bb5552ac6bdf961db30f95d7c722dc1e4f67f869adc29ea7da799334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
