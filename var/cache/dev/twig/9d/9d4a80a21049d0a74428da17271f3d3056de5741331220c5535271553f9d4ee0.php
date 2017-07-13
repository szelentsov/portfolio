<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_31829b2eb397283e89a33694f7b8326d0b27eaeb5ff82e8e4f960ed00fab38ac extends Twig_Template
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
        $__internal_ccc0331d34e69a6f27ecae1a09681505366687920912ebe1d0f0502798ab7671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc0331d34e69a6f27ecae1a09681505366687920912ebe1d0f0502798ab7671->enter($__internal_ccc0331d34e69a6f27ecae1a09681505366687920912ebe1d0f0502798ab7671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6e102f0ddd632eedd8ba37abcbd380c5dcc8c750468c5eb1e99e4fd05c9b8aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e102f0ddd632eedd8ba37abcbd380c5dcc8c750468c5eb1e99e4fd05c9b8aec->enter($__internal_6e102f0ddd632eedd8ba37abcbd380c5dcc8c750468c5eb1e99e4fd05c9b8aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ccc0331d34e69a6f27ecae1a09681505366687920912ebe1d0f0502798ab7671->leave($__internal_ccc0331d34e69a6f27ecae1a09681505366687920912ebe1d0f0502798ab7671_prof);

        
        $__internal_6e102f0ddd632eedd8ba37abcbd380c5dcc8c750468c5eb1e99e4fd05c9b8aec->leave($__internal_6e102f0ddd632eedd8ba37abcbd380c5dcc8c750468c5eb1e99e4fd05c9b8aec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
