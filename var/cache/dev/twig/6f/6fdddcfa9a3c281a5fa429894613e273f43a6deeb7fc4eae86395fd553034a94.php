<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5a896bb2e259fb1099d6345a1d1fda98cf040361045236d54d1ebe5dd8e817d0 extends Twig_Template
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
        $__internal_d677185913130d972384fa3419c954cd10d098d00a59b7269219ba04d0d854cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d677185913130d972384fa3419c954cd10d098d00a59b7269219ba04d0d854cc->enter($__internal_d677185913130d972384fa3419c954cd10d098d00a59b7269219ba04d0d854cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_245d69ea00eb756e5aaf6c94c59b7b18a02d4e59ecec80210a6c4971864b2eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245d69ea00eb756e5aaf6c94c59b7b18a02d4e59ecec80210a6c4971864b2eb9->enter($__internal_245d69ea00eb756e5aaf6c94c59b7b18a02d4e59ecec80210a6c4971864b2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d677185913130d972384fa3419c954cd10d098d00a59b7269219ba04d0d854cc->leave($__internal_d677185913130d972384fa3419c954cd10d098d00a59b7269219ba04d0d854cc_prof);

        
        $__internal_245d69ea00eb756e5aaf6c94c59b7b18a02d4e59ecec80210a6c4971864b2eb9->leave($__internal_245d69ea00eb756e5aaf6c94c59b7b18a02d4e59ecec80210a6c4971864b2eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
