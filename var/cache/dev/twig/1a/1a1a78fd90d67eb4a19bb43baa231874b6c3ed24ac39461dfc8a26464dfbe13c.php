<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f49caa1e9109ff6e82fb320eb12a91ea615ab147f242486c8ad3f8b216fe4a62 extends Twig_Template
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
        $__internal_483527287963a4f62b890e5aa5e7dd222bd78e0771d973a66b74295112de7dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483527287963a4f62b890e5aa5e7dd222bd78e0771d973a66b74295112de7dfd->enter($__internal_483527287963a4f62b890e5aa5e7dd222bd78e0771d973a66b74295112de7dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_14965112b77be2161a8f075fcbec2fc0466a69e03da2768cbff9be54d8793a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14965112b77be2161a8f075fcbec2fc0466a69e03da2768cbff9be54d8793a10->enter($__internal_14965112b77be2161a8f075fcbec2fc0466a69e03da2768cbff9be54d8793a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_483527287963a4f62b890e5aa5e7dd222bd78e0771d973a66b74295112de7dfd->leave($__internal_483527287963a4f62b890e5aa5e7dd222bd78e0771d973a66b74295112de7dfd_prof);

        
        $__internal_14965112b77be2161a8f075fcbec2fc0466a69e03da2768cbff9be54d8793a10->leave($__internal_14965112b77be2161a8f075fcbec2fc0466a69e03da2768cbff9be54d8793a10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_82bf6283f1e773255078032cd6df425dd1959ef2be91d35eb90dcd6424403996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bf6283f1e773255078032cd6df425dd1959ef2be91d35eb90dcd6424403996->enter($__internal_82bf6283f1e773255078032cd6df425dd1959ef2be91d35eb90dcd6424403996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_535022414b82ef0682a0c94cbeb4c639af09d7fd256a8e5ee9a31c2d37ad4033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535022414b82ef0682a0c94cbeb4c639af09d7fd256a8e5ee9a31c2d37ad4033->enter($__internal_535022414b82ef0682a0c94cbeb4c639af09d7fd256a8e5ee9a31c2d37ad4033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_535022414b82ef0682a0c94cbeb4c639af09d7fd256a8e5ee9a31c2d37ad4033->leave($__internal_535022414b82ef0682a0c94cbeb4c639af09d7fd256a8e5ee9a31c2d37ad4033_prof);

        
        $__internal_82bf6283f1e773255078032cd6df425dd1959ef2be91d35eb90dcd6424403996->leave($__internal_82bf6283f1e773255078032cd6df425dd1959ef2be91d35eb90dcd6424403996_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sergey/portfolio_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
