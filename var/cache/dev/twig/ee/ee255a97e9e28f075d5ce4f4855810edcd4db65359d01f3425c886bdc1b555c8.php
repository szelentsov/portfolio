<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d2027f2746507d7809549f59d4866b01e7c0aba29fa76e201e84fd68dbfcb56f extends Twig_Template
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
        $__internal_9573816562ac61cc3b0492111d701406aa264dd1d16fbcc8c0c134b65088cdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9573816562ac61cc3b0492111d701406aa264dd1d16fbcc8c0c134b65088cdc8->enter($__internal_9573816562ac61cc3b0492111d701406aa264dd1d16fbcc8c0c134b65088cdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8102a926e143cbc2de9e518e8a0e740a1c1292fca9554c9143a83ce313c51060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8102a926e143cbc2de9e518e8a0e740a1c1292fca9554c9143a83ce313c51060->enter($__internal_8102a926e143cbc2de9e518e8a0e740a1c1292fca9554c9143a83ce313c51060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9573816562ac61cc3b0492111d701406aa264dd1d16fbcc8c0c134b65088cdc8->leave($__internal_9573816562ac61cc3b0492111d701406aa264dd1d16fbcc8c0c134b65088cdc8_prof);

        
        $__internal_8102a926e143cbc2de9e518e8a0e740a1c1292fca9554c9143a83ce313c51060->leave($__internal_8102a926e143cbc2de9e518e8a0e740a1c1292fca9554c9143a83ce313c51060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}