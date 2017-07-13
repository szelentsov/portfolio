<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b9a2bdce8582a9645b450578c3f4235943c97c6dcc7af08f95f7c30eb8390cf7 extends Twig_Template
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
        $__internal_d372aae1fd576068a81c299b97310e9e39c0a9e55eb111e7cef13421fc9cccd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d372aae1fd576068a81c299b97310e9e39c0a9e55eb111e7cef13421fc9cccd3->enter($__internal_d372aae1fd576068a81c299b97310e9e39c0a9e55eb111e7cef13421fc9cccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d04bec47185ee62e108243dfb967cf99546c210e2aaf198ab3eaab8d92648205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04bec47185ee62e108243dfb967cf99546c210e2aaf198ab3eaab8d92648205->enter($__internal_d04bec47185ee62e108243dfb967cf99546c210e2aaf198ab3eaab8d92648205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d372aae1fd576068a81c299b97310e9e39c0a9e55eb111e7cef13421fc9cccd3->leave($__internal_d372aae1fd576068a81c299b97310e9e39c0a9e55eb111e7cef13421fc9cccd3_prof);

        
        $__internal_d04bec47185ee62e108243dfb967cf99546c210e2aaf198ab3eaab8d92648205->leave($__internal_d04bec47185ee62e108243dfb967cf99546c210e2aaf198ab3eaab8d92648205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
