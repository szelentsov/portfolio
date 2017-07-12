<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_cf6fc0b0db1f478ede4473dfe8007a9bf045081e006122c07e87ffa85fabc25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6fc0b0db1f478ede4473dfe8007a9bf045081e006122c07e87ffa85fabc25c->enter($__internal_cf6fc0b0db1f478ede4473dfe8007a9bf045081e006122c07e87ffa85fabc25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fb3b4b6d5bb088ed0d4812fbfa5a5ffedcf306aa18e938c563922cdb892a7cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3b4b6d5bb088ed0d4812fbfa5a5ffedcf306aa18e938c563922cdb892a7cfc->enter($__internal_fb3b4b6d5bb088ed0d4812fbfa5a5ffedcf306aa18e938c563922cdb892a7cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf6fc0b0db1f478ede4473dfe8007a9bf045081e006122c07e87ffa85fabc25c->leave($__internal_cf6fc0b0db1f478ede4473dfe8007a9bf045081e006122c07e87ffa85fabc25c_prof);

        
        $__internal_fb3b4b6d5bb088ed0d4812fbfa5a5ffedcf306aa18e938c563922cdb892a7cfc->leave($__internal_fb3b4b6d5bb088ed0d4812fbfa5a5ffedcf306aa18e938c563922cdb892a7cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
