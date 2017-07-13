<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6bceb38d357cbe9f33c234c405f55d965fd07a9371652d7e82502f704d79bff1 extends Twig_Template
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
        $__internal_9c6a902c34d08f08965782469bb51461f7be57346b5b1e2ba9e05c3c0856eae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6a902c34d08f08965782469bb51461f7be57346b5b1e2ba9e05c3c0856eae4->enter($__internal_9c6a902c34d08f08965782469bb51461f7be57346b5b1e2ba9e05c3c0856eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5ac60b3ba7e518b21a82f22ffe3d4a3ba5bd6e604fb13bf6d2ac00b3b218063d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac60b3ba7e518b21a82f22ffe3d4a3ba5bd6e604fb13bf6d2ac00b3b218063d->enter($__internal_5ac60b3ba7e518b21a82f22ffe3d4a3ba5bd6e604fb13bf6d2ac00b3b218063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9c6a902c34d08f08965782469bb51461f7be57346b5b1e2ba9e05c3c0856eae4->leave($__internal_9c6a902c34d08f08965782469bb51461f7be57346b5b1e2ba9e05c3c0856eae4_prof);

        
        $__internal_5ac60b3ba7e518b21a82f22ffe3d4a3ba5bd6e604fb13bf6d2ac00b3b218063d->leave($__internal_5ac60b3ba7e518b21a82f22ffe3d4a3ba5bd6e604fb13bf6d2ac00b3b218063d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
