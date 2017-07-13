<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_402413fff04beaad9fec817dfb015eb8f866a5eb7ff6d5bf13b1a96ce9a65c99 extends Twig_Template
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
        $__internal_b1372d345e8e6496731c853d518b376991e671af30a0553184684f8ff0d421f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1372d345e8e6496731c853d518b376991e671af30a0553184684f8ff0d421f2->enter($__internal_b1372d345e8e6496731c853d518b376991e671af30a0553184684f8ff0d421f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_90f2fdfa89728ab0f21d02d9bf368906f3e1c52daaf8ddd7fc9696110894a6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f2fdfa89728ab0f21d02d9bf368906f3e1c52daaf8ddd7fc9696110894a6cd->enter($__internal_90f2fdfa89728ab0f21d02d9bf368906f3e1c52daaf8ddd7fc9696110894a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b1372d345e8e6496731c853d518b376991e671af30a0553184684f8ff0d421f2->leave($__internal_b1372d345e8e6496731c853d518b376991e671af30a0553184684f8ff0d421f2_prof);

        
        $__internal_90f2fdfa89728ab0f21d02d9bf368906f3e1c52daaf8ddd7fc9696110894a6cd->leave($__internal_90f2fdfa89728ab0f21d02d9bf368906f3e1c52daaf8ddd7fc9696110894a6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
