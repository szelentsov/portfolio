<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_519d7677d5de4e8f14d1eaf2fcf3a996d01bc87591d8d8d45483bc5f2794ae67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61c3b3bfbed29beecfd3179c335d5dfc685781857a2e6cfffc7a869427437753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c3b3bfbed29beecfd3179c335d5dfc685781857a2e6cfffc7a869427437753->enter($__internal_61c3b3bfbed29beecfd3179c335d5dfc685781857a2e6cfffc7a869427437753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_47adb590c3791e72f9ed76420ca2f0636280e43cd841b320bf3b63b452d1defe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47adb590c3791e72f9ed76420ca2f0636280e43cd841b320bf3b63b452d1defe->enter($__internal_47adb590c3791e72f9ed76420ca2f0636280e43cd841b320bf3b63b452d1defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_61c3b3bfbed29beecfd3179c335d5dfc685781857a2e6cfffc7a869427437753->leave($__internal_61c3b3bfbed29beecfd3179c335d5dfc685781857a2e6cfffc7a869427437753_prof);

        
        $__internal_47adb590c3791e72f9ed76420ca2f0636280e43cd841b320bf3b63b452d1defe->leave($__internal_47adb590c3791e72f9ed76420ca2f0636280e43cd841b320bf3b63b452d1defe_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_ca307d67dff82710e29212a75fbff0e8f8b19148b605706f58b732c7f1877f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca307d67dff82710e29212a75fbff0e8f8b19148b605706f58b732c7f1877f06->enter($__internal_ca307d67dff82710e29212a75fbff0e8f8b19148b605706f58b732c7f1877f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_3a1c338c8c12f750b5d1a066aba403efb29f9cc90baabab16627c93d09e40f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1c338c8c12f750b5d1a066aba403efb29f9cc90baabab16627c93d09e40f1e->enter($__internal_3a1c338c8c12f750b5d1a066aba403efb29f9cc90baabab16627c93d09e40f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_3a1c338c8c12f750b5d1a066aba403efb29f9cc90baabab16627c93d09e40f1e->leave($__internal_3a1c338c8c12f750b5d1a066aba403efb29f9cc90baabab16627c93d09e40f1e_prof);

        
        $__internal_ca307d67dff82710e29212a75fbff0e8f8b19148b605706f58b732c7f1877f06->leave($__internal_ca307d67dff82710e29212a75fbff0e8f8b19148b605706f58b732c7f1877f06_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_4431a21df303fa35892b0b2e354c9979ad360870cc1c1f73c6bfd17a497d93fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4431a21df303fa35892b0b2e354c9979ad360870cc1c1f73c6bfd17a497d93fe->enter($__internal_4431a21df303fa35892b0b2e354c9979ad360870cc1c1f73c6bfd17a497d93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_3203aef8dc72b2e1d50328a689bb7dace01f261b53bbc9fc976c310d8e6db747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3203aef8dc72b2e1d50328a689bb7dace01f261b53bbc9fc976c310d8e6db747->enter($__internal_3203aef8dc72b2e1d50328a689bb7dace01f261b53bbc9fc976c310d8e6db747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_3203aef8dc72b2e1d50328a689bb7dace01f261b53bbc9fc976c310d8e6db747->leave($__internal_3203aef8dc72b2e1d50328a689bb7dace01f261b53bbc9fc976c310d8e6db747_prof);

        
        $__internal_4431a21df303fa35892b0b2e354c9979ad360870cc1c1f73c6bfd17a497d93fe->leave($__internal_4431a21df303fa35892b0b2e354c9979ad360870cc1c1f73c6bfd17a497d93fe_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67d0c49512a88986da9f423de71f85a15b8fb1c687ac1c4ef9a35df415673cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d0c49512a88986da9f423de71f85a15b8fb1c687ac1c4ef9a35df415673cb2->enter($__internal_67d0c49512a88986da9f423de71f85a15b8fb1c687ac1c4ef9a35df415673cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_56ecd69e51022af2be47c15c390b0b5905afcac9230bddb3d810f2f3630f3b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ecd69e51022af2be47c15c390b0b5905afcac9230bddb3d810f2f3630f3b4a->enter($__internal_56ecd69e51022af2be47c15c390b0b5905afcac9230bddb3d810f2f3630f3b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_56ecd69e51022af2be47c15c390b0b5905afcac9230bddb3d810f2f3630f3b4a->leave($__internal_56ecd69e51022af2be47c15c390b0b5905afcac9230bddb3d810f2f3630f3b4a_prof);

        
        $__internal_67d0c49512a88986da9f423de71f85a15b8fb1c687ac1c4ef9a35df415673cb2->leave($__internal_67d0c49512a88986da9f423de71f85a15b8fb1c687ac1c4ef9a35df415673cb2_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65e188ffc14b23ad42d128f6211297e1df25557511478775dfbcafb91fdc8aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e188ffc14b23ad42d128f6211297e1df25557511478775dfbcafb91fdc8aac->enter($__internal_65e188ffc14b23ad42d128f6211297e1df25557511478775dfbcafb91fdc8aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7066558ef0ebc3dbb5ea8b1288279fe329fa923649a634711ec40e901a9844e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7066558ef0ebc3dbb5ea8b1288279fe329fa923649a634711ec40e901a9844e->enter($__internal_a7066558ef0ebc3dbb5ea8b1288279fe329fa923649a634711ec40e901a9844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_a7066558ef0ebc3dbb5ea8b1288279fe329fa923649a634711ec40e901a9844e->leave($__internal_a7066558ef0ebc3dbb5ea8b1288279fe329fa923649a634711ec40e901a9844e_prof);

        
        $__internal_65e188ffc14b23ad42d128f6211297e1df25557511478775dfbcafb91fdc8aac->leave($__internal_65e188ffc14b23ad42d128f6211297e1df25557511478775dfbcafb91fdc8aac_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_728eb090ed8c57ae145375782648aacceb2d15c6644a8b4a5bd4273755daf869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728eb090ed8c57ae145375782648aacceb2d15c6644a8b4a5bd4273755daf869->enter($__internal_728eb090ed8c57ae145375782648aacceb2d15c6644a8b4a5bd4273755daf869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_14a790b412483a051382383fb5f9c73d097433498ac7ddae12860816485dfa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a790b412483a051382383fb5f9c73d097433498ac7ddae12860816485dfa58->enter($__internal_14a790b412483a051382383fb5f9c73d097433498ac7ddae12860816485dfa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_14a790b412483a051382383fb5f9c73d097433498ac7ddae12860816485dfa58->leave($__internal_14a790b412483a051382383fb5f9c73d097433498ac7ddae12860816485dfa58_prof);

        
        $__internal_728eb090ed8c57ae145375782648aacceb2d15c6644a8b4a5bd4273755daf869->leave($__internal_728eb090ed8c57ae145375782648aacceb2d15c6644a8b4a5bd4273755daf869_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_71a94f7a90823311cb841d74e43aed27aee5d05cc2fba0d919b8ed5d1890c78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a94f7a90823311cb841d74e43aed27aee5d05cc2fba0d919b8ed5d1890c78b->enter($__internal_71a94f7a90823311cb841d74e43aed27aee5d05cc2fba0d919b8ed5d1890c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_a1b667d45067aed69f754d1ca823e410855af1bc5dfef9188c5a764f91c4dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b667d45067aed69f754d1ca823e410855af1bc5dfef9188c5a764f91c4dbff->enter($__internal_a1b667d45067aed69f754d1ca823e410855af1bc5dfef9188c5a764f91c4dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_a1b667d45067aed69f754d1ca823e410855af1bc5dfef9188c5a764f91c4dbff->leave($__internal_a1b667d45067aed69f754d1ca823e410855af1bc5dfef9188c5a764f91c4dbff_prof);

        
        $__internal_71a94f7a90823311cb841d74e43aed27aee5d05cc2fba0d919b8ed5d1890c78b->leave($__internal_71a94f7a90823311cb841d74e43aed27aee5d05cc2fba0d919b8ed5d1890c78b_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_c84f7c25d863cfc8eb43087d661b7f137813d67c9378da265bbb4eb0f0ad6e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84f7c25d863cfc8eb43087d661b7f137813d67c9378da265bbb4eb0f0ad6e94->enter($__internal_c84f7c25d863cfc8eb43087d661b7f137813d67c9378da265bbb4eb0f0ad6e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_071af23287a587127376991cdf276059b0e5563f3a3d5ad3c2816c4c8381c4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071af23287a587127376991cdf276059b0e5563f3a3d5ad3c2816c4c8381c4d3->enter($__internal_071af23287a587127376991cdf276059b0e5563f3a3d5ad3c2816c4c8381c4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_071af23287a587127376991cdf276059b0e5563f3a3d5ad3c2816c4c8381c4d3->leave($__internal_071af23287a587127376991cdf276059b0e5563f3a3d5ad3c2816c4c8381c4d3_prof);

        
        $__internal_c84f7c25d863cfc8eb43087d661b7f137813d67c9378da265bbb4eb0f0ad6e94->leave($__internal_c84f7c25d863cfc8eb43087d661b7f137813d67c9378da265bbb4eb0f0ad6e94_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_8a04d01094ea89f95e62cd60bd075bb7d12a993835ed5e5d6396ee3da3e7c5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a04d01094ea89f95e62cd60bd075bb7d12a993835ed5e5d6396ee3da3e7c5b1->enter($__internal_8a04d01094ea89f95e62cd60bd075bb7d12a993835ed5e5d6396ee3da3e7c5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_0172ceb0c2c842e736c7737c0f812c6560fd296e0acf10e962631cbee30ca444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0172ceb0c2c842e736c7737c0f812c6560fd296e0acf10e962631cbee30ca444->enter($__internal_0172ceb0c2c842e736c7737c0f812c6560fd296e0acf10e962631cbee30ca444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_0172ceb0c2c842e736c7737c0f812c6560fd296e0acf10e962631cbee30ca444->leave($__internal_0172ceb0c2c842e736c7737c0f812c6560fd296e0acf10e962631cbee30ca444_prof);

        
        $__internal_8a04d01094ea89f95e62cd60bd075bb7d12a993835ed5e5d6396ee3da3e7c5b1->leave($__internal_8a04d01094ea89f95e62cd60bd075bb7d12a993835ed5e5d6396ee3da3e7c5b1_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_34b8e6aa3f28a56e153105fc3e65031b86d0c01be936873eca1d84a651691363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b8e6aa3f28a56e153105fc3e65031b86d0c01be936873eca1d84a651691363->enter($__internal_34b8e6aa3f28a56e153105fc3e65031b86d0c01be936873eca1d84a651691363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_2de32f5d73f624a343a4a0808b52ff7b708850a105e8a2979a648d19cf005721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de32f5d73f624a343a4a0808b52ff7b708850a105e8a2979a648d19cf005721->enter($__internal_2de32f5d73f624a343a4a0808b52ff7b708850a105e8a2979a648d19cf005721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_2de32f5d73f624a343a4a0808b52ff7b708850a105e8a2979a648d19cf005721->leave($__internal_2de32f5d73f624a343a4a0808b52ff7b708850a105e8a2979a648d19cf005721_prof);

        
        $__internal_34b8e6aa3f28a56e153105fc3e65031b86d0c01be936873eca1d84a651691363->leave($__internal_34b8e6aa3f28a56e153105fc3e65031b86d0c01be936873eca1d84a651691363_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_e35412ecc5b5654c82346423edb16283a8b7bd53f5f9768441a89de230e91ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35412ecc5b5654c82346423edb16283a8b7bd53f5f9768441a89de230e91ead->enter($__internal_e35412ecc5b5654c82346423edb16283a8b7bd53f5f9768441a89de230e91ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_e06ff2e9ef65bb3a422f9fa2ff70aff1a10241cabdc72190ba948c55c4961332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06ff2e9ef65bb3a422f9fa2ff70aff1a10241cabdc72190ba948c55c4961332->enter($__internal_e06ff2e9ef65bb3a422f9fa2ff70aff1a10241cabdc72190ba948c55c4961332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_e06ff2e9ef65bb3a422f9fa2ff70aff1a10241cabdc72190ba948c55c4961332->leave($__internal_e06ff2e9ef65bb3a422f9fa2ff70aff1a10241cabdc72190ba948c55c4961332_prof);

        
        $__internal_e35412ecc5b5654c82346423edb16283a8b7bd53f5f9768441a89de230e91ead->leave($__internal_e35412ecc5b5654c82346423edb16283a8b7bd53f5f9768441a89de230e91ead_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_cf12fc7e29a1dac1c03299cd8059ad8d670b3a15d9b76d527d2a26855e92ccf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf12fc7e29a1dac1c03299cd8059ad8d670b3a15d9b76d527d2a26855e92ccf3->enter($__internal_cf12fc7e29a1dac1c03299cd8059ad8d670b3a15d9b76d527d2a26855e92ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_8555792b106c11bd47168274d324a4cdbd485a9b4e653c96261497c6347f4167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8555792b106c11bd47168274d324a4cdbd485a9b4e653c96261497c6347f4167->enter($__internal_8555792b106c11bd47168274d324a4cdbd485a9b4e653c96261497c6347f4167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_8555792b106c11bd47168274d324a4cdbd485a9b4e653c96261497c6347f4167->leave($__internal_8555792b106c11bd47168274d324a4cdbd485a9b4e653c96261497c6347f4167_prof);

        
        $__internal_cf12fc7e29a1dac1c03299cd8059ad8d670b3a15d9b76d527d2a26855e92ccf3->leave($__internal_cf12fc7e29a1dac1c03299cd8059ad8d670b3a15d9b76d527d2a26855e92ccf3_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_97f7b05ac73d82c5995293cfdae8b0887553b9f97ea0ac06cdda40abfc2b1f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f7b05ac73d82c5995293cfdae8b0887553b9f97ea0ac06cdda40abfc2b1f74->enter($__internal_97f7b05ac73d82c5995293cfdae8b0887553b9f97ea0ac06cdda40abfc2b1f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_946c6c98d2da9a51398664dc65b281b7dc15fe2faf133c73825d1c4cd8ecd224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946c6c98d2da9a51398664dc65b281b7dc15fe2faf133c73825d1c4cd8ecd224->enter($__internal_946c6c98d2da9a51398664dc65b281b7dc15fe2faf133c73825d1c4cd8ecd224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_946c6c98d2da9a51398664dc65b281b7dc15fe2faf133c73825d1c4cd8ecd224->leave($__internal_946c6c98d2da9a51398664dc65b281b7dc15fe2faf133c73825d1c4cd8ecd224_prof);

        
        $__internal_97f7b05ac73d82c5995293cfdae8b0887553b9f97ea0ac06cdda40abfc2b1f74->leave($__internal_97f7b05ac73d82c5995293cfdae8b0887553b9f97ea0ac06cdda40abfc2b1f74_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3059ff76d2e9ffb463260d7f2cc66ba0cd0e0585164749a256382a6eda0196fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3059ff76d2e9ffb463260d7f2cc66ba0cd0e0585164749a256382a6eda0196fc->enter($__internal_3059ff76d2e9ffb463260d7f2cc66ba0cd0e0585164749a256382a6eda0196fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_e845abcd2933450f12dc0510eae88143e0b9f5f651ea0cd82f9e54963c7df6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e845abcd2933450f12dc0510eae88143e0b9f5f651ea0cd82f9e54963c7df6d8->enter($__internal_e845abcd2933450f12dc0510eae88143e0b9f5f651ea0cd82f9e54963c7df6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_e845abcd2933450f12dc0510eae88143e0b9f5f651ea0cd82f9e54963c7df6d8->leave($__internal_e845abcd2933450f12dc0510eae88143e0b9f5f651ea0cd82f9e54963c7df6d8_prof);

        
        $__internal_3059ff76d2e9ffb463260d7f2cc66ba0cd0e0585164749a256382a6eda0196fc->leave($__internal_3059ff76d2e9ffb463260d7f2cc66ba0cd0e0585164749a256382a6eda0196fc_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_1260bfa46ee8a19429878b3c6be5a25d9f51f7e7c1c0c212590263daf78419dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1260bfa46ee8a19429878b3c6be5a25d9f51f7e7c1c0c212590263daf78419dc->enter($__internal_1260bfa46ee8a19429878b3c6be5a25d9f51f7e7c1c0c212590263daf78419dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_cb1e59504f7438ad9207e17984e5eb08775cadb5d21501da1b3786ef15afd262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1e59504f7438ad9207e17984e5eb08775cadb5d21501da1b3786ef15afd262->enter($__internal_cb1e59504f7438ad9207e17984e5eb08775cadb5d21501da1b3786ef15afd262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_cb1e59504f7438ad9207e17984e5eb08775cadb5d21501da1b3786ef15afd262->leave($__internal_cb1e59504f7438ad9207e17984e5eb08775cadb5d21501da1b3786ef15afd262_prof);

        
        $__internal_1260bfa46ee8a19429878b3c6be5a25d9f51f7e7c1c0c212590263daf78419dc->leave($__internal_1260bfa46ee8a19429878b3c6be5a25d9f51f7e7c1c0c212590263daf78419dc_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_7a6a1b69ecd2f37adf7f0efee03d355e06d0cdb1971356ea38160562dca7f61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6a1b69ecd2f37adf7f0efee03d355e06d0cdb1971356ea38160562dca7f61a->enter($__internal_7a6a1b69ecd2f37adf7f0efee03d355e06d0cdb1971356ea38160562dca7f61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_fc30d5fac33834bcd946fffabc774019501c23a3e17ae4641fe53401886d2ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30d5fac33834bcd946fffabc774019501c23a3e17ae4641fe53401886d2ee2->enter($__internal_fc30d5fac33834bcd946fffabc774019501c23a3e17ae4641fe53401886d2ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_fc30d5fac33834bcd946fffabc774019501c23a3e17ae4641fe53401886d2ee2->leave($__internal_fc30d5fac33834bcd946fffabc774019501c23a3e17ae4641fe53401886d2ee2_prof);

        
        $__internal_7a6a1b69ecd2f37adf7f0efee03d355e06d0cdb1971356ea38160562dca7f61a->leave($__internal_7a6a1b69ecd2f37adf7f0efee03d355e06d0cdb1971356ea38160562dca7f61a_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_0377def0ef83ef5607115331f3433621d59d88bfce117e2c95ac38e50582c1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0377def0ef83ef5607115331f3433621d59d88bfce117e2c95ac38e50582c1e1->enter($__internal_0377def0ef83ef5607115331f3433621d59d88bfce117e2c95ac38e50582c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_f6379ae6f151eb0e1c0775283911ae9a29b8e7655103c892bfa937058c1a7bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6379ae6f151eb0e1c0775283911ae9a29b8e7655103c892bfa937058c1a7bb4->enter($__internal_f6379ae6f151eb0e1c0775283911ae9a29b8e7655103c892bfa937058c1a7bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_f6379ae6f151eb0e1c0775283911ae9a29b8e7655103c892bfa937058c1a7bb4->leave($__internal_f6379ae6f151eb0e1c0775283911ae9a29b8e7655103c892bfa937058c1a7bb4_prof);

        
        $__internal_0377def0ef83ef5607115331f3433621d59d88bfce117e2c95ac38e50582c1e1->leave($__internal_0377def0ef83ef5607115331f3433621d59d88bfce117e2c95ac38e50582c1e1_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d7d76c4029f2c11d779ed6ab47b75f0f7ca7c97ea5d4c52005ccefc1d6063879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d76c4029f2c11d779ed6ab47b75f0f7ca7c97ea5d4c52005ccefc1d6063879->enter($__internal_d7d76c4029f2c11d779ed6ab47b75f0f7ca7c97ea5d4c52005ccefc1d6063879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_80954d028d548f174d76ed197e90746c93633ed0e91b79932ef06f314346fd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80954d028d548f174d76ed197e90746c93633ed0e91b79932ef06f314346fd8a->enter($__internal_80954d028d548f174d76ed197e90746c93633ed0e91b79932ef06f314346fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_80954d028d548f174d76ed197e90746c93633ed0e91b79932ef06f314346fd8a->leave($__internal_80954d028d548f174d76ed197e90746c93633ed0e91b79932ef06f314346fd8a_prof);

        
        $__internal_d7d76c4029f2c11d779ed6ab47b75f0f7ca7c97ea5d4c52005ccefc1d6063879->leave($__internal_d7d76c4029f2c11d779ed6ab47b75f0f7ca7c97ea5d4c52005ccefc1d6063879_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6383e3e233ae62ad261b3a3657a35a9e87c609e98ee4f22e60573adbe1f84b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6383e3e233ae62ad261b3a3657a35a9e87c609e98ee4f22e60573adbe1f84b08->enter($__internal_6383e3e233ae62ad261b3a3657a35a9e87c609e98ee4f22e60573adbe1f84b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_e71d303dd81b5c9729e380a02f0b84e8edbed3b2e02674be8078911221da65c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71d303dd81b5c9729e380a02f0b84e8edbed3b2e02674be8078911221da65c6->enter($__internal_e71d303dd81b5c9729e380a02f0b84e8edbed3b2e02674be8078911221da65c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_e71d303dd81b5c9729e380a02f0b84e8edbed3b2e02674be8078911221da65c6->leave($__internal_e71d303dd81b5c9729e380a02f0b84e8edbed3b2e02674be8078911221da65c6_prof);

        
        $__internal_6383e3e233ae62ad261b3a3657a35a9e87c609e98ee4f22e60573adbe1f84b08->leave($__internal_6383e3e233ae62ad261b3a3657a35a9e87c609e98ee4f22e60573adbe1f84b08_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_b80e3a2c4f5504b0171f3329ded515866341c162778e99fadad14032c71698f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80e3a2c4f5504b0171f3329ded515866341c162778e99fadad14032c71698f6->enter($__internal_b80e3a2c4f5504b0171f3329ded515866341c162778e99fadad14032c71698f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_5d020e5d9ef9662e70c9f72318fd13c51d47a4151753c003d2b036ba47b385a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d020e5d9ef9662e70c9f72318fd13c51d47a4151753c003d2b036ba47b385a4->enter($__internal_5d020e5d9ef9662e70c9f72318fd13c51d47a4151753c003d2b036ba47b385a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_5d020e5d9ef9662e70c9f72318fd13c51d47a4151753c003d2b036ba47b385a4->leave($__internal_5d020e5d9ef9662e70c9f72318fd13c51d47a4151753c003d2b036ba47b385a4_prof);

        
        $__internal_b80e3a2c4f5504b0171f3329ded515866341c162778e99fadad14032c71698f6->leave($__internal_b80e3a2c4f5504b0171f3329ded515866341c162778e99fadad14032c71698f6_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_10c380a1ede12ee532c6c6b964b922a52290869fdb70265eea631ff5be19e7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c380a1ede12ee532c6c6b964b922a52290869fdb70265eea631ff5be19e7fd->enter($__internal_10c380a1ede12ee532c6c6b964b922a52290869fdb70265eea631ff5be19e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_afe793ba9590e740b1895893d9d6999e0105b214be416b954781df5f04185e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe793ba9590e740b1895893d9d6999e0105b214be416b954781df5f04185e5e->enter($__internal_afe793ba9590e740b1895893d9d6999e0105b214be416b954781df5f04185e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_afe793ba9590e740b1895893d9d6999e0105b214be416b954781df5f04185e5e->leave($__internal_afe793ba9590e740b1895893d9d6999e0105b214be416b954781df5f04185e5e_prof);

        
        $__internal_10c380a1ede12ee532c6c6b964b922a52290869fdb70265eea631ff5be19e7fd->leave($__internal_10c380a1ede12ee532c6c6b964b922a52290869fdb70265eea631ff5be19e7fd_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_ecd20c19098dcb05818a4fe9457740f32451c4c4d30447334ab267ce44c5bf9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd20c19098dcb05818a4fe9457740f32451c4c4d30447334ab267ce44c5bf9b->enter($__internal_ecd20c19098dcb05818a4fe9457740f32451c4c4d30447334ab267ce44c5bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_baab2ce961c3df82b74242f616f12a29424fab7722acafc4ec29036f6e6e9cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baab2ce961c3df82b74242f616f12a29424fab7722acafc4ec29036f6e6e9cf1->enter($__internal_baab2ce961c3df82b74242f616f12a29424fab7722acafc4ec29036f6e6e9cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_baab2ce961c3df82b74242f616f12a29424fab7722acafc4ec29036f6e6e9cf1->leave($__internal_baab2ce961c3df82b74242f616f12a29424fab7722acafc4ec29036f6e6e9cf1_prof);

        
        $__internal_ecd20c19098dcb05818a4fe9457740f32451c4c4d30447334ab267ce44c5bf9b->leave($__internal_ecd20c19098dcb05818a4fe9457740f32451c4c4d30447334ab267ce44c5bf9b_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_561eac50d0f5ce6c053e3fdb12a7e48e04c11db7db81c55dbc3c5a0dca280d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561eac50d0f5ce6c053e3fdb12a7e48e04c11db7db81c55dbc3c5a0dca280d0e->enter($__internal_561eac50d0f5ce6c053e3fdb12a7e48e04c11db7db81c55dbc3c5a0dca280d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_1a0f2aa40fcc082a8d6f2ad379b578718803ca9a5037b52db5c34f97126c35b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0f2aa40fcc082a8d6f2ad379b578718803ca9a5037b52db5c34f97126c35b3->enter($__internal_1a0f2aa40fcc082a8d6f2ad379b578718803ca9a5037b52db5c34f97126c35b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_1a0f2aa40fcc082a8d6f2ad379b578718803ca9a5037b52db5c34f97126c35b3->leave($__internal_1a0f2aa40fcc082a8d6f2ad379b578718803ca9a5037b52db5c34f97126c35b3_prof);

        
        $__internal_561eac50d0f5ce6c053e3fdb12a7e48e04c11db7db81c55dbc3c5a0dca280d0e->leave($__internal_561eac50d0f5ce6c053e3fdb12a7e48e04c11db7db81c55dbc3c5a0dca280d0e_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_05dc70fe0ae08b84086b48780230817bd9cba73357e58e06839f44d0bd40ec29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dc70fe0ae08b84086b48780230817bd9cba73357e58e06839f44d0bd40ec29->enter($__internal_05dc70fe0ae08b84086b48780230817bd9cba73357e58e06839f44d0bd40ec29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_66112abaeaa4fec0878173ea45e457fa2522e59dc4f171c8f2ace866e5a9431f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66112abaeaa4fec0878173ea45e457fa2522e59dc4f171c8f2ace866e5a9431f->enter($__internal_66112abaeaa4fec0878173ea45e457fa2522e59dc4f171c8f2ace866e5a9431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_66112abaeaa4fec0878173ea45e457fa2522e59dc4f171c8f2ace866e5a9431f->leave($__internal_66112abaeaa4fec0878173ea45e457fa2522e59dc4f171c8f2ace866e5a9431f_prof);

        
        $__internal_05dc70fe0ae08b84086b48780230817bd9cba73357e58e06839f44d0bd40ec29->leave($__internal_05dc70fe0ae08b84086b48780230817bd9cba73357e58e06839f44d0bd40ec29_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_809f968f4947d6d62dd491d9a1abcffaa7694c1976d133fffba2a7c629f59969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809f968f4947d6d62dd491d9a1abcffaa7694c1976d133fffba2a7c629f59969->enter($__internal_809f968f4947d6d62dd491d9a1abcffaa7694c1976d133fffba2a7c629f59969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_283a86fe156190e581dc65a126fc28ad6336f6319fba06913e9216b8feb49af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283a86fe156190e581dc65a126fc28ad6336f6319fba06913e9216b8feb49af9->enter($__internal_283a86fe156190e581dc65a126fc28ad6336f6319fba06913e9216b8feb49af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_283a86fe156190e581dc65a126fc28ad6336f6319fba06913e9216b8feb49af9->leave($__internal_283a86fe156190e581dc65a126fc28ad6336f6319fba06913e9216b8feb49af9_prof);

        
        $__internal_809f968f4947d6d62dd491d9a1abcffaa7694c1976d133fffba2a7c629f59969->leave($__internal_809f968f4947d6d62dd491d9a1abcffaa7694c1976d133fffba2a7c629f59969_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_519dda411eb8131d909bfdd04f7c9d00aa1c85659831c6922c32223ac14ae624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519dda411eb8131d909bfdd04f7c9d00aa1c85659831c6922c32223ac14ae624->enter($__internal_519dda411eb8131d909bfdd04f7c9d00aa1c85659831c6922c32223ac14ae624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_bfb3b0385163bdd561fa4ef0a9d78ae3fb8da2a74e9bf56530111eeb882bb1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb3b0385163bdd561fa4ef0a9d78ae3fb8da2a74e9bf56530111eeb882bb1b8->enter($__internal_bfb3b0385163bdd561fa4ef0a9d78ae3fb8da2a74e9bf56530111eeb882bb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_bfb3b0385163bdd561fa4ef0a9d78ae3fb8da2a74e9bf56530111eeb882bb1b8->leave($__internal_bfb3b0385163bdd561fa4ef0a9d78ae3fb8da2a74e9bf56530111eeb882bb1b8_prof);

        
        $__internal_519dda411eb8131d909bfdd04f7c9d00aa1c85659831c6922c32223ac14ae624->leave($__internal_519dda411eb8131d909bfdd04f7c9d00aa1c85659831c6922c32223ac14ae624_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_1d8f145ee814ed2b7400220f29b0116825f3faf629d0d564cdfd622795a9d873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8f145ee814ed2b7400220f29b0116825f3faf629d0d564cdfd622795a9d873->enter($__internal_1d8f145ee814ed2b7400220f29b0116825f3faf629d0d564cdfd622795a9d873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_247f097bdd8f26a30d85783347ddee296f8e5d7eda423fc3ca474b1670930efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247f097bdd8f26a30d85783347ddee296f8e5d7eda423fc3ca474b1670930efc->enter($__internal_247f097bdd8f26a30d85783347ddee296f8e5d7eda423fc3ca474b1670930efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_247f097bdd8f26a30d85783347ddee296f8e5d7eda423fc3ca474b1670930efc->leave($__internal_247f097bdd8f26a30d85783347ddee296f8e5d7eda423fc3ca474b1670930efc_prof);

        
        $__internal_1d8f145ee814ed2b7400220f29b0116825f3faf629d0d564cdfd622795a9d873->leave($__internal_1d8f145ee814ed2b7400220f29b0116825f3faf629d0d564cdfd622795a9d873_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_b375f245aec5ab0032ec6f9dd763761ace748e739c468f645e84bc34d5852af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b375f245aec5ab0032ec6f9dd763761ace748e739c468f645e84bc34d5852af3->enter($__internal_b375f245aec5ab0032ec6f9dd763761ace748e739c468f645e84bc34d5852af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_56b1eb23f61308b13887da1bede5e3463d8d75926f5179b8b798c46378089aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b1eb23f61308b13887da1bede5e3463d8d75926f5179b8b798c46378089aff->enter($__internal_56b1eb23f61308b13887da1bede5e3463d8d75926f5179b8b798c46378089aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
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
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_56b1eb23f61308b13887da1bede5e3463d8d75926f5179b8b798c46378089aff->leave($__internal_56b1eb23f61308b13887da1bede5e3463d8d75926f5179b8b798c46378089aff_prof);

        
        $__internal_b375f245aec5ab0032ec6f9dd763761ace748e739c468f645e84bc34d5852af3->leave($__internal_b375f245aec5ab0032ec6f9dd763761ace748e739c468f645e84bc34d5852af3_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_abbacbbf3dc6fdb0ba33ad7787a3bf034c718dde7d8635dee54149c8fe1428c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbacbbf3dc6fdb0ba33ad7787a3bf034c718dde7d8635dee54149c8fe1428c2->enter($__internal_abbacbbf3dc6fdb0ba33ad7787a3bf034c718dde7d8635dee54149c8fe1428c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_14f04fbfd1d946bb7caeb93c04133ab2b2de650302a0d0f7df56c8f137b877ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f04fbfd1d946bb7caeb93c04133ab2b2de650302a0d0f7df56c8f137b877ea->enter($__internal_14f04fbfd1d946bb7caeb93c04133ab2b2de650302a0d0f7df56c8f137b877ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_14f04fbfd1d946bb7caeb93c04133ab2b2de650302a0d0f7df56c8f137b877ea->leave($__internal_14f04fbfd1d946bb7caeb93c04133ab2b2de650302a0d0f7df56c8f137b877ea_prof);

        
        $__internal_abbacbbf3dc6fdb0ba33ad7787a3bf034c718dde7d8635dee54149c8fe1428c2->leave($__internal_abbacbbf3dc6fdb0ba33ad7787a3bf034c718dde7d8635dee54149c8fe1428c2_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_f345ae5fdb39ca8a9fe0ceb21425a341ad7d25abe5af5f7a27ceb650b17cdec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f345ae5fdb39ca8a9fe0ceb21425a341ad7d25abe5af5f7a27ceb650b17cdec8->enter($__internal_f345ae5fdb39ca8a9fe0ceb21425a341ad7d25abe5af5f7a27ceb650b17cdec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_2ccc7fb4e666fcc7a687503bdcb6265464b2004cdf062b0f533e7e0d731c497e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccc7fb4e666fcc7a687503bdcb6265464b2004cdf062b0f533e7e0d731c497e->enter($__internal_2ccc7fb4e666fcc7a687503bdcb6265464b2004cdf062b0f533e7e0d731c497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_2ccc7fb4e666fcc7a687503bdcb6265464b2004cdf062b0f533e7e0d731c497e->leave($__internal_2ccc7fb4e666fcc7a687503bdcb6265464b2004cdf062b0f533e7e0d731c497e_prof);

        
        $__internal_f345ae5fdb39ca8a9fe0ceb21425a341ad7d25abe5af5f7a27ceb650b17cdec8->leave($__internal_f345ae5fdb39ca8a9fe0ceb21425a341ad7d25abe5af5f7a27ceb650b17cdec8_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_2412c6cb94fb3a3d5c3c96665b1a7cdb04838db63b70f9a21403554a4d0833b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2412c6cb94fb3a3d5c3c96665b1a7cdb04838db63b70f9a21403554a4d0833b0->enter($__internal_2412c6cb94fb3a3d5c3c96665b1a7cdb04838db63b70f9a21403554a4d0833b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_60b83d8059927b1dc7b4a5884dbb52411e6460f2fdfcb815c03c931f1b8b09a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b83d8059927b1dc7b4a5884dbb52411e6460f2fdfcb815c03c931f1b8b09a0->enter($__internal_60b83d8059927b1dc7b4a5884dbb52411e6460f2fdfcb815c03c931f1b8b09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_60b83d8059927b1dc7b4a5884dbb52411e6460f2fdfcb815c03c931f1b8b09a0->leave($__internal_60b83d8059927b1dc7b4a5884dbb52411e6460f2fdfcb815c03c931f1b8b09a0_prof);

        
        $__internal_2412c6cb94fb3a3d5c3c96665b1a7cdb04838db63b70f9a21403554a4d0833b0->leave($__internal_2412c6cb94fb3a3d5c3c96665b1a7cdb04838db63b70f9a21403554a4d0833b0_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_80d70d67a8c3c4a240f380fc2837148b49d829a318751df87b88dfbe8bbf1ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d70d67a8c3c4a240f380fc2837148b49d829a318751df87b88dfbe8bbf1ad2->enter($__internal_80d70d67a8c3c4a240f380fc2837148b49d829a318751df87b88dfbe8bbf1ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_e51c5f0977e1a703e5d69f3ed5af9240251d26339fce9f78f407249c81b09fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51c5f0977e1a703e5d69f3ed5af9240251d26339fce9f78f407249c81b09fd8->enter($__internal_e51c5f0977e1a703e5d69f3ed5af9240251d26339fce9f78f407249c81b09fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_e51c5f0977e1a703e5d69f3ed5af9240251d26339fce9f78f407249c81b09fd8->leave($__internal_e51c5f0977e1a703e5d69f3ed5af9240251d26339fce9f78f407249c81b09fd8_prof);

        
        $__internal_80d70d67a8c3c4a240f380fc2837148b49d829a318751df87b88dfbe8bbf1ad2->leave($__internal_80d70d67a8c3c4a240f380fc2837148b49d829a318751df87b88dfbe8bbf1ad2_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_7d62d01168272f2cb3a2728928315f0937c4fd9217529624115cd521bce3b0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d62d01168272f2cb3a2728928315f0937c4fd9217529624115cd521bce3b0c9->enter($__internal_7d62d01168272f2cb3a2728928315f0937c4fd9217529624115cd521bce3b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_918a0ba425f26d57379b34ce50a611554e517afc91347ca9ed26c4ff5ffb193f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918a0ba425f26d57379b34ce50a611554e517afc91347ca9ed26c4ff5ffb193f->enter($__internal_918a0ba425f26d57379b34ce50a611554e517afc91347ca9ed26c4ff5ffb193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_918a0ba425f26d57379b34ce50a611554e517afc91347ca9ed26c4ff5ffb193f->leave($__internal_918a0ba425f26d57379b34ce50a611554e517afc91347ca9ed26c4ff5ffb193f_prof);

        
        $__internal_7d62d01168272f2cb3a2728928315f0937c4fd9217529624115cd521bce3b0c9->leave($__internal_7d62d01168272f2cb3a2728928315f0937c4fd9217529624115cd521bce3b0c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
