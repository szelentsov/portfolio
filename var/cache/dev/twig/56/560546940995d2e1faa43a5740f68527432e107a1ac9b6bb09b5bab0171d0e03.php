<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4799e37b4281dd326eb04aa8a98047e102c5cd9c33f51e9d7eff406fe47a3a89 extends Twig_Template
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
        $__internal_f143706c1831a4c3e4873f438c0530a8ab6d0497e78b26306d1e07551dbb642b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f143706c1831a4c3e4873f438c0530a8ab6d0497e78b26306d1e07551dbb642b->enter($__internal_f143706c1831a4c3e4873f438c0530a8ab6d0497e78b26306d1e07551dbb642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0459d314ff74addce738f337654db6686e78ead5a4ff03b0d0aece633f73ec7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0459d314ff74addce738f337654db6686e78ead5a4ff03b0d0aece633f73ec7d->enter($__internal_0459d314ff74addce738f337654db6686e78ead5a4ff03b0d0aece633f73ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f143706c1831a4c3e4873f438c0530a8ab6d0497e78b26306d1e07551dbb642b->leave($__internal_f143706c1831a4c3e4873f438c0530a8ab6d0497e78b26306d1e07551dbb642b_prof);

        
        $__internal_0459d314ff74addce738f337654db6686e78ead5a4ff03b0d0aece633f73ec7d->leave($__internal_0459d314ff74addce738f337654db6686e78ead5a4ff03b0d0aece633f73ec7d_prof);

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
", "@Framework/Form/url_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
