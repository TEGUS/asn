<?php

/* ::base.html.twig */
class __TwigTemplate_1c2f1329d4d70a56faa8d591fa965aaf4d00b0c803dfca8e03a8f3d2d5f307a4 extends Twig_Template
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
            'actualites' => array($this, 'block_actualites'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-grey\">

        ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "
        <div class=\"container\" id=\"main\">
            <div class=\"row\">
                ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "            </div> <!-- /row -->
        </div> <!-- /container -->

        ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 187
        echo "

        ";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 196
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "ASN";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
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
        // line 30
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
        // line 43
        echo "                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-suitcase fa-lg\"></i>
                                    <span class=\"custom-badge\">123</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope fa-lg\"></i>
                                    <span class=\"custom-badge\">17</span>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" id=\"img-user\" class=\"img-circle\">

                                    ";
        // line 62
        echo "
                                    ";
        // line 66
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("asn_profile");
        echo "\">Profile</a></li>
                                    <li><a href=\"#\">Paramètres</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Langue</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
        // line 75
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
        // line 95
        echo $this->env->getExtension('routing')->getPath("asn_home");
        echo "\">Accueil</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Mes groupes</a></li>
                            <li><a href=\"#\">Meeting</a></li>
                            <li><a href=\"#\">Organisation personnelle</a></li>
                            <li><a href=\"#\">Mes contacts</a></li>
                        </ul>
                    </div>
                </div> ";
        // line 104
        echo "            </nav>
        ";
    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        echo " 
                    <div class=\"col-lg-9 col-md-9 col-sm-9\">
                        ";
        // line 111
        $this->displayBlock('section', $context, $blocks);
        // line 126
        echo "                    </div> <!-- /main -->
                    <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
                        ";
        // line 128
        $this->displayBlock('aside', $context, $blocks);
        // line 131
        echo "                    </div> <!-- /aside -->
                ";
    }

    // line 111
    public function block_section($context, array $blocks = array())
    {
        // line 112
        echo "                            <div class=\"row\">
                                <div class=\"col-lg-4 text-muted\" id=\"pub\">
                                    ";
        // line 114
        $this->displayBlock('pub', $context, $blocks);
        // line 117
        echo "                                </div> <!-- /block-pub -->

                                <div class=\"col-lg-8\" id=\"actualites\">
                                    ";
        // line 120
        $this->displayBlock('actualites', $context, $blocks);
        // line 123
        echo "                                </div> <!-- /block-actualite -->
                            </div>
                        ";
    }

    // line 114
    public function block_pub($context, array $blocks = array())
    {
        // line 115
        echo "
                                    ";
    }

    // line 120
    public function block_actualites($context, array $blocks = array())
    {
        // line 121
        echo "
                                    ";
    }

    // line 128
    public function block_aside($context, array $blocks = array())
    {
        // line 129
        echo "                            
                        ";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
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
                            <div class=\"\">
                                <ul class=\"list-unstyled list-inline\">
                                    <li>
                                        <a href=\"#\" style=\"color: #1a237e\"><i class=\"fa fa-facebook-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #2196f3;\"><i class=\"fa fa-twitter-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #1565c0\"><i class=\"fa fa-linkedin-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #e53935\"><i class=\"fa fa-google-plus-square fa-4x\"></i></a>
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

    // line 189
    public function block_javascripts($context, array $blocks = array())
    {
        // line 190
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/app.js"), "html", null, true);
        echo "\"></script>
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
        return array (  360 => 194,  356 => 193,  352 => 192,  348 => 191,  343 => 190,  340 => 189,  287 => 137,  284 => 136,  279 => 129,  276 => 128,  271 => 121,  268 => 120,  263 => 115,  260 => 114,  254 => 123,  252 => 120,  247 => 117,  245 => 114,  241 => 112,  238 => 111,  233 => 131,  231 => 128,  227 => 126,  225 => 111,  219 => 109,  214 => 104,  203 => 95,  180 => 75,  172 => 70,  164 => 66,  161 => 62,  156 => 59,  138 => 43,  123 => 30,  110 => 19,  107 => 18,  101 => 12,  96 => 10,  92 => 9,  87 => 8,  84 => 7,  78 => 6,  72 => 196,  70 => 189,  66 => 187,  64 => 136,  59 => 133,  57 => 109,  52 => 106,  50 => 18,  42 => 14,  40 => 7,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}ASN{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/lib/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
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
/*                                     <i class="fa fa-suitcase fa-lg"></i>*/
/*                                     <span class="custom-badge">123</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-envelope fa-lg"></i>*/
/*                                     <span class="custom-badge">17</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <img src="{{ asset('res/img/voiture.jpg') }}" id="img-user" class="img-circle">*/
/* */
/*                                     {#Lorsque l'utilisateur n'a pas de photo de profil, decommenter la partie suivante#}*/
/* */
/*                                     {#<span id="img-user" class="img-circle bg-grey text-center">*/
/*                                         <i class="fa fa-user fa-2x"></i>*/
/*                                     </span>#}*/
/*                                     {{ app.user.firstname }}*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     <li><a href="{{ path('asn_profile') }}">Profile</a></li>*/
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
/*                             <li><a href="#">Organisation personnelle</a></li>*/
/*                             <li><a href="#">Mes contacts</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div> {# /.container #}*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/*         <div class="container" id="main">*/
/*             <div class="row">*/
/*                 {% block body %} */
/*                     <div class="col-lg-9 col-md-9 col-sm-9">*/
/*                         {% block section %}*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-4 text-muted" id="pub">*/
/*                                     {% block pub %}*/
/* */
/*                                     {% endblock %}*/
/*                                 </div> <!-- /block-pub -->*/
/* */
/*                                 <div class="col-lg-8" id="actualites">*/
/*                                     {% block actualites %}*/
/* */
/*                                     {% endblock %}*/
/*                                 </div> <!-- /block-actualite -->*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </div> <!-- /main -->*/
/*                     <div class="col-lg-3 col-md-3 col-sm-3" id="aside">*/
/*                         {% block aside %}*/
/*                             */
/*                         {% endblock %}*/
/*                     </div> <!-- /aside -->*/
/*                 {% endblock %}*/
/*             </div> <!-- /row -->*/
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
/*                             <div class="">*/
/*                                 <ul class="list-unstyled list-inline">*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #1a237e"><i class="fa fa-facebook-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #2196f3;"><i class="fa fa-twitter-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #1565c0"><i class="fa fa-linkedin-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #e53935"><i class="fa fa-google-plus-square fa-4x"></i></a>*/
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
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-2.2.3.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.transit.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js') }}"></script>*/
/*             <script src="{{ asset('res/js/app.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
