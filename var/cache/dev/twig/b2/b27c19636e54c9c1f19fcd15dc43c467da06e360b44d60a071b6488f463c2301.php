<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_8b700ab6164b1f203ee64a4dbf6302752fa35bde29d509cf5d5ff99e0c7e376d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b700ab6164b1f203ee64a4dbf6302752fa35bde29d509cf5d5ff99e0c7e376d->enter($__internal_8b700ab6164b1f203ee64a4dbf6302752fa35bde29d509cf5d5ff99e0c7e376d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_612df31b134050e2fcf97818c97af0bbf05c677f83cc155ae604484ba8c5c1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612df31b134050e2fcf97818c97af0bbf05c677f83cc155ae604484ba8c5c1ca->enter($__internal_612df31b134050e2fcf97818c97af0bbf05c677f83cc155ae604484ba8c5c1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8b700ab6164b1f203ee64a4dbf6302752fa35bde29d509cf5d5ff99e0c7e376d->leave($__internal_8b700ab6164b1f203ee64a4dbf6302752fa35bde29d509cf5d5ff99e0c7e376d_prof);

        
        $__internal_612df31b134050e2fcf97818c97af0bbf05c677f83cc155ae604484ba8c5c1ca->leave($__internal_612df31b134050e2fcf97818c97af0bbf05c677f83cc155ae604484ba8c5c1ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
