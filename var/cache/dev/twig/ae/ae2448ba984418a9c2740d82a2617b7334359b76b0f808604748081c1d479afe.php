<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_3dedaddfdc4c988323b81a8d81e748269635f426b3ec43fa1e1568951b175ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dedaddfdc4c988323b81a8d81e748269635f426b3ec43fa1e1568951b175ae6->enter($__internal_3dedaddfdc4c988323b81a8d81e748269635f426b3ec43fa1e1568951b175ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_465b019aa3f4c9956f046a15380f1edb6bae19d9eb933fea1200ecc017e5eddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465b019aa3f4c9956f046a15380f1edb6bae19d9eb933fea1200ecc017e5eddb->enter($__internal_465b019aa3f4c9956f046a15380f1edb6bae19d9eb933fea1200ecc017e5eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3dedaddfdc4c988323b81a8d81e748269635f426b3ec43fa1e1568951b175ae6->leave($__internal_3dedaddfdc4c988323b81a8d81e748269635f426b3ec43fa1e1568951b175ae6_prof);

        
        $__internal_465b019aa3f4c9956f046a15380f1edb6bae19d9eb933fea1200ecc017e5eddb->leave($__internal_465b019aa3f4c9956f046a15380f1edb6bae19d9eb933fea1200ecc017e5eddb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
