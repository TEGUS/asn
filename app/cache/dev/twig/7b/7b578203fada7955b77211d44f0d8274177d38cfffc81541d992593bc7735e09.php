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
        // line 344
        echo "
        ";
        // line 345
        $this->displayBlock('aside', $context, $blocks);
        // line 529
        echo "    </div> <!-- /row -->
";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "            <div class=\"col-lg-9 col-md-9 col-sm-9\" id=\"main\">
                <div class=\"row\">
                    <div class=\"col-lg-4 block-pub\">
                        ";
        // line 9
        $this->displayBlock('pub', $context, $blocks);
        // line 95
        echo "                    </div> <!-- /block-pub -->

                    <div class=\"col-lg-8 block-actualite\">
                        ";
        // line 98
        $this->displayBlock('actualite', $context, $blocks);
        // line 340
        echo "                    </div> <!-- /block-actualite -->
                </div>
            </div> <!-- /main -->
        ";
    }

    // line 9
    public function block_pub($context, array $blocks = array())
    {
        // line 10
        echo "                            <div data-spy=\"affix\" data-offset-top=\"10\">
                                <div class=\"panel text-center padding\">
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
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                <div class=\"carousel-caption\">
                                                    <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                <div class=\"carousel-caption\">
                                                    <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 36
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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                <div class=\"carousel-caption\">
                                                    <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                                <div class=\"carousel-caption\">
                                                    <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 77
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
                        ";
    }

    // line 98
    public function block_actualite($context, array $blocks = array())
    {
        // line 99
        echo "                            <div style=\"height: 150px; overflow: auto;\" class=\"mCustomScrollbar\" data-mcs-theme=\"dark\" data-mcs-axis=\"y\">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            </div>
                            <br>
                            <div class=\"panel\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li class=\"active\">
                                        <a href=\"#posts\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"fa fa-paper-plane text-orange\"></i> Posts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#albums\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"fa fa-picture-o text-orange\"></i> Albums
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#videos\" role=\"tab\" data-toggle=\"tab\">
                                            <i class=\"fa fa-youtube-play text-orange\"></i> Videos
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content padding\">
                                    <div class=\"tab-pane fade in active\" id=\"posts\">
                                        <div class=\"panel\">
                                            <h4 class=\"text-orange border-bottom\">
                                                Aurelien TEGUS
                                                <small>Le 27/05/2016</small>
                                            </h4>
                                            <p class=\"border-bottom\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">12 j'aime</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-thumbs-o-up fa-lg\"></i></a>
                                                </div>
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">120 commentaires</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-comments-o fa-lg\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"panel\">
                                            <h4 class=\"text-orange border-bottom\">
                                                Aurelien TEGUS
                                                <small>Le 27/05/2016</small>
                                            </h4>
                                            <p class=\"border-bottom\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">12 j'aime</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-thumbs-o-up fa-lg\"></i></a>
                                                </div>
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">120 commentaires</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-comments-o fa-lg\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"panel\">
                                            <h4 class=\"text-orange border-bottom\">
                                                Aurelien TEGUS
                                                <small>Le 27/05/2016</small>
                                            </h4>
                                            <p class=\"border-bottom\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">12 j'aime</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-thumbs-o-up fa-lg\"></i></a>
                                                </div>
                                                <div class=\"col-lg-6 text-center\">
                                                    <span class=\"text-muted\">120 commentaires</span>
                                                    <br>
                                                    <a href=\"#\"><i class=\"fa fa-comments-o fa-lg\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"row text-center\">
                                            <ul class=\"pagination pagination-sm\">
                                                <li><a href=\"#\">&laquo;</a></li>
                                                <li><a href=\"#\">1</a></li>
                                                <li><a href=\"#\">2</a></li>
                                                <li><a href=\"#\">3</a></li>
                                                <li><a href=\"#\">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"albums\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <a href=\"#\" class=\"panel text-center\">
                                                    <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                                </a>
                                            </div>
                                            <div class=\"row text-center\">
                                                <ul class=\"pagination pagination-sm\">
                                                    <li><a href=\"#\">&laquo;</a></li>
                                                    <li><a href=\"#\">1</a></li>
                                                    <li><a href=\"#\">2</a></li>
                                                    <li><a href=\"#\">3</a></li>
                                                    <li><a href=\"#\">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"videos\">
                                        Videos
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel\">
                                <div class=\"panel-heading border-bottom\">
                                    <h3 class=\"text-primary text-uppercase\">Forum</h3>
                                    <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>
                                </div>
                                <div class=\"panel-body\">
                                    <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
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
                                <div class=\"panel-heading border-bottom\">
                                    <h3 class=\"text-primary text-uppercase\">Forum</h3>
                                    <p><b>Thème : </b><em>Le webmarketing</em></p>
                                </div>
                                <div class=\"panel-body\">
                                    <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
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

    // line 345
    public function block_aside($context, array $blocks = array())
    {
        // line 346
        echo "            <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
                ";
        // line 347
        $this->displayBlock('group', $context, $blocks);
        // line 491
        echo "
                ";
        // line 509
        echo "
                ";
        // line 527
        echo "            </div> <!-- /aside -->
        ";
    }

    // line 347
    public function block_group($context, array $blocks = array())
    {
        // line 348
        echo "                    <div class=\"panel panel-primary block-groupe\">
                        <div class=\"panel-heading\">
                            Mon menu
                        </div>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item disabled\">
                                Mes groupes <span class=\"pull-right\" style=\"font-weight: normal\">23</span>
                            </li>
                            <li class=\"list-group-item\">
                                <div class=\"row\">
                                    <a href=\"#\" data-toggle=\"popover\" class=\"col-lg-2\">
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">5</span>
                                    </a>
                                    <a href=\"#\" class='col-lg-10'>
                                        Buy&Sallam de Maroua
                                        <span class=\"pull-right\">&raquo;</span>
                                    </a>
                                </div>
                            </li>
                            <li class=\"list-group-item\">
                                <div class=\"row\">
                                    <a href=\"#\" data-toggle=\"popover\" class=\"col-lg-2\">
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">99+</span>
                                    </a>
                                    <a href=\"#\" class='col-lg-10'>
                                        Les Boutiquiers du Gra...
                                        <span class=\"pull-right\">&raquo;</span>
                                    </a>
                                </div>
                            </li>
                            <a href=\"#\" class=\"list-group-item\"> 
                                Plus de groupes <i class=\"fa fa-plus-circle pull-right\"></i>
                            </a>
                            <li class=\"list-group-item disabled\"> 
                                Organisation personnelle <span class=\"pull-right\" style=\"font-weight: normal\">34</span>
                            </li>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-calendar fa-lg\"></i>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Meeting du soir 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-calendar fa-lg\"></i>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Achat des marchandises 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-calendar fa-lg\"></i>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Rencontre avec les fou... 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-calendar fa-lg\"></i>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Paiement des employés 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                Plus d'agenda <i class=\"fa fa-plus-circle pull-right\"></i> 
                            </a>
                            <li class=\"list-group-item disabled\">
                                Forums <span class=\"pull-right\" style=\"font-weight: normal\">44</span>
                            </li>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Hausse du prix du carb... 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Baisse du prix du carb... 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Augmentation du SMIG 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <div class=\"row\">
                                    <div class='pull-left col-lg-2 text-primary'>
                                        <i class=\"fa fa-comments-o fa-lg\"></i>
                                        <span class=\"custom-badge\">32</span>
                                    </div> 
                                    <div class='col-lg-10'>
                                        Les PME et PMI au Cam... 
                                        <span class=\"pull-right\">&raquo;</span>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                Plus de forums <i class=\"fa fa-plus-circle pull-right\"></i>
                            </a>
                        </ul>

                    </div> <!-- /block-group -->
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
        return array (  483 => 348,  480 => 347,  475 => 527,  472 => 509,  469 => 491,  467 => 347,  464 => 346,  461 => 345,  438 => 321,  411 => 297,  381 => 270,  372 => 264,  363 => 258,  354 => 252,  345 => 246,  336 => 240,  327 => 234,  318 => 228,  187 => 99,  184 => 98,  162 => 77,  153 => 71,  144 => 65,  112 => 36,  103 => 30,  94 => 24,  78 => 10,  75 => 9,  68 => 340,  66 => 98,  61 => 95,  59 => 9,  54 => 6,  51 => 5,  46 => 529,  44 => 345,  41 => 344,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         {% block section %}*/
/*             <div class="col-lg-9 col-md-9 col-sm-9" id="main">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 block-pub">*/
/*                         {% block pub %}*/
/*                             <div data-spy="affix" data-offset-top="10">*/
/*                                 <div class="panel text-center padding">*/
/*                                     <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>*/
/*                                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9000">*/
/*                                         <!-- Indicators -->*/
/*                                         <ol class="carousel-indicators">*/
/*                                             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                                             <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                                             <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                                         </ol>*/
/* */
/*                                         <!-- Wrapper for slides -->*/
/*                                         <div class="carousel-inner">*/
/*                                             <div class="item active">*/
/*                                                 <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="item">*/
/*                                                 <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="item">*/
/*                                                 <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <!-- Controls -->*/
/*                                         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*                                             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                                         </a>*/
/*                                         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*                                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="panel text-center padding">*/
/*                                     <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>*/
/*                                     <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel" data-interval="7000">*/
/*                                         <!-- Indicators -->*/
/*                                         <ol class="carousel-indicators">*/
/*                                             <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>*/
/*                                             <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>*/
/*                                             <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>*/
/*                                         </ol>*/
/* */
/*                                         <!-- Wrapper for slides -->*/
/*                                         <div class="carousel-inner">*/
/*                                             <div class="item active">*/
/*                                                 <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="item">*/
/*                                                 <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="item">*/
/*                                                 <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                                                 <div class="carousel-caption">*/
/*                                                     <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <!-- Controls -->*/
/*                                         <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">*/
/*                                             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                                         </a>*/
/*                                         <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">*/
/*                                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </div> <!-- /block-pub -->*/
/* */
/*                     <div class="col-lg-8 block-actualite">*/
/*                         {% block actualite %}*/
/*                             <div style="height: 150px; overflow: auto;" class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/* */
/*                             </div>*/
/*                             <br>*/
/*                             <div class="panel">*/
/*                                 <ul class="nav nav-tabs" role="tablist">*/
/*                                     <li class="active">*/
/*                                         <a href="#posts" role="tab" data-toggle="tab">*/
/*                                             <i class="fa fa-paper-plane text-orange"></i> Posts*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#albums" role="tab" data-toggle="tab">*/
/*                                             <i class="fa fa-picture-o text-orange"></i> Albums*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#videos" role="tab" data-toggle="tab">*/
/*                                             <i class="fa fa-youtube-play text-orange"></i> Videos*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <div class="tab-content padding">*/
/*                                     <div class="tab-pane fade in active" id="posts">*/
/*                                         <div class="panel">*/
/*                                             <h4 class="text-orange border-bottom">*/
/*                                                 Aurelien TEGUS*/
/*                                                 <small>Le 27/05/2016</small>*/
/*                                             </h4>*/
/*                                             <p class="border-bottom">*/
/*                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                             </p>*/
/*                                             <div class="row">*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">12 j'aime</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-thumbs-o-up fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">120 commentaires</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-comments-o fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="panel">*/
/*                                             <h4 class="text-orange border-bottom">*/
/*                                                 Aurelien TEGUS*/
/*                                                 <small>Le 27/05/2016</small>*/
/*                                             </h4>*/
/*                                             <p class="border-bottom">*/
/*                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                             </p>*/
/*                                             <div class="row">*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">12 j'aime</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-thumbs-o-up fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">120 commentaires</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-comments-o fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="panel">*/
/*                                             <h4 class="text-orange border-bottom">*/
/*                                                 Aurelien TEGUS*/
/*                                                 <small>Le 27/05/2016</small>*/
/*                                             </h4>*/
/*                                             <p class="border-bottom">*/
/*                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                             </p>*/
/*                                             <div class="row">*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">12 j'aime</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-thumbs-o-up fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                                 <div class="col-lg-6 text-center">*/
/*                                                     <span class="text-muted">120 commentaires</span>*/
/*                                                     <br>*/
/*                                                     <a href="#"><i class="fa fa-comments-o fa-lg"></i></a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         */
/*                                         <div class="row text-center">*/
/*                                             <ul class="pagination pagination-sm">*/
/*                                                 <li><a href="#">&laquo;</a></li>*/
/*                                                 <li><a href="#">1</a></li>*/
/*                                                 <li><a href="#">2</a></li>*/
/*                                                 <li><a href="#">3</a></li>*/
/*                                                 <li><a href="#">&raquo;</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="tab-pane fade" id="albums">*/
/*                                         <div class="row">*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="col-lg-3">*/
/*                                                 <a href="#" class="panel text-center">*/
/*                                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive img-rounded">*/
/*                                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="row text-center">*/
/*                                                 <ul class="pagination pagination-sm">*/
/*                                                     <li><a href="#">&laquo;</a></li>*/
/*                                                     <li><a href="#">1</a></li>*/
/*                                                     <li><a href="#">2</a></li>*/
/*                                                     <li><a href="#">3</a></li>*/
/*                                                     <li><a href="#">&raquo;</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="tab-pane fade" id="videos">*/
/*                                         Videos*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="panel">*/
/*                                 <div class="panel-heading border-bottom">*/
/*                                     <h3 class="text-primary text-uppercase">Forum</h3>*/
/*                                     <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
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
/*                                 <div class="panel-heading border-bottom">*/
/*                                     <h3 class="text-primary text-uppercase">Forum</h3>*/
/*                                     <p><b>Thème : </b><em>Le webmarketing</em></p>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
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
/*                             Mon menu*/
/*                         </div>*/
/*                         <ul class="list-group">*/
/*                             <li class="list-group-item disabled">*/
/*                                 Mes groupes <span class="pull-right" style="font-weight: normal">23</span>*/
/*                             </li>*/
/*                             <li class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <a href="#" data-toggle="popover" class="col-lg-2">*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">5</span>*/
/*                                     </a>*/
/*                                     <a href="#" class='col-lg-10'>*/
/*                                         Buy&Sallam de Maroua*/
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <a href="#" data-toggle="popover" class="col-lg-2">*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">99+</span>*/
/*                                     </a>*/
/*                                     <a href="#" class='col-lg-10'>*/
/*                                         Les Boutiquiers du Gra...*/
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <a href="#" class="list-group-item"> */
/*                                 Plus de groupes <i class="fa fa-plus-circle pull-right"></i>*/
/*                             </a>*/
/*                             <li class="list-group-item disabled"> */
/*                                 Organisation personnelle <span class="pull-right" style="font-weight: normal">34</span>*/
/*                             </li>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-lg"></i>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Meeting du soir */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-lg"></i>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Achat des marchandises */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-lg"></i>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Rencontre avec les fou... */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-calendar fa-lg"></i>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Paiement des employés */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 Plus d'agenda <i class="fa fa-plus-circle pull-right"></i> */
/*                             </a>*/
/*                             <li class="list-group-item disabled">*/
/*                                 Forums <span class="pull-right" style="font-weight: normal">44</span>*/
/*                             </li>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Hausse du prix du carb... */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Baisse du prix du carb... */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Augmentation du SMIG */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <div class="row">*/
/*                                     <div class='pull-left col-lg-2 text-primary'>*/
/*                                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                                         <span class="custom-badge">32</span>*/
/*                                     </div> */
/*                                     <div class='col-lg-10'>*/
/*                                         Les PME et PMI au Cam... */
/*                                         <span class="pull-right">&raquo;</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 Plus de forums <i class="fa fa-plus-circle pull-right"></i>*/
/*                             </a>*/
/*                         </ul>*/
/* */
/*                     </div> <!-- /block-group -->*/
/*                 {% endblock %}*/
/* */
/*                 {#{% block organisation_peso %}*/
/*                     <div class="panel panel-primary block-organisation-perso">*/
/*                         <div class="panel-heading">*/
/*                             Organisation personnelle*/
/*                             <span class="badge pull-right">99+</span>*/
/*                         </div>*/
/*                         <div class="list-group">*/
/* */
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#">*/
/*                                 Tout l'agenda*/
/*                                 <span class="">&raquo;</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div> <!-- /block-organisation-perso -->*/
/*                 {% endblock %}#}*/
/* */
/*                 {#{% block forum %}*/
/*                     <div class="panel panel-primary block-forum">*/
/*                         <div class="panel-heading">*/
/*                             Forums*/
/*                             <span class="badge pull-right">4</span>*/
/*                         </div>*/
/*                         <div class="list-group">*/
/*                             */
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#">*/
/*                                 Tous les forums*/
/*                                 <span class="">&raquo;</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div> <!-- /block-forum -->*/
/*                 {% endblock %}#}*/
/*             </div> <!-- /aside -->*/
/*         {% endblock %}*/
/*     </div> <!-- /row -->*/
/* {% endblock %}*/
/* */
