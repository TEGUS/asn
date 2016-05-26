<?php

/* ASNMainBundle:Main:index.html.twig */
class __TwigTemplate_d96d38b9ace2ab409fa7a9c1f8f4c9150fb469811f486eba4e238fea8684fbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ASNMainBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
            'pub' => array($this, 'block_pub'),
            'actualite' => array($this, 'block_actualite'),
            'aside' => array($this, 'block_aside'),
            'group' => array($this, 'block_group'),
            'organisation_peso' => array($this, 'block_organisation_peso'),
            'forum' => array($this, 'block_forum'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $this->displayBlock('section', $context, $blocks);
        // line 217
        echo "
        ";
        // line 218
        $this->displayBlock('aside', $context, $blocks);
        // line 392
        echo "    </div> <!-- /row -->
";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "            <div class=\"col-lg-9 col-md-9 col-sm-9\" id=\"main\">
                <div class=\"row\">
                    <div class=\"col-lg-4 block-pub\"> ";
        // line 9
        echo "                        ";
        $this->displayBlock('pub', $context, $blocks);
        // line 93
        echo "                    </div> <!-- /block-pub -->

                    <div class=\"col-lg-8 block-actualite\">
                        ";
        // line 96
        $this->displayBlock('actualite', $context, $blocks);
        // line 213
        echo "                    </div> <!-- /block-actualite -->
                </div>
            </div> <!-- /main -->
        ";
    }

    // line 9
    public function block_pub($context, array $blocks = array())
    {
        // line 10
        echo "                            <div class=\"panel text-center padding\">
                                <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>
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
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 35
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
                            <div class=\"panel text-center padding\">
                                <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                            <div class=\"carousel-caption\">
                                                <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 76
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
                        ";
    }

    // line 96
    public function block_actualite($context, array $blocks = array())
    {
        // line 97
        echo "                            <div class=\"panel\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"active\"><a href=\"#photos\" role=\"tab\" data-toggle=\"tab\">Photos</a></li>
                                    <li><a href=\"#videos\" role=\"tab\" data-toggle=\"tab\">Videos</a></li>
                                    <li><a href=\"#posts\" role=\"tab\" data-toggle=\"tab\">Posts</a></li>
                                </ul>
                                <div class=\"tab-content padding\">
                                    <div class=\"tab-pane fade in active\" id=\"photos\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"panel text-center text-info\">
                                                    <a class=\"\" href=\"#\">
                                                        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                    </a>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">
                                                            <h6 class=\"text-muted\">300 k j'aime</h6>
                                                            <a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i></a>
                                                        </div>
                                                        <div class=\"col-lg-6 text-center\">
                                                            <h6 class=\"text-muted\">90 commentaires</h6>
                                                            <a href=\"#\"><i class=\"fa fa-comments-o\"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"panel text-center text-warning\">
                                                    <a href=\"#\" class=\"\">
                                                        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                    </a>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">
                                                            <h6 class=\"text-muted\">3 j'aime</h6>
                                                            <a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i></a>
                                                        </div>
                                                        <div class=\"col-lg-6 text-center\">
                                                            <h6 class=\"text-muted\">90 commentaires</h6>
                                                            <a href=\"#\"><i class=\"fa fa-comments-o\"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row text-center\">
                                                <ul class=\"pagination pagination-sm\">
                                                    <li><a href=\"#\">&laquo;</a></li>
                                                    <li><a href=\"#\">1</a></li>
                                                    <li><a href=\"#\">2</a></li>
                                                    <li><a href=\"#\">3</a></li>
                                                    <li><a href=\"#\">4</a></li>
                                                    <li><a href=\"#\">5</a></li>
                                                    <li><a href=\"#\">6</a></li>
                                                    <li><a href=\"#\">7</a></li>
                                                    <li><a href=\"#\">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"videos\">
                                        Videos
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"posts\">
                                        Posts
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel\">
                                <div class=\"panel-heading text-center\">
                                    <h3 class=\"border-bottom text-primary text-uppercase\">Forum</h3>
                                    <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>
                                </div>
                                <div class=\"panel-body\">
                                    <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <p class=\"text-center text-muted\">
                                        <i class=\"fa fa-comments-o\"></i> 123 Commentaires
                                    </p>
                                </div>
                                <div class=\"panel-footer\">
                                    <form action=\"#\">
                                        <textarea class=\"form-control\" placeholder=\"Commentaire\"></textarea>
                                        <button class=\"btn btn-primary btn-sm\">Commenter</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"panel\">
                                <div class=\"panel-heading text-center\">
                                    <h3 class=\"border-bottom text-primary text-uppercase\">Forum</h3>
                                    <p><b>Thème : </b><em>Le webmarketing</em></p>
                                </div>
                                <div class=\"panel-body\">
                                    <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <p class=\"text-center text-muted\">
                                        <i class=\"fa fa-comments-o\"></i> 12k Commentaires
                                    </p>
                                </div>
                                <div class=\"panel-footer\">
                                    <form action=\"#\">
                                        <textarea class=\"form-control\" placeholder=\"Commentaire\"></textarea>
                                        <button class=\"btn btn-primary btn-sm active\">Commenter</button>
                                    </form>
                                </div>
                            </div>
                        ";
    }

    // line 218
    public function block_aside($context, array $blocks = array())
    {
        // line 219
        echo "            <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
                ";
        // line 220
        $this->displayBlock('group', $context, $blocks);
        // line 264
        echo "
                ";
        // line 265
        $this->displayBlock('organisation_peso', $context, $blocks);
        // line 325
        echo "
                ";
        // line 326
        $this->displayBlock('forum', $context, $blocks);
        // line 390
        echo "            </div> <!-- /aside -->
        ";
    }

    // line 220
    public function block_group($context, array $blocks = array())
    {
        // line 221
        echo "                    <div class=\"panel panel-primary block-groupe\">
                        <div class=\"panel-heading\">
                            Mes groupes
                            <span class=\"badge pull-right\">4</span>
                        </div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-3 text-primary\">
                                        <a href=\"#\" data-toggle=\"popover\">
                                            <i class=\"fa fa-comments-o fa-2x\"></i>
                                            <span class=\"custom-badge\">99+</span>
                                        </a>
                                    </div>
                                    <a href=\"#\" class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </a>
                                </div>
                            </li>
                            <li class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-3 text-primary\">
                                        <a href=\"#\">
                                            <i class=\"fa fa-comments-o fa-2x\"></i>
                                            <span class=\"custom-badge\">01</span>
                                        </a>
                                    </div>
                                    <a href=\"#\" class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class=\"panel-footer\">
                            <a href=\"#\">
                                Tous les groupes
                                <span class=\"\">&raquo;</span>
                            </a>
                        </div>
                    </div> <!-- /block-group -->
                ";
    }

    // line 265
    public function block_organisation_peso($context, array $blocks = array())
    {
        // line 266
        echo "                    <div class=\"panel panel-primary block-organisation-perso\">
                        <div class=\"panel-heading\">
                            Organisation personnelle
                            <span class=\"badge pull-right\">99+</span>
                        </div>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-calendar fa-2x\"></i>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-calendar fa-2x\"></i>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-calendar fa-2x\"></i>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-calendar fa-2x\"></i>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class=\"panel-footer\">
                            <a href=\"#\">
                                Tout l'agenda
                                <span class=\"\">&raquo;</span>
                            </a>
                        </div>
                    </div> <!-- /block-organisation-perso -->
                ";
    }

    // line 326
    public function block_forum($context, array $blocks = array())
    {
        // line 327
        echo "                    <div class=\"panel panel-primary block-forum\">
                        <div class=\"panel-heading\">
                            Forums
                            <span class=\"badge pull-right\">4</span>
                        </div>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-comments-o fa-2x\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-comments-o fa-2x\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-comments-o fa-2x\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-3 text-primary'>
                                        <i class=\"fa fa-comments-o fa-2x\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <p class='col-lg-9'>
                                        Network gratos 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class=\"panel-footer\">
                            <a href=\"#\">
                                Tous les forums
                                <span class=\"\">&raquo;</span>
                            </a>
                        </div>
                    </div> <!-- /block-forum -->
                ";
    }

    public function getTemplateName()
    {
        return "ASNMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 327,  455 => 326,  393 => 266,  390 => 265,  344 => 221,  341 => 220,  336 => 390,  334 => 326,  331 => 325,  329 => 265,  326 => 264,  324 => 220,  321 => 219,  318 => 218,  295 => 194,  268 => 170,  221 => 126,  201 => 109,  187 => 97,  184 => 96,  163 => 76,  154 => 70,  145 => 64,  113 => 35,  104 => 29,  95 => 23,  80 => 10,  77 => 9,  70 => 213,  68 => 96,  63 => 93,  60 => 9,  56 => 6,  53 => 5,  48 => 392,  46 => 218,  43 => 217,  41 => 5,  38 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         {% block section %}*/
/*             <div class="col-lg-9 col-md-9 col-sm-9" id="main">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 block-pub"> {#data-spy="affix" data-offset-top="50"#}*/
/*                         {% block pub %}*/
/*                             <div class="panel text-center padding">*/
/*                                 <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>*/
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
/*                             <div class="panel text-center padding">*/
/*                                 <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>*/
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
/*                         {% endblock %}*/
/*                     </div> <!-- /block-pub -->*/
/* */
/*                     <div class="col-lg-8 block-actualite">*/
/*                         {% block actualite %}*/
/*                             <div class="panel">*/
/*                                 <ul class="nav nav-tabs" role="tablist">*/
/*                                     <li class="active"><a href="#photos" role="tab" data-toggle="tab">Photos</a></li>*/
/*                                     <li><a href="#videos" role="tab" data-toggle="tab">Videos</a></li>*/
/*                                     <li><a href="#posts" role="tab" data-toggle="tab">Posts</a></li>*/
/*                                 </ul>*/
/*                                 <div class="tab-content padding">*/
/*                                     <div class="tab-pane fade in active" id="photos">*/
/*                                         <div class="row">*/
/*                                             <div class="col-lg-6">*/
/*                                                 <div class="panel text-center text-info">*/
/*                                                     <a class="" href="#">*/
/*                                                         <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                                                     </a>*/
/*                                                     <div class="row">*/
/*                                                         <div class="col-lg-6">*/
/*                                                             <h6 class="text-muted">300 k j'aime</h6>*/
/*                                                             <a href="#"><i class="fa fa-thumbs-o-up"></i></a>*/
/*                                                         </div>*/
/*                                                         <div class="col-lg-6 text-center">*/
/*                                                             <h6 class="text-muted">90 commentaires</h6>*/
/*                                                             <a href="#"><i class="fa fa-comments-o"></i></a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-lg-6">*/
/*                                                 <div class="panel text-center text-warning">*/
/*                                                     <a href="#" class="">*/
/*                                                         <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                                                     </a>*/
/*                                                     <div class="row">*/
/*                                                         <div class="col-lg-6">*/
/*                                                             <h6 class="text-muted">3 j'aime</h6>*/
/*                                                             <a href="#"><i class="fa fa-thumbs-o-up"></i></a>*/
/*                                                         </div>*/
/*                                                         <div class="col-lg-6 text-center">*/
/*                                                             <h6 class="text-muted">90 commentaires</h6>*/
/*                                                             <a href="#"><i class="fa fa-comments-o"></i></a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="row text-center">*/
/*                                                 <ul class="pagination pagination-sm">*/
/*                                                     <li><a href="#">&laquo;</a></li>*/
/*                                                     <li><a href="#">1</a></li>*/
/*                                                     <li><a href="#">2</a></li>*/
/*                                                     <li><a href="#">3</a></li>*/
/*                                                     <li><a href="#">4</a></li>*/
/*                                                     <li><a href="#">5</a></li>*/
/*                                                     <li><a href="#">6</a></li>*/
/*                                                     <li><a href="#">7</a></li>*/
/*                                                     <li><a href="#">&raquo;</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="tab-pane fade" id="videos">*/
/*                                         Videos*/
/*                                     </div>*/
/*                                     <div class="tab-pane fade" id="posts">*/
/*                                         Posts*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="panel">*/
/*                                 <div class="panel-heading text-center">*/
/*                                     <h3 class="border-bottom text-primary text-uppercase">Forum</h3>*/
/*                                     <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                     <p class="text-center text-muted">*/
/*                                         <i class="fa fa-comments-o"></i> 123 Commentaires*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="panel-footer">*/
/*                                     <form action="#">*/
/*                                         <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                                         <button class="btn btn-primary btn-sm">Commenter</button>*/
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel">*/
/*                                 <div class="panel-heading text-center">*/
/*                                     <h3 class="border-bottom text-primary text-uppercase">Forum</h3>*/
/*                                     <p><b>Thème : </b><em>Le webmarketing</em></p>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive img-rounded">*/
/*                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                     <p class="text-center text-muted">*/
/*                                         <i class="fa fa-comments-o"></i> 12k Commentaires*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="panel-footer">*/
/*                                     <form action="#">*/
/*                                         <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                                         <button class="btn btn-primary btn-sm active">Commenter</button>*/
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </div> <!-- /block-actualite -->*/
/*                 </div>*/
/*             </div> <!-- /main -->*/
/*         {% endblock %}*/
/* */
/*         {% block aside %}*/
/*             <div class="col-lg-3 col-md-3 col-sm-3" id="aside">*/
/*                 {% block group %}*/
/*                     <div class="panel panel-primary block-groupe">*/
/*                         <div class="panel-heading">*/
/*                             Mes groupes*/
/*                             <span class="badge pull-right">4</span>*/
/*                         </div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class="col-lg-3 text-primary">*/
/*                                         <a href="#" data-toggle="popover">*/
/*                                             <i class="fa fa-comments-o fa-2x"></i>*/
/*                                             <span class="custom-badge">99+</span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <a href="#" class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class="col-lg-3 text-primary">*/
/*                                         <a href="#">*/
/*                                             <i class="fa fa-comments-o fa-2x"></i>*/
/*                                             <span class="custom-badge">01</span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <a href="#" class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#">*/
/*                                 Tous les groupes*/
/*                                 <span class="">&raquo;</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div> <!-- /block-group -->*/
/*                 {% endblock %}*/
/* */
/*                 {% block organisation_peso %}*/
/*                     <div class="panel panel-primary block-organisation-perso">*/
/*                         <div class="panel-heading">*/
/*                             Organisation personnelle*/
/*                             <span class="badge pull-right">99+</span>*/
/*                         </div>*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-2x"></i>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-2x"></i>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-2x"></i>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-2x"></i>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#">*/
/*                                 Tout l'agenda*/
/*                                 <span class="">&raquo;</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div> <!-- /block-organisation-perso -->*/
/*                 {% endblock %}*/
/* */
/*                 {% block forum %}*/
/*                     <div class="panel panel-primary block-forum">*/
/*                         <div class="panel-heading">*/
/*                             Forums*/
/*                             <span class="badge pull-right">4</span>*/
/*                         </div>*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-2x"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-2x"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-2x"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-3 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-2x"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <p class='col-lg-9'>*/
/*                                         Network gratos */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#">*/
/*                                 Tous les forums*/
/*                                 <span class="">&raquo;</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div> <!-- /block-forum -->*/
/*                 {% endblock %}*/
/*             </div> <!-- /aside -->*/
/*         {% endblock %}*/
/*     </div> <!-- /row -->*/
/* {% endblock %}*/
/* */
