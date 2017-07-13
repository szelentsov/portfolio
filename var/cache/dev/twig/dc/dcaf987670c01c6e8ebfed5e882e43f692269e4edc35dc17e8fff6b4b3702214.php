<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_665c081552d2aa9f931552ac43756416625b54e5c8a486f9cac7284d78a7a25c extends Twig_Template
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
        $__internal_297408e16a901e61b4edb638da40a7303a745dce096d5f785b940ba0e73b622e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297408e16a901e61b4edb638da40a7303a745dce096d5f785b940ba0e73b622e->enter($__internal_297408e16a901e61b4edb638da40a7303a745dce096d5f785b940ba0e73b622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_804312ed31dcc34051a06db091c8f1e3d5b2503d8ad4c9ffffc9f0e2da54272b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804312ed31dcc34051a06db091c8f1e3d5b2503d8ad4c9ffffc9f0e2da54272b->enter($__internal_804312ed31dcc34051a06db091c8f1e3d5b2503d8ad4c9ffffc9f0e2da54272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_297408e16a901e61b4edb638da40a7303a745dce096d5f785b940ba0e73b622e->leave($__internal_297408e16a901e61b4edb638da40a7303a745dce096d5f785b940ba0e73b622e_prof);

        
        $__internal_804312ed31dcc34051a06db091c8f1e3d5b2503d8ad4c9ffffc9f0e2da54272b->leave($__internal_804312ed31dcc34051a06db091c8f1e3d5b2503d8ad4c9ffffc9f0e2da54272b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
