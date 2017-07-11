<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c9a19b50db702bf3c5c30fe24bf3c6be8cc3c27a1eb7c324a8d3a5162bf7eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9a19b50db702bf3c5c30fe24bf3c6be8cc3c27a1eb7c324a8d3a5162bf7eae->enter($__internal_9c9a19b50db702bf3c5c30fe24bf3c6be8cc3c27a1eb7c324a8d3a5162bf7eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bc4fe0f74e85c0c48c2b3b39530751a31632f0693a96d013ab61798c3e7b1c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4fe0f74e85c0c48c2b3b39530751a31632f0693a96d013ab61798c3e7b1c51->enter($__internal_bc4fe0f74e85c0c48c2b3b39530751a31632f0693a96d013ab61798c3e7b1c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9c9a19b50db702bf3c5c30fe24bf3c6be8cc3c27a1eb7c324a8d3a5162bf7eae->leave($__internal_9c9a19b50db702bf3c5c30fe24bf3c6be8cc3c27a1eb7c324a8d3a5162bf7eae_prof);

        
        $__internal_bc4fe0f74e85c0c48c2b3b39530751a31632f0693a96d013ab61798c3e7b1c51->leave($__internal_bc4fe0f74e85c0c48c2b3b39530751a31632f0693a96d013ab61798c3e7b1c51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14fb6c4ca5535c4f8dbc5d08bf60f17ef4d9422928b72e3e69bb4995b7286a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14fb6c4ca5535c4f8dbc5d08bf60f17ef4d9422928b72e3e69bb4995b7286a1->enter($__internal_c14fb6c4ca5535c4f8dbc5d08bf60f17ef4d9422928b72e3e69bb4995b7286a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd899e1c02ae56e833f1a3e5b986a35126034950bd0d3cad6f5db4ba001a30de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd899e1c02ae56e833f1a3e5b986a35126034950bd0d3cad6f5db4ba001a30de->enter($__internal_dd899e1c02ae56e833f1a3e5b986a35126034950bd0d3cad6f5db4ba001a30de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd899e1c02ae56e833f1a3e5b986a35126034950bd0d3cad6f5db4ba001a30de->leave($__internal_dd899e1c02ae56e833f1a3e5b986a35126034950bd0d3cad6f5db4ba001a30de_prof);

        
        $__internal_c14fb6c4ca5535c4f8dbc5d08bf60f17ef4d9422928b72e3e69bb4995b7286a1->leave($__internal_c14fb6c4ca5535c4f8dbc5d08bf60f17ef4d9422928b72e3e69bb4995b7286a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e75f5a5cf02ca8592f6d053d749d5d12155bede161807f687d1bec8adc095afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75f5a5cf02ca8592f6d053d749d5d12155bede161807f687d1bec8adc095afb->enter($__internal_e75f5a5cf02ca8592f6d053d749d5d12155bede161807f687d1bec8adc095afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d0e24eb4aaa0835b004fc245f316808648dcc30f3c65c72777710f2948be0780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e24eb4aaa0835b004fc245f316808648dcc30f3c65c72777710f2948be0780->enter($__internal_d0e24eb4aaa0835b004fc245f316808648dcc30f3c65c72777710f2948be0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0e24eb4aaa0835b004fc245f316808648dcc30f3c65c72777710f2948be0780->leave($__internal_d0e24eb4aaa0835b004fc245f316808648dcc30f3c65c72777710f2948be0780_prof);

        
        $__internal_e75f5a5cf02ca8592f6d053d749d5d12155bede161807f687d1bec8adc095afb->leave($__internal_e75f5a5cf02ca8592f6d053d749d5d12155bede161807f687d1bec8adc095afb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a600ba53e3bdb3aa8194c38e6cfc98d49737c4d1723a1f734e34a4520b9e5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a600ba53e3bdb3aa8194c38e6cfc98d49737c4d1723a1f734e34a4520b9e5c2->enter($__internal_2a600ba53e3bdb3aa8194c38e6cfc98d49737c4d1723a1f734e34a4520b9e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e485d034fd34d7bda03b20e370dfc1fb280f19622033c6763397edbefbf412d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e485d034fd34d7bda03b20e370dfc1fb280f19622033c6763397edbefbf412d3->enter($__internal_e485d034fd34d7bda03b20e370dfc1fb280f19622033c6763397edbefbf412d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e485d034fd34d7bda03b20e370dfc1fb280f19622033c6763397edbefbf412d3->leave($__internal_e485d034fd34d7bda03b20e370dfc1fb280f19622033c6763397edbefbf412d3_prof);

        
        $__internal_2a600ba53e3bdb3aa8194c38e6cfc98d49737c4d1723a1f734e34a4520b9e5c2->leave($__internal_2a600ba53e3bdb3aa8194c38e6cfc98d49737c4d1723a1f734e34a4520b9e5c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86c3c15cea3efa55a80a54ca7b00b01105f14b0f6df60a11c0657c60c92377d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c3c15cea3efa55a80a54ca7b00b01105f14b0f6df60a11c0657c60c92377d7->enter($__internal_86c3c15cea3efa55a80a54ca7b00b01105f14b0f6df60a11c0657c60c92377d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_771e8533a4954df65fd9f359f7ae6e710678dfc2a73547bd0d83aefe677da4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771e8533a4954df65fd9f359f7ae6e710678dfc2a73547bd0d83aefe677da4d1->enter($__internal_771e8533a4954df65fd9f359f7ae6e710678dfc2a73547bd0d83aefe677da4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_771e8533a4954df65fd9f359f7ae6e710678dfc2a73547bd0d83aefe677da4d1->leave($__internal_771e8533a4954df65fd9f359f7ae6e710678dfc2a73547bd0d83aefe677da4d1_prof);

        
        $__internal_86c3c15cea3efa55a80a54ca7b00b01105f14b0f6df60a11c0657c60c92377d7->leave($__internal_86c3c15cea3efa55a80a54ca7b00b01105f14b0f6df60a11c0657c60c92377d7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/sergey/zsv/app/Resources/views/base.html.twig");
    }
}
