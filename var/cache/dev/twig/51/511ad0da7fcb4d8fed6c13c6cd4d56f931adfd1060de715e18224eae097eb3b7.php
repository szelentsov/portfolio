<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_3fea2601ce0a652d6f0a4e4e4e6de4506c69b210813d309cc9906139df88b786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fea2601ce0a652d6f0a4e4e4e6de4506c69b210813d309cc9906139df88b786->enter($__internal_3fea2601ce0a652d6f0a4e4e4e6de4506c69b210813d309cc9906139df88b786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ab0080e5ef4df457852c8fe201e090d7ca1248548ef0de61e05485667c6f84c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0080e5ef4df457852c8fe201e090d7ca1248548ef0de61e05485667c6f84c8->enter($__internal_ab0080e5ef4df457852c8fe201e090d7ca1248548ef0de61e05485667c6f84c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3fea2601ce0a652d6f0a4e4e4e6de4506c69b210813d309cc9906139df88b786->leave($__internal_3fea2601ce0a652d6f0a4e4e4e6de4506c69b210813d309cc9906139df88b786_prof);

        
        $__internal_ab0080e5ef4df457852c8fe201e090d7ca1248548ef0de61e05485667c6f84c8->leave($__internal_ab0080e5ef4df457852c8fe201e090d7ca1248548ef0de61e05485667c6f84c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
