<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_809a6de6b1513f720b196d28dc057a93c161939e73809c865b3b21b588a7a793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809a6de6b1513f720b196d28dc057a93c161939e73809c865b3b21b588a7a793->enter($__internal_809a6de6b1513f720b196d28dc057a93c161939e73809c865b3b21b588a7a793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_74cd9b60d7ebc1fe842c5796d241cedaa36a33ceb6dbab2d27eab5f4f318217f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cd9b60d7ebc1fe842c5796d241cedaa36a33ceb6dbab2d27eab5f4f318217f->enter($__internal_74cd9b60d7ebc1fe842c5796d241cedaa36a33ceb6dbab2d27eab5f4f318217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_809a6de6b1513f720b196d28dc057a93c161939e73809c865b3b21b588a7a793->leave($__internal_809a6de6b1513f720b196d28dc057a93c161939e73809c865b3b21b588a7a793_prof);

        
        $__internal_74cd9b60d7ebc1fe842c5796d241cedaa36a33ceb6dbab2d27eab5f4f318217f->leave($__internal_74cd9b60d7ebc1fe842c5796d241cedaa36a33ceb6dbab2d27eab5f4f318217f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
