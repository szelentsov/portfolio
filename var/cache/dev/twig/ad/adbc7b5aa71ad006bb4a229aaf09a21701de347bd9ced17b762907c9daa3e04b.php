<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_6d96eb76fdc2682f9bf6d3133cd3ef3b124585008b83c5af0d0323a928a869d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2ae30be187bd1676ed2b090f43a9792c259caffab1f13105b728acb53cd3e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ae30be187bd1676ed2b090f43a9792c259caffab1f13105b728acb53cd3e3e->enter($__internal_a2ae30be187bd1676ed2b090f43a9792c259caffab1f13105b728acb53cd3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_e48e6b8682fdad54dee69a23c4539c0a3021637ed69a9d8c3f17f149eb866300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48e6b8682fdad54dee69a23c4539c0a3021637ed69a9d8c3f17f149eb866300->enter($__internal_e48e6b8682fdad54dee69a23c4539c0a3021637ed69a9d8c3f17f149eb866300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2ae30be187bd1676ed2b090f43a9792c259caffab1f13105b728acb53cd3e3e->leave($__internal_a2ae30be187bd1676ed2b090f43a9792c259caffab1f13105b728acb53cd3e3e_prof);

        
        $__internal_e48e6b8682fdad54dee69a23c4539c0a3021637ed69a9d8c3f17f149eb866300->leave($__internal_e48e6b8682fdad54dee69a23c4539c0a3021637ed69a9d8c3f17f149eb866300_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_4c56be6132a04b3671fd8fb29bd782658ec4ccba1d6bef5e3b16b574a17706e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c56be6132a04b3671fd8fb29bd782658ec4ccba1d6bef5e3b16b574a17706e8->enter($__internal_4c56be6132a04b3671fd8fb29bd782658ec4ccba1d6bef5e3b16b574a17706e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_4b20c9bcd6579843ffaa755c157735b01943522ccb0620ddf1c756b8eb91ccb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b20c9bcd6579843ffaa755c157735b01943522ccb0620ddf1c756b8eb91ccb0->enter($__internal_4b20c9bcd6579843ffaa755c157735b01943522ccb0620ddf1c756b8eb91ccb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_4b20c9bcd6579843ffaa755c157735b01943522ccb0620ddf1c756b8eb91ccb0->leave($__internal_4b20c9bcd6579843ffaa755c157735b01943522ccb0620ddf1c756b8eb91ccb0_prof);

        
        $__internal_4c56be6132a04b3671fd8fb29bd782658ec4ccba1d6bef5e3b16b574a17706e8->leave($__internal_4c56be6132a04b3671fd8fb29bd782658ec4ccba1d6bef5e3b16b574a17706e8_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_81306683c9ccda5b862cc6262936258ca547ba3d0a7e85b81775ada48d0656cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81306683c9ccda5b862cc6262936258ca547ba3d0a7e85b81775ada48d0656cf->enter($__internal_81306683c9ccda5b862cc6262936258ca547ba3d0a7e85b81775ada48d0656cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_e0492124b480ddcf9e3fcb1f8863f5321ddbb52e9f8f9e40a3b1d62300a96cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0492124b480ddcf9e3fcb1f8863f5321ddbb52e9f8f9e40a3b1d62300a96cc8->enter($__internal_e0492124b480ddcf9e3fcb1f8863f5321ddbb52e9f8f9e40a3b1d62300a96cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_e0492124b480ddcf9e3fcb1f8863f5321ddbb52e9f8f9e40a3b1d62300a96cc8->leave($__internal_e0492124b480ddcf9e3fcb1f8863f5321ddbb52e9f8f9e40a3b1d62300a96cc8_prof);

        
        $__internal_81306683c9ccda5b862cc6262936258ca547ba3d0a7e85b81775ada48d0656cf->leave($__internal_81306683c9ccda5b862cc6262936258ca547ba3d0a7e85b81775ada48d0656cf_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_1ea04e5bdf277f48863a2e400e3fc1e7cda20120f19a48a378b1e63469d2a9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea04e5bdf277f48863a2e400e3fc1e7cda20120f19a48a378b1e63469d2a9e7->enter($__internal_1ea04e5bdf277f48863a2e400e3fc1e7cda20120f19a48a378b1e63469d2a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2a8c0284fa2cc4ac73e6e686a598e75cb3449094b57617f0bbf33c5a040f56c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8c0284fa2cc4ac73e6e686a598e75cb3449094b57617f0bbf33c5a040f56c8->enter($__internal_2a8c0284fa2cc4ac73e6e686a598e75cb3449094b57617f0bbf33c5a040f56c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_2a8c0284fa2cc4ac73e6e686a598e75cb3449094b57617f0bbf33c5a040f56c8->leave($__internal_2a8c0284fa2cc4ac73e6e686a598e75cb3449094b57617f0bbf33c5a040f56c8_prof);

        
        $__internal_1ea04e5bdf277f48863a2e400e3fc1e7cda20120f19a48a378b1e63469d2a9e7->leave($__internal_1ea04e5bdf277f48863a2e400e3fc1e7cda20120f19a48a378b1e63469d2a9e7_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_c1d9eafe17061469c131b4a2215e825335dfadbbd7cef246a460b81e4160a995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d9eafe17061469c131b4a2215e825335dfadbbd7cef246a460b81e4160a995->enter($__internal_c1d9eafe17061469c131b4a2215e825335dfadbbd7cef246a460b81e4160a995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_51463869d8df85a0d6f7544bfd8a5c91013139e0bd00587e2d352b6bd1770a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51463869d8df85a0d6f7544bfd8a5c91013139e0bd00587e2d352b6bd1770a04->enter($__internal_51463869d8df85a0d6f7544bfd8a5c91013139e0bd00587e2d352b6bd1770a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_51463869d8df85a0d6f7544bfd8a5c91013139e0bd00587e2d352b6bd1770a04->leave($__internal_51463869d8df85a0d6f7544bfd8a5c91013139e0bd00587e2d352b6bd1770a04_prof);

        
        $__internal_c1d9eafe17061469c131b4a2215e825335dfadbbd7cef246a460b81e4160a995->leave($__internal_c1d9eafe17061469c131b4a2215e825335dfadbbd7cef246a460b81e4160a995_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
