<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_3296a648a58357246e20abd5a250c846e4834bdb35f8bc3d7816ebd7d73e5d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3296a648a58357246e20abd5a250c846e4834bdb35f8bc3d7816ebd7d73e5d4e->enter($__internal_3296a648a58357246e20abd5a250c846e4834bdb35f8bc3d7816ebd7d73e5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e1c8cbe6a11a8dd188e4e9325480ae6143077e5fd6e45f1505f8d92eca587e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c8cbe6a11a8dd188e4e9325480ae6143077e5fd6e45f1505f8d92eca587e9b->enter($__internal_e1c8cbe6a11a8dd188e4e9325480ae6143077e5fd6e45f1505f8d92eca587e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3296a648a58357246e20abd5a250c846e4834bdb35f8bc3d7816ebd7d73e5d4e->leave($__internal_3296a648a58357246e20abd5a250c846e4834bdb35f8bc3d7816ebd7d73e5d4e_prof);

        
        $__internal_e1c8cbe6a11a8dd188e4e9325480ae6143077e5fd6e45f1505f8d92eca587e9b->leave($__internal_e1c8cbe6a11a8dd188e4e9325480ae6143077e5fd6e45f1505f8d92eca587e9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
