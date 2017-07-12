<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_c0cdf31a1b6976893ca6b79fb91f63fa753d559321807c306e2fc1315d7c3fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cdf31a1b6976893ca6b79fb91f63fa753d559321807c306e2fc1315d7c3fc4->enter($__internal_c0cdf31a1b6976893ca6b79fb91f63fa753d559321807c306e2fc1315d7c3fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ccbaf21e0ce68b4b24c9dfea84e0491dcd70779f362e6917a9870c16bc6630ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbaf21e0ce68b4b24c9dfea84e0491dcd70779f362e6917a9870c16bc6630ae->enter($__internal_ccbaf21e0ce68b4b24c9dfea84e0491dcd70779f362e6917a9870c16bc6630ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c0cdf31a1b6976893ca6b79fb91f63fa753d559321807c306e2fc1315d7c3fc4->leave($__internal_c0cdf31a1b6976893ca6b79fb91f63fa753d559321807c306e2fc1315d7c3fc4_prof);

        
        $__internal_ccbaf21e0ce68b4b24c9dfea84e0491dcd70779f362e6917a9870c16bc6630ae->leave($__internal_ccbaf21e0ce68b4b24c9dfea84e0491dcd70779f362e6917a9870c16bc6630ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
