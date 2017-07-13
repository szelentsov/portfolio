<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_1d9e05b17bfa4d7f3b9c016e0e18b75749fa62615dbb33723e36ecfa9048c531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbcd4c5b41e075d2997a2668da8c4e8dd3b3115274636a03fdfcd65a236a6568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcd4c5b41e075d2997a2668da8c4e8dd3b3115274636a03fdfcd65a236a6568->enter($__internal_bbcd4c5b41e075d2997a2668da8c4e8dd3b3115274636a03fdfcd65a236a6568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_d03f7d18cc089f3288da267e6b259a5384d85307572678eb7f162aa58c93179e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03f7d18cc089f3288da267e6b259a5384d85307572678eb7f162aa58c93179e->enter($__internal_d03f7d18cc089f3288da267e6b259a5384d85307572678eb7f162aa58c93179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_bbcd4c5b41e075d2997a2668da8c4e8dd3b3115274636a03fdfcd65a236a6568->leave($__internal_bbcd4c5b41e075d2997a2668da8c4e8dd3b3115274636a03fdfcd65a236a6568_prof);

        
        $__internal_d03f7d18cc089f3288da267e6b259a5384d85307572678eb7f162aa58c93179e->leave($__internal_d03f7d18cc089f3288da267e6b259a5384d85307572678eb7f162aa58c93179e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_74b664d954ca2f7c8f17720d2d3c8410dfc2062e2a2068ce36fb5ede35dddbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b664d954ca2f7c8f17720d2d3c8410dfc2062e2a2068ce36fb5ede35dddbd8->enter($__internal_74b664d954ca2f7c8f17720d2d3c8410dfc2062e2a2068ce36fb5ede35dddbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_397ae56f148dea3340a23ea9877db9dc2aa7ed2faa252479cd370a093f284021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397ae56f148dea3340a23ea9877db9dc2aa7ed2faa252479cd370a093f284021->enter($__internal_397ae56f148dea3340a23ea9877db9dc2aa7ed2faa252479cd370a093f284021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_397ae56f148dea3340a23ea9877db9dc2aa7ed2faa252479cd370a093f284021->leave($__internal_397ae56f148dea3340a23ea9877db9dc2aa7ed2faa252479cd370a093f284021_prof);

        
        $__internal_74b664d954ca2f7c8f17720d2d3c8410dfc2062e2a2068ce36fb5ede35dddbd8->leave($__internal_74b664d954ca2f7c8f17720d2d3c8410dfc2062e2a2068ce36fb5ede35dddbd8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
