<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_61606451035d5a54cdf70895af5cae0d623d51009f5743dfac2d1fa619a7ff54 extends Twig_Template
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
        $__internal_5b42f7afc5c57b6816386a77b5d3520da38bfa3b81f5d82aae80fe6e45bd7fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b42f7afc5c57b6816386a77b5d3520da38bfa3b81f5d82aae80fe6e45bd7fbb->enter($__internal_5b42f7afc5c57b6816386a77b5d3520da38bfa3b81f5d82aae80fe6e45bd7fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        $__internal_dd4929a77a8bcc3445249e57a9c40feeff4d6b5c0993180cd30e4c4f5dc81117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4929a77a8bcc3445249e57a9c40feeff4d6b5c0993180cd30e4c4f5dc81117->enter($__internal_dd4929a77a8bcc3445249e57a9c40feeff4d6b5c0993180cd30e4c4f5dc81117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        // line 11
        if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array())) > 0)) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_5b42f7afc5c57b6816386a77b5d3520da38bfa3b81f5d82aae80fe6e45bd7fbb->leave($__internal_5b42f7afc5c57b6816386a77b5d3520da38bfa3b81f5d82aae80fe6e45bd7fbb_prof);

        
        $__internal_dd4929a77a8bcc3445249e57a9c40feeff4d6b5c0993180cd30e4c4f5dc81117->leave($__internal_dd4929a77a8bcc3445249e57a9c40feeff4d6b5c0993180cd30e4c4f5dc81117_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  30 => 13,  27 => 12,  25 => 11,);
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
{% if admin.canAccessObject('show', object) and admin.show|length > 0 and admin.hasRoute('show') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('show', object) }}\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:show_button.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Button/show_button.html.twig");
    }
}
