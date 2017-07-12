<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_d7b9cb8418e01b47d31f8bdcc9d548ae583e14f16659ea83fd4474eee27dcb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b9cb8418e01b47d31f8bdcc9d548ae583e14f16659ea83fd4474eee27dcb1e->enter($__internal_d7b9cb8418e01b47d31f8bdcc9d548ae583e14f16659ea83fd4474eee27dcb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5523a8de289cc669b54608f3c46c021b449276e9ad4d7442c1a627aa6869c804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5523a8de289cc669b54608f3c46c021b449276e9ad4d7442c1a627aa6869c804->enter($__internal_5523a8de289cc669b54608f3c46c021b449276e9ad4d7442c1a627aa6869c804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d7b9cb8418e01b47d31f8bdcc9d548ae583e14f16659ea83fd4474eee27dcb1e->leave($__internal_d7b9cb8418e01b47d31f8bdcc9d548ae583e14f16659ea83fd4474eee27dcb1e_prof);

        
        $__internal_5523a8de289cc669b54608f3c46c021b449276e9ad4d7442c1a627aa6869c804->leave($__internal_5523a8de289cc669b54608f3c46c021b449276e9ad4d7442c1a627aa6869c804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
