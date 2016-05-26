<?php

/* ASNMainBundle:user:home.html.twig */
class __TwigTemplate_895985796b345512c3229a4e8ffd8ac7e51aab4a9f64b4c06b000e2324f26794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::user_base.html.twig", "ASNMainBundle:user:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"navbar navbar-default bg-purple\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><div class=\"text-color\">AVM Social Network</div></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li><a href=\"#\"><div class=\"text-color\">Link</div></a></li>
                    <li><a href=\"#\"><div class=\"text-color\">Link</div></a></li>
                    <li><a href=\"#\"><div class=\"text-color\">Link</div></a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\"><div class=\"text-color\">Link</div></a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\"><div class=\"text-color\">Link</div></a></li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <div class=\"text-color\"><i class=\"fa fa-user fa-2x\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array())), "html", null, true);
        echo " 
                                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("asn_logout");
        echo "\">Déconnexion</a>
                                <span class=\"caret\"></span></div>
                        </a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\"><i class=\"fa fa-power-off\"></i> Sign out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <div class=\"container-fluid row\">
                    <h2 class=\"label-align\"><span class=\"label label-default bg-purple title-badge\">Groupes relationnels</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\">42</span>Amis</a></li>
                            <li class=\"list-group-item\"><a href=\"#\">Collègues de bureau</a></li>
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\">01</span>Famille maternelle</a></li>
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\">06</span>Club de danse</a></li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
                <div class=\"container-fluid row\">
                    <h2 class=\"label-align\"><span class=\"label label-default bg-purple title-badge\">Forum</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\">22</span>Forum 1</a></li>
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\">212</span>Forum 2</a></li>
                            <li class=\"list-group-item\"><a href=\"#\">Forum 3</a></li>
                            <li class=\"list-group-item\"><a href=\"#\"><span class=\"badge pull-right bg-purple\"></span>Forum 4</a></li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
                <div class=\"container-fluid row\">
                    <h2 class=\"label-align\"><span class=\"label label-default bg-purple title-badge\">AVM Public Market</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">14</span>Product 1</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\"></span>Service 1</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">01</span>Product 2</li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"container-fluid row\">
                    <center>Main content.</center>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"container-fluid row\">
                    <h2><span class=\"label label-default bg-purple title-badge\">Organisation personnel</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Agenda de travail</li>
                            <li class=\"list-group-item\">Agenda de voyage</li>
                            <li class=\"list-group-item\">Planning d'étude</li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
                <div class=\"container-fluid row\">
                    <h2><span class=\"label label-default bg-purple title-badge\">Meeting</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">04</span>Invitations</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">28</span>Paticipations</li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
                <div class=\"container-fluid row\">
                    <h2><span class=\"label label-default bg-purple title-badge\">Messagerie</span></h2>
                    <div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">14</span>inbox</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">08</span>outbox</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\"></span>Envoyés</li>
                            <li class=\"list-group-item\"><span class=\"badge bg-purple\">07</span>Brouillons</li>
                        </ul>
                    </div>
                    <p><a class=\"btn\" href=\"#\">More &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 140
    public function block_footer($context, array $blocks = array())
    {
        // line 141
        echo "    <footer>
        <br>
        <div class=\"container\">
            <div class=\"row border-top\">
                <div class=\"col-lg-12\">
                    <h5 class=\"text-center\">Copyright &copy; 2016</h5>
                </div>
            </div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "ASNMainBundle:user:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 141,  203 => 140,  118 => 57,  115 => 56,  97 => 41,  91 => 40,  61 => 12,  58 => 11,  52 => 8,  48 => 7,  43 => 6,  40 => 5,  32 => 3,  11 => 1,);
    }
}
/* {% extends "::user_base.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('css/style-home.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="navbar navbar-default bg-purple" role="navigation">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#"><div class="text-color">AVM Social Network</div></a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-left">*/
/*                     <li><a href="#"><div class="text-color">Link</div></a></li>*/
/*                     <li><a href="#"><div class="text-color">Link</div></a></li>*/
/*                     <li><a href="#"><div class="text-color">Link</div></a></li>*/
/*                     <li class="divider"></li>*/
/*                     <li><a href="#"><div class="text-color">Link</div></a></li>*/
/*                     <li class="divider"></li>*/
/*                     <li><a href="#"><div class="text-color">Link</div></a></li>*/
/*                 </ul>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <div class="text-color"><i class="fa fa-user fa-2x"></i> {{ app.user.firstname }} {{ app.user.lastname | upper }} */
/*                                 <a href="{{path('asn_logout') }}">Déconnexion</a>*/
/*                                 <span class="caret"></span></div>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#"><i class="fa fa-power-off"></i> Sign out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-2">*/
/*                 <div class="container-fluid row">*/
/*                     <h2 class="label-align"><span class="label label-default bg-purple title-badge">Groupes relationnels</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple">42</span>Amis</a></li>*/
/*                             <li class="list-group-item"><a href="#">Collègues de bureau</a></li>*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple">01</span>Famille maternelle</a></li>*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple">06</span>Club de danse</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*                 <div class="container-fluid row">*/
/*                     <h2 class="label-align"><span class="label label-default bg-purple title-badge">Forum</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple">22</span>Forum 1</a></li>*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple">212</span>Forum 2</a></li>*/
/*                             <li class="list-group-item"><a href="#">Forum 3</a></li>*/
/*                             <li class="list-group-item"><a href="#"><span class="badge pull-right bg-purple"></span>Forum 4</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*                 <div class="container-fluid row">*/
/*                     <h2 class="label-align"><span class="label label-default bg-purple title-badge">AVM Public Market</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item"><span class="badge bg-purple">14</span>Product 1</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple"></span>Service 1</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple">01</span>Product 2</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-8">*/
/*                 <div class="container-fluid row">*/
/*                     <center>Main content.</center>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-2">*/
/*                 <div class="container-fluid row">*/
/*                     <h2><span class="label label-default bg-purple title-badge">Organisation personnel</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item">Agenda de travail</li>*/
/*                             <li class="list-group-item">Agenda de voyage</li>*/
/*                             <li class="list-group-item">Planning d'étude</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*                 <div class="container-fluid row">*/
/*                     <h2><span class="label label-default bg-purple title-badge">Meeting</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item"><span class="badge bg-purple">04</span>Invitations</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple">28</span>Paticipations</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*                 <div class="container-fluid row">*/
/*                     <h2><span class="label label-default bg-purple title-badge">Messagerie</span></h2>*/
/*                     <div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item"><span class="badge bg-purple">14</span>inbox</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple">08</span>outbox</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple"></span>Envoyés</li>*/
/*                             <li class="list-group-item"><span class="badge bg-purple">07</span>Brouillons</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p><a class="btn" href="#">More &raquo;</a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <footer>*/
/*         <br>*/
/*         <div class="container">*/
/*             <div class="row border-top">*/
/*                 <div class="col-lg-12">*/
/*                     <h5 class="text-center">Copyright &copy; 2016</h5>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
