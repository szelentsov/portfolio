<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_a608984931bae07dba9142d8fb28c0138f4e9e8da0f3a51ae4418a6ea80fbdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a608984931bae07dba9142d8fb28c0138f4e9e8da0f3a51ae4418a6ea80fbdce->enter($__internal_a608984931bae07dba9142d8fb28c0138f4e9e8da0f3a51ae4418a6ea80fbdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f2a1d18fcc1eae7e369e28f967aca2213396142fbc8a55e55c2f5cd55377e3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a1d18fcc1eae7e369e28f967aca2213396142fbc8a55e55c2f5cd55377e3b5->enter($__internal_f2a1d18fcc1eae7e369e28f967aca2213396142fbc8a55e55c2f5cd55377e3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a608984931bae07dba9142d8fb28c0138f4e9e8da0f3a51ae4418a6ea80fbdce->leave($__internal_a608984931bae07dba9142d8fb28c0138f4e9e8da0f3a51ae4418a6ea80fbdce_prof);

        
        $__internal_f2a1d18fcc1eae7e369e28f967aca2213396142fbc8a55e55c2f5cd55377e3b5->leave($__internal_f2a1d18fcc1eae7e369e28f967aca2213396142fbc8a55e55c2f5cd55377e3b5_prof);

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
", "@Framework/Form/reset_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
