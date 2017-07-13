<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_59393c0e8a5a019f62424e53fc9f9885d31a07c40b4f153eb311292723520787 extends Twig_Template
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
        $__internal_d3ddb45ff5f36cb08b2d5a70a2f217c9e6d4e5d471ab09f514bc038b9a14e0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ddb45ff5f36cb08b2d5a70a2f217c9e6d4e5d471ab09f514bc038b9a14e0dc->enter($__internal_d3ddb45ff5f36cb08b2d5a70a2f217c9e6d4e5d471ab09f514bc038b9a14e0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ba4f63ee64fc0638db75215f0b46554520fd62e5984f15daef01054f4815ac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4f63ee64fc0638db75215f0b46554520fd62e5984f15daef01054f4815ac72->enter($__internal_ba4f63ee64fc0638db75215f0b46554520fd62e5984f15daef01054f4815ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d3ddb45ff5f36cb08b2d5a70a2f217c9e6d4e5d471ab09f514bc038b9a14e0dc->leave($__internal_d3ddb45ff5f36cb08b2d5a70a2f217c9e6d4e5d471ab09f514bc038b9a14e0dc_prof);

        
        $__internal_ba4f63ee64fc0638db75215f0b46554520fd62e5984f15daef01054f4815ac72->leave($__internal_ba4f63ee64fc0638db75215f0b46554520fd62e5984f15daef01054f4815ac72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
