<?php

/* knp_menu.html.twig */
class __TwigTemplate_1fc3577b1934b02a82e7f0e48d4ad5a71f8e44a354abd468abdc979ac580343a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38505827570ad77c5da042a525957534248e8f4926b212eeb57980d6e739a141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38505827570ad77c5da042a525957534248e8f4926b212eeb57980d6e739a141->enter($__internal_38505827570ad77c5da042a525957534248e8f4926b212eeb57980d6e739a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_225f0feb20e80ea654e5880c254c6e317d25a510a201af4cf551b02636c942f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225f0feb20e80ea654e5880c254c6e317d25a510a201af4cf551b02636c942f4->enter($__internal_225f0feb20e80ea654e5880c254c6e317d25a510a201af4cf551b02636c942f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38505827570ad77c5da042a525957534248e8f4926b212eeb57980d6e739a141->leave($__internal_38505827570ad77c5da042a525957534248e8f4926b212eeb57980d6e739a141_prof);

        
        $__internal_225f0feb20e80ea654e5880c254c6e317d25a510a201af4cf551b02636c942f4->leave($__internal_225f0feb20e80ea654e5880c254c6e317d25a510a201af4cf551b02636c942f4_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_eea7594b7bd4573a010c27af8b6edf3280e5a52a2c73fa126228faef2f8c0c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea7594b7bd4573a010c27af8b6edf3280e5a52a2c73fa126228faef2f8c0c64->enter($__internal_eea7594b7bd4573a010c27af8b6edf3280e5a52a2c73fa126228faef2f8c0c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_1844b42866b74e335c2e21a21ee605d4aa0206813ddfbdbf5b1d0357065c5ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1844b42866b74e335c2e21a21ee605d4aa0206813ddfbdbf5b1d0357065c5ffd->enter($__internal_1844b42866b74e335c2e21a21ee605d4aa0206813ddfbdbf5b1d0357065c5ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1844b42866b74e335c2e21a21ee605d4aa0206813ddfbdbf5b1d0357065c5ffd->leave($__internal_1844b42866b74e335c2e21a21ee605d4aa0206813ddfbdbf5b1d0357065c5ffd_prof);

        
        $__internal_eea7594b7bd4573a010c27af8b6edf3280e5a52a2c73fa126228faef2f8c0c64->leave($__internal_eea7594b7bd4573a010c27af8b6edf3280e5a52a2c73fa126228faef2f8c0c64_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_51a7069098431525c4a205e5498c26692829766635d490a3a29ecfbae920c022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a7069098431525c4a205e5498c26692829766635d490a3a29ecfbae920c022->enter($__internal_51a7069098431525c4a205e5498c26692829766635d490a3a29ecfbae920c022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_2c3d7e44106941f2170d3599f711b1cde1f0e40e888e3d461d77fe72228d2a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3d7e44106941f2170d3599f711b1cde1f0e40e888e3d461d77fe72228d2a34->enter($__internal_2c3d7e44106941f2170d3599f711b1cde1f0e40e888e3d461d77fe72228d2a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_2c3d7e44106941f2170d3599f711b1cde1f0e40e888e3d461d77fe72228d2a34->leave($__internal_2c3d7e44106941f2170d3599f711b1cde1f0e40e888e3d461d77fe72228d2a34_prof);

        
        $__internal_51a7069098431525c4a205e5498c26692829766635d490a3a29ecfbae920c022->leave($__internal_51a7069098431525c4a205e5498c26692829766635d490a3a29ecfbae920c022_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_2d93b63d8690693d2a37c5015763a9714896d80852c6f4c8ba8f4f6b940905d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d93b63d8690693d2a37c5015763a9714896d80852c6f4c8ba8f4f6b940905d4->enter($__internal_2d93b63d8690693d2a37c5015763a9714896d80852c6f4c8ba8f4f6b940905d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_aa9eb1a20bbc6d9523d2b9251d2d2bc61037474d282857e3382b894870ec172a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9eb1a20bbc6d9523d2b9251d2d2bc61037474d282857e3382b894870ec172a->enter($__internal_aa9eb1a20bbc6d9523d2b9251d2d2bc61037474d282857e3382b894870ec172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_aa9eb1a20bbc6d9523d2b9251d2d2bc61037474d282857e3382b894870ec172a->leave($__internal_aa9eb1a20bbc6d9523d2b9251d2d2bc61037474d282857e3382b894870ec172a_prof);

        
        $__internal_2d93b63d8690693d2a37c5015763a9714896d80852c6f4c8ba8f4f6b940905d4->leave($__internal_2d93b63d8690693d2a37c5015763a9714896d80852c6f4c8ba8f4f6b940905d4_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_2e7f3e659bab3724b45934f47212467538bfeabdc83fcb96b38087f5365591dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7f3e659bab3724b45934f47212467538bfeabdc83fcb96b38087f5365591dc->enter($__internal_2e7f3e659bab3724b45934f47212467538bfeabdc83fcb96b38087f5365591dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_7086cc8ba6fb54e67d1173e99a980e21d7539dc406295d582bde5acd4b6c5880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7086cc8ba6fb54e67d1173e99a980e21d7539dc406295d582bde5acd4b6c5880->enter($__internal_7086cc8ba6fb54e67d1173e99a980e21d7539dc406295d582bde5acd4b6c5880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_7086cc8ba6fb54e67d1173e99a980e21d7539dc406295d582bde5acd4b6c5880->leave($__internal_7086cc8ba6fb54e67d1173e99a980e21d7539dc406295d582bde5acd4b6c5880_prof);

        
        $__internal_2e7f3e659bab3724b45934f47212467538bfeabdc83fcb96b38087f5365591dc->leave($__internal_2e7f3e659bab3724b45934f47212467538bfeabdc83fcb96b38087f5365591dc_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_6ac020c580a5d51d6a74064d6e7eb56c7df7081ec612edc9f36f93d8751fced2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac020c580a5d51d6a74064d6e7eb56c7df7081ec612edc9f36f93d8751fced2->enter($__internal_6ac020c580a5d51d6a74064d6e7eb56c7df7081ec612edc9f36f93d8751fced2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4c4efe248f52a067bef2035d28600ad78be83df35eb73ddc94b63cf743bba38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4efe248f52a067bef2035d28600ad78be83df35eb73ddc94b63cf743bba38a->enter($__internal_4c4efe248f52a067bef2035d28600ad78be83df35eb73ddc94b63cf743bba38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_4c4efe248f52a067bef2035d28600ad78be83df35eb73ddc94b63cf743bba38a->leave($__internal_4c4efe248f52a067bef2035d28600ad78be83df35eb73ddc94b63cf743bba38a_prof);

        
        $__internal_6ac020c580a5d51d6a74064d6e7eb56c7df7081ec612edc9f36f93d8751fced2->leave($__internal_6ac020c580a5d51d6a74064d6e7eb56c7df7081ec612edc9f36f93d8751fced2_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ab01366d2afe33215cab6a1d0cf4df9e909344cb65d7aa817e774679f3a9cd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab01366d2afe33215cab6a1d0cf4df9e909344cb65d7aa817e774679f3a9cd73->enter($__internal_ab01366d2afe33215cab6a1d0cf4df9e909344cb65d7aa817e774679f3a9cd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_78dff8f04f8852c8934ce64f0c2cfa111e446e7521cb168bafa538b2efce8b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78dff8f04f8852c8934ce64f0c2cfa111e446e7521cb168bafa538b2efce8b03->enter($__internal_78dff8f04f8852c8934ce64f0c2cfa111e446e7521cb168bafa538b2efce8b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_78dff8f04f8852c8934ce64f0c2cfa111e446e7521cb168bafa538b2efce8b03->leave($__internal_78dff8f04f8852c8934ce64f0c2cfa111e446e7521cb168bafa538b2efce8b03_prof);

        
        $__internal_ab01366d2afe33215cab6a1d0cf4df9e909344cb65d7aa817e774679f3a9cd73->leave($__internal_ab01366d2afe33215cab6a1d0cf4df9e909344cb65d7aa817e774679f3a9cd73_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_4d11965557efef7ed2f5095f866c3dfc4ccc7e1ac5375b6f9c17af637c8b430c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d11965557efef7ed2f5095f866c3dfc4ccc7e1ac5375b6f9c17af637c8b430c->enter($__internal_4d11965557efef7ed2f5095f866c3dfc4ccc7e1ac5375b6f9c17af637c8b430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_d3af8877ede7b76f7716928b2bbeaa9f0c473f525d158b027994194faf4b60f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3af8877ede7b76f7716928b2bbeaa9f0c473f525d158b027994194faf4b60f3->enter($__internal_d3af8877ede7b76f7716928b2bbeaa9f0c473f525d158b027994194faf4b60f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_d3af8877ede7b76f7716928b2bbeaa9f0c473f525d158b027994194faf4b60f3->leave($__internal_d3af8877ede7b76f7716928b2bbeaa9f0c473f525d158b027994194faf4b60f3_prof);

        
        $__internal_4d11965557efef7ed2f5095f866c3dfc4ccc7e1ac5375b6f9c17af637c8b430c->leave($__internal_4d11965557efef7ed2f5095f866c3dfc4ccc7e1ac5375b6f9c17af637c8b430c_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_16371d041c1179d5f442083893f0c13dd28859bf8398606947e9338c0f598a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16371d041c1179d5f442083893f0c13dd28859bf8398606947e9338c0f598a59->enter($__internal_16371d041c1179d5f442083893f0c13dd28859bf8398606947e9338c0f598a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6b4487aeb6764e202f54d69bb59a3a3b981b43db486e51637476d21a5e32f800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4487aeb6764e202f54d69bb59a3a3b981b43db486e51637476d21a5e32f800->enter($__internal_6b4487aeb6764e202f54d69bb59a3a3b981b43db486e51637476d21a5e32f800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_6b4487aeb6764e202f54d69bb59a3a3b981b43db486e51637476d21a5e32f800->leave($__internal_6b4487aeb6764e202f54d69bb59a3a3b981b43db486e51637476d21a5e32f800_prof);

        
        $__internal_16371d041c1179d5f442083893f0c13dd28859bf8398606947e9338c0f598a59->leave($__internal_16371d041c1179d5f442083893f0c13dd28859bf8398606947e9338c0f598a59_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6ca23c166758c87be52ab32bd98feb23ec877ec6bf859db0d106e2733c0670c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6ca23c166758c87be52ab32bd98feb23ec877ec6bf859db0d106e2733c0670c9->enter($__internal_6ca23c166758c87be52ab32bd98feb23ec877ec6bf859db0d106e2733c0670c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_fb62d8c3385fdb0c1017a01b42d1306df3a41e37d7e451a3d0f22bff136a58aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fb62d8c3385fdb0c1017a01b42d1306df3a41e37d7e451a3d0f22bff136a58aa->enter($__internal_fb62d8c3385fdb0c1017a01b42d1306df3a41e37d7e451a3d0f22bff136a58aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_fb62d8c3385fdb0c1017a01b42d1306df3a41e37d7e451a3d0f22bff136a58aa->leave($__internal_fb62d8c3385fdb0c1017a01b42d1306df3a41e37d7e451a3d0f22bff136a58aa_prof);

            
            $__internal_6ca23c166758c87be52ab32bd98feb23ec877ec6bf859db0d106e2733c0670c9->leave($__internal_6ca23c166758c87be52ab32bd98feb23ec877ec6bf859db0d106e2733c0670c9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/home/sergey/portfolio_new/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
