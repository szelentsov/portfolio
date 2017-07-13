<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f13fa6b7c2d9adab629866e2aee85aeca611120501ada9ca127aad876087ed05 extends Twig_Template
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
        $__internal_3c1a23e9266a3b8f778518874a5134a3bd86adb5f79755770d44af5ad7213cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1a23e9266a3b8f778518874a5134a3bd86adb5f79755770d44af5ad7213cfb->enter($__internal_3c1a23e9266a3b8f778518874a5134a3bd86adb5f79755770d44af5ad7213cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4534017914d12dd32fdff9e6cf9a306c2180cbd89673c3b4516e4e48565a0db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4534017914d12dd32fdff9e6cf9a306c2180cbd89673c3b4516e4e48565a0db2->enter($__internal_4534017914d12dd32fdff9e6cf9a306c2180cbd89673c3b4516e4e48565a0db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3c1a23e9266a3b8f778518874a5134a3bd86adb5f79755770d44af5ad7213cfb->leave($__internal_3c1a23e9266a3b8f778518874a5134a3bd86adb5f79755770d44af5ad7213cfb_prof);

        
        $__internal_4534017914d12dd32fdff9e6cf9a306c2180cbd89673c3b4516e4e48565a0db2->leave($__internal_4534017914d12dd32fdff9e6cf9a306c2180cbd89673c3b4516e4e48565a0db2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
