<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5583247cf8726d85ac2e6e00ed67c015e15b718fd7364ae14578e0ff9c9b1cb4 extends Twig_Template
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
        $__internal_740fd27b1c2a66973b3fe380a7c6643d8c5c886972505e23d46ed118ebc21686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740fd27b1c2a66973b3fe380a7c6643d8c5c886972505e23d46ed118ebc21686->enter($__internal_740fd27b1c2a66973b3fe380a7c6643d8c5c886972505e23d46ed118ebc21686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c65bb806020a0cdc8b078222d505eea1b2121f4ad6a6875a9a049b7f3bc09784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65bb806020a0cdc8b078222d505eea1b2121f4ad6a6875a9a049b7f3bc09784->enter($__internal_c65bb806020a0cdc8b078222d505eea1b2121f4ad6a6875a9a049b7f3bc09784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_740fd27b1c2a66973b3fe380a7c6643d8c5c886972505e23d46ed118ebc21686->leave($__internal_740fd27b1c2a66973b3fe380a7c6643d8c5c886972505e23d46ed118ebc21686_prof);

        
        $__internal_c65bb806020a0cdc8b078222d505eea1b2121f4ad6a6875a9a049b7f3bc09784->leave($__internal_c65bb806020a0cdc8b078222d505eea1b2121f4ad6a6875a9a049b7f3bc09784_prof);

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
", "@Framework/Form/password_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
