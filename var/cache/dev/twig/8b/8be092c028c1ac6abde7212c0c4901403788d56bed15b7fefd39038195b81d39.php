<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_48d9fc740cfdf480492296bde60f81336ee3aacf8cfc98d2fb2f073bce1650e2 extends Twig_Template
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
        $__internal_12b3d046b3426ff69bd974017596bd5b9fcc4f546d1cd06fad562dcf862ab372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b3d046b3426ff69bd974017596bd5b9fcc4f546d1cd06fad562dcf862ab372->enter($__internal_12b3d046b3426ff69bd974017596bd5b9fcc4f546d1cd06fad562dcf862ab372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_298d2d5e5fe1202ad89a9206a63d42f42ae5316e0b5a29fa5920271e59d6040a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298d2d5e5fe1202ad89a9206a63d42f42ae5316e0b5a29fa5920271e59d6040a->enter($__internal_298d2d5e5fe1202ad89a9206a63d42f42ae5316e0b5a29fa5920271e59d6040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_12b3d046b3426ff69bd974017596bd5b9fcc4f546d1cd06fad562dcf862ab372->leave($__internal_12b3d046b3426ff69bd974017596bd5b9fcc4f546d1cd06fad562dcf862ab372_prof);

        
        $__internal_298d2d5e5fe1202ad89a9206a63d42f42ae5316e0b5a29fa5920271e59d6040a->leave($__internal_298d2d5e5fe1202ad89a9206a63d42f42ae5316e0b5a29fa5920271e59d6040a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
