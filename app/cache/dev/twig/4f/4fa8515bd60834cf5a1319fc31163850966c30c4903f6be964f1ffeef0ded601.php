<?php

/* ::base.html.twig */
class __TwigTemplate_811356ce909eb05f91a0b4824516184838c145ead05ff2d68218c4333c737432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
            'pub' => array($this, 'block_pub'),
            'actualite' => array($this, 'block_actualite'),
            'aside' => array($this, 'block_aside'),
            'group' => array($this, 'block_group'),
            'organisation_peso' => array($this, 'block_organisation_peso'),
            'forum' => array($this, 'block_forum'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"asnApp\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-grey\">

        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 104
        echo "

        <div class=\"container\" id=\"main-container\">
            ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "        </div> <!-- /container -->

        ";
        // line 146
        $this->displayBlock('footer', $context, $blocks);
        // line 197
        echo "
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
        // line 200
        $this->displayBlock('javascripts', $context, $blocks);
        // line 218
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "asn";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "            <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container-fluid bg-primary\" id=\"header-bar\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">
                            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/logo_asn.png"), "html", null, true);
        echo "\" id=\"logo\">
                        </a>
                        <a class=\"navbar-brand\" href=\"#\" title=\"ASN\">AVM Social Network</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"input-group form-group-sm\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\" size=\"40\">
                            </div>
                            ";
        // line 44
        echo "                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-suitcase fa-2x\"></i>
                                    <span class=\"custom-badge\">123</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope fa-2x\"></i>
                                    <span class=\"custom-badge\">17</span>
                                </a>
                            </li>
                            <li class=\"bg-grey img-circle text-center\" id=\"img-user\">
                                <a href=\"#\"><span><i class=\"fa fa-user fa-3x\"></i></span></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li><a href=\"#\">Paramètres</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Langue</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("asn_logout");
        echo "\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div class=\"container\" id=\"sub-header-bar\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("asn_home");
        echo "\">Accueil</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Mes groupes</a></li>
                            <li><a href=\"#\">Meeting</a></li>
                            <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("asn_calendar");
        echo "\">Organisation personnelle</a></li>
                            <li><a href=\"#\">AVM</a></li>
                            <li><a href=\"#\">Mes contacts</a></li>
                        </ul>
                    </div>
                </div> ";
        // line 102
        echo "            </nav>
        ";
    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        echo " 
                <div class=\"row\" ng-controller=\"AgendaController\">
                    ";
        // line 109
        $this->displayBlock('section', $context, $blocks);
        // line 126
        echo "
                    ";
        // line 127
        $this->displayBlock('aside', $context, $blocks);
        // line 142
        echo "                </div> <!-- /row -->
            ";
    }

    // line 109
    public function block_section($context, array $blocks = array())
    {
        // line 110
        echo "                        <div class=\"col-lg-9 col-md-9 col-sm-9\" id=\"main\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 block-pub text-muted\">
                                    ";
        // line 113
        $this->displayBlock('pub', $context, $blocks);
        // line 116
        echo "                                </div> <!-- /block-pub -->

                                <div class=\"col-lg-8 block-actualite\">
                                    ";
        // line 119
        $this->displayBlock('actualite', $context, $blocks);
        // line 122
        echo "                                </div> <!-- /block-actualite -->
                            </div>
                        </div> <!-- /main -->
                    ";
    }

    // line 113
    public function block_pub($context, array $blocks = array())
    {
        // line 114
        echo "
                                    ";
    }

    // line 119
    public function block_actualite($context, array $blocks = array())
    {
        // line 120
        echo "
                                    ";
    }

    // line 127
    public function block_aside($context, array $blocks = array())
    {
        // line 128
        echo "                        <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
                            ";
        // line 129
        $this->displayBlock('group', $context, $blocks);
        // line 132
        echo "
                            ";
        // line 133
        $this->displayBlock('organisation_peso', $context, $blocks);
        // line 136
        echo "
                            ";
        // line 137
        $this->displayBlock('forum', $context, $blocks);
        // line 140
        echo "                        </div> <!-- /aside -->
                    ";
    }

    // line 129
    public function block_group($context, array $blocks = array())
    {
        // line 130
        echo "
                            ";
    }

    // line 133
    public function block_organisation_peso($context, array $blocks = array())
    {
        // line 134
        echo "
                            ";
    }

    // line 137
    public function block_forum($context, array $blocks = array())
    {
        // line 138
        echo "
                            ";
    }

    // line 146
    public function block_footer($context, array $blocks = array())
    {
        // line 147
        echo "            <footer class=\"text-center text-muted\">
                <div class=\"container-fluid bg-primary\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <h1><i class=\"fa fa-location-arrow\"></i></h1>
                            <ul class=\"list-unstyled\">
                                <li>Cameroun</li>
                                <li>Kenya</li>
                                <li>Cote d'ivoire</li>
                                <li>Tchad</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\">
                            <h1><i class=\"fa fa-flag\"></i></h1>
                            <ul class=\"list-unstyled\">
                                <li>Français</li>
                                <li>Anglais</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\">
                            <br>
                            <h4>Suivez nous</h4>
                            <div class=\"panel bg-orange\">
                                <ul class=\"list-unstyled list-inline\">
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-facebook-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-twitter-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-linkedin-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"fa fa-vimeo-square fa-4x\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p>
                                Copyright &copy; 2016.
                            </p>
                        </div>
                    </div>
                </div>
            </footer><!-- /footer -->
        ";
    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        // line 201
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/moment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/app.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/angular-js/angular.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/angular-js/angular.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/angularjs/asnApp.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 216,  448 => 215,  444 => 214,  439 => 212,  435 => 211,  431 => 210,  427 => 209,  423 => 208,  419 => 207,  415 => 206,  411 => 205,  407 => 204,  403 => 203,  399 => 202,  394 => 201,  391 => 200,  338 => 147,  335 => 146,  330 => 138,  327 => 137,  322 => 134,  319 => 133,  314 => 130,  311 => 129,  306 => 140,  304 => 137,  301 => 136,  299 => 133,  296 => 132,  294 => 129,  291 => 128,  288 => 127,  283 => 120,  280 => 119,  275 => 114,  272 => 113,  265 => 122,  263 => 119,  258 => 116,  256 => 113,  251 => 110,  248 => 109,  243 => 142,  241 => 127,  238 => 126,  236 => 109,  230 => 107,  225 => 102,  217 => 96,  210 => 92,  187 => 72,  175 => 63,  154 => 44,  139 => 31,  126 => 20,  123 => 19,  117 => 13,  113 => 12,  109 => 11,  105 => 10,  101 => 9,  96 => 8,  93 => 7,  87 => 6,  81 => 218,  79 => 200,  75 => 199,  71 => 198,  68 => 197,  66 => 146,  62 => 144,  60 => 107,  55 => 104,  53 => 19,  45 => 15,  43 => 7,  39 => 6,  32 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="asnApp">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}asn{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/css/jquery-ui.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/css/style.css') }}" rel="stylesheet" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('res/img/logo_asn.png') }}" />*/
/*     </head>*/
/*     <body class="bg-grey">*/
/* */
/*         {% block header %}*/
/*             <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*                 <div class="container-fluid bg-primary" id="header-bar">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="#">*/
/*                             <img src="{{ asset('res/img/logo_asn.png') }}" id="logo">*/
/*                         </a>*/
/*                         <a class="navbar-brand" href="#" title="ASN">AVM Social Network</a>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <form class="navbar-form navbar-left" role="search">*/
/*                             <div class="input-group form-group-sm">*/
/*                                 <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*                                 <input type="text" class="form-control" placeholder="Recherche..." size="40">*/
/*                             </div>*/
/*                             {# <button type="submit" class="btn btn-warning btn-sm active">Rechercher</button>#}*/
/*                         </form>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-suitcase fa-2x"></i>*/
/*                                     <span class="custom-badge">123</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-envelope fa-2x"></i>*/
/*                                     <span class="custom-badge">17</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="bg-grey img-circle text-center" id="img-user">*/
/*                                 <a href="#"><span><i class="fa fa-user fa-3x"></i></span></a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     {{ app.user.firstname }}*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     <li><a href="#">Profil</a></li>*/
/*                                     <li><a href="#">Paramètres</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="#">Langue</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="{{ path('asn_logout') }}">Déconnexion</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/*                 </div><!-- /.container-fluid -->*/
/*                 <div class="container" id="sub-header-bar">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="{{ path('asn_home') }}">Accueil</a></li>*/
/*                             <li><a href="#">Forum</a></li>*/
/*                             <li><a href="#">Mes groupes</a></li>*/
/*                             <li><a href="#">Meeting</a></li>*/
/*                             <li><a href="{{ path('asn_calendar') }}">Organisation personnelle</a></li>*/
/*                             <li><a href="#">AVM</a></li>*/
/*                             <li><a href="#">Mes contacts</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div> {# /.container #}*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/* */
/*         <div class="container" id="main-container">*/
/*             {% block body %} */
/*                 <div class="row" ng-controller="AgendaController">*/
/*                     {% block section %}*/
/*                         <div class="col-lg-9 col-md-9 col-sm-9" id="main">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-4 block-pub text-muted">*/
/*                                     {% block pub %}*/
/* */
/*                                     {% endblock %}*/
/*                                 </div> <!-- /block-pub -->*/
/* */
/*                                 <div class="col-lg-8 block-actualite">*/
/*                                     {% block actualite %}*/
/* */
/*                                     {% endblock %}*/
/*                                 </div> <!-- /block-actualite -->*/
/*                             </div>*/
/*                         </div> <!-- /main -->*/
/*                     {% endblock %}*/
/* */
/*                     {% block aside %}*/
/*                         <div class="col-lg-3 col-md-3 col-sm-3" id="aside">*/
/*                             {% block group %}*/
/* */
/*                             {% endblock %}*/
/* */
/*                             {% block organisation_peso %}*/
/* */
/*                             {% endblock %}*/
/* */
/*                             {% block forum %}*/
/* */
/*                             {% endblock %}*/
/*                         </div> <!-- /aside -->*/
/*                     {% endblock %}*/
/*                 </div> <!-- /row -->*/
/*             {% endblock %}*/
/*         </div> <!-- /container -->*/
/* */
/*         {% block footer %}*/
/*             <footer class="text-center text-muted">*/
/*                 <div class="container-fluid bg-primary">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-4">*/
/*                             <h1><i class="fa fa-location-arrow"></i></h1>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>Cameroun</li>*/
/*                                 <li>Kenya</li>*/
/*                                 <li>Cote d'ivoire</li>*/
/*                                 <li>Tchad</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-lg-4">*/
/*                             <h1><i class="fa fa-flag"></i></h1>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>Français</li>*/
/*                                 <li>Anglais</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-lg-4">*/
/*                             <br>*/
/*                             <h4>Suivez nous</h4>*/
/*                             <div class="panel bg-orange">*/
/*                                 <ul class="list-unstyled list-inline">*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-linkedin-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-vimeo-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <p>*/
/*                                 Copyright &copy; 2016.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer><!-- /footer -->*/
/*         {% endblock %}*/
/* */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-2.2.3.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/moment.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/transition.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/carousel.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-ui.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.validate.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.transit.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/additional-methods.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js') }}"></script>*/
/*             <script src="{{ asset('res/js/app.js') }}"></script>*/
/* */
/*             <script src="{{ asset('res/lib/angular-js/angular.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/angular-js/angular.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/angularjs/asnApp.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
