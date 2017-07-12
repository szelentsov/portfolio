<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_b888c1559e0b61e787de9643ebc724b881b89337421b37bfd4e3938e584f065b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b888c1559e0b61e787de9643ebc724b881b89337421b37bfd4e3938e584f065b->enter($__internal_b888c1559e0b61e787de9643ebc724b881b89337421b37bfd4e3938e584f065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d98fe0fb03e22eb58af1ba58a52fc1a895dc66098d09220b27d506a158a19d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98fe0fb03e22eb58af1ba58a52fc1a895dc66098d09220b27d506a158a19d2c->enter($__internal_d98fe0fb03e22eb58af1ba58a52fc1a895dc66098d09220b27d506a158a19d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b888c1559e0b61e787de9643ebc724b881b89337421b37bfd4e3938e584f065b->leave($__internal_b888c1559e0b61e787de9643ebc724b881b89337421b37bfd4e3938e584f065b_prof);

        
        $__internal_d98fe0fb03e22eb58af1ba58a52fc1a895dc66098d09220b27d506a158a19d2c->leave($__internal_d98fe0fb03e22eb58af1ba58a52fc1a895dc66098d09220b27d506a158a19d2c_prof);

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
", "@Framework/Form/button_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
