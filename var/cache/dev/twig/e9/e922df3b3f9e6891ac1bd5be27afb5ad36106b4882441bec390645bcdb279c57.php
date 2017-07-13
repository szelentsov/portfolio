<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_dffc38c1a02df0da1cebdde2cdfa4a5855a539e38b9c9b7b2193f7040db744a2 extends Twig_Template
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
        $__internal_16177f87dfec7c818240f384a0f13e739c95108daf6cda37d99a806ab0c4e68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16177f87dfec7c818240f384a0f13e739c95108daf6cda37d99a806ab0c4e68d->enter($__internal_16177f87dfec7c818240f384a0f13e739c95108daf6cda37d99a806ab0c4e68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cda4c413c1422cad7f6df16a2c96df61b082b1fe745015056b514c6d49b01ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda4c413c1422cad7f6df16a2c96df61b082b1fe745015056b514c6d49b01ca2->enter($__internal_cda4c413c1422cad7f6df16a2c96df61b082b1fe745015056b514c6d49b01ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_16177f87dfec7c818240f384a0f13e739c95108daf6cda37d99a806ab0c4e68d->leave($__internal_16177f87dfec7c818240f384a0f13e739c95108daf6cda37d99a806ab0c4e68d_prof);

        
        $__internal_cda4c413c1422cad7f6df16a2c96df61b082b1fe745015056b514c6d49b01ca2->leave($__internal_cda4c413c1422cad7f6df16a2c96df61b082b1fe745015056b514c6d49b01ca2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
