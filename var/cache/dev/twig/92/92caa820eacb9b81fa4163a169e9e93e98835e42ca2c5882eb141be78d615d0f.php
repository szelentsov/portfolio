<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_23c9beb1d0161d424211474a4ba80a794869895070eb6f13a360698b2be221a5 extends Twig_Template
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
        $__internal_f0d5c85a51c0534ec99b7018c619de094a9573ee4c3485435a2648e42c9791f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d5c85a51c0534ec99b7018c619de094a9573ee4c3485435a2648e42c9791f3->enter($__internal_f0d5c85a51c0534ec99b7018c619de094a9573ee4c3485435a2648e42c9791f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a741188769acb9b312786356f063999d95aaeaaf7f856acd75f4c9bbbb60ea61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a741188769acb9b312786356f063999d95aaeaaf7f856acd75f4c9bbbb60ea61->enter($__internal_a741188769acb9b312786356f063999d95aaeaaf7f856acd75f4c9bbbb60ea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f0d5c85a51c0534ec99b7018c619de094a9573ee4c3485435a2648e42c9791f3->leave($__internal_f0d5c85a51c0534ec99b7018c619de094a9573ee4c3485435a2648e42c9791f3_prof);

        
        $__internal_a741188769acb9b312786356f063999d95aaeaaf7f856acd75f4c9bbbb60ea61->leave($__internal_a741188769acb9b312786356f063999d95aaeaaf7f856acd75f4c9bbbb60ea61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
