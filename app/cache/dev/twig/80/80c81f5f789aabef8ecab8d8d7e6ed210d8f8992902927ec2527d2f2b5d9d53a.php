<?php

/* ASNMainBundle::layout.html.twig */
class __TwigTemplate_5fa285dac0fc287a7c8704fdf0d2cd6cdf313a9a297db60b6300baa10b45084a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ASNMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'pub' => array($this, 'block_pub'),
            'section' => array($this, 'block_section'),
            'actualites' => array($this, 'block_actualites'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
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
        // line 15
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
        // line 28
        echo "                </form>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("asn_meeting_homepage");
        echo "\">
                            <i class=\"fa fa-group fa-lg\"></i>
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
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" id=\"img-user\" class=\"img-circle\">

                            ";
        // line 47
        echo "
                            ";
        // line 51
        echo "                            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("asn_profile");
        echo "\">Profile</a></li>
                            <li><a href=\"#\">Paramètres</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Langue</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 60
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
                    <li class=\"";
        // line 80
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "accueil")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("asn_home");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"";
        // line 83
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "forums")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("asn_forum_homepage");
        echo "\">Forums</a>
                    </li>
                    <li class=\"";
        // line 86
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "groupes")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"#\">Mes groupes</a>
                    </li>
                    <li class=\"";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "meeting")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("asn_meeting_homepage");
        echo "\">Meeting</a>
                    </li>
                    <li class=\"";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "agenda")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"#\">Organisation personnelle</a>
                    </li>
                    <li class=\"";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "module_actif"), "method") == "contacts")) {
            echo " active ";
        }
        echo "\">
                        <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("asn_contacts_homepage");
        echo "\">Mes contacts</a>
                    </li>
                </ul>
            </div>
        </div> ";
        // line 101
        echo "    </nav>
";
    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        // line 105
        echo "    <div class=\"container\" id=\"main\">
        <div class=\"row\">
            <div class=\"col-lg-3\" id=\"pub\">
                ";
        // line 108
        $this->displayBlock('pub', $context, $blocks);
        // line 202
        echo "            </div> <!-- /block-pub -->

            <div class=\"col-lg-9\">
                ";
        // line 205
        $this->displayBlock('section', $context, $blocks);
        // line 220
        echo "            </div>
        </div>
    </div> <!-- /container -->
