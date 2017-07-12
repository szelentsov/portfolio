<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_aeab0e9529e885941efbb52364c17c0321ea2f4e63806b1620e29813f3767821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeab0e9529e885941efbb52364c17c0321ea2f4e63806b1620e29813f3767821->enter($__internal_aeab0e9529e885941efbb52364c17c0321ea2f4e63806b1620e29813f3767821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_186c57ace10f5a2c2ad3f782365bac8da53c7d7055997823ab5191189e58b0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186c57ace10f5a2c2ad3f782365bac8da53c7d7055997823ab5191189e58b0ee->enter($__internal_186c57ace10f5a2c2ad3f782365bac8da53c7d7055997823ab5191189e58b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aeab0e9529e885941efbb52364c17c0321ea2f4e63806b1620e29813f3767821->leave($__internal_aeab0e9529e885941efbb52364c17c0321ea2f4e63806b1620e29813f3767821_prof);

        
        $__internal_186c57ace10f5a2c2ad3f782365bac8da53c7d7055997823ab5191189e58b0ee->leave($__internal_186c57ace10f5a2c2ad3f782365bac8da53c7d7055997823ab5191189e58b0ee_prof);

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
", "@Framework/Form/radio_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
