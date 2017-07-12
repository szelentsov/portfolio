<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_b094ccee91e3a76aa1b9479d3eb03ef0c5f171e78633fd0c98ecc6ffce23f201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b094ccee91e3a76aa1b9479d3eb03ef0c5f171e78633fd0c98ecc6ffce23f201->enter($__internal_b094ccee91e3a76aa1b9479d3eb03ef0c5f171e78633fd0c98ecc6ffce23f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_24cf219fb13f3777ba6f45067e5d63816b166d40b13d05f11c7fd20911b3abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cf219fb13f3777ba6f45067e5d63816b166d40b13d05f11c7fd20911b3abe8->enter($__internal_24cf219fb13f3777ba6f45067e5d63816b166d40b13d05f11c7fd20911b3abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b094ccee91e3a76aa1b9479d3eb03ef0c5f171e78633fd0c98ecc6ffce23f201->leave($__internal_b094ccee91e3a76aa1b9479d3eb03ef0c5f171e78633fd0c98ecc6ffce23f201_prof);

        
        $__internal_24cf219fb13f3777ba6f45067e5d63816b166d40b13d05f11c7fd20911b3abe8->leave($__internal_24cf219fb13f3777ba6f45067e5d63816b166d40b13d05f11c7fd20911b3abe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