";
    }

    // line 108
    public function block_pub($context, array $blocks = array())
    {
        // line 109
        echo "                    <div data-spy=\"affix\" data-offset-top=\"10\">
                        <div class=\"panel text-center\">
                            <div class=\"panel-heading\">
                                <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"9000\">
                                    <!-- Indicators -->
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel text-center\">
                            <div class=\"panel-heading\">
                                <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"carousel-example-generic-2\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"7000\">
                                    <!-- Indicators -->
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#carousel-example-generic-2\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#carousel-example-generic-2\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#carousel-example-generic-2\" data-slide-to=\"2\"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class=\"left carousel-control\" href=\"#carousel-example-generic-2\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#carousel-example-generic-2\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 205
    public function block_section($context, array $blocks = array())
    {
        // line 206
        echo "                    <div class=\"row\">
                        <div class=\"col-lg-8\" id=\"actualites\">
                            ";
        // line 208
        $this->displayBlock('actualites', $context, $blocks);
        // line 211
        echo "                        </div> <!-- /block-actualite -->

                        <div class=\"col-lg-4 col-md-3 col-sm-3\" id=\"aside\">
                            ";
        // line 214
        $this->displayBlock('aside', $context, $blocks);
        // line 217
        echo "                        </div> <!-- /aside -->
                    </div>
                ";
    }

    // line 208
    public function block_actualites($context, array $blocks = array())
    {
        // line 209
        echo "
                            ";
    }

    // line 214
    public function block_aside($context, array $blocks = array())
    {
        // line 215
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "ASNMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 215,  370 => 214,  365 => 209,  362 => 208,  356 => 217,  354 => 214,  349 => 211,  347 => 208,  343 => 206,  340 => 205,  317 => 183,  308 => 177,  299 => 171,  263 => 138,  254 => 132,  245 => 126,  226 => 109,  223 => 108,  216 => 220,  214 => 205,  209 => 202,  207 => 108,  202 => 105,  199 => 104,  194 => 101,  187 => 96,  181 => 95,  173 => 92,  168 => 90,  162 => 89,  154 => 86,  149 => 84,  143 => 83,  138 => 81,  132 => 80,  109 => 60,  101 => 55,  93 => 51,  90 => 47,  85 => 44,  69 => 31,  64 => 28,  49 => 15,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block header %}*/
/*     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*         <div class="container-fluid bg-primary" id="header-bar">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">*/
/*                     <img src="{{ asset('res/img/logo_asn.png') }}" id="logo">*/
/*                 </a>*/
/*                 <a class="navbar-brand" href="#" title="ASN">AVM Social Network</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <form class="navbar-form navbar-left" role="search">*/
/*                     <div class="input-group form-group-sm">*/
/*                         <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*                         <input type="text" class="form-control" placeholder="Recherche..." size="40">*/
/*                     </div>*/
/*                     {# <button type="submit" class="btn btn-warning btn-sm active">Rechercher</button>#}*/
/*                 </form>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <a href="{{ path('asn_meeting_homepage') }}">*/
/*                             <i class="fa fa-group fa-lg"></i>*/
/*                             <span class="custom-badge">123</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <i class="fa fa-envelope fa-lg"></i>*/
/*                             <span class="custom-badge">17</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <img src="{{ asset('res/img/voiture.jpg') }}" id="img-user" class="img-circle">*/
/* */
/*                             {#Lorsque l'utilisateur n'a pas de photo de profil, decommenter la partie suivante#}*/
/* */
/*                             {#<span id="img-user" class="img-circle bg-grey text-center">*/
/*                                 <i class="fa fa-user fa-2x"></i>*/
/*                             </span>#}*/
/*                             {{ app.user.firstname }}*/
/*                             <span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="{{ path('asn_profile') }}">Profile</a></li>*/
/*                             <li><a href="#">Paramètres</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#">Langue</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="{{ path('asn_logout') }}">Déconnexion</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*         <div class="container" id="sub-header-bar">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="{% if app.session.get('module_actif') == 'accueil'%} active {% endif %}">*/
/*                         <a href="{{ path('asn_home') }}">Accueil</a>*/
/*                     </li>*/
/*                     <li class="{% if app.session.get('module_actif') == 'forums'%} active {% endif %}">*/
/*                         <a href="{{ path('asn_forum_homepage') }}">Forums</a>*/
/*                     </li>*/
/*                     <li class="{% if app.session.get('module_actif') == 'groupes'%} active {% endif %}">*/
/*                         <a href="#">Mes groupes</a>*/
/*                     </li>*/
/*                     <li class="{% if app.session.get('module_actif') == 'meeting'%} active {% endif %}">*/
/*                         <a href="{{ path('asn_meeting_homepage') }}">Meeting</a>*/
/*                     </li>*/
/*                     <li class="{% if app.session.get('module_actif') == 'agenda'%} active {% endif %}">*/
/*                         <a href="#">Organisation personnelle</a>*/
/*                     </li>*/
/*                     <li class="{% if app.session.get('module_actif') == 'contacts'%} active {% endif %}">*/
/*                         <a href="{{ path('asn_contacts_homepage') }}">Mes contacts</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div> {# /.container #}*/
/*     </nav>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container" id="main">*/
/*         <div class="row">*/
/*             <div class="col-lg-3" id="pub">*/
/*                 {% block pub %}*/
/*                     <div data-spy="affix" data-offset-top="10">*/
/*                         <div class="panel text-center">*/
/*                             <div class="panel-heading">*/
/*                                 <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9000">*/
/*                                     <!-- Indicators -->*/
/*                                     <ol class="carousel-indicators">*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                                     </ol>*/
/* */
/*                                     <!-- Wrapper for slides -->*/
/*                                     <div class="carousel-inner">*/
/*                                         <div class="item active">*/
/*                                             <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <!-- Controls -->*/
/*                                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*                                         <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                                     </a>*/
/*                                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*                                         <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel text-center">*/
/*                             <div class="panel-heading">*/
/*                                 <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel" data-interval="7000">*/
/*                                     <!-- Indicators -->*/
/*                                     <ol class="carousel-indicators">*/
/*                                         <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>*/
/*                                         <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>*/
/*                                         <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>*/
/*                                     </ol>*/
/* */
/*                                     <!-- Wrapper for slides -->*/
/*                                     <div class="carousel-inner">*/
/*                                         <div class="item active">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                                             <div class="carousel-caption">*/
/*                                                 <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <!-- Controls -->*/
/*                                     <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">*/
/*                                         <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                                     </a>*/
/*                                     <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">*/
/*                                         <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div> <!-- /block-pub -->*/
/* */
/*             <div class="col-lg-9">*/
/*                 {% block section %}*/
/*                     <div class="row">*/
/*                         <div class="col-lg-8" id="actualites">*/
/*                             {% block actualites %}*/
/* */
/*                             {% endblock %}*/
/*                         </div> <!-- /block-actualite -->*/
/* */
/*                         <div class="col-lg-4 col-md-3 col-sm-3" id="aside">*/
/*                             {% block aside %}*/
/* */
/*                             {% endblock %}*/
/*                         </div> <!-- /aside -->*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- /container -->*/
/* {% endblock %}*/
