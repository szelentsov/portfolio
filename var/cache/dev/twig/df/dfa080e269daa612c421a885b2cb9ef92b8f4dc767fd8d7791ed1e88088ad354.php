<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_64104bc66f7243310c3398b3c46ca2c063df430d0f4aa6c03d40d28f0efa7e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64104bc66f7243310c3398b3c46ca2c063df430d0f4aa6c03d40d28f0efa7e72->enter($__internal_64104bc66f7243310c3398b3c46ca2c063df430d0f4aa6c03d40d28f0efa7e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_354d400757cab6a2a6a02a6877fe8d8a9adc69fecff6181d344036b8e8e7d5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354d400757cab6a2a6a02a6877fe8d8a9adc69fecff6181d344036b8e8e7d5d3->enter($__internal_354d400757cab6a2a6a02a6877fe8d8a9adc69fecff6181d344036b8e8e7d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_64104bc66f7243310c3398b3c46ca2c063df430d0f4aa6c03d40d28f0efa7e72->leave($__internal_64104bc66f7243310c3398b3c46ca2c063df430d0f4aa6c03d40d28f0efa7e72_prof);

        
        $__internal_354d400757cab6a2a6a02a6877fe8d8a9adc69fecff6181d344036b8e8e7d5d3->leave($__internal_354d400757cab6a2a6a02a6877fe8d8a9adc69fecff6181d344036b8e8e7d5d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
