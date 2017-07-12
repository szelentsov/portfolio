<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_0e0b68302db0630d9db66e5d42d2485fa7e05244586deb53ed5a4aca53d7dc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0b68302db0630d9db66e5d42d2485fa7e05244586deb53ed5a4aca53d7dc6a->enter($__internal_0e0b68302db0630d9db66e5d42d2485fa7e05244586deb53ed5a4aca53d7dc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_67a688ffb5bc91b9f24c7931e9a5ff271bd43947f433fee201a851fce0ca9066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a688ffb5bc91b9f24c7931e9a5ff271bd43947f433fee201a851fce0ca9066->enter($__internal_67a688ffb5bc91b9f24c7931e9a5ff271bd43947f433fee201a851fce0ca9066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0e0b68302db0630d9db66e5d42d2485fa7e05244586deb53ed5a4aca53d7dc6a->leave($__internal_0e0b68302db0630d9db66e5d42d2485fa7e05244586deb53ed5a4aca53d7dc6a_prof);

        
        $__internal_67a688ffb5bc91b9f24c7931e9a5ff271bd43947f433fee201a851fce0ca9066->leave($__internal_67a688ffb5bc91b9f24c7931e9a5ff271bd43947f433fee201a851fce0ca9066_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
