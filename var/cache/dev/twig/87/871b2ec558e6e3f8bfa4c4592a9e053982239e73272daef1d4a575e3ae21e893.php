<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_5e239daa8fca7a5b93c53b78e3b2126fca7975b1f5ae87c643ca970f4c0fe504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e239daa8fca7a5b93c53b78e3b2126fca7975b1f5ae87c643ca970f4c0fe504->enter($__internal_5e239daa8fca7a5b93c53b78e3b2126fca7975b1f5ae87c643ca970f4c0fe504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0feed898d138965bf568604d91f9ead8b994e820d246efbcba5184b8171a4ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feed898d138965bf568604d91f9ead8b994e820d246efbcba5184b8171a4ef7->enter($__internal_0feed898d138965bf568604d91f9ead8b994e820d246efbcba5184b8171a4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e239daa8fca7a5b93c53b78e3b2126fca7975b1f5ae87c643ca970f4c0fe504->leave($__internal_5e239daa8fca7a5b93c53b78e3b2126fca7975b1f5ae87c643ca970f4c0fe504_prof);

        
        $__internal_0feed898d138965bf568604d91f9ead8b994e820d246efbcba5184b8171a4ef7->leave($__internal_0feed898d138965bf568604d91f9ead8b994e820d246efbcba5184b8171a4ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
