<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_f8f09426a365ac9cf913304227a4126def8d99a38665eba2b59ee021d8df057e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f09426a365ac9cf913304227a4126def8d99a38665eba2b59ee021d8df057e->enter($__internal_f8f09426a365ac9cf913304227a4126def8d99a38665eba2b59ee021d8df057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e904ada9fd3d6a34ac9af91cfa649125ef87d9c93198127b5b3bfd047d56f1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e904ada9fd3d6a34ac9af91cfa649125ef87d9c93198127b5b3bfd047d56f1e2->enter($__internal_e904ada9fd3d6a34ac9af91cfa649125ef87d9c93198127b5b3bfd047d56f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f8f09426a365ac9cf913304227a4126def8d99a38665eba2b59ee021d8df057e->leave($__internal_f8f09426a365ac9cf913304227a4126def8d99a38665eba2b59ee021d8df057e_prof);

        
        $__internal_e904ada9fd3d6a34ac9af91cfa649125ef87d9c93198127b5b3bfd047d56f1e2->leave($__internal_e904ada9fd3d6a34ac9af91cfa649125ef87d9c93198127b5b3bfd047d56f1e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
