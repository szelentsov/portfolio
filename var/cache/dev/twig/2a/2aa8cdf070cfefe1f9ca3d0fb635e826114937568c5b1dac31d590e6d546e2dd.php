<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40cea66d9455fccc5bc8ad14137acf5483da7ab93d431eca4f10357dbbc42593 extends Twig_Template
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
        $__internal_4bf8a64e3530d282b1a5cd92961fcca6bf55371e84aeb3e9942bf9285d57fa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf8a64e3530d282b1a5cd92961fcca6bf55371e84aeb3e9942bf9285d57fa17->enter($__internal_4bf8a64e3530d282b1a5cd92961fcca6bf55371e84aeb3e9942bf9285d57fa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a0ce10e0ae1e3f3b9b048a326bab61d4d5c34ae320e476e4e7dea8323f8f5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ce10e0ae1e3f3b9b048a326bab61d4d5c34ae320e476e4e7dea8323f8f5951->enter($__internal_a0ce10e0ae1e3f3b9b048a326bab61d4d5c34ae320e476e4e7dea8323f8f5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4bf8a64e3530d282b1a5cd92961fcca6bf55371e84aeb3e9942bf9285d57fa17->leave($__internal_4bf8a64e3530d282b1a5cd92961fcca6bf55371e84aeb3e9942bf9285d57fa17_prof);

        
        $__internal_a0ce10e0ae1e3f3b9b048a326bab61d4d5c34ae320e476e4e7dea8323f8f5951->leave($__internal_a0ce10e0ae1e3f3b9b048a326bab61d4d5c34ae320e476e4e7dea8323f8f5951_prof);

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
", "@Framework/FormTable/form_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
