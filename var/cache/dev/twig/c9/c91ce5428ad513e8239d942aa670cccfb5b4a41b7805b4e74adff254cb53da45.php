<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_1a1ae8cce5fe7fc7f2413f819dbb1ff095e536eba89d3d698f5594e149cf65e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1ae8cce5fe7fc7f2413f819dbb1ff095e536eba89d3d698f5594e149cf65e6->enter($__internal_1a1ae8cce5fe7fc7f2413f819dbb1ff095e536eba89d3d698f5594e149cf65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5c652b69862c2c3ee39333edc2ce04a50f2eac057eb8890fa23ed7cdaeab7c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c652b69862c2c3ee39333edc2ce04a50f2eac057eb8890fa23ed7cdaeab7c80->enter($__internal_5c652b69862c2c3ee39333edc2ce04a50f2eac057eb8890fa23ed7cdaeab7c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1a1ae8cce5fe7fc7f2413f819dbb1ff095e536eba89d3d698f5594e149cf65e6->leave($__internal_1a1ae8cce5fe7fc7f2413f819dbb1ff095e536eba89d3d698f5594e149cf65e6_prof);

        
        $__internal_5c652b69862c2c3ee39333edc2ce04a50f2eac057eb8890fa23ed7cdaeab7c80->leave($__internal_5c652b69862c2c3ee39333edc2ce04a50f2eac057eb8890fa23ed7cdaeab7c80_prof);

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
", "@Framework/Form/form_end.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
