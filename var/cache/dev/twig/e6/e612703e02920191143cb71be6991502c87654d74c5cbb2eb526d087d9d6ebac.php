<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_5aad0a5238d39280e38ee2f9b2076c49da1a1ec1221ac1e768ae675397e7b269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aad0a5238d39280e38ee2f9b2076c49da1a1ec1221ac1e768ae675397e7b269->enter($__internal_5aad0a5238d39280e38ee2f9b2076c49da1a1ec1221ac1e768ae675397e7b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_83ca37f4efcef90f739bc0c80e1762ade3217451e86d127984f21cdad043b8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ca37f4efcef90f739bc0c80e1762ade3217451e86d127984f21cdad043b8f3->enter($__internal_83ca37f4efcef90f739bc0c80e1762ade3217451e86d127984f21cdad043b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5aad0a5238d39280e38ee2f9b2076c49da1a1ec1221ac1e768ae675397e7b269->leave($__internal_5aad0a5238d39280e38ee2f9b2076c49da1a1ec1221ac1e768ae675397e7b269_prof);

        
        $__internal_83ca37f4efcef90f739bc0c80e1762ade3217451e86d127984f21cdad043b8f3->leave($__internal_83ca37f4efcef90f739bc0c80e1762ade3217451e86d127984f21cdad043b8f3_prof);

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
", "@Framework/Form/form_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
