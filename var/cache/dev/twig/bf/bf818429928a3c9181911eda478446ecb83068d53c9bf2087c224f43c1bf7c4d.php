<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30fed04df823d07121dcf33a168bfe7338a13096294b865cf9e9daa2512c04a3 extends Twig_Template
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
        $__internal_37c653738d8db064c0a6436a1cbc4f89f0297d8f7b3f1c21851e47c22acc4cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c653738d8db064c0a6436a1cbc4f89f0297d8f7b3f1c21851e47c22acc4cff->enter($__internal_37c653738d8db064c0a6436a1cbc4f89f0297d8f7b3f1c21851e47c22acc4cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8b7943811f92e05daf0bb1b45bee892098bb9fa94bcfaa82a96f2ba1d916c5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7943811f92e05daf0bb1b45bee892098bb9fa94bcfaa82a96f2ba1d916c5a1->enter($__internal_8b7943811f92e05daf0bb1b45bee892098bb9fa94bcfaa82a96f2ba1d916c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37c653738d8db064c0a6436a1cbc4f89f0297d8f7b3f1c21851e47c22acc4cff->leave($__internal_37c653738d8db064c0a6436a1cbc4f89f0297d8f7b3f1c21851e47c22acc4cff_prof);

        
        $__internal_8b7943811f92e05daf0bb1b45bee892098bb9fa94bcfaa82a96f2ba1d916c5a1->leave($__internal_8b7943811f92e05daf0bb1b45bee892098bb9fa94bcfaa82a96f2ba1d916c5a1_prof);

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
", "@Framework/FormTable/button_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
