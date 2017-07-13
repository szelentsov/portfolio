<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_65dcb21d4b45c099217b621007c2685a4f26ff098764288c0dc874bcdd124daa extends Twig_Template
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
        $__internal_54889f6590dc2f9e64f321ea7c59be86a8aa4fd8456fb8ab7802212c5e129195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54889f6590dc2f9e64f321ea7c59be86a8aa4fd8456fb8ab7802212c5e129195->enter($__internal_54889f6590dc2f9e64f321ea7c59be86a8aa4fd8456fb8ab7802212c5e129195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_293e058cda8bc5d8d1538ff58486ed22dae887aafd4dde3db2b62ed9e63b3666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293e058cda8bc5d8d1538ff58486ed22dae887aafd4dde3db2b62ed9e63b3666->enter($__internal_293e058cda8bc5d8d1538ff58486ed22dae887aafd4dde3db2b62ed9e63b3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_54889f6590dc2f9e64f321ea7c59be86a8aa4fd8456fb8ab7802212c5e129195->leave($__internal_54889f6590dc2f9e64f321ea7c59be86a8aa4fd8456fb8ab7802212c5e129195_prof);

        
        $__internal_293e058cda8bc5d8d1538ff58486ed22dae887aafd4dde3db2b62ed9e63b3666->leave($__internal_293e058cda8bc5d8d1538ff58486ed22dae887aafd4dde3db2b62ed9e63b3666_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
