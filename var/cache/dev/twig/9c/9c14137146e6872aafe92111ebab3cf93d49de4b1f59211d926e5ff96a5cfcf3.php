<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_d28c56695cc85b59459dd0be8b2900419e8ebf9a7dc7af96a3987d115e7ce063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28c56695cc85b59459dd0be8b2900419e8ebf9a7dc7af96a3987d115e7ce063->enter($__internal_d28c56695cc85b59459dd0be8b2900419e8ebf9a7dc7af96a3987d115e7ce063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1b4dfdd4d94c22908191b9ff76ddd34c784fc1e0545b71df88ed949a430b94aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4dfdd4d94c22908191b9ff76ddd34c784fc1e0545b71df88ed949a430b94aa->enter($__internal_1b4dfdd4d94c22908191b9ff76ddd34c784fc1e0545b71df88ed949a430b94aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d28c56695cc85b59459dd0be8b2900419e8ebf9a7dc7af96a3987d115e7ce063->leave($__internal_d28c56695cc85b59459dd0be8b2900419e8ebf9a7dc7af96a3987d115e7ce063_prof);

        
        $__internal_1b4dfdd4d94c22908191b9ff76ddd34c784fc1e0545b71df88ed949a430b94aa->leave($__internal_1b4dfdd4d94c22908191b9ff76ddd34c784fc1e0545b71df88ed949a430b94aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
