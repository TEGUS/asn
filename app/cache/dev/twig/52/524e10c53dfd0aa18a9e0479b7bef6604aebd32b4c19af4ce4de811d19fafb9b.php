<?php

/* ASNUserBundle:Security:profile.html.twig */
class __TwigTemplate_d7c126b0567f399beabd92a85734ff5b21775d738c2653a40f56d786ddb72f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle::layout.html.twig", "ASNUserBundle:Security:profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASNMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3\" >
                <div class=\"panel padding\">
                    <a href=\"#\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                    </a>
                    <h5><b>Nom & prénoms</b></h5>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</p>
                    <h5><b>Date de naissance</b></h5>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateofbirth", array()), "d/M/yy"), "html", null, true);
        echo "</p>
                    <h5><b>Email</b></h5>
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                    <h5><b>Nationnalité</b></h5>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "country", array()), "html", null, true);
        echo "</p>
                </div>
            </div> 

            <div class=\"col-lg-7 block-actualite\">
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
                        <a href=\"#meetings\" role=\"tab\" data-toggle=\"tab\">
                            <i class=\"fa fa-suitcase text-orange\"></i> Meetings
                        </a>
                    </li>
                    <li>
                        <a href=\"#groupes\" role=\"tab\" data-toggle=\"tab\">
                            <i class=\"fa fa-group text-orange\"></i> Groupes
                        </a>
                    </li>
                    <li>
                        <a href=\"#forums\" role=\"tab\" data-toggle=\"tab\">
                            <i class=\"fa fa-comments-o text-orange\"></i> Forums
                        </a>
                    </li>
                    <li>
                        <a href=\"#agendas\" role=\"tab\" data-toggle=\"tab\">
                            <i class=\"fa fa-calendar text-orange\"></i> Agendas
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content padding\">
                    <div class=\"tab-pane fade in active\" id=\"posts\">
                        <div class=\"row\">
                            <div class=\"col-lg-2\">
                                <br>
                                <a href=\"#\" class=\"h1 text-orange\">Moi</a>
                                <h6>Le 27/05/2016</h6>
                                <h6>A 17h:06</h6>
                                <br>
                                <h6><a href=\"#\">Modifier <i class=\"fa fa-pencil\"></i></a></h6>
                                <h6><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></h6>
                            </div>
                            <div class=\"col-lg-8 panel\">
                                <h3>Vente aux enchères</h3>
                                <h4><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></h4>
                                <p>
                                    Achetez cette dernière Limousine de marque Chinoise à seulement 15millions de FCFA
                                </p>
                                <p><a href=\"#\">Voir les détails sur APM &raquo;</a></p>
                            </div>
                            <div class=\"col-lg-2 text-center\">
                                <p>
                                    <span class=\"text-muted\">12 j'aime</span>
                                    <br>
                                    <i class=\"fa fa-thumbs-o-up fa-lg\"></i>
                                    <br>
                                    <a> Voir &raquo;</a>
                                </p>
                                <br>
                                <p>
                                    <span class=\"text-muted\">120 commentaires</span>
                                    <br>
                                    <i class=\"fa fa-comments-o fa-lg\"></i>
                                    <br>
                                    <a> Voir &raquo;</a>
                                </p>
                                <br>
                                <h4 class=\"text-muted\">Visible par</h4>
                                <p>
                                    <a href=\"#\">Buy&Sallam</a>
                                    <a>Buy&Sallam</a><br>
                                    <a>Buy&Sallam</a><br>
                                    <a>Buy&Sallam</a><br>
                                    <a>Buy&Sallam</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"albums\">
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/paysage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                            <div class=\"col-lg-3\">
                                <a href=\"#\" class=\"panel text-center\">
                                    <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/house.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
                                    <h6 class=\"text-orange\"><b>Album</b></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"meetings\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"panel\">
                                    <div class=\"panel-body\">
                                        <h3>TD Calcul parallele</h3>
                                        <h5>Début: 01/06/2016 15h:09</h5>
                                        <h5>Fin: 01/06/2016 22h:09</h5>
                                        <h5>Fréquence de rappel: 3jours</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"panel\">
                                    <div class=\"panel-body\">
                                        <h3>TD Calcul parallele</h3>
                                        <h5>Début: 01/06/2016 15h:09</h5>
                                        <h5>Fin: 01/06/2016 22h:09</h5>
                                        <h5>Fréquence de rappel: 3jours</h5>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 211
        echo "                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"groupes\">
                        <div class=\"col-lg-3 border-right\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li class=\"active\">
                                    <a href=\"#\">Boutiquiers du Grand Nord <span class=\"badge pull-right\">4</span></a>
                                </li>
                                <li>
                                    <a href=\"#\">Buy & Sallam <span class=\"badge pull-right\">49</span></a>
                                </li>
                                <li>
                                    <a href=\"#\">Syndicat des Etudiants de Maroua <span class=\"badge pull-right\">30</span></a>
                                </li>
                                <li>
                                    <a href=\"#\">Etudiants de l'ISS <span class=\"badge pull-right\">12</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-lg-9\">
                            <a href=\"#\" class=\"pull-right\" data-toggle=\"modal\" data-target=\"#myModal1\">
                                Ajouter un nouveau membre <i class=\"fa fa-plus-circle\"></i>
                            </a>
                            <br><br><br>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                            </div>
                            <br>
                            <table  class=\"table table-bordered table-striped\">
                                <thead class=\"\">
                                    <tr>
                                        <th>membres</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TSAFACK SILATSA Darius Clinton</td>
                                        <td><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aurelien TEGUS</td>
                                        <td><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aurelien TEGUS</td>
                                        <td><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aurelien TEGUS</td>
                                        <td><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aurelien TEGUS</td>
                                        <td><a href=\"#\" class=\"text-danger\">Supprimer <i class=\"fa fa-remove\"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"forums\">
                        <div class=\"row\">
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-commenting fa-3x\"></i>
                                <h3>Buy&Sallam</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-commenting fa-3x\"></i>
                                <h3>Buy&Sallam</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-commenting fa-3x\"></i>
                                <h3>Buy&Sallam</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-commenting fa-3x\"></i>
                                <h3>Buy&Sallam</h3>
                            </a>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"agendas\">
                        <div class=\"row\">
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-calendar fa-2x\"></i>
                                <h3>Titre agenda 1</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-calendar fa-2x\"></i>
                                <h3>Titre agenda 1</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-calendar fa-2x\"></i>
                                <h3>Titre agenda 1</h3>
                            </a>
                            <a class=\"col-lg-3 text-center\" href=\"#\"> 
                                <i class=\"fa fa-calendar fa-2x\"></i>
                                <h3>Titre agenda 1</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"panel\">
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li>
                            <a href=\"#\">
                                Modifier la photo de profile 
                                <i class=\"fa fa-pencil pull-right\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Modifier le mot de passe 
                                <i class=\"fa fa-pencil pull-right\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Modifier les informations personnelles 
                                <i class=\"fa fa-pencil pull-right\"></i>
                            </a>
                        </li>
                        <li><a href=\"#\">Option 1</a></li>
                        <li><a href=\"#\">Option 1</a></li>
                        <li><a href=\"#\">Option 1</a></li>
                    </ul>
                </div>
            </div>

            <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
                            </button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Ajout d'un nouveau membre au groupe @@@</h4>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                            </div>
                            <div class=\"row\">
                                <h3>Lorem</h3>
                                <h3>Lorem</h3>
                                <h3>Lorem</h3>
                                </p>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ASNUserBundle:Security:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 211,  232 => 153,  223 => 147,  214 => 141,  205 => 135,  196 => 129,  187 => 123,  178 => 117,  169 => 111,  128 => 73,  74 => 22,  69 => 20,  64 => 18,  57 => 16,  51 => 13,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ASNMainBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.firstname }} {{ app.user.lastname }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-3" >*/
/*                 <div class="panel padding">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                     </a>*/
/*                     <h5><b>Nom & prénoms</b></h5>*/
/*                     <p>{{ app.user.firstname }} {{ app.user.lastname }}</p>*/
/*                     <h5><b>Date de naissance</b></h5>*/
/*                     <p>{{ app.user.dateofbirth | date('d/M/yy') }}</p>*/
/*                     <h5><b>Email</b></h5>*/
/*                     <p>{{ app.user.email }}</p>*/
/*                     <h5><b>Nationnalité</b></h5>*/
/*                     <p>{{ app.user.country }}</p>*/
/*                 </div>*/
/*             </div> */
/* */
/*             <div class="col-lg-7 block-actualite">*/
/*                 <ul class="nav nav-tabs" role="tablist">*/
/*                     <li class="active">*/
/*                         <a href="#posts" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-paper-plane text-orange"></i> Posts*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#albums" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-picture-o text-orange"></i> Albums*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#meetings" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-suitcase text-orange"></i> Meetings*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#groupes" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-group text-orange"></i> Groupes*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#forums" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-comments-o text-orange"></i> Forums*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#agendas" role="tab" data-toggle="tab">*/
/*                             <i class="fa fa-calendar text-orange"></i> Agendas*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="tab-content padding">*/
/*                     <div class="tab-pane fade in active" id="posts">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-2">*/
/*                                 <br>*/
/*                                 <a href="#" class="h1 text-orange">Moi</a>*/
/*                                 <h6>Le 27/05/2016</h6>*/
/*                                 <h6>A 17h:06</h6>*/
/*                                 <br>*/
/*                                 <h6><a href="#">Modifier <i class="fa fa-pencil"></i></a></h6>*/
/*                                 <h6><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></h6>*/
/*                             </div>*/
/*                             <div class="col-lg-8 panel">*/
/*                                 <h3>Vente aux enchères</h3>*/
/*                                 <h4><img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive"></h4>*/
/*                                 <p>*/
/*                                     Achetez cette dernière Limousine de marque Chinoise à seulement 15millions de FCFA*/
/*                                 </p>*/
/*                                 <p><a href="#">Voir les détails sur APM &raquo;</a></p>*/
/*                             </div>*/
/*                             <div class="col-lg-2 text-center">*/
/*                                 <p>*/
/*                                     <span class="text-muted">12 j'aime</span>*/
/*                                     <br>*/
/*                                     <i class="fa fa-thumbs-o-up fa-lg"></i>*/
/*                                     <br>*/
/*                                     <a> Voir &raquo;</a>*/
/*                                 </p>*/
/*                                 <br>*/
/*                                 <p>*/
/*                                     <span class="text-muted">120 commentaires</span>*/
/*                                     <br>*/
/*                                     <i class="fa fa-comments-o fa-lg"></i>*/
/*                                     <br>*/
/*                                     <a> Voir &raquo;</a>*/
/*                                 </p>*/
/*                                 <br>*/
/*                                 <h4 class="text-muted">Visible par</h4>*/
/*                                 <p>*/
/*                                     <a href="#">Buy&Sallam</a>*/
/*                                     <a>Buy&Sallam</a><br>*/
/*                                     <a>Buy&Sallam</a><br>*/
/*                                     <a>Buy&Sallam</a><br>*/
/*                                     <a>Buy&Sallam</a><br>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="albums">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/paysage.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-lg-3">*/
/*                                 <a href="#" class="panel text-center">*/
/*                                     <img src="{{ asset('res/img/house.jpg') }}" class="img-responsive img-rounded">*/
/*                                     <h6 class="text-orange"><b>Album</b></h6>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="meetings">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-6">*/
/*                                 <div class="panel">*/
/*                                     <div class="panel-body">*/
/*                                         <h3>TD Calcul parallele</h3>*/
/*                                         <h5>Début: 01/06/2016 15h:09</h5>*/
/*                                         <h5>Fin: 01/06/2016 22h:09</h5>*/
/*                                         <h5>Fréquence de rappel: 3jours</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-lg-6">*/
/*                                 <div class="panel">*/
/*                                     <div class="panel-body">*/
/*                                         <h3>TD Calcul parallele</h3>*/
/*                                         <h5>Début: 01/06/2016 15h:09</h5>*/
/*                                         <h5>Fin: 01/06/2016 22h:09</h5>*/
/*                                         <h5>Fréquence de rappel: 3jours</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {#<div class="col-lg-9 panel hidden">*/
/*                                 <h1>TD Calcul parallele</h1>*/
/*                                 <h5>Début: 01/06/2016 15h:09</h5>*/
/*                                 <h5>Fin: 01/06/2016 22h:09</h5>*/
/*                                 <h5>Fréquence de rappel: 3jours</h5>*/
/*                                 <br>*/
/*                                 <h5><b>Participants</b> <i class="fa fa-group"></i></h5>*/
/*                                 <p>*/
/*                                     Organisateur: <a href="#">Moi</a>*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Modérateur: <a href="#">Aurelien TEGUS</a>*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Rapporteur: <a href="#">Shang Mokai</a>*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Membres: <a href="#">Sophony,</a> <a href="#">Darius,</a> */
/*                                     <a href="#">Balam,</a> <a href="#">Patrice,</a> */
/*                                     <a href="#" class="h6">voir tous les membres&raquo;</a>*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Lieu: <a href="#">En ligne</a>*/
/*                                 </p>*/
/*                                 <br>*/
/*                                 <h5><b>Pièces jointes</b> <i class="fa fa-paperclip"></i></h5>*/
/*                                 <p><a href="#">Epreuve CC 2015 <i class="fa fa-download"></i></a></p>*/
/*                                 <p><a href="#">Epreuve CC 2015 <i class="fa fa-download"></i></a></p>*/
/*                                 <p><a href="#">Epreuve CC 2015 <i class="fa fa-download"></i></a></p>*/
/*                             </div>#}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="groupes">*/
/*                         <div class="col-lg-3 border-right">*/
/*                             <ul class="nav nav-pills nav-stacked">*/
/*                                 <li class="active">*/
/*                                     <a href="#">Boutiquiers du Grand Nord <span class="badge pull-right">4</span></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Buy & Sallam <span class="badge pull-right">49</span></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Syndicat des Etudiants de Maroua <span class="badge pull-right">30</span></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Etudiants de l'ISS <span class="badge pull-right">12</span></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-lg-9">*/
/*                             <a href="#" class="pull-right" data-toggle="modal" data-target="#myModal1">*/
/*                                 Ajouter un nouveau membre <i class="fa fa-plus-circle"></i>*/
/*                             </a>*/
/*                             <br><br><br>*/
/*                             <div class="input-group">*/
/*                                 <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*                                 <input type="text" class="form-control" placeholder="Nom de l'utilisateur">*/
/*                             </div>*/
/*                             <br>*/
/*                             <table  class="table table-bordered table-striped">*/
/*                                 <thead class="">*/
/*                                     <tr>*/
/*                                         <th>membres</th>*/
/*                                         <th>Action</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td>TSAFACK SILATSA Darius Clinton</td>*/
/*                                         <td><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>Aurelien TEGUS</td>*/
/*                                         <td><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>Aurelien TEGUS</td>*/
/*                                         <td><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>Aurelien TEGUS</td>*/
/*                                         <td><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>Aurelien TEGUS</td>*/
/*                                         <td><a href="#" class="text-danger">Supprimer <i class="fa fa-remove"></i></a></td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="forums">*/
/*                         <div class="row">*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-commenting fa-3x"></i>*/
/*                                 <h3>Buy&Sallam</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-commenting fa-3x"></i>*/
/*                                 <h3>Buy&Sallam</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-commenting fa-3x"></i>*/
/*                                 <h3>Buy&Sallam</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-commenting fa-3x"></i>*/
/*                                 <h3>Buy&Sallam</h3>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="agendas">*/
/*                         <div class="row">*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-calendar fa-2x"></i>*/
/*                                 <h3>Titre agenda 1</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-calendar fa-2x"></i>*/
/*                                 <h3>Titre agenda 1</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-calendar fa-2x"></i>*/
/*                                 <h3>Titre agenda 1</h3>*/
/*                             </a>*/
/*                             <a class="col-lg-3 text-center" href="#"> */
/*                                 <i class="fa fa-calendar fa-2x"></i>*/
/*                                 <h3>Titre agenda 1</h3>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-2">*/
/*                 <div class="panel">*/
/*                     <ul class="nav nav-pills nav-stacked">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 Modifier la photo de profile */
/*                                 <i class="fa fa-pencil pull-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 Modifier le mot de passe */
/*                                 <i class="fa fa-pencil pull-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 Modifier les informations personnelles */
/*                                 <i class="fa fa-pencil pull-right"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li><a href="#">Option 1</a></li>*/
/*                         <li><a href="#">Option 1</a></li>*/
/*                         <li><a href="#">Option 1</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Modal -->*/
/*             <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal">*/
/*                                 <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>*/
/*                             </button>*/
/*                             <h4 class="modal-title" id="myModalLabel">Ajout d'un nouveau membre au groupe @@@</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                             <div class="input-group">*/
/*                                 <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*                                 <input type="text" class="form-control" placeholder="Nom de l'utilisateur">*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <h3>Lorem</h3>*/
/*                                 <h3>Lorem</h3>*/
/*                                 <h3>Lorem</h3>*/
/*                                 </p>*/
/*                             </div>*/
/*                             <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Annuler</button>*/
/*                                 <button type="button" class="btn btn-primary btn-sm">Ajouter</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
