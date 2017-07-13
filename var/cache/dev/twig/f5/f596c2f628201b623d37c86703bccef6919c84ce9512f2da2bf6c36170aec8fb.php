<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_c1875c8bedf30ab4750a26f84a5c962f76307aed633860dec087d986d9b4b7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6aa210305629157c8a94247856fdd5d544aaab68192a48e45508d01a355230c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6aa210305629157c8a94247856fdd5d544aaab68192a48e45508d01a355230c->enter($__internal_e6aa210305629157c8a94247856fdd5d544aaab68192a48e45508d01a355230c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_1fc0675472555f1211d801dcf5376f2f127dc3b4e5c581227712c63b47ce5e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc0675472555f1211d801dcf5376f2f127dc3b4e5c581227712c63b47ce5e0c->enter($__internal_1fc0675472555f1211d801dcf5376f2f127dc3b4e5c581227712c63b47ce5e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_e6aa210305629157c8a94247856fdd5d544aaab68192a48e45508d01a355230c->leave($__internal_e6aa210305629157c8a94247856fdd5d544aaab68192a48e45508d01a355230c_prof);

        
        $__internal_1fc0675472555f1211d801dcf5376f2f127dc3b4e5c581227712c63b47ce5e0c->leave($__internal_1fc0675472555f1211d801dcf5376f2f127dc3b4e5c581227712c63b47ce5e0c_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_27e258183dee369ce53723b6d7e1dc408a5213eb2fba3b432dd15dadb3d41b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e258183dee369ce53723b6d7e1dc408a5213eb2fba3b432dd15dadb3d41b19->enter($__internal_27e258183dee369ce53723b6d7e1dc408a5213eb2fba3b432dd15dadb3d41b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_3fc75bbddea68d8097747ae5634a182b9fbebf5b7d688322dcd903b5d09dfaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc75bbddea68d8097747ae5634a182b9fbebf5b7d688322dcd903b5d09dfaf7->enter($__internal_3fc75bbddea68d8097747ae5634a182b9fbebf5b7d688322dcd903b5d09dfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3fc75bbddea68d8097747ae5634a182b9fbebf5b7d688322dcd903b5d09dfaf7->leave($__internal_3fc75bbddea68d8097747ae5634a182b9fbebf5b7d688322dcd903b5d09dfaf7_prof);

        
        $__internal_27e258183dee369ce53723b6d7e1dc408a5213eb2fba3b432dd15dadb3d41b19->leave($__internal_27e258183dee369ce53723b6d7e1dc408a5213eb2fba3b432dd15dadb3d41b19_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
