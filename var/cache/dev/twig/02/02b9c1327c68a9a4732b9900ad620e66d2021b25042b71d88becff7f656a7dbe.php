<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4989db8900ca79658ae1634287f6754230b0f64e544abfaa00bc5b22f13cff7e extends Twig_Template
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
        $__internal_d4ec10b8c54eb9c6f8a1cdcb4a627278a6e21831e7a7d606158055d1204be029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ec10b8c54eb9c6f8a1cdcb4a627278a6e21831e7a7d606158055d1204be029->enter($__internal_d4ec10b8c54eb9c6f8a1cdcb4a627278a6e21831e7a7d606158055d1204be029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_303306c5f4c3a6e3bacbca935ffa06d5cf0b9f3db81caad2451ffab79304b45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303306c5f4c3a6e3bacbca935ffa06d5cf0b9f3db81caad2451ffab79304b45f->enter($__internal_303306c5f4c3a6e3bacbca935ffa06d5cf0b9f3db81caad2451ffab79304b45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d4ec10b8c54eb9c6f8a1cdcb4a627278a6e21831e7a7d606158055d1204be029->leave($__internal_d4ec10b8c54eb9c6f8a1cdcb4a627278a6e21831e7a7d606158055d1204be029_prof);

        
        $__internal_303306c5f4c3a6e3bacbca935ffa06d5cf0b9f3db81caad2451ffab79304b45f->leave($__internal_303306c5f4c3a6e3bacbca935ffa06d5cf0b9f3db81caad2451ffab79304b45f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
