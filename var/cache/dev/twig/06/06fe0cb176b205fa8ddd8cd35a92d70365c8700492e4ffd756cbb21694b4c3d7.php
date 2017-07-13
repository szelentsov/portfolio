<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_597e09a873f0212e605d3636b59eb50ed6dbac56c1b022e04abb6126204fbc48 extends Twig_Template
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
        $__internal_06f9f27ab15e87deb80618a3023d81a80149f48555950c363d64944bab68bd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f9f27ab15e87deb80618a3023d81a80149f48555950c363d64944bab68bd7f->enter($__internal_06f9f27ab15e87deb80618a3023d81a80149f48555950c363d64944bab68bd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a14459426b444eb1abda9022c1f435c1929fd40d07bce32f8c05245ef8ce6023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14459426b444eb1abda9022c1f435c1929fd40d07bce32f8c05245ef8ce6023->enter($__internal_a14459426b444eb1abda9022c1f435c1929fd40d07bce32f8c05245ef8ce6023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_06f9f27ab15e87deb80618a3023d81a80149f48555950c363d64944bab68bd7f->leave($__internal_06f9f27ab15e87deb80618a3023d81a80149f48555950c363d64944bab68bd7f_prof);

        
        $__internal_a14459426b444eb1abda9022c1f435c1929fd40d07bce32f8c05245ef8ce6023->leave($__internal_a14459426b444eb1abda9022c1f435c1929fd40d07bce32f8c05245ef8ce6023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
