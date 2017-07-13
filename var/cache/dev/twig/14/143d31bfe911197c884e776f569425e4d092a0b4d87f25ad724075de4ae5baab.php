<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_12f92c67b4baf5ce7c6da9b42e3b841cd69fcd93e03caf00195579ff6c082949 extends Twig_Template
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
        $__internal_2debecd0d7fc7e8d3ce389e9fdc22fbca8047bdb7f1eb8ebe7208ec77a9d886a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2debecd0d7fc7e8d3ce389e9fdc22fbca8047bdb7f1eb8ebe7208ec77a9d886a->enter($__internal_2debecd0d7fc7e8d3ce389e9fdc22fbca8047bdb7f1eb8ebe7208ec77a9d886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_70a3f78691fc4945ffa9bafd8377b453905b386a3202c55bf31148c972ddeccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a3f78691fc4945ffa9bafd8377b453905b386a3202c55bf31148c972ddeccf->enter($__internal_70a3f78691fc4945ffa9bafd8377b453905b386a3202c55bf31148c972ddeccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2debecd0d7fc7e8d3ce389e9fdc22fbca8047bdb7f1eb8ebe7208ec77a9d886a->leave($__internal_2debecd0d7fc7e8d3ce389e9fdc22fbca8047bdb7f1eb8ebe7208ec77a9d886a_prof);

        
        $__internal_70a3f78691fc4945ffa9bafd8377b453905b386a3202c55bf31148c972ddeccf->leave($__internal_70a3f78691fc4945ffa9bafd8377b453905b386a3202c55bf31148c972ddeccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
