<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_42e27142dd0769ff4f718dd8874b031855755f8a5c4c9eeb4f620b75746d74ec extends Twig_Template
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
        $__internal_fcaa86c5ba48fa1d150862fdc6cb19a86b5dd93021e91922f97a5c2c0581a673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcaa86c5ba48fa1d150862fdc6cb19a86b5dd93021e91922f97a5c2c0581a673->enter($__internal_fcaa86c5ba48fa1d150862fdc6cb19a86b5dd93021e91922f97a5c2c0581a673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4450fda30cd4d7e1c2a21fe09b4f92a8913c39abdd037309e82e9dcde992d368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4450fda30cd4d7e1c2a21fe09b4f92a8913c39abdd037309e82e9dcde992d368->enter($__internal_4450fda30cd4d7e1c2a21fe09b4f92a8913c39abdd037309e82e9dcde992d368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fcaa86c5ba48fa1d150862fdc6cb19a86b5dd93021e91922f97a5c2c0581a673->leave($__internal_fcaa86c5ba48fa1d150862fdc6cb19a86b5dd93021e91922f97a5c2c0581a673_prof);

        
        $__internal_4450fda30cd4d7e1c2a21fe09b4f92a8913c39abdd037309e82e9dcde992d368->leave($__internal_4450fda30cd4d7e1c2a21fe09b4f92a8913c39abdd037309e82e9dcde992d368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
