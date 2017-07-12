<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_09a77ed53fe666bd6d33915389f9f65f2be258655927f0afaca5ce1c98d3d989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a77ed53fe666bd6d33915389f9f65f2be258655927f0afaca5ce1c98d3d989->enter($__internal_09a77ed53fe666bd6d33915389f9f65f2be258655927f0afaca5ce1c98d3d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dd1ae125146613b25fa8a258a05a63df2c686ed9d71de6546a856cb62c31048a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1ae125146613b25fa8a258a05a63df2c686ed9d71de6546a856cb62c31048a->enter($__internal_dd1ae125146613b25fa8a258a05a63df2c686ed9d71de6546a856cb62c31048a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_09a77ed53fe666bd6d33915389f9f65f2be258655927f0afaca5ce1c98d3d989->leave($__internal_09a77ed53fe666bd6d33915389f9f65f2be258655927f0afaca5ce1c98d3d989_prof);

        
        $__internal_dd1ae125146613b25fa8a258a05a63df2c686ed9d71de6546a856cb62c31048a->leave($__internal_dd1ae125146613b25fa8a258a05a63df2c686ed9d71de6546a856cb62c31048a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
