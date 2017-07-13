<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e849cebeb1c62520df1905ff4e175bc1531202e8db6b1f8cf15abfc5e555276b extends Twig_Template
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
        $__internal_2f0fcf616a6adf07039b9ac0bd2ed38163cd5b84982b0d457d0a7067a76f579e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0fcf616a6adf07039b9ac0bd2ed38163cd5b84982b0d457d0a7067a76f579e->enter($__internal_2f0fcf616a6adf07039b9ac0bd2ed38163cd5b84982b0d457d0a7067a76f579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c7f0976316991ab17f1628e58f5f99cd01ffa367ffc7c2343356edd09079594f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f0976316991ab17f1628e58f5f99cd01ffa367ffc7c2343356edd09079594f->enter($__internal_c7f0976316991ab17f1628e58f5f99cd01ffa367ffc7c2343356edd09079594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2f0fcf616a6adf07039b9ac0bd2ed38163cd5b84982b0d457d0a7067a76f579e->leave($__internal_2f0fcf616a6adf07039b9ac0bd2ed38163cd5b84982b0d457d0a7067a76f579e_prof);

        
        $__internal_c7f0976316991ab17f1628e58f5f99cd01ffa367ffc7c2343356edd09079594f->leave($__internal_c7f0976316991ab17f1628e58f5f99cd01ffa367ffc7c2343356edd09079594f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
