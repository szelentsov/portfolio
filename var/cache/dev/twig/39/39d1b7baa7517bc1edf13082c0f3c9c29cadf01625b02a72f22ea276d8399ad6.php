<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_796c085d7147f4ee50bd3a20b3e00e01f80cf73377ddf2ad3909445a74651eaa extends Twig_Template
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
        $__internal_7b147efc8a2822792f372ee36a61f4fff75609df97dbe034a6a9b0ef8d486ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b147efc8a2822792f372ee36a61f4fff75609df97dbe034a6a9b0ef8d486ed1->enter($__internal_7b147efc8a2822792f372ee36a61f4fff75609df97dbe034a6a9b0ef8d486ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_aee8e186d60f1532c51fae5ef44232d09afb8e30f1ea71a27d418acda4646c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee8e186d60f1532c51fae5ef44232d09afb8e30f1ea71a27d418acda4646c55->enter($__internal_aee8e186d60f1532c51fae5ef44232d09afb8e30f1ea71a27d418acda4646c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7b147efc8a2822792f372ee36a61f4fff75609df97dbe034a6a9b0ef8d486ed1->leave($__internal_7b147efc8a2822792f372ee36a61f4fff75609df97dbe034a6a9b0ef8d486ed1_prof);

        
        $__internal_aee8e186d60f1532c51fae5ef44232d09afb8e30f1ea71a27d418acda4646c55->leave($__internal_aee8e186d60f1532c51fae5ef44232d09afb8e30f1ea71a27d418acda4646c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
