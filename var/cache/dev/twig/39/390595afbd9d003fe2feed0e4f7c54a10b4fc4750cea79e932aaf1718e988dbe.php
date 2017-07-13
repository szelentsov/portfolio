<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_073aa8b0f017564e8155c1243e6fc36e042877f16e8059fe9c73c83842901a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1be45353c07d120c49937825891c30a3788b36bb57b257d321707e3c2684c012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be45353c07d120c49937825891c30a3788b36bb57b257d321707e3c2684c012->enter($__internal_1be45353c07d120c49937825891c30a3788b36bb57b257d321707e3c2684c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_0cc9f32dd4e5eef71011336ce21ab22d8536a57e097fa31134ed5af62065a796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc9f32dd4e5eef71011336ce21ab22d8536a57e097fa31134ed5af62065a796->enter($__internal_0cc9f32dd4e5eef71011336ce21ab22d8536a57e097fa31134ed5af62065a796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be45353c07d120c49937825891c30a3788b36bb57b257d321707e3c2684c012->leave($__internal_1be45353c07d120c49937825891c30a3788b36bb57b257d321707e3c2684c012_prof);

        
        $__internal_0cc9f32dd4e5eef71011336ce21ab22d8536a57e097fa31134ed5af62065a796->leave($__internal_0cc9f32dd4e5eef71011336ce21ab22d8536a57e097fa31134ed5af62065a796_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_674ac918d08e173c245a8a04be2325f52f278b4f90e656952b9def9c687a1734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674ac918d08e173c245a8a04be2325f52f278b4f90e656952b9def9c687a1734->enter($__internal_674ac918d08e173c245a8a04be2325f52f278b4f90e656952b9def9c687a1734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_d951947f29768aa7acf1b6d3271477e4eeda0afe040d2a711a3b73c093c96742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d951947f29768aa7acf1b6d3271477e4eeda0afe040d2a711a3b73c093c96742->enter($__internal_d951947f29768aa7acf1b6d3271477e4eeda0afe040d2a711a3b73c093c96742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d951947f29768aa7acf1b6d3271477e4eeda0afe040d2a711a3b73c093c96742->leave($__internal_d951947f29768aa7acf1b6d3271477e4eeda0afe040d2a711a3b73c093c96742_prof);

        
        $__internal_674ac918d08e173c245a8a04be2325f52f278b4f90e656952b9def9c687a1734->leave($__internal_674ac918d08e173c245a8a04be2325f52f278b4f90e656952b9def9c687a1734_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_00bceedf7c82b1535c38f07e8808ec55154fd6ac61d38aa940b47a9b38b5f94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bceedf7c82b1535c38f07e8808ec55154fd6ac61d38aa940b47a9b38b5f94a->enter($__internal_00bceedf7c82b1535c38f07e8808ec55154fd6ac61d38aa940b47a9b38b5f94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_fa38c839206bf751cf7ae842475e24c5bef84a3b0ffd4561320476ac3668c078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa38c839206bf751cf7ae842475e24c5bef84a3b0ffd4561320476ac3668c078->enter($__internal_fa38c839206bf751cf7ae842475e24c5bef84a3b0ffd4561320476ac3668c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_fa38c839206bf751cf7ae842475e24c5bef84a3b0ffd4561320476ac3668c078->leave($__internal_fa38c839206bf751cf7ae842475e24c5bef84a3b0ffd4561320476ac3668c078_prof);

        
        $__internal_00bceedf7c82b1535c38f07e8808ec55154fd6ac61d38aa940b47a9b38b5f94a->leave($__internal_00bceedf7c82b1535c38f07e8808ec55154fd6ac61d38aa940b47a9b38b5f94a_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_71182187b6c182bc4b6f5eb66fbfe3ccd0a877325ae86c0d89c9a9cc470d7d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71182187b6c182bc4b6f5eb66fbfe3ccd0a877325ae86c0d89c9a9cc470d7d36->enter($__internal_71182187b6c182bc4b6f5eb66fbfe3ccd0a877325ae86c0d89c9a9cc470d7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_cf183c3a43162866f577a89d01703acead652658c489e867ce550ae6a0e4fb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf183c3a43162866f577a89d01703acead652658c489e867ce550ae6a0e4fb4f->enter($__internal_cf183c3a43162866f577a89d01703acead652658c489e867ce550ae6a0e4fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_cf183c3a43162866f577a89d01703acead652658c489e867ce550ae6a0e4fb4f->leave($__internal_cf183c3a43162866f577a89d01703acead652658c489e867ce550ae6a0e4fb4f_prof);

        
        $__internal_71182187b6c182bc4b6f5eb66fbfe3ccd0a877325ae86c0d89c9a9cc470d7d36->leave($__internal_71182187b6c182bc4b6f5eb66fbfe3ccd0a877325ae86c0d89c9a9cc470d7d36_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_29eef9e3b0cf4cad58a22b672bdcaea592fd17da9c3bcae582798e25517f6aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29eef9e3b0cf4cad58a22b672bdcaea592fd17da9c3bcae582798e25517f6aeb->enter($__internal_29eef9e3b0cf4cad58a22b672bdcaea592fd17da9c3bcae582798e25517f6aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_64c9269cb00eadcbd4d67638a70968c5a4d2d4b41f946eca4b25eb75f21341a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c9269cb00eadcbd4d67638a70968c5a4d2d4b41f946eca4b25eb75f21341a2->enter($__internal_64c9269cb00eadcbd4d67638a70968c5a4d2d4b41f946eca4b25eb75f21341a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_64c9269cb00eadcbd4d67638a70968c5a4d2d4b41f946eca4b25eb75f21341a2->leave($__internal_64c9269cb00eadcbd4d67638a70968c5a4d2d4b41f946eca4b25eb75f21341a2_prof);

        
        $__internal_29eef9e3b0cf4cad58a22b672bdcaea592fd17da9c3bcae582798e25517f6aeb->leave($__internal_29eef9e3b0cf4cad58a22b672bdcaea592fd17da9c3bcae582798e25517f6aeb_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f17211c2f898a312e8d478e92f4aa9b12f2cbc46c951a6c44b2c4a9efde71ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17211c2f898a312e8d478e92f4aa9b12f2cbc46c951a6c44b2c4a9efde71ff9->enter($__internal_f17211c2f898a312e8d478e92f4aa9b12f2cbc46c951a6c44b2c4a9efde71ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06893789853c9605ab10208695859688f37c8bcbce03214830c7bb4b50c07073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06893789853c9605ab10208695859688f37c8bcbce03214830c7bb4b50c07073->enter($__internal_06893789853c9605ab10208695859688f37c8bcbce03214830c7bb4b50c07073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_06893789853c9605ab10208695859688f37c8bcbce03214830c7bb4b50c07073->leave($__internal_06893789853c9605ab10208695859688f37c8bcbce03214830c7bb4b50c07073_prof);

        
        $__internal_f17211c2f898a312e8d478e92f4aa9b12f2cbc46c951a6c44b2c4a9efde71ff9->leave($__internal_f17211c2f898a312e8d478e92f4aa9b12f2cbc46c951a6c44b2c4a9efde71ff9_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2e52e55b28c0205421e671f8b4752e23534849007f0062ee019679e0e2746fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e52e55b28c0205421e671f8b4752e23534849007f0062ee019679e0e2746fca->enter($__internal_2e52e55b28c0205421e671f8b4752e23534849007f0062ee019679e0e2746fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_38eca9228aec8fe73b51e1172246ec750bad00ced1d6cbaa7816475fe704ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38eca9228aec8fe73b51e1172246ec750bad00ced1d6cbaa7816475fe704ab2c->enter($__internal_38eca9228aec8fe73b51e1172246ec750bad00ced1d6cbaa7816475fe704ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_38eca9228aec8fe73b51e1172246ec750bad00ced1d6cbaa7816475fe704ab2c->leave($__internal_38eca9228aec8fe73b51e1172246ec750bad00ced1d6cbaa7816475fe704ab2c_prof);

        
        $__internal_2e52e55b28c0205421e671f8b4752e23534849007f0062ee019679e0e2746fca->leave($__internal_2e52e55b28c0205421e671f8b4752e23534849007f0062ee019679e0e2746fca_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_fa8c4bb80e5d23b4aed70b9b2782291e81f01e86ee3acfd37bcc641142ec9f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8c4bb80e5d23b4aed70b9b2782291e81f01e86ee3acfd37bcc641142ec9f43->enter($__internal_fa8c4bb80e5d23b4aed70b9b2782291e81f01e86ee3acfd37bcc641142ec9f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_bcf964f8e12f191f9a99b69cc5d68e02e87a369037f58a73026c5e7d3a127f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf964f8e12f191f9a99b69cc5d68e02e87a369037f58a73026c5e7d3a127f2a->enter($__internal_bcf964f8e12f191f9a99b69cc5d68e02e87a369037f58a73026c5e7d3a127f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_bcf964f8e12f191f9a99b69cc5d68e02e87a369037f58a73026c5e7d3a127f2a->leave($__internal_bcf964f8e12f191f9a99b69cc5d68e02e87a369037f58a73026c5e7d3a127f2a_prof);

        
        $__internal_fa8c4bb80e5d23b4aed70b9b2782291e81f01e86ee3acfd37bcc641142ec9f43->leave($__internal_fa8c4bb80e5d23b4aed70b9b2782291e81f01e86ee3acfd37bcc641142ec9f43_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
