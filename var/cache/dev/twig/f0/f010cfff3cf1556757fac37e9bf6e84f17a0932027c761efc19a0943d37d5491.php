<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_05e60a6736f118f00ac20987f01089192017fb3f6e93d82d6942bc4a2029c5e2 extends Twig_Template
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
        $__internal_ed2012cd2ef831e3a40ff6cba66f5c122bd2da37df5d8684ed3a7bfeee6b231d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2012cd2ef831e3a40ff6cba66f5c122bd2da37df5d8684ed3a7bfeee6b231d->enter($__internal_ed2012cd2ef831e3a40ff6cba66f5c122bd2da37df5d8684ed3a7bfeee6b231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d530e0e4c8f7b5890c81a8bb03d903c5d29c3ea6c73080141f5fd161c4349c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d530e0e4c8f7b5890c81a8bb03d903c5d29c3ea6c73080141f5fd161c4349c5d->enter($__internal_d530e0e4c8f7b5890c81a8bb03d903c5d29c3ea6c73080141f5fd161c4349c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed2012cd2ef831e3a40ff6cba66f5c122bd2da37df5d8684ed3a7bfeee6b231d->leave($__internal_ed2012cd2ef831e3a40ff6cba66f5c122bd2da37df5d8684ed3a7bfeee6b231d_prof);

        
        $__internal_d530e0e4c8f7b5890c81a8bb03d903c5d29c3ea6c73080141f5fd161c4349c5d->leave($__internal_d530e0e4c8f7b5890c81a8bb03d903c5d29c3ea6c73080141f5fd161c4349c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
