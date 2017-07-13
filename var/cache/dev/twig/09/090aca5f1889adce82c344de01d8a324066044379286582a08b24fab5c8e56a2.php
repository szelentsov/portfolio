<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_92b8f69eecb74b87efed0b7707b124b22e610304f55d4f47d4422d5b603cb8fe extends Twig_Template
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
        $__internal_e26f3a557d77be2a7cd24fa60696262480fb246b09290c8bf863eba8b709fb76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26f3a557d77be2a7cd24fa60696262480fb246b09290c8bf863eba8b709fb76->enter($__internal_e26f3a557d77be2a7cd24fa60696262480fb246b09290c8bf863eba8b709fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_eac12a217dd0bb1384f9e3fe541fb11a2cde02f1820da073e8be0e0548038e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac12a217dd0bb1384f9e3fe541fb11a2cde02f1820da073e8be0e0548038e11->enter($__internal_eac12a217dd0bb1384f9e3fe541fb11a2cde02f1820da073e8be0e0548038e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e26f3a557d77be2a7cd24fa60696262480fb246b09290c8bf863eba8b709fb76->leave($__internal_e26f3a557d77be2a7cd24fa60696262480fb246b09290c8bf863eba8b709fb76_prof);

        
        $__internal_eac12a217dd0bb1384f9e3fe541fb11a2cde02f1820da073e8be0e0548038e11->leave($__internal_eac12a217dd0bb1384f9e3fe541fb11a2cde02f1820da073e8be0e0548038e11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
