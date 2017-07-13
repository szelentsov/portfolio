<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a987e120207070932f3c070bf45fbbb748dbc0b1ceb04115934b1525399d6a19 extends Twig_Template
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
        $__internal_97e99b6ebdcbc4155f6eea48f1f8bd9e11cdb2dfebb5da6bb3fda65dcb10187b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e99b6ebdcbc4155f6eea48f1f8bd9e11cdb2dfebb5da6bb3fda65dcb10187b->enter($__internal_97e99b6ebdcbc4155f6eea48f1f8bd9e11cdb2dfebb5da6bb3fda65dcb10187b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0cc557225eeb051dc248d643068067dac76e984990a7a13c9e2ae729c40a2dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc557225eeb051dc248d643068067dac76e984990a7a13c9e2ae729c40a2dba->enter($__internal_0cc557225eeb051dc248d643068067dac76e984990a7a13c9e2ae729c40a2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_97e99b6ebdcbc4155f6eea48f1f8bd9e11cdb2dfebb5da6bb3fda65dcb10187b->leave($__internal_97e99b6ebdcbc4155f6eea48f1f8bd9e11cdb2dfebb5da6bb3fda65dcb10187b_prof);

        
        $__internal_0cc557225eeb051dc248d643068067dac76e984990a7a13c9e2ae729c40a2dba->leave($__internal_0cc557225eeb051dc248d643068067dac76e984990a7a13c9e2ae729c40a2dba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
