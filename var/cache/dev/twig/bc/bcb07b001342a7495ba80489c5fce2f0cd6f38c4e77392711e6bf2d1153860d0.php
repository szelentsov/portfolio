<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1eb69c9dad04a4c5a805135e135557cc01ef5682b48a7e30530a2c1132898a3d extends Twig_Template
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
        $__internal_e2a85d60d9e0d40e63cacf077dc2900818b0fbb0b82f2129e9bd4640596c3eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a85d60d9e0d40e63cacf077dc2900818b0fbb0b82f2129e9bd4640596c3eb4->enter($__internal_e2a85d60d9e0d40e63cacf077dc2900818b0fbb0b82f2129e9bd4640596c3eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3a0f22005c1d4e96001e4db696f65db5a6acc637882dfc226d64c99f6abaea0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0f22005c1d4e96001e4db696f65db5a6acc637882dfc226d64c99f6abaea0b->enter($__internal_3a0f22005c1d4e96001e4db696f65db5a6acc637882dfc226d64c99f6abaea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e2a85d60d9e0d40e63cacf077dc2900818b0fbb0b82f2129e9bd4640596c3eb4->leave($__internal_e2a85d60d9e0d40e63cacf077dc2900818b0fbb0b82f2129e9bd4640596c3eb4_prof);

        
        $__internal_3a0f22005c1d4e96001e4db696f65db5a6acc637882dfc226d64c99f6abaea0b->leave($__internal_3a0f22005c1d4e96001e4db696f65db5a6acc637882dfc226d64c99f6abaea0b_prof);

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
", "@Framework/Form/collection_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
