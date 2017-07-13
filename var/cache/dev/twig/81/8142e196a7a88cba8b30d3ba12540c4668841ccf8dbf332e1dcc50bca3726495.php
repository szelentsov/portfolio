<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_92be4fdbb3702e17ad39f4ac701c640d82351b0fc43573198697588f7a5ccbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b154b2a50244e6ca818671f275fbb040da5b0c793558b71ae5c1a66a2a74705c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b154b2a50244e6ca818671f275fbb040da5b0c793558b71ae5c1a66a2a74705c->enter($__internal_b154b2a50244e6ca818671f275fbb040da5b0c793558b71ae5c1a66a2a74705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_89e1a21e45ba006bda0c9a6102e79aeb621b148fb04ecdda1d70b886ef44f4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e1a21e45ba006bda0c9a6102e79aeb621b148fb04ecdda1d70b886ef44f4c9->enter($__internal_89e1a21e45ba006bda0c9a6102e79aeb621b148fb04ecdda1d70b886ef44f4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b154b2a50244e6ca818671f275fbb040da5b0c793558b71ae5c1a66a2a74705c->leave($__internal_b154b2a50244e6ca818671f275fbb040da5b0c793558b71ae5c1a66a2a74705c_prof);

        
        $__internal_89e1a21e45ba006bda0c9a6102e79aeb621b148fb04ecdda1d70b886ef44f4c9->leave($__internal_89e1a21e45ba006bda0c9a6102e79aeb621b148fb04ecdda1d70b886ef44f4c9_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8ffb84f69b93dc76dc468c2e4899173432e8dfb96f7485fedd28562409b2ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ffb84f69b93dc76dc468c2e4899173432e8dfb96f7485fedd28562409b2ed1->enter($__internal_b8ffb84f69b93dc76dc468c2e4899173432e8dfb96f7485fedd28562409b2ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4508857fdb93acbfbb802e10a874469ea0a438e957a0b09224dd6e074d42007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4508857fdb93acbfbb802e10a874469ea0a438e957a0b09224dd6e074d42007->enter($__internal_a4508857fdb93acbfbb802e10a874469ea0a438e957a0b09224dd6e074d42007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_a4508857fdb93acbfbb802e10a874469ea0a438e957a0b09224dd6e074d42007->leave($__internal_a4508857fdb93acbfbb802e10a874469ea0a438e957a0b09224dd6e074d42007_prof);

        
        $__internal_b8ffb84f69b93dc76dc468c2e4899173432e8dfb96f7485fedd28562409b2ed1->leave($__internal_b8ffb84f69b93dc76dc468c2e4899173432e8dfb96f7485fedd28562409b2ed1_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_85c8cf2bdf17f2f8dd31fcf5e8834a1908ba3397fdf1fac4f5317c580d8bf8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c8cf2bdf17f2f8dd31fcf5e8834a1908ba3397fdf1fac4f5317c580d8bf8b3->enter($__internal_85c8cf2bdf17f2f8dd31fcf5e8834a1908ba3397fdf1fac4f5317c580d8bf8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_d756dff82ec6b7384f899c83524459e09c5d9ef753571ce88444bb267be23c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d756dff82ec6b7384f899c83524459e09c5d9ef753571ce88444bb267be23c46->enter($__internal_d756dff82ec6b7384f899c83524459e09c5d9ef753571ce88444bb267be23c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d756dff82ec6b7384f899c83524459e09c5d9ef753571ce88444bb267be23c46->leave($__internal_d756dff82ec6b7384f899c83524459e09c5d9ef753571ce88444bb267be23c46_prof);

        
        $__internal_85c8cf2bdf17f2f8dd31fcf5e8834a1908ba3397fdf1fac4f5317c580d8bf8b3->leave($__internal_85c8cf2bdf17f2f8dd31fcf5e8834a1908ba3397fdf1fac4f5317c580d8bf8b3_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2c2b25ed3983fe3eb1274d394df34c00c8e89c9db4869a829d43b1de6e88e643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2b25ed3983fe3eb1274d394df34c00c8e89c9db4869a829d43b1de6e88e643->enter($__internal_2c2b25ed3983fe3eb1274d394df34c00c8e89c9db4869a829d43b1de6e88e643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_41f3c7e4ab2cfe9e40d3661e99edebde82d0b9e356f3335982e218536f611dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f3c7e4ab2cfe9e40d3661e99edebde82d0b9e356f3335982e218536f611dd1->enter($__internal_41f3c7e4ab2cfe9e40d3661e99edebde82d0b9e356f3335982e218536f611dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_41f3c7e4ab2cfe9e40d3661e99edebde82d0b9e356f3335982e218536f611dd1->leave($__internal_41f3c7e4ab2cfe9e40d3661e99edebde82d0b9e356f3335982e218536f611dd1_prof);

        
        $__internal_2c2b25ed3983fe3eb1274d394df34c00c8e89c9db4869a829d43b1de6e88e643->leave($__internal_2c2b25ed3983fe3eb1274d394df34c00c8e89c9db4869a829d43b1de6e88e643_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1c40ad98d00296dacd1a074595fc743451a2db27c70c36e63bb8655328cdbe97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c40ad98d00296dacd1a074595fc743451a2db27c70c36e63bb8655328cdbe97->enter($__internal_1c40ad98d00296dacd1a074595fc743451a2db27c70c36e63bb8655328cdbe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4e5ee3e0fa031b8e5293c7bdc5260b2f6421b341203581348b8147b1a2b44942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5ee3e0fa031b8e5293c7bdc5260b2f6421b341203581348b8147b1a2b44942->enter($__internal_4e5ee3e0fa031b8e5293c7bdc5260b2f6421b341203581348b8147b1a2b44942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_4e5ee3e0fa031b8e5293c7bdc5260b2f6421b341203581348b8147b1a2b44942->leave($__internal_4e5ee3e0fa031b8e5293c7bdc5260b2f6421b341203581348b8147b1a2b44942_prof);

        
        $__internal_1c40ad98d00296dacd1a074595fc743451a2db27c70c36e63bb8655328cdbe97->leave($__internal_1c40ad98d00296dacd1a074595fc743451a2db27c70c36e63bb8655328cdbe97_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_a9586363c0771d8ef8fd239c678ea4c58ace29ae714174ea7bd3967f0d012d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9586363c0771d8ef8fd239c678ea4c58ace29ae714174ea7bd3967f0d012d28->enter($__internal_a9586363c0771d8ef8fd239c678ea4c58ace29ae714174ea7bd3967f0d012d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_90f4f0001ea50e7f772d9ad02954da94a913bf9d94c6a983f60f1a5c5df740e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f4f0001ea50e7f772d9ad02954da94a913bf9d94c6a983f60f1a5c5df740e9->enter($__internal_90f4f0001ea50e7f772d9ad02954da94a913bf9d94c6a983f60f1a5c5df740e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", array()), array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_90f4f0001ea50e7f772d9ad02954da94a913bf9d94c6a983f60f1a5c5df740e9->leave($__internal_90f4f0001ea50e7f772d9ad02954da94a913bf9d94c6a983f60f1a5c5df740e9_prof);

        
        $__internal_a9586363c0771d8ef8fd239c678ea4c58ace29ae714174ea7bd3967f0d012d28->leave($__internal_a9586363c0771d8ef8fd239c678ea4c58ace29ae714174ea7bd3967f0d012d28_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_036a6a0073d4ed593f2ddc8569389d6db7c8c058a8fd8b55e506d0e2bb2a5555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036a6a0073d4ed593f2ddc8569389d6db7c8c058a8fd8b55e506d0e2bb2a5555->enter($__internal_036a6a0073d4ed593f2ddc8569389d6db7c8c058a8fd8b55e506d0e2bb2a5555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_be39d6fc3dd94501078ab5ee5036aa2b2019f4881094e6538e3e4c8bf3f2163c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be39d6fc3dd94501078ab5ee5036aa2b2019f4881094e6538e3e4c8bf3f2163c->enter($__internal_be39d6fc3dd94501078ab5ee5036aa2b2019f4881094e6538e3e4c8bf3f2163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_be39d6fc3dd94501078ab5ee5036aa2b2019f4881094e6538e3e4c8bf3f2163c->leave($__internal_be39d6fc3dd94501078ab5ee5036aa2b2019f4881094e6538e3e4c8bf3f2163c_prof);

        
        $__internal_036a6a0073d4ed593f2ddc8569389d6db7c8c058a8fd8b55e506d0e2bb2a5555->leave($__internal_036a6a0073d4ed593f2ddc8569389d6db7c8c058a8fd8b55e506d0e2bb2a5555_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_6e1c3aac88b7ecc3a818f9bd005654187abd07fdd07e65da54c9d01d75a97911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1c3aac88b7ecc3a818f9bd005654187abd07fdd07e65da54c9d01d75a97911->enter($__internal_6e1c3aac88b7ecc3a818f9bd005654187abd07fdd07e65da54c9d01d75a97911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_2e83a313787d6a9ccb1670a67da6cebc1c57aa87dad73a85bec81cc01035477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e83a313787d6a9ccb1670a67da6cebc1c57aa87dad73a85bec81cc01035477a->enter($__internal_2e83a313787d6a9ccb1670a67da6cebc1c57aa87dad73a85bec81cc01035477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter(($context["no_padding"] ?? $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_2e83a313787d6a9ccb1670a67da6cebc1c57aa87dad73a85bec81cc01035477a->leave($__internal_2e83a313787d6a9ccb1670a67da6cebc1c57aa87dad73a85bec81cc01035477a_prof);

        
        $__internal_6e1c3aac88b7ecc3a818f9bd005654187abd07fdd07e65da54c9d01d75a97911->leave($__internal_6e1c3aac88b7ecc3a818f9bd005654187abd07fdd07e65da54c9d01d75a97911_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_1847b61aab02e0d12ab0f0d8bdef07fe3304d8dace07dfef61a7625380fba1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1847b61aab02e0d12ab0f0d8bdef07fe3304d8dace07dfef61a7625380fba1db->enter($__internal_1847b61aab02e0d12ab0f0d8bdef07fe3304d8dace07dfef61a7625380fba1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_c81481f37a1cd1c0ecd6d151d3bd9e7f9861fdfb20427f8d613e1455bb4c8108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81481f37a1cd1c0ecd6d151d3bd9e7f9861fdfb20427f8d613e1455bb4c8108->enter($__internal_c81481f37a1cd1c0ecd6d151d3bd9e7f9861fdfb20427f8d613e1455bb4c8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_c81481f37a1cd1c0ecd6d151d3bd9e7f9861fdfb20427f8d613e1455bb4c8108->leave($__internal_c81481f37a1cd1c0ecd6d151d3bd9e7f9861fdfb20427f8d613e1455bb4c8108_prof);

        
        $__internal_1847b61aab02e0d12ab0f0d8bdef07fe3304d8dace07dfef61a7625380fba1db->leave($__internal_1847b61aab02e0d12ab0f0d8bdef07fe3304d8dace07dfef61a7625380fba1db_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_9e1819fabc3da666ac11b2df1d14cb79c3df91d0352e87a32a9814e0fe830719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1819fabc3da666ac11b2df1d14cb79c3df91d0352e87a32a9814e0fe830719->enter($__internal_9e1819fabc3da666ac11b2df1d14cb79c3df91d0352e87a32a9814e0fe830719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_f9e7231c317e8986ad275c16b3f0aeb566cde13261372ca43028fbb4dc2ab67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7231c317e8986ad275c16b3f0aeb566cde13261372ca43028fbb4dc2ab67d->enter($__internal_f9e7231c317e8986ad275c16b3f0aeb566cde13261372ca43028fbb4dc2ab67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_f9e7231c317e8986ad275c16b3f0aeb566cde13261372ca43028fbb4dc2ab67d->leave($__internal_f9e7231c317e8986ad275c16b3f0aeb566cde13261372ca43028fbb4dc2ab67d_prof);

        
        $__internal_9e1819fabc3da666ac11b2df1d14cb79c3df91d0352e87a32a9814e0fe830719->leave($__internal_9e1819fabc3da666ac11b2df1d14cb79c3df91d0352e87a32a9814e0fe830719_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/home/sergey/portfolio_new/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
