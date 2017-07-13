<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7d54af6c303182b4ce7b905df4664e763abdbe410546c0e90b5d5373e280ed3e extends Twig_Template
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
        $__internal_d7d2a756c29bc946f31f738d32494c874b0fdf23b0776f0d85b1d732bdd2f038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d2a756c29bc946f31f738d32494c874b0fdf23b0776f0d85b1d732bdd2f038->enter($__internal_d7d2a756c29bc946f31f738d32494c874b0fdf23b0776f0d85b1d732bdd2f038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5cf265552262e12b76fc3d66f206a1ca7df9c05e596992bc4ca755021e044511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf265552262e12b76fc3d66f206a1ca7df9c05e596992bc4ca755021e044511->enter($__internal_5cf265552262e12b76fc3d66f206a1ca7df9c05e596992bc4ca755021e044511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d7d2a756c29bc946f31f738d32494c874b0fdf23b0776f0d85b1d732bdd2f038->leave($__internal_d7d2a756c29bc946f31f738d32494c874b0fdf23b0776f0d85b1d732bdd2f038_prof);

        
        $__internal_5cf265552262e12b76fc3d66f206a1ca7df9c05e596992bc4ca755021e044511->leave($__internal_5cf265552262e12b76fc3d66f206a1ca7df9c05e596992bc4ca755021e044511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
