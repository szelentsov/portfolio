<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_9d263cc31b58418f34265506f97f7e67f09492c26a44df5469c6682f77436ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d263cc31b58418f34265506f97f7e67f09492c26a44df5469c6682f77436ee7->enter($__internal_9d263cc31b58418f34265506f97f7e67f09492c26a44df5469c6682f77436ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f35446cbbcf9eb65f3b3b27b8de6ae8cc2c480a6a5eba3f567065e8dfae0b869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35446cbbcf9eb65f3b3b27b8de6ae8cc2c480a6a5eba3f567065e8dfae0b869->enter($__internal_f35446cbbcf9eb65f3b3b27b8de6ae8cc2c480a6a5eba3f567065e8dfae0b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9d263cc31b58418f34265506f97f7e67f09492c26a44df5469c6682f77436ee7->leave($__internal_9d263cc31b58418f34265506f97f7e67f09492c26a44df5469c6682f77436ee7_prof);

        
        $__internal_f35446cbbcf9eb65f3b3b27b8de6ae8cc2c480a6a5eba3f567065e8dfae0b869->leave($__internal_f35446cbbcf9eb65f3b3b27b8de6ae8cc2c480a6a5eba3f567065e8dfae0b869_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
