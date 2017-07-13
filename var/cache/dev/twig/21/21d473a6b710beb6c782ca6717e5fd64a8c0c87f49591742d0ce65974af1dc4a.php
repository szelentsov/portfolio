<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea2a8cdec0977035efb64d5935cac9a693a79effadcfa94984d50ac67647335e extends Twig_Template
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
        $__internal_4c4005f2622f68f811caaa47e12042e8ffbf9ea02f7cb2a57549df53a2f7a593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4005f2622f68f811caaa47e12042e8ffbf9ea02f7cb2a57549df53a2f7a593->enter($__internal_4c4005f2622f68f811caaa47e12042e8ffbf9ea02f7cb2a57549df53a2f7a593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0bfdd1cd8311b3183dd47aeaa8ae472065d729d8a20240d9ba2f2e1f6751990a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfdd1cd8311b3183dd47aeaa8ae472065d729d8a20240d9ba2f2e1f6751990a->enter($__internal_0bfdd1cd8311b3183dd47aeaa8ae472065d729d8a20240d9ba2f2e1f6751990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4c4005f2622f68f811caaa47e12042e8ffbf9ea02f7cb2a57549df53a2f7a593->leave($__internal_4c4005f2622f68f811caaa47e12042e8ffbf9ea02f7cb2a57549df53a2f7a593_prof);

        
        $__internal_0bfdd1cd8311b3183dd47aeaa8ae472065d729d8a20240d9ba2f2e1f6751990a->leave($__internal_0bfdd1cd8311b3183dd47aeaa8ae472065d729d8a20240d9ba2f2e1f6751990a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
