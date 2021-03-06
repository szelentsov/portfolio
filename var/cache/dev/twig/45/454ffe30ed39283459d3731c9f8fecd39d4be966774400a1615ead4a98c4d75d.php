<?php

/* home.html.twig */
class __TwigTemplate_a3d2b325122853184e57c1f6aee7d2df45ff1a12d29ef2faf874cb5e1b231f99 extends Twig_Template
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
        $__internal_32359e5b0e77392dd671aa1398d5a65e15fce00567fa41397ab6daa7b01e74e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32359e5b0e77392dd671aa1398d5a65e15fce00567fa41397ab6daa7b01e74e3->enter($__internal_32359e5b0e77392dd671aa1398d5a65e15fce00567fa41397ab6daa7b01e74e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_dc6217286dc4217558b87ffb004947a07c7c22ef261a563fbf8890d3502507b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6217286dc4217558b87ffb004947a07c7c22ef261a563fbf8890d3502507b3->enter($__internal_dc6217286dc4217558b87ffb004947a07c7c22ef261a563fbf8890d3502507b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>   
        <!-- META -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Personal Portfolio Sergey Zelentsov\">
        <meta name=\"keywords\" content=\"creative personal, resume, cv, portfolio, personal, developer, Zelentsov,personal resume, onepage, clean, modern\">
        <meta name=\"author\" content=\"Zelentsov Sergey\">
        <!-- PAGE TITLE -->
        <title>Zelentsov - personal portfolio</title>
        <!-- GOOGLE FONTS -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <!-- BOOTSTRAP CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <!-- Animate CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/css/animate.css"), "html", null, true);
        echo "\" />
        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/css/main.css"), "html", null, true);
        echo "\" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body data-spy=\"scroll\" data-target=\".navbar-default\">
        <!-- START PRELOADER -->
        <div class=\"preloader\">
            <div class=\"status\">
                <span class=\"svg_anm\"></span><br>
                Load
            </div>
        </div>
        <!-- / END PRELOADER -->
        <!-- START HOMEPAGE -->
        <header class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"home\">
            <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#home\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 0, array(), "array"), "value", array()), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#home\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 1, array(), "array"), "value", array()), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#about\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 2, array(), "array"), "value", array()), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#portfolio\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 3, array(), "array"), "value", array()), "html", null, true);
        echo "</a></li>
                            <li><a href=\"#contact\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 4, array(), "array"), "value", array()), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
            <div class=\"container-fluid welcome-mess\">
                <div class=\"row\">
                    <div class=\"col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-10 col-sm-12 col-xs-12\">
                        <div class=\"wrap\">
                            <div class=\"type-wrap\">
                                <div id=\"typed-strings\">
                                    <p></p>
                                    <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 5, array(), "array"), "value", array()), "html", null, true);
        echo "</p>
                                    <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 6, array(), "array"), "value", array()), "html", null, true);
        echo "</p>
                                    <p>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 7, array(), "array"), "value", array()), "html", null, true);
        echo "</p>
                                </div>
                                <span id=\"typed\" style=\"white-space:pre;\"></span>
                            </div>
                            <div id=\"home-arrow-down\">
                                <a href=\"#about\" >
                                    <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- / END HOMEPAGE -->
        <!-- START ABOUT -->
        <section id=\"about\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\" id=\"section-title-2\">
                        <h2>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 8, array(), "array"), "value", array()), "html", null, true);
        echo "</h2>  
                    </div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"my-photo\">
                                <img src=\"img/im.png\" alt=\"...\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"about-me\">
                                <h4>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 11, array(), "array"), "value", array()), "html", null, true);
        echo "</h4>
                                <p>
                                    ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 12, array(), "array"), "value", array()), "html", null, true);
        echo "
                                </p>
                                <ul id=\"my-skill\">
                                    <li>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 13, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 14, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 15, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 16, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 17, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 18, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 19, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                    <li>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 20, array(), "array"), "value", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END ABOUT -->
        <!-- START PORTFOLIO-->
        <section id=\"portfolio\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\" id=\"section-title-3\">
                        <h2>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 9, array(), "array"), "value", array()), "html", null, true);
        echo "</h2>  
                    </div>
                    <div class=\"col-lg-12\">
                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 129
            echo "                            <div class=\"item col-lg-4 col-md-4 col-sm-10 col-sm-offset-1 col-xs-12\">
                                <figure>
                                    <img src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "img", array()), "html", null, true);
            echo "\" alt=\"image\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "\">
                                    <figcaption>
                                        <h2>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</h2>
                                    </figcaption>
                                    <!-- Modal -->
                                    <div class=\"modal fade  \" id=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                      <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                          <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                          </div>
                                          <div class=\"modal-body\">
                                              <div class=\"container\">
                                                  <div class=\"row\">
                                                      <div class=\"col-lg-8 modal-post\">
                                                          <div class=\"col-lg-6 col-md-5 col-sm-12 col-xs-12\">
                                                            <img src=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "img", array()), "html", null, true);
            echo "\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"  alt=\"image\"/>
                                                          </div>
                                                          <div class=\"col-lg-6 col-md-5 col-sm-12 col-xs-12\">
                                                            <h2>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</h2>
                                                            <p>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </figure>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    </div>
                </div>
            </div>
        </section>
        <!-- / END PORTFOLIO-->
        <!-- START CONTACT-->
        <section id=\"contact\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\">
                        <h2>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 10, array(), "array"), "value", array()), "html", null, true);
        echo "</h2>  
                    </div>
                    <div id=\"load-ajax\">
                        ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\" >
                                ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\" >
                                ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\" >
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 194
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"telMail\">
                        <a href=\"tel:+380967831904\"><p>+38 (096) 783 19 04</p></a>
                        <a href=\"mailto:zelentsov24@dmail.com\"><p>zelentsov24@gmail.com</p></a>
                    </div>
                </div>
                <div class=\"soc-icon\">
                    <a href=\"https://www.facebook.com/profile.php?id=100008758237693\" target=\"_blank\"><div id=\"facebook\"></div></a>
                    <a href=\"https://github.com/szelentsov\" target=\"_blank\"><div id=\"github\"></div></a>
                    <a href=\"https://www.linkedin.com/in/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D1%86%D0%BE%D0%B2-179483117/\" target=\"_blank\"><div id=\"linkedin\"></div></a>
                    <a href=\"mailto:zelentsov24@gmail.com\"><div id=\"mailto\"></div></a>
                    <a href=\"viber://chat?number=%2B380967831904\"><div id=\"viber\"></div></a>
                </div>
            </div>
        </section>
        <!-- / END CONTACT-->
        <!-- START FOOTER-->
        <footer class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h5>
                ";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), 21, array(), "array"), "value", array()), "html", null, true);
        echo "          
            </h5>
        </footer>
        <!-- / END FOOTER-->
        <!-- START CROLL UP-->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"scrollup\">
                        <span class=\"glyphicon glyphicon-chevron-up\"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- / END CROLL UP-->
        <!-- LATEST JQUERY -->
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- BOOTSTRAP JS -->
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- MAIN JS -->
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- TYPED JS -->
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/js/typed.min.js"), "html", null, true);
        echo "\"></script>
    </body>";
        
        $__internal_32359e5b0e77392dd671aa1398d5a65e15fce00567fa41397ab6daa7b01e74e3->leave($__internal_32359e5b0e77392dd671aa1398d5a65e15fce00567fa41397ab6daa7b01e74e3_prof);

        
        $__internal_dc6217286dc4217558b87ffb004947a07c7c22ef261a563fbf8890d3502507b3->leave($__internal_dc6217286dc4217558b87ffb004947a07c7c22ef261a563fbf8890d3502507b3_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 238,  394 => 236,  389 => 234,  384 => 232,  365 => 216,  340 => 194,  334 => 191,  328 => 188,  322 => 185,  316 => 182,  310 => 179,  304 => 176,  298 => 173,  286 => 163,  268 => 151,  264 => 150,  258 => 147,  244 => 136,  238 => 133,  231 => 131,  227 => 129,  223 => 128,  217 => 125,  200 => 111,  196 => 110,  192 => 109,  188 => 108,  184 => 107,  180 => 106,  176 => 105,  172 => 104,  166 => 101,  161 => 99,  150 => 91,  127 => 71,  123 => 70,  119 => 69,  104 => 57,  100 => 56,  96 => 55,  92 => 54,  84 => 49,  52 => 20,  47 => 18,  42 => 16,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>   
        <!-- META -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Personal Portfolio Sergey Zelentsov\">
        <meta name=\"keywords\" content=\"creative personal, resume, cv, portfolio, personal, developer, Zelentsov,personal resume, onepage, clean, modern\">
        <meta name=\"author\" content=\"Zelentsov Sergey\">
        <!-- PAGE TITLE -->
        <title>Zelentsov - personal portfolio</title>
        <!-- GOOGLE FONTS -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <!-- BOOTSTRAP CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" />
        <!-- Animate CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('main/css/animate.css') }}\" />
        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('main/css/main.css') }}\" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body data-spy=\"scroll\" data-target=\".navbar-default\">
        <!-- START PRELOADER -->
        <div class=\"preloader\">
            <div class=\"status\">
                <span class=\"svg_anm\"></span><br>
                Load
            </div>
        </div>
        <!-- / END PRELOADER -->
        <!-- START HOMEPAGE -->
        <header class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" id=\"home\">
            <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#home\">
                            {{ config[0].value }}
                        </a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#home\">{{ config[1].value }}</a></li>
                            <li><a href=\"#about\">{{ config[2].value }}</a></li>
                            <li><a href=\"#portfolio\">{{ config[3].value }}</a></li>
                            <li><a href=\"#contact\">{{ config[4].value }}</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
            <div class=\"container-fluid welcome-mess\">
                <div class=\"row\">
                    <div class=\"col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-10 col-sm-12 col-xs-12\">
                        <div class=\"wrap\">
                            <div class=\"type-wrap\">
                                <div id=\"typed-strings\">
                                    <p></p>
                                    <p>{{ config[5].value }}</p>
                                    <p>{{ config[6].value }}</p>
                                    <p>{{ config[7].value }}</p>
                                </div>
                                <span id=\"typed\" style=\"white-space:pre;\"></span>
                            </div>
                            <div id=\"home-arrow-down\">
                                <a href=\"#about\" >
                                    <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- / END HOMEPAGE -->
        <!-- START ABOUT -->
        <section id=\"about\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\" id=\"section-title-2\">
                        <h2>{{ config[8].value }}</h2>  
                    </div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"my-photo\">
                                <img src=\"img/im.png\" alt=\"...\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"about-me\">
                                <h4>{{ config[11].value }}</h4>
                                <p>
                                    {{ config[12].value }}
                                </p>
                                <ul id=\"my-skill\">
                                    <li>{{ config[13].value }}</li>
                                    <li>{{ config[14].value }}</li>
                                    <li>{{ config[15].value }}</li>
                                    <li>{{ config[16].value }}</li>
                                    <li>{{ config[17].value }}</li>
                                    <li>{{ config[18].value }}</li>
                                    <li>{{ config[19].value }}</li>
                                    <li>{{ config[20].value }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END ABOUT -->
        <!-- START PORTFOLIO-->
        <section id=\"portfolio\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\" id=\"section-title-3\">
                        <h2>{{ config[9].value }}</h2>  
                    </div>
                    <div class=\"col-lg-12\">
                        {% for post in posts %}
                            <div class=\"item col-lg-4 col-md-4 col-sm-10 col-sm-offset-1 col-xs-12\">
                                <figure>
                                    <img src=\"{{ post.img }}\" alt=\"image\" data-toggle=\"modal\" data-target=\"#{{ post.name }}\">
                                    <figcaption>
                                        <h2>{{ post.name }}</h2>
                                    </figcaption>
                                    <!-- Modal -->
                                    <div class=\"modal fade  \" id=\"{{ post.name }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                      <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                          <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                          </div>
                                          <div class=\"modal-body\">
                                              <div class=\"container\">
                                                  <div class=\"row\">
                                                      <div class=\"col-lg-8 modal-post\">
                                                          <div class=\"col-lg-6 col-md-5 col-sm-12 col-xs-12\">
                                                            <img src=\"{{ post.img }}\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"  alt=\"image\"/>
                                                          </div>
                                                          <div class=\"col-lg-6 col-md-5 col-sm-12 col-xs-12\">
                                                            <h2>{{ post.name }}</h2>
                                                            <p>{{ post.description }}</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </figure>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </section>
        <!-- / END PORTFOLIO-->
        <!-- START CONTACT-->
        <section id=\"contact\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-title\">
                        <h2>{{ config[10].value }}</h2>  
                    </div>
                    <div id=\"load-ajax\">
                        {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.name) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.email) }}
                            </div>
                            <div class=\"col-md-12\" >
                                {{ form_row(form.subject) }}
                            </div>
                            <div class=\"col-md-12\" >
                                {{ form_row(form.message) }}
                            </div>
                            <div class=\"col-md-12\" >
                                {{ form_row(form.save) }}
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\" id=\"telMail\">
                        <a href=\"tel:+380967831904\"><p>+38 (096) 783 19 04</p></a>
                        <a href=\"mailto:zelentsov24@dmail.com\"><p>zelentsov24@gmail.com</p></a>
                    </div>
                </div>
                <div class=\"soc-icon\">
                    <a href=\"https://www.facebook.com/profile.php?id=100008758237693\" target=\"_blank\"><div id=\"facebook\"></div></a>
                    <a href=\"https://github.com/szelentsov\" target=\"_blank\"><div id=\"github\"></div></a>
                    <a href=\"https://www.linkedin.com/in/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D1%86%D0%BE%D0%B2-179483117/\" target=\"_blank\"><div id=\"linkedin\"></div></a>
                    <a href=\"mailto:zelentsov24@gmail.com\"><div id=\"mailto\"></div></a>
                    <a href=\"viber://chat?number=%2B380967831904\"><div id=\"viber\"></div></a>
                </div>
            </div>
        </section>
        <!-- / END CONTACT-->
        <!-- START FOOTER-->
        <footer class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h5>
                {{ config[21].value }}          
            </h5>
        </footer>
        <!-- / END FOOTER-->
        <!-- START CROLL UP-->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"scrollup\">
                        <span class=\"glyphicon glyphicon-chevron-up\"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- / END CROLL UP-->
        <!-- LATEST JQUERY -->
        <script src=\"{{ asset('bootstrap/js/jquery.min.js') }}\"></script>
        <!-- BOOTSTRAP JS -->
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        <!-- MAIN JS -->
        <script src=\"{{ asset('main/js/main.js') }}\"></script>
        <!-- TYPED JS -->
        <script src=\"{{ asset('main/js/typed.min.js') }}\"></script>
    </body>", "home.html.twig", "/home/sergey/portfolio_new/app/Resources/views/home.html.twig");
    }
}
