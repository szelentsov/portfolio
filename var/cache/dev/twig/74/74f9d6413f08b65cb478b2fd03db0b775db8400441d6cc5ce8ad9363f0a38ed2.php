<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_a0027245d65b74b1a3fe6462c8f8169e9f0809bdf620c55f2f594d75f6598fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0027245d65b74b1a3fe6462c8f8169e9f0809bdf620c55f2f594d75f6598fa1->enter($__internal_a0027245d65b74b1a3fe6462c8f8169e9f0809bdf620c55f2f594d75f6598fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3c64d7be58d808ccfb37218b30b71b12cb57524aae47715c8482bd7ab4d562e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c64d7be58d808ccfb37218b30b71b12cb57524aae47715c8482bd7ab4d562e0->enter($__internal_3c64d7be58d808ccfb37218b30b71b12cb57524aae47715c8482bd7ab4d562e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a0027245d65b74b1a3fe6462c8f8169e9f0809bdf620c55f2f594d75f6598fa1->leave($__internal_a0027245d65b74b1a3fe6462c8f8169e9f0809bdf620c55f2f594d75f6598fa1_prof);

        
        $__internal_3c64d7be58d808ccfb37218b30b71b12cb57524aae47715c8482bd7ab4d562e0->leave($__internal_3c64d7be58d808ccfb37218b30b71b12cb57524aae47715c8482bd7ab4d562e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
