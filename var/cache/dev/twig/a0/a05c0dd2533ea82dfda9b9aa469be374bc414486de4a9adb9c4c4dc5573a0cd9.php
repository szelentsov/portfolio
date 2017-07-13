<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f35960468b4445a95cbc4728e02d37a7147b27f3cb491a252dad49847332d5b3 extends Twig_Template
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
        $__internal_4b21895414db20be5357f7e023e5c348c7d56d6afe83ccc384da35c4b87d1bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b21895414db20be5357f7e023e5c348c7d56d6afe83ccc384da35c4b87d1bc0->enter($__internal_4b21895414db20be5357f7e023e5c348c7d56d6afe83ccc384da35c4b87d1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7c66e915288ca2997b82bd852dd4fcd08461a3ee48df41476a4ac64656e53e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c66e915288ca2997b82bd852dd4fcd08461a3ee48df41476a4ac64656e53e3a->enter($__internal_7c66e915288ca2997b82bd852dd4fcd08461a3ee48df41476a4ac64656e53e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4b21895414db20be5357f7e023e5c348c7d56d6afe83ccc384da35c4b87d1bc0->leave($__internal_4b21895414db20be5357f7e023e5c348c7d56d6afe83ccc384da35c4b87d1bc0_prof);

        
        $__internal_7c66e915288ca2997b82bd852dd4fcd08461a3ee48df41476a4ac64656e53e3a->leave($__internal_7c66e915288ca2997b82bd852dd4fcd08461a3ee48df41476a4ac64656e53e3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
