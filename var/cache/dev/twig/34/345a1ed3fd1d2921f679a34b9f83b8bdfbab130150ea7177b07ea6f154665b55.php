<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_46dd50140d07601a8ff8c61c8361a29ab6109bfd20379ce3c9b63199d23cd89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38858e3f11510faff80bc79a92fddab355aed26559a7e593f47caefa338bced9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38858e3f11510faff80bc79a92fddab355aed26559a7e593f47caefa338bced9->enter($__internal_38858e3f11510faff80bc79a92fddab355aed26559a7e593f47caefa338bced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_92e10275833a3e0fbb1d2b97372c708116d693df68ce3bdc5c60717158104e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e10275833a3e0fbb1d2b97372c708116d693df68ce3bdc5c60717158104e6c->enter($__internal_92e10275833a3e0fbb1d2b97372c708116d693df68ce3bdc5c60717158104e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_38858e3f11510faff80bc79a92fddab355aed26559a7e593f47caefa338bced9->leave($__internal_38858e3f11510faff80bc79a92fddab355aed26559a7e593f47caefa338bced9_prof);

        
        $__internal_92e10275833a3e0fbb1d2b97372c708116d693df68ce3bdc5c60717158104e6c->leave($__internal_92e10275833a3e0fbb1d2b97372c708116d693df68ce3bdc5c60717158104e6c_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_490b4098c68f4284dbed2ee28144b197507f1c18d4a0a8002cf9bbbee1cabbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490b4098c68f4284dbed2ee28144b197507f1c18d4a0a8002cf9bbbee1cabbcc->enter($__internal_490b4098c68f4284dbed2ee28144b197507f1c18d4a0a8002cf9bbbee1cabbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a87163abffeaed973e82ff7283ba17e9d13eb4e1fbce6bca8ab77899cbefe48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87163abffeaed973e82ff7283ba17e9d13eb4e1fbce6bca8ab77899cbefe48c->enter($__internal_a87163abffeaed973e82ff7283ba17e9d13eb4e1fbce6bca8ab77899cbefe48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_a87163abffeaed973e82ff7283ba17e9d13eb4e1fbce6bca8ab77899cbefe48c->leave($__internal_a87163abffeaed973e82ff7283ba17e9d13eb4e1fbce6bca8ab77899cbefe48c_prof);

        
        $__internal_490b4098c68f4284dbed2ee28144b197507f1c18d4a0a8002cf9bbbee1cabbcc->leave($__internal_490b4098c68f4284dbed2ee28144b197507f1c18d4a0a8002cf9bbbee1cabbcc_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f8eb9fe4e3a527c6357b85b9b5cc2ffad58cfc792f1d486c9779b4d4b5932bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8eb9fe4e3a527c6357b85b9b5cc2ffad58cfc792f1d486c9779b4d4b5932bc6->enter($__internal_f8eb9fe4e3a527c6357b85b9b5cc2ffad58cfc792f1d486c9779b4d4b5932bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_b506a57ef4989676dbb6b62a5ce08612bd97eea5e103909e71fbe499f1bf65e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b506a57ef4989676dbb6b62a5ce08612bd97eea5e103909e71fbe499f1bf65e6->enter($__internal_b506a57ef4989676dbb6b62a5ce08612bd97eea5e103909e71fbe499f1bf65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_b506a57ef4989676dbb6b62a5ce08612bd97eea5e103909e71fbe499f1bf65e6->leave($__internal_b506a57ef4989676dbb6b62a5ce08612bd97eea5e103909e71fbe499f1bf65e6_prof);

        
        $__internal_f8eb9fe4e3a527c6357b85b9b5cc2ffad58cfc792f1d486c9779b4d4b5932bc6->leave($__internal_f8eb9fe4e3a527c6357b85b9b5cc2ffad58cfc792f1d486c9779b4d4b5932bc6_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_d7cd4fe64041f5a7be9682041731ce6fb0c8249cb344a9218b95424d942e8aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cd4fe64041f5a7be9682041731ce6fb0c8249cb344a9218b95424d942e8aec->enter($__internal_d7cd4fe64041f5a7be9682041731ce6fb0c8249cb344a9218b95424d942e8aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_14c39e2f3d7da8fd419e5ea7db0538936e853ec2ea3fa787c40016439418593b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c39e2f3d7da8fd419e5ea7db0538936e853ec2ea3fa787c40016439418593b->enter($__internal_14c39e2f3d7da8fd419e5ea7db0538936e853ec2ea3fa787c40016439418593b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_14c39e2f3d7da8fd419e5ea7db0538936e853ec2ea3fa787c40016439418593b->leave($__internal_14c39e2f3d7da8fd419e5ea7db0538936e853ec2ea3fa787c40016439418593b_prof);

        
        $__internal_d7cd4fe64041f5a7be9682041731ce6fb0c8249cb344a9218b95424d942e8aec->leave($__internal_d7cd4fe64041f5a7be9682041731ce6fb0c8249cb344a9218b95424d942e8aec_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_9e61fd00e24ce7c15c88be0f82a2c0e4201f218a316385ba81e3d021420bb622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61fd00e24ce7c15c88be0f82a2c0e4201f218a316385ba81e3d021420bb622->enter($__internal_9e61fd00e24ce7c15c88be0f82a2c0e4201f218a316385ba81e3d021420bb622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_4c9fcda42bdd43bfdb99c0d489ede7f02a0044d06d83e9d576a36d7e2a43b6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9fcda42bdd43bfdb99c0d489ede7f02a0044d06d83e9d576a36d7e2a43b6fb->enter($__internal_4c9fcda42bdd43bfdb99c0d489ede7f02a0044d06d83e9d576a36d7e2a43b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_4c9fcda42bdd43bfdb99c0d489ede7f02a0044d06d83e9d576a36d7e2a43b6fb->leave($__internal_4c9fcda42bdd43bfdb99c0d489ede7f02a0044d06d83e9d576a36d7e2a43b6fb_prof);

        
        $__internal_9e61fd00e24ce7c15c88be0f82a2c0e4201f218a316385ba81e3d021420bb622->leave($__internal_9e61fd00e24ce7c15c88be0f82a2c0e4201f218a316385ba81e3d021420bb622_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_045bb8c0cfb07e0eddc2ca373a32b06c40e0acc88b4cf91f27a50b78820f6fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045bb8c0cfb07e0eddc2ca373a32b06c40e0acc88b4cf91f27a50b78820f6fc9->enter($__internal_045bb8c0cfb07e0eddc2ca373a32b06c40e0acc88b4cf91f27a50b78820f6fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_016c8b89705eec35af4127fc08bf1d0e9d5959e55de6630e59427fd1f0e4b667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016c8b89705eec35af4127fc08bf1d0e9d5959e55de6630e59427fd1f0e4b667->enter($__internal_016c8b89705eec35af4127fc08bf1d0e9d5959e55de6630e59427fd1f0e4b667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_016c8b89705eec35af4127fc08bf1d0e9d5959e55de6630e59427fd1f0e4b667->leave($__internal_016c8b89705eec35af4127fc08bf1d0e9d5959e55de6630e59427fd1f0e4b667_prof);

        
        $__internal_045bb8c0cfb07e0eddc2ca373a32b06c40e0acc88b4cf91f27a50b78820f6fc9->leave($__internal_045bb8c0cfb07e0eddc2ca373a32b06c40e0acc88b4cf91f27a50b78820f6fc9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
