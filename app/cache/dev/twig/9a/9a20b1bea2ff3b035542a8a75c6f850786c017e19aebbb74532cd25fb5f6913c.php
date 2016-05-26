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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-grey\">

        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "

        <div class=\"container\" id=\"main-container\">
            ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "        </div> <!-- /container -->

        ";
        // line 144
        $this->displayBlock('footer', $context, $blocks);
        // line 194
        echo "

        ";
        // line 196
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
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
        // line 29
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
        // line 42
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
                                    Aurelien Tegus
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li><a href=\"#\">Paramètres</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Langue</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\">Déconnexion</a></li>
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
                            <li class=\"active\"><a href=\"#\">Accueil</a></li>
                            <li><a href=\"#\">Forum</a></li>
                            <li><a href=\"#\">Mes groupes</a></li>
                            <li><a href=\"#\">Meeting</a></li>
                            <li><a href=\"#\">Organisation personnelle</a></li>
                            <li><a href=\"#\">AVM</a></li>
                            <li><a href=\"#\">Mes contacts</a></li>
                        </ul>
                    </div>
                </div> ";
        // line 100
        echo "            </nav>
        ";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        echo " 
                <div class=\"row\">
                    ";
        // line 107
        $this->displayBlock('section', $context, $blocks);
        // line 124
        echo "
                    ";
        // line 125
        $this->displayBlock('aside', $context, $blocks);
        // line 140
        echo "                </div> <!-- /row -->
            ";
    }

    // line 107
    public function block_section($context, array $blocks = array())
    {
        // line 108
        echo "                        <div class=\"col-lg-9 col-md-9 col-sm-9\" id=\"main\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 block-pub text-muted\">
                                    ";
        // line 111
        $this->displayBlock('pub', $context, $blocks);
        // line 114
        echo "                                </div> <!-- /block-pub -->

                                <div class=\"col-lg-8 block-actualite\">
                                    ";
        // line 117
        $this->displayBlock('actualite', $context, $blocks);
        // line 120
        echo "                                </div> <!-- /block-actualite -->
                            </div>
                        </div> <!-- /main -->
                    ";
    }

    // line 111
    public function block_pub($context, array $blocks = array())
    {
        // line 112
        echo "
                                    ";
    }

    // line 117
    public function block_actualite($context, array $blocks = array())
    {
        // line 118
        echo "
                                    ";
    }

    // line 125
    public function block_aside($context, array $blocks = array())
    {
        // line 126
        echo "                        <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
                            ";
        // line 127
        $this->displayBlock('group', $context, $blocks);
        // line 130
        echo "
                            ";
        // line 131
        $this->displayBlock('organisation_peso', $context, $blocks);
        // line 134
        echo "
                            ";
        // line 135
        $this->displayBlock('forum', $context, $blocks);
        // line 138
        echo "                        </div> <!-- /aside -->
                    ";
    }

    // line 127
    public function block_group($context, array $blocks = array())
    {
        // line 128
        echo "
                            ";
    }

    // line 131
    public function block_organisation_peso($context, array $blocks = array())
    {
        // line 132
        echo "
                            ";
    }

    // line 135
    public function block_forum($context, array $blocks = array())
    {
        // line 136
        echo "
                            ";
    }

    // line 144
    public function block_footer($context, array $blocks = array())
    {
        // line 145
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
                            <h4>Suivez nous</h4>
                            <div class=\"panel\">
                                <ul class=\"list-unstyled list-inline\">
                                    <li>
                                        <a href=\"#\" class=\"text-primary\"><i class=\"fa fa-facebook-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"text-primary\"><i class=\"fa fa-twitter-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"text-primary\"><i class=\"fa fa-linkedin-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"text-primary\"><i class=\"fa fa-vimeo-square fa-4x\"></i></a>
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

    // line 196
    public function block_javascripts($context, array $blocks = array())
    {
        // line 197
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 200
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
        return array (  376 => 200,  372 => 199,  368 => 198,  363 => 197,  360 => 196,  308 => 145,  305 => 144,  300 => 136,  297 => 135,  292 => 132,  289 => 131,  284 => 128,  281 => 127,  276 => 138,  274 => 135,  271 => 134,  269 => 131,  266 => 130,  264 => 127,  261 => 126,  258 => 125,  253 => 118,  250 => 117,  245 => 112,  242 => 111,  235 => 120,  233 => 117,  228 => 114,  226 => 111,  221 => 108,  218 => 107,  213 => 140,  211 => 125,  208 => 124,  206 => 107,  200 => 105,  195 => 100,  136 => 42,  121 => 29,  108 => 18,  105 => 17,  99 => 11,  94 => 9,  89 => 8,  86 => 7,  80 => 6,  74 => 202,  72 => 196,  68 => 194,  66 => 144,  62 => 142,  60 => 105,  55 => 102,  53 => 17,  45 => 13,  43 => 7,  39 => 6,  32 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}asn{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
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
/*                                     Aurelien Tegus*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     <li><a href="#">Profil</a></li>*/
/*                                     <li><a href="#">Paramètres</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="#">Langue</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="#">Déconnexion</a></li>*/
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
/*                             <li class="active"><a href="#">Accueil</a></li>*/
/*                             <li><a href="#">Forum</a></li>*/
/*                             <li><a href="#">Mes groupes</a></li>*/
/*                             <li><a href="#">Meeting</a></li>*/
/*                             <li><a href="#">Organisation personnelle</a></li>*/
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
/*                 <div class="row">*/
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
/*                             <h4>Suivez nous</h4>*/
/*                             <div class="panel">*/
/*                                 <ul class="list-unstyled list-inline">*/
/*                                     <li>*/
/*                                         <a href="#" class="text-primary"><i class="fa fa-facebook-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" class="text-primary"><i class="fa fa-twitter-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" class="text-primary"><i class="fa fa-linkedin-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" class="text-primary"><i class="fa fa-vimeo-square fa-4x"></i></a>*/
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
/*             <script src="{{ asset('res/js/app.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
