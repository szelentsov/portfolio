<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_16d41a735e7ea059c779cbcfa79218b81b08af2087b10595fe297666da798f1e extends Twig_Template
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
        $__internal_27d7afc6b744fbf5330fe5d260e476bcf123ad1f5d576a83131e2f2c6b7728a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d7afc6b744fbf5330fe5d260e476bcf123ad1f5d576a83131e2f2c6b7728a0->enter($__internal_27d7afc6b744fbf5330fe5d260e476bcf123ad1f5d576a83131e2f2c6b7728a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cc5ea339c25b16230e9462f94dec08a3cadb001fea96defd49172fa0e89181d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5ea339c25b16230e9462f94dec08a3cadb001fea96defd49172fa0e89181d1->enter($__internal_cc5ea339c25b16230e9462f94dec08a3cadb001fea96defd49172fa0e89181d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_27d7afc6b744fbf5330fe5d260e476bcf123ad1f5d576a83131e2f2c6b7728a0->leave($__internal_27d7afc6b744fbf5330fe5d260e476bcf123ad1f5d576a83131e2f2c6b7728a0_prof);

        
        $__internal_cc5ea339c25b16230e9462f94dec08a3cadb001fea96defd49172fa0e89181d1->leave($__internal_cc5ea339c25b16230e9462f94dec08a3cadb001fea96defd49172fa0e89181d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
