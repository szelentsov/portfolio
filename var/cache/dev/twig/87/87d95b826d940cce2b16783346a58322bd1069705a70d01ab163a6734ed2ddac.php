<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_d7a769a46e9780e6280bfda66a56e0c65630f1817272854945b6b7d3e05e221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21e71af1427f3cbf0efe5a278835e4268ac30ac08b3ef5e6d48f7a889b45a486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e71af1427f3cbf0efe5a278835e4268ac30ac08b3ef5e6d48f7a889b45a486->enter($__internal_21e71af1427f3cbf0efe5a278835e4268ac30ac08b3ef5e6d48f7a889b45a486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_90fc287cb0e1f584344a99e4cb28e693f47a22076e99272105c94b0d19638cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fc287cb0e1f584344a99e4cb28e693f47a22076e99272105c94b0d19638cb1->enter($__internal_90fc287cb0e1f584344a99e4cb28e693f47a22076e99272105c94b0d19638cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e71af1427f3cbf0efe5a278835e4268ac30ac08b3ef5e6d48f7a889b45a486->leave($__internal_21e71af1427f3cbf0efe5a278835e4268ac30ac08b3ef5e6d48f7a889b45a486_prof);

        
        $__internal_90fc287cb0e1f584344a99e4cb28e693f47a22076e99272105c94b0d19638cb1->leave($__internal_90fc287cb0e1f584344a99e4cb28e693f47a22076e99272105c94b0d19638cb1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_537ad4e1c14d6504b05222a15688e6033e546c78cf18a563cf5e0debeafa7252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537ad4e1c14d6504b05222a15688e6033e546c78cf18a563cf5e0debeafa7252->enter($__internal_537ad4e1c14d6504b05222a15688e6033e546c78cf18a563cf5e0debeafa7252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1c3acbd2427068461d81bfcd5385c7d74c386fd8e5dc001fbdfcb99188391a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3acbd2427068461d81bfcd5385c7d74c386fd8e5dc001fbdfcb99188391a9e->enter($__internal_1c3acbd2427068461d81bfcd5385c7d74c386fd8e5dc001fbdfcb99188391a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_1c3acbd2427068461d81bfcd5385c7d74c386fd8e5dc001fbdfcb99188391a9e->leave($__internal_1c3acbd2427068461d81bfcd5385c7d74c386fd8e5dc001fbdfcb99188391a9e_prof);

        
        $__internal_537ad4e1c14d6504b05222a15688e6033e546c78cf18a563cf5e0debeafa7252->leave($__internal_537ad4e1c14d6504b05222a15688e6033e546c78cf18a563cf5e0debeafa7252_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
