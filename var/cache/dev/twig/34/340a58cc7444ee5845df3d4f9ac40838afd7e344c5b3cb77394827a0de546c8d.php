<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_72f064d8c75492c94ed23872e1d46555e8ef7c404829f2757467c3960bc3fa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f064d8c75492c94ed23872e1d46555e8ef7c404829f2757467c3960bc3fa1f->enter($__internal_72f064d8c75492c94ed23872e1d46555e8ef7c404829f2757467c3960bc3fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3f3ff376855297ef547bf0002a48922dc8e47c30d096403e06a7d2207ecc8aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3ff376855297ef547bf0002a48922dc8e47c30d096403e06a7d2207ecc8aed->enter($__internal_3f3ff376855297ef547bf0002a48922dc8e47c30d096403e06a7d2207ecc8aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_72f064d8c75492c94ed23872e1d46555e8ef7c404829f2757467c3960bc3fa1f->leave($__internal_72f064d8c75492c94ed23872e1d46555e8ef7c404829f2757467c3960bc3fa1f_prof);

        
        $__internal_3f3ff376855297ef547bf0002a48922dc8e47c30d096403e06a7d2207ecc8aed->leave($__internal_3f3ff376855297ef547bf0002a48922dc8e47c30d096403e06a7d2207ecc8aed_prof);

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
", "@Framework/Form/form_errors.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
