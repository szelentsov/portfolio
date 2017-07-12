<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_233d02e49db8fa5ab1d5f1e43b21aa55601e0a6f89dacbdd8400060e968a2d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233d02e49db8fa5ab1d5f1e43b21aa55601e0a6f89dacbdd8400060e968a2d9e->enter($__internal_233d02e49db8fa5ab1d5f1e43b21aa55601e0a6f89dacbdd8400060e968a2d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c1456e8b683c81d68bd8d8e86a4039ddd2c98f3c041caa175a228403940342d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1456e8b683c81d68bd8d8e86a4039ddd2c98f3c041caa175a228403940342d8->enter($__internal_c1456e8b683c81d68bd8d8e86a4039ddd2c98f3c041caa175a228403940342d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_233d02e49db8fa5ab1d5f1e43b21aa55601e0a6f89dacbdd8400060e968a2d9e->leave($__internal_233d02e49db8fa5ab1d5f1e43b21aa55601e0a6f89dacbdd8400060e968a2d9e_prof);

        
        $__internal_c1456e8b683c81d68bd8d8e86a4039ddd2c98f3c041caa175a228403940342d8->leave($__internal_c1456e8b683c81d68bd8d8e86a4039ddd2c98f3c041caa175a228403940342d8_prof);

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
", "@Framework/Form/form_rest.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
