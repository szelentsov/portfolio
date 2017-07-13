<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d26e985f0e8dd6eebc7ac0aafee979928a52d94ef571da4103cbbe12e88febb3 extends Twig_Template
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
        $__internal_c064cb8685ce8602209f17d0db446fe0125248372dcf97f864e79430c5513fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c064cb8685ce8602209f17d0db446fe0125248372dcf97f864e79430c5513fd4->enter($__internal_c064cb8685ce8602209f17d0db446fe0125248372dcf97f864e79430c5513fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_527f4a3568687357809b90a2b6356e7e1f158efee4200493a92e4ff93b4c73f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527f4a3568687357809b90a2b6356e7e1f158efee4200493a92e4ff93b4c73f2->enter($__internal_527f4a3568687357809b90a2b6356e7e1f158efee4200493a92e4ff93b4c73f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c064cb8685ce8602209f17d0db446fe0125248372dcf97f864e79430c5513fd4->leave($__internal_c064cb8685ce8602209f17d0db446fe0125248372dcf97f864e79430c5513fd4_prof);

        
        $__internal_527f4a3568687357809b90a2b6356e7e1f158efee4200493a92e4ff93b4c73f2->leave($__internal_527f4a3568687357809b90a2b6356e7e1f158efee4200493a92e4ff93b4c73f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
