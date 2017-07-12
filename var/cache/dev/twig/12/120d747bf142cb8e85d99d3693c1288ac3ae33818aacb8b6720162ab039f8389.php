<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_277e8f03f72eff7c6e344017cb6887e4a922e1422740fa26601112ef2cfef729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277e8f03f72eff7c6e344017cb6887e4a922e1422740fa26601112ef2cfef729->enter($__internal_277e8f03f72eff7c6e344017cb6887e4a922e1422740fa26601112ef2cfef729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_049873a6b136545037470d33d980f290cf339b6afd2eb272b33bc15c61a261d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049873a6b136545037470d33d980f290cf339b6afd2eb272b33bc15c61a261d1->enter($__internal_049873a6b136545037470d33d980f290cf339b6afd2eb272b33bc15c61a261d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_277e8f03f72eff7c6e344017cb6887e4a922e1422740fa26601112ef2cfef729->leave($__internal_277e8f03f72eff7c6e344017cb6887e4a922e1422740fa26601112ef2cfef729_prof);

        
        $__internal_049873a6b136545037470d33d980f290cf339b6afd2eb272b33bc15c61a261d1->leave($__internal_049873a6b136545037470d33d980f290cf339b6afd2eb272b33bc15c61a261d1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce64ccbd345d9a7e38b31d06d9122ead1a3bd04ccc2a88db7ae01a1efd98d7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce64ccbd345d9a7e38b31d06d9122ead1a3bd04ccc2a88db7ae01a1efd98d7cd->enter($__internal_ce64ccbd345d9a7e38b31d06d9122ead1a3bd04ccc2a88db7ae01a1efd98d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc267575f67f1fa9fb1a7f2d6b6505aa41eb955e33347d9c6fcff38c1ddde30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc267575f67f1fa9fb1a7f2d6b6505aa41eb955e33347d9c6fcff38c1ddde30f->enter($__internal_fc267575f67f1fa9fb1a7f2d6b6505aa41eb955e33347d9c6fcff38c1ddde30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fc267575f67f1fa9fb1a7f2d6b6505aa41eb955e33347d9c6fcff38c1ddde30f->leave($__internal_fc267575f67f1fa9fb1a7f2d6b6505aa41eb955e33347d9c6fcff38c1ddde30f_prof);

        
        $__internal_ce64ccbd345d9a7e38b31d06d9122ead1a3bd04ccc2a88db7ae01a1efd98d7cd->leave($__internal_ce64ccbd345d9a7e38b31d06d9122ead1a3bd04ccc2a88db7ae01a1efd98d7cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sergey/portfolio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
