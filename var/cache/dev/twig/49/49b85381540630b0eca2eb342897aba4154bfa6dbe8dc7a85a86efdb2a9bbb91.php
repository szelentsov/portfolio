<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_afe8570b8b786b1f70d367dc30daca76bd4cad21cd099f339cdb6225a3bc03c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14ae210ea2cd83e94f4619cd87bca0e4ca196bc28cc7342a5471a665b473427f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ae210ea2cd83e94f4619cd87bca0e4ca196bc28cc7342a5471a665b473427f->enter($__internal_14ae210ea2cd83e94f4619cd87bca0e4ca196bc28cc7342a5471a665b473427f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_28bd64882db07dd907c4a7a0c0aed396bd823b4f90c8bc5ba991af35ebe3ed64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bd64882db07dd907c4a7a0c0aed396bd823b4f90c8bc5ba991af35ebe3ed64->enter($__internal_28bd64882db07dd907c4a7a0c0aed396bd823b4f90c8bc5ba991af35ebe3ed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14ae210ea2cd83e94f4619cd87bca0e4ca196bc28cc7342a5471a665b473427f->leave($__internal_14ae210ea2cd83e94f4619cd87bca0e4ca196bc28cc7342a5471a665b473427f_prof);

        
        $__internal_28bd64882db07dd907c4a7a0c0aed396bd823b4f90c8bc5ba991af35ebe3ed64->leave($__internal_28bd64882db07dd907c4a7a0c0aed396bd823b4f90c8bc5ba991af35ebe3ed64_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_978f5425a6ded6948c1c98f330cd6908bb92ee60620e44cacd857aa6eb0710e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978f5425a6ded6948c1c98f330cd6908bb92ee60620e44cacd857aa6eb0710e6->enter($__internal_978f5425a6ded6948c1c98f330cd6908bb92ee60620e44cacd857aa6eb0710e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_11623b83da860451e1cfe8231d49a55243adf6dde471878cc94e74582457ff74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11623b83da860451e1cfe8231d49a55243adf6dde471878cc94e74582457ff74->enter($__internal_11623b83da860451e1cfe8231d49a55243adf6dde471878cc94e74582457ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_11623b83da860451e1cfe8231d49a55243adf6dde471878cc94e74582457ff74->leave($__internal_11623b83da860451e1cfe8231d49a55243adf6dde471878cc94e74582457ff74_prof);

        
        $__internal_978f5425a6ded6948c1c98f330cd6908bb92ee60620e44cacd857aa6eb0710e6->leave($__internal_978f5425a6ded6948c1c98f330cd6908bb92ee60620e44cacd857aa6eb0710e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
