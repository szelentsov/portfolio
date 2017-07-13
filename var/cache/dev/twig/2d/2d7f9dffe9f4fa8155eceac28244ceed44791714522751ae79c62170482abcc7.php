<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fe7f409600eb792d72cc31a027a2e4736c40bd92c7b37c5986d8ff779628860e extends Twig_Template
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
        $__internal_a030bc89d4bf9571a4c15413ae0304a9fc20136e540310926cd2044369444c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a030bc89d4bf9571a4c15413ae0304a9fc20136e540310926cd2044369444c58->enter($__internal_a030bc89d4bf9571a4c15413ae0304a9fc20136e540310926cd2044369444c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9e70b6465d7b6179171d76a05ec6e344496c6d9a2d133460000d1da4606c8929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e70b6465d7b6179171d76a05ec6e344496c6d9a2d133460000d1da4606c8929->enter($__internal_9e70b6465d7b6179171d76a05ec6e344496c6d9a2d133460000d1da4606c8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a030bc89d4bf9571a4c15413ae0304a9fc20136e540310926cd2044369444c58->leave($__internal_a030bc89d4bf9571a4c15413ae0304a9fc20136e540310926cd2044369444c58_prof);

        
        $__internal_9e70b6465d7b6179171d76a05ec6e344496c6d9a2d133460000d1da4606c8929->leave($__internal_9e70b6465d7b6179171d76a05ec6e344496c6d9a2d133460000d1da4606c8929_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
