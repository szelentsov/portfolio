<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_2efcbabd0672f3e8c26b38c867634a2b35f8162eee8d805a3e36cbebbed15d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efcbabd0672f3e8c26b38c867634a2b35f8162eee8d805a3e36cbebbed15d6c->enter($__internal_2efcbabd0672f3e8c26b38c867634a2b35f8162eee8d805a3e36cbebbed15d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7695a3284f973ad476842aabf86c73dd1c030cd6fb306cdb0340b0ecbd53a25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7695a3284f973ad476842aabf86c73dd1c030cd6fb306cdb0340b0ecbd53a25e->enter($__internal_7695a3284f973ad476842aabf86c73dd1c030cd6fb306cdb0340b0ecbd53a25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2efcbabd0672f3e8c26b38c867634a2b35f8162eee8d805a3e36cbebbed15d6c->leave($__internal_2efcbabd0672f3e8c26b38c867634a2b35f8162eee8d805a3e36cbebbed15d6c_prof);

        
        $__internal_7695a3284f973ad476842aabf86c73dd1c030cd6fb306cdb0340b0ecbd53a25e->leave($__internal_7695a3284f973ad476842aabf86c73dd1c030cd6fb306cdb0340b0ecbd53a25e_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
