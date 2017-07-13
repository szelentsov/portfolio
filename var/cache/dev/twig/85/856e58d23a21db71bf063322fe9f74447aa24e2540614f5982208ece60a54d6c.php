<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_f674261723ebcc1ea54798f3b0c87cb87b7fb40ab6e6f47650e2ed33b55d2286 extends Twig_Template
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
        $__internal_2e4fd1b3afbe8fc5fe02b99222fb88dd5d7bb2d178bb51d8692634c21d030de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4fd1b3afbe8fc5fe02b99222fb88dd5d7bb2d178bb51d8692634c21d030de3->enter($__internal_2e4fd1b3afbe8fc5fe02b99222fb88dd5d7bb2d178bb51d8692634c21d030de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        $__internal_191ab04663b8765f1cfa89a9a0aeab3087f89a14e0703145a947d1a6c554c084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191ab04663b8765f1cfa89a9a0aeab3087f89a14e0703145a947d1a6c554c084->enter($__internal_191ab04663b8765f1cfa89a9a0aeab3087f89a14e0703145a947d1a6c554c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_2e4fd1b3afbe8fc5fe02b99222fb88dd5d7bb2d178bb51d8692634c21d030de3->leave($__internal_2e4fd1b3afbe8fc5fe02b99222fb88dd5d7bb2d178bb51d8692634c21d030de3_prof);

        
        $__internal_191ab04663b8765f1cfa89a9a0aeab3087f89a14e0703145a947d1a6c554c084->leave($__internal_191ab04663b8765f1cfa89a9a0aeab3087f89a14e0703145a947d1a6c554c084_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:history_button.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
