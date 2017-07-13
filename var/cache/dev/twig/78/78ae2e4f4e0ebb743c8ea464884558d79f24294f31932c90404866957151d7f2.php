<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4728fb1d75a420967082805dee8b3e46293b329dd6533ea8193c5d8e7169c7aa extends Twig_Template
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
        $__internal_650d8bc7fd7da521eb168a539966656fc83b016538657574a80e1ea7eb87c973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650d8bc7fd7da521eb168a539966656fc83b016538657574a80e1ea7eb87c973->enter($__internal_650d8bc7fd7da521eb168a539966656fc83b016538657574a80e1ea7eb87c973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aa676f7510ed98567398106db6121eb6feb11c70f7c568193d43e28ebe06940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa676f7510ed98567398106db6121eb6feb11c70f7c568193d43e28ebe06940a->enter($__internal_aa676f7510ed98567398106db6121eb6feb11c70f7c568193d43e28ebe06940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_650d8bc7fd7da521eb168a539966656fc83b016538657574a80e1ea7eb87c973->leave($__internal_650d8bc7fd7da521eb168a539966656fc83b016538657574a80e1ea7eb87c973_prof);

        
        $__internal_aa676f7510ed98567398106db6121eb6feb11c70f7c568193d43e28ebe06940a->leave($__internal_aa676f7510ed98567398106db6121eb6feb11c70f7c568193d43e28ebe06940a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
