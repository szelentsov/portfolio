<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_945d7d70f12c4529c0e02aa5a95ad5cc415436c63ee741c7fc3bf92d34e2c88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945d7d70f12c4529c0e02aa5a95ad5cc415436c63ee741c7fc3bf92d34e2c88c->enter($__internal_945d7d70f12c4529c0e02aa5a95ad5cc415436c63ee741c7fc3bf92d34e2c88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c2018463fec607e07865aa4f60df31eae71da57409c24b774ef501c498fe88f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2018463fec607e07865aa4f60df31eae71da57409c24b774ef501c498fe88f7->enter($__internal_c2018463fec607e07865aa4f60df31eae71da57409c24b774ef501c498fe88f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_945d7d70f12c4529c0e02aa5a95ad5cc415436c63ee741c7fc3bf92d34e2c88c->leave($__internal_945d7d70f12c4529c0e02aa5a95ad5cc415436c63ee741c7fc3bf92d34e2c88c_prof);

        
        $__internal_c2018463fec607e07865aa4f60df31eae71da57409c24b774ef501c498fe88f7->leave($__internal_c2018463fec607e07865aa4f60df31eae71da57409c24b774ef501c498fe88f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
