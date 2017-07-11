<?php

/* home.html.twig */
class __TwigTemplate_2ab54c967bff1450448be52c06703696926e880c13f0e59bf373d622424c6af0 extends Twig_Template
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
        $__internal_1c09ad711d9cb4884772000e65877626ab8cf40882fb911fbe17fc0769fc8926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c09ad711d9cb4884772000e65877626ab8cf40882fb911fbe17fc0769fc8926->enter($__internal_1c09ad711d9cb4884772000e65877626ab8cf40882fb911fbe17fc0769fc8926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_8c8ae483af63b531bcadbed2ccda1561be2140cc692039f925060b715e3cd45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8ae483af63b531bcadbed2ccda1561be2140cc692039f925060b715e3cd45e->enter($__internal_8c8ae483af63b531bcadbed2ccda1561be2140cc692039f925060b715e3cd45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

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
        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
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
                        <a class=\"navbar-brand\" href=\"#home\">SZelentsov</a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#home\">home</a></li>
                            <li><a href=\"#about\">about</a></li>
                            <li><a href=\"#portfolio\">portfolio</a></li>
                            <li><a href=\"#contact\">contact</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-10 col-sm-12 col-xs-12\">
                        <div class=\"wrap\">
                            <div class=\"type-wrap\">
                                <div id=\"typed-strings\">
                                    <p></p>
                                    <p>Welcome!</p>
                                    <p>I am Sergey Zelentsov.</p>
                                    <p>Beginner php developer.</p>
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
                    <div class=\"section-title\">
                        <h2>Story About Me!</h2>  
                    </div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"my-photo\">
                                <img src=\"img/im.png\" alt=\"...\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"about-me\">
                                <h4>Beginner php developer from Ukraine.</h4>
                                <p>
                                    My name is Sergey.
                                    I have higher education - an expert in economic cybernetics.                                   
                                    The purpose of creating this summary - start a career junior PHP developer.                                   
                                    I have no commercial experience in the development.
                                    I have good analytical skills. 
                                    Easy to learn. 
                                    I work well in a team.                                   
                                    I'm waiting for interesting projects, worthy of payment and career opportunities.
                                </p>
                                <ul id=\"my-skill\">
                                    <li>HTML/CSS</li>
                                    <li>PHP (native PHP)</li>
                                    <li> MVC-pattern</li>
                                    <li>MySQL/PostgreSQL</li>
                                    <li>jQuery/ AJAX</li>
                                    <li>JSON</li>
                                    <li>GNU/Linux</li>
                                    <li>Symfony 3</li>
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
                    <div class=\"section-title\">
                        <h2>Works</h2>  
                    </div>
                    <div class=\"col-lg-12\">
                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 132
            echo "                            <div class=\"item col-lg-4\">
                                <figure>
                                    <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "img", array()), "html", null, true);
            echo "\" alt=\"image\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "\">
                                    <figcaption>
                                        <h2>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</h2>
                                    </figcaption>
                                    <!-- Modal -->
                                    <div class=\"modal fade  \" id=\"";
            // line 139
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
                                                          <img src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "img", array()), "html", null, true);
            echo "\" class=\"col-lg-7 col-md-5 col-sm-12 col-xs-12\" alt=\"image\"/>
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
                                </figure>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
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
                        <h2>Contact Me!</h2>  
                    </div>
                    <form id=\"contactForm\" class=\"contact-form\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <input id=\"name\" class=\"form-control\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"\">
                            </div>
                            <div class=\"col-md-6\" >
                                <input id=\"email\" class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\">
                            </div>
                            <div class=\"col-md-12\" >
                                <input id=\"subject\" class=\"form-control\" type=\"text\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                            </div>
                            <div class=\"col-md-12\" >
                                <textarea id=\"message\" class=\"form-control\" placeholder=\"Message\" rows=\"7\" required=\"\"></textarea>
                            </div>
                            <div class=\"col-md-12\" >
                                <button class=\"btn btn-default\" type=\"submit\">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-5 col-xs-offset-1\" id=\"telMail\">
                        <a href=\"tel:+380967831904\"><p>+38 (096) 783 19 04</p></a>
                        <a href=\"mailto:zelentsov24@dmail.com\"><p>zelentsov24@gmail.com</p></a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-5 col-lg-offset-5 col-xs-offset-2\">
                        <a href=\"https://www.facebook.com/profile.php?id=100008758237693\" target=\"_blank\"><div id=\"facebook\"></div></a>
                        <a href=\"https://github.com/szelentsov\" target=\"_blank\"><div id=\"github\"></div></a>
                        <a href=\"https://www.linkedin.com/in/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D1%86%D0%BE%D0%B2-179483117/\" target=\"_blank\"><div id=\"linkedin\"></div></a>
                        <a href=\"mailto:zelentsov24@gmail.com\"><div id=\"mailto\"></div></a>
                        <a href=\"viber://chat?number=%2B380967831904\"><div id=\"viber\"></div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END CONTACT-->
        <!-- START FOOTER-->
        <footer class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h5>
                © 2017 Sergey Zelentsov            
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
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- BOOTSTRAP JS -->
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- MAIN JS -->
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- TYPED JS -->
        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("main/js/typed.min.js"), "html", null, true);
        echo "\"></script>
    </body>";
        
        $__internal_1c09ad711d9cb4884772000e65877626ab8cf40882fb911fbe17fc0769fc8926->leave($__internal_1c09ad711d9cb4884772000e65877626ab8cf40882fb911fbe17fc0769fc8926_prof);

        
        $__internal_8c8ae483af63b531bcadbed2ccda1561be2140cc692039f925060b715e3cd45e->leave($__internal_8c8ae483af63b531bcadbed2ccda1561be2140cc692039f925060b715e3cd45e_prof);

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
        return array (  308 => 237,  303 => 235,  298 => 233,  293 => 231,  222 => 162,  205 => 151,  201 => 150,  197 => 149,  184 => 139,  178 => 136,  171 => 134,  167 => 132,  163 => 131,  47 => 18,  42 => 16,  25 => 1,);
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
                        <a class=\"navbar-brand\" href=\"#home\">SZelentsov</a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#home\">home</a></li>
                            <li><a href=\"#about\">about</a></li>
                            <li><a href=\"#portfolio\">portfolio</a></li>
                            <li><a href=\"#contact\">contact</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-offset-2 col-md-offset-1 col-lg-8 col-md-10 col-sm-12 col-xs-12\">
                        <div class=\"wrap\">
                            <div class=\"type-wrap\">
                                <div id=\"typed-strings\">
                                    <p></p>
                                    <p>Welcome!</p>
                                    <p>I am Sergey Zelentsov.</p>
                                    <p>Beginner php developer.</p>
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
                    <div class=\"section-title\">
                        <h2>Story About Me!</h2>  
                    </div>
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"my-photo\">
                                <img src=\"img/im.png\" alt=\"...\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\" id=\"about-me\">
                                <h4>Beginner php developer from Ukraine.</h4>
                                <p>
                                    My name is Sergey.
                                    I have higher education - an expert in economic cybernetics.                                   
                                    The purpose of creating this summary - start a career junior PHP developer.                                   
                                    I have no commercial experience in the development.
                                    I have good analytical skills. 
                                    Easy to learn. 
                                    I work well in a team.                                   
                                    I'm waiting for interesting projects, worthy of payment and career opportunities.
                                </p>
                                <ul id=\"my-skill\">
                                    <li>HTML/CSS</li>
                                    <li>PHP (native PHP)</li>
                                    <li> MVC-pattern</li>
                                    <li>MySQL/PostgreSQL</li>
                                    <li>jQuery/ AJAX</li>
                                    <li>JSON</li>
                                    <li>GNU/Linux</li>
                                    <li>Symfony 3</li>
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
                    <div class=\"section-title\">
                        <h2>Works</h2>  
                    </div>
                    <div class=\"col-lg-12\">
                        {% for post in posts %}
                            <div class=\"item col-lg-4\">
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
                                                          <img src=\"{{ post.img }}\" class=\"col-lg-7 col-md-5 col-sm-12 col-xs-12\" alt=\"image\"/>
                                                            <h2>{{ post.name }}</h2>
                                                            <p>{{ post.description }}</p>
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
                        <h2>Contact Me!</h2>  
                    </div>
                    <form id=\"contactForm\" class=\"contact-form\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <input id=\"name\" class=\"form-control\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"\">
                            </div>
                            <div class=\"col-md-6\" >
                                <input id=\"email\" class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"\">
                            </div>
                            <div class=\"col-md-12\" >
                                <input id=\"subject\" class=\"form-control\" type=\"text\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                            </div>
                            <div class=\"col-md-12\" >
                                <textarea id=\"message\" class=\"form-control\" placeholder=\"Message\" rows=\"7\" required=\"\"></textarea>
                            </div>
                            <div class=\"col-md-12\" >
                                <button class=\"btn btn-default\" type=\"submit\">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-5 col-xs-offset-1\" id=\"telMail\">
                        <a href=\"tel:+380967831904\"><p>+38 (096) 783 19 04</p></a>
                        <a href=\"mailto:zelentsov24@dmail.com\"><p>zelentsov24@gmail.com</p></a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-5 col-lg-offset-5 col-xs-offset-2\">
                        <a href=\"https://www.facebook.com/profile.php?id=100008758237693\" target=\"_blank\"><div id=\"facebook\"></div></a>
                        <a href=\"https://github.com/szelentsov\" target=\"_blank\"><div id=\"github\"></div></a>
                        <a href=\"https://www.linkedin.com/in/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D1%86%D0%BE%D0%B2-179483117/\" target=\"_blank\"><div id=\"linkedin\"></div></a>
                        <a href=\"mailto:zelentsov24@gmail.com\"><div id=\"mailto\"></div></a>
                        <a href=\"viber://chat?number=%2B380967831904\"><div id=\"viber\"></div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END CONTACT-->
        <!-- START FOOTER-->
        <footer class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h5>
                © 2017 Sergey Zelentsov            
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
    </body>", "home.html.twig", "/home/sergey/portfolio/app/Resources/views/home.html.twig");
    }
}
