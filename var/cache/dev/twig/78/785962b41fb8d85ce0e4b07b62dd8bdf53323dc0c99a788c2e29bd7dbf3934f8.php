<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_42149ceb077501d092afe70c5b81d6c28c4afc0df10ab6c11113cb85a910b4f6 extends Twig_Template
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
        $__internal_f16afcf95d61d4f341a430d34ca45944b7024093bb17472c4eed2939896da6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16afcf95d61d4f341a430d34ca45944b7024093bb17472c4eed2939896da6cf->enter($__internal_f16afcf95d61d4f341a430d34ca45944b7024093bb17472c4eed2939896da6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7cf212817ae90539b7bfbf2ced31e3ecf075bb35fea509cb9a2876193e8d6371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf212817ae90539b7bfbf2ced31e3ecf075bb35fea509cb9a2876193e8d6371->enter($__internal_7cf212817ae90539b7bfbf2ced31e3ecf075bb35fea509cb9a2876193e8d6371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f16afcf95d61d4f341a430d34ca45944b7024093bb17472c4eed2939896da6cf->leave($__internal_f16afcf95d61d4f341a430d34ca45944b7024093bb17472c4eed2939896da6cf_prof);

        
        $__internal_7cf212817ae90539b7bfbf2ced31e3ecf075bb35fea509cb9a2876193e8d6371->leave($__internal_7cf212817ae90539b7bfbf2ced31e3ecf075bb35fea509cb9a2876193e8d6371_prof);

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
", "@Framework/Form/choice_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
