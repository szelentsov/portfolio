<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e7130b51436b89cf0a516b40086e2da9f24002f761cd4a56da0f1e7dded9dc8c extends Twig_Template
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
        $__internal_f11cbd1f3331118be0109eb8baa2af2a01831831885d894e567a6cc0147c68b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11cbd1f3331118be0109eb8baa2af2a01831831885d894e567a6cc0147c68b1->enter($__internal_f11cbd1f3331118be0109eb8baa2af2a01831831885d894e567a6cc0147c68b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ee7ef66820e6db7eb6a799e1dee3a8a4ecda73ba6d098e9e0e0cde5b3770103f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7ef66820e6db7eb6a799e1dee3a8a4ecda73ba6d098e9e0e0cde5b3770103f->enter($__internal_ee7ef66820e6db7eb6a799e1dee3a8a4ecda73ba6d098e9e0e0cde5b3770103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f11cbd1f3331118be0109eb8baa2af2a01831831885d894e567a6cc0147c68b1->leave($__internal_f11cbd1f3331118be0109eb8baa2af2a01831831885d894e567a6cc0147c68b1_prof);

        
        $__internal_ee7ef66820e6db7eb6a799e1dee3a8a4ecda73ba6d098e9e0e0cde5b3770103f->leave($__internal_ee7ef66820e6db7eb6a799e1dee3a8a4ecda73ba6d098e9e0e0cde5b3770103f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
