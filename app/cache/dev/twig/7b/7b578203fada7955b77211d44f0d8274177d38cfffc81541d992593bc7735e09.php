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
            'title' => array($this, 'block_title'),
            'pub' => array($this, 'block_pub'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_pub($context, array $blocks = array())
    {
        // line 8
        echo "    <div data-spy=\"affix\" data-offset-top=\"10\">
        <div class=\"panel text-center\">
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"carousel-caption\">
                            <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"carousel-caption\">
                            <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 34
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
        <div class=\"panel text-center\">
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"carousel-caption\">
                            <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"carousel-caption\">
                            <a href=\"#\" class=\"h3\">Creez votre boutique en ligne avec APM</a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 75
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

    // line 94
    public function block_actualites($context, array $blocks = array())
    {
        // line 95
        echo "    <div style=\"height: 150px; overflow: auto;\" class=\"mCustomScrollbar\" data-mcs-theme=\"dark\" data-mcs-axis=\"y\">
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

    </div><br>

    ";
        // line 114
        echo "
    <div class=\"panel\">
        <div class=\"panel-heading border-bottom\">
            <h3 class=\"text-primary text-uppercase\">Forum</h3>
            <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>
        </div>
        <div class=\"panel-body\">
            <img src=\"";
        // line 121
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
        // line 145
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

    // line 165
    public function block_aside($context, array $blocks = array())
    {
        // line 166
        echo "    <div class=\"panel panel-primary\">
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
    </div>
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
        return array (  233 => 166,  230 => 165,  207 => 145,  180 => 121,  171 => 114,  153 => 95,  150 => 94,  128 => 75,  119 => 69,  110 => 63,  78 => 34,  69 => 28,  60 => 22,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pub %}*/
/*     <div data-spy="affix" data-offset-top="10">*/
/*         <div class="panel text-center">*/
/*             <h4>Ne manquez pas cette occasion qui ne se présentera pas 2 fois</h4>*/
/*             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9000">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- Controls -->*/
/*                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*                     <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*                     <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel text-center">*/
/*             <h4>Vous voulez mettre votre boutique en ligne mais vous n'avez pas de moyens ?</h4>*/
/*             <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel" data-interval="7000">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>*/
/*                     <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*                         <div class="carousel-caption">*/
/*                             <a href="#" class="h3">Creez votre boutique en ligne avec APM</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- Controls -->*/
/*                 <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">*/
/*                     <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">*/
/*                     <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block actualites %}*/
/*     <div style="height: 150px; overflow: auto;" class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">*/
/*         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/* */
/*     </div><br>*/
/* */
/*     {#<div class="panel">*/
/* */
/*     </div>#}*/
/* */
/*     <div class="panel">*/
/*         <div class="panel-heading border-bottom">*/
/*             <h3 class="text-primary text-uppercase">Forum</h3>*/
/*             <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*             <p class="text-center text-muted">*/
/*                 <i class="fa fa-comments-o"></i> 123 Commentaires*/
/*             </p>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <form action="#">*/
/*                 <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                 <button class="btn btn-primary btn-sm">Commenter</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel">*/
/*         <div class="panel-heading border-bottom">*/
/*             <h3 class="text-primary text-uppercase">Forum</h3>*/
/*             <p><b>Thème : </b><em>Le webmarketing</em></p>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive">*/
/*             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*             <p class="text-center text-muted">*/
/*                 <i class="fa fa-comments-o"></i> 12k Commentaires*/
/*             </p>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <form action="#">*/
/*                 <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                 <button class="btn btn-primary btn-sm active">Commenter</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="panel panel-primary">*/
/*         <ul class="list-group">*/
/*             <li class="list-group-item disabled">*/
/*                 Mes groupes <span class="pull-right" style="font-weight: normal">23</span>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*                 <div class="row">*/
/*                     <a href="#" data-toggle="popover" class="col-lg-2">*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">5</span>*/
/*                     </a>*/
/*                     <a href="#" class='col-lg-10'>*/
/*                         Buy&Sallam de Maroua*/
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*                 <div class="row">*/
/*                     <a href="#" data-toggle="popover" class="col-lg-2">*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">99+</span>*/
/*                     </a>*/
/*                     <a href="#" class='col-lg-10'>*/
/*                         Les Boutiquiers du Gra...*/
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </li>*/
/*             <a href="#" class="list-group-item"> */
/*                 Plus de groupes <i class="fa fa-plus-circle pull-right"></i>*/
/*             </a>*/
/*             <li class="list-group-item disabled"> */
/*                 Organisation personnelle <span class="pull-right" style="font-weight: normal">34</span>*/
/*             </li>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-calendar fa-lg"></i>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Meeting du soir */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-calendar fa-lg"></i>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Achat des marchandises */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-calendar fa-lg"></i>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Rencontre avec les fou... */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-calendar fa-lg"></i>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Paiement des employés */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 Plus d'agenda <i class="fa fa-plus-circle pull-right"></i> */
/*             </a>*/
/*             <li class="list-group-item disabled">*/
/*                 Forums <span class="pull-right" style="font-weight: normal">44</span>*/
/*             </li>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">32</span>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Hausse du prix du carb... */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">32</span>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Baisse du prix du carb... */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">32</span>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Augmentation du SMIG */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 <div class="row">*/
/*                     <div class='pull-left col-lg-2 text-primary'>*/
/*                         <i class="fa fa-comments-o fa-lg"></i>*/
/*                         <span class="custom-badge">32</span>*/
/*                     </div> */
/*                     <div class='col-lg-10'>*/
/*                         Les PME et PMI au Cam... */
/*                         <span class="pull-right">&raquo;</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*             <a href="#" class="list-group-item">*/
/*                 Plus de forums <i class="fa fa-plus-circle pull-right"></i>*/
/*             </a>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
