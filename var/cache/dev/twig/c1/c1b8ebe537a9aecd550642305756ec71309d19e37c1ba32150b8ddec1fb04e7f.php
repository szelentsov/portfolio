<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f0d20aabdab624ee6ae1cce9451b4a8a9324097e77d29827b79235856c327612 extends Twig_Template
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
        $__internal_a75d000afa8e31a9f0e9c2215415113e1e061720ef0665573366282bcd6e29af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75d000afa8e31a9f0e9c2215415113e1e061720ef0665573366282bcd6e29af->enter($__internal_a75d000afa8e31a9f0e9c2215415113e1e061720ef0665573366282bcd6e29af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_40a78fdeab7f3b2ec3716aa7a7aacae518c181db08b5890ffdd7c805752d4251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a78fdeab7f3b2ec3716aa7a7aacae518c181db08b5890ffdd7c805752d4251->enter($__internal_40a78fdeab7f3b2ec3716aa7a7aacae518c181db08b5890ffdd7c805752d4251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a75d000afa8e31a9f0e9c2215415113e1e061720ef0665573366282bcd6e29af->leave($__internal_a75d000afa8e31a9f0e9c2215415113e1e061720ef0665573366282bcd6e29af_prof);

        
        $__internal_40a78fdeab7f3b2ec3716aa7a7aacae518c181db08b5890ffdd7c805752d4251->leave($__internal_40a78fdeab7f3b2ec3716aa7a7aacae518c181db08b5890ffdd7c805752d4251_prof);

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
", "@Framework/Form/repeated_row.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
