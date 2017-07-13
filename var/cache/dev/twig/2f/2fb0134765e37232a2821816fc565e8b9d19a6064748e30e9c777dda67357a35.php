<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ecd8ba8ff0abc957422aef04e777c5b13bd3a4a9f649721eb06056325b0bc220 extends Twig_Template
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
        $__internal_d11953174844a2c6bcd144477143a2172073b8d539c072cd3c33e0708cca6374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11953174844a2c6bcd144477143a2172073b8d539c072cd3c33e0708cca6374->enter($__internal_d11953174844a2c6bcd144477143a2172073b8d539c072cd3c33e0708cca6374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5a379eb66b56c9c96766b264e8e88ba562e0276cff22b32b8a8641e9e895c309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a379eb66b56c9c96766b264e8e88ba562e0276cff22b32b8a8641e9e895c309->enter($__internal_5a379eb66b56c9c96766b264e8e88ba562e0276cff22b32b8a8641e9e895c309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d11953174844a2c6bcd144477143a2172073b8d539c072cd3c33e0708cca6374->leave($__internal_d11953174844a2c6bcd144477143a2172073b8d539c072cd3c33e0708cca6374_prof);

        
        $__internal_5a379eb66b56c9c96766b264e8e88ba562e0276cff22b32b8a8641e9e895c309->leave($__internal_5a379eb66b56c9c96766b264e8e88ba562e0276cff22b32b8a8641e9e895c309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
