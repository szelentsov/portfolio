<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_3d480df421f8df93bfff5cd49330584ca68b7107a6b425155964caaa3ea6ad7f extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ca482b31f648228ccdcc39451db799abe9ae85d42228b27debabad85b05d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ca482b31f648228ccdcc39451db799abe9ae85d42228b27debabad85b05d0d->enter($__internal_04ca482b31f648228ccdcc39451db799abe9ae85d42228b27debabad85b05d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_af4a46cf849b1a0949d5e7324d23f08e33b19714167c1979c0938b82535160cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4a46cf849b1a0949d5e7324d23f08e33b19714167c1979c0938b82535160cb->enter($__internal_af4a46cf849b1a0949d5e7324d23f08e33b19714167c1979c0938b82535160cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ca482b31f648228ccdcc39451db799abe9ae85d42228b27debabad85b05d0d->leave($__internal_04ca482b31f648228ccdcc39451db799abe9ae85d42228b27debabad85b05d0d_prof);

        
        $__internal_af4a46cf849b1a0949d5e7324d23f08e33b19714167c1979c0938b82535160cb->leave($__internal_af4a46cf849b1a0949d5e7324d23f08e33b19714167c1979c0938b82535160cb_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_671db3bd502063f74031ea8befffd17c47718b7015e4c4031f0f60073f35df38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671db3bd502063f74031ea8befffd17c47718b7015e4c4031f0f60073f35df38->enter($__internal_671db3bd502063f74031ea8befffd17c47718b7015e4c4031f0f60073f35df38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_9e241ea24471577aff2eaa8c58468bfc937d7632d736a6d0836b16290c0f138d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e241ea24471577aff2eaa8c58468bfc937d7632d736a6d0836b16290c0f138d->enter($__internal_9e241ea24471577aff2eaa8c58468bfc937d7632d736a6d0836b16290c0f138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_9e241ea24471577aff2eaa8c58468bfc937d7632d736a6d0836b16290c0f138d->leave($__internal_9e241ea24471577aff2eaa8c58468bfc937d7632d736a6d0836b16290c0f138d_prof);

        
        $__internal_671db3bd502063f74031ea8befffd17c47718b7015e4c4031f0f60073f35df38->leave($__internal_671db3bd502063f74031ea8befffd17c47718b7015e4c4031f0f60073f35df38_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
