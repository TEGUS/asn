<?php

/* ASNMeetingBundle:Meeting:index.html.twig */
class __TwigTemplate_bb3bd395f8699a574c5c85971898eed12c0b07301da2389321d49c710856ff09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle::layout.html.twig", "ASNMeetingBundle:Meeting:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actualites' => array($this, 'block_actualites'),
            'aside' => array($this, 'block_aside'),
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
        echo "    Meeting - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_actualites($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"h3\">Jean Pierre Dubois</span> 
                        <em class=\"label label-danger pull-right\">Terminé</em>
                    </p>
                    <p><b>Thème :</b> Point technique</p>
                    <p><b>Date :</b> 11/06/2016 à 16h46min</p>
                    <p><b>Lieu :</b> En ligne</p>
                    <p><a href=\"#\">Voir les détails &raquo;</a></p>
                    <p class=\"text-center\">
                        <button class=\"btn btn-primary btn-sm\">Accepter</button>
                        <button class=\"btn btn-orange btn-sm\">Rejeter</button>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"h3\">Ramirez Stephane Bamo</span> 
                        <em class=\"label label-danger pull-right\">Terminé</em>
                    </p>
                    <p><b>Thème :</b> Bien vendre en ligne avec moins de depenses</p>
                    <p><b>Date :</b> 11/06/2016 à 16h46min</p>
                    <p><b>Lieu :</b> En ligne</p>
                    <p>
                        <a href=\"#\">Voir les détails &raquo;</a> 
                    </p>
                    <p class=\"text-center\">
                        <button class=\"btn btn-primary btn-sm\">Accepter</button>
                        <button class=\"btn btn-orange btn-sm\">Rejeter</button>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <p><span class=\"h3\">YANNICK Sade</span> <em class=\"label label-success pull-right\">En cours</em></p>
                    <p><b>Thème :</b> Point technique</p>
                    <p><b>Date :</b> 11/06/2016 à 16h46min</p>
                    <p><b>Lieu :</b> En ligne</p>
                    <p>
                        <a href=\"#\">Voir les détails &raquo;</a>
                        <a href=\"#\" class=\"pull-right\">Configurer <i class=\"fa fa-gears fa-lg\"></i></a>
                    </p>
                    <p class=\"text-center\">
                        <button class=\"btn btn-primary btn-sm\">Rejoindre</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 67
    public function block_aside($context, array $blocks = array())
    {
        // line 68
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"list-group\">
                    <a class=\"list-group-item\" href=\"#\">
                        La vangeance du Tigr... 
                        <em class=\"pull-right label label-success\">En cours</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        La vangeance du Tigr... 
                        <em class=\"pull-right label label-success\">En cours</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        La vangeance du Tigr... 
                        <em class=\"pull-right label label-success\">En cours</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        Le retour de Chang M... 
                        <em class=\"pull-right label label-danger\">Terminé</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        Le retour de Chang M... 
                        <em class=\"pull-right label label-danger\">Terminé</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        Le retour de Chang M... 
                        <em class=\"pull-right label label-danger\">Terminé</em>
                    </a>
                    <a class=\"list-group-item\" href=\"#\">
                        Le retour de Chang M... 
                        <em class=\"pull-right label label-danger\">Terminé</em>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ASNMeetingBundle:Meeting:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 68,  104 => 67,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'ASNMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Meeting - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block actualites %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/*                     <p>*/
/*                         <span class="h3">Jean Pierre Dubois</span> */
/*                         <em class="label label-danger pull-right">Terminé</em>*/
/*                     </p>*/
/*                     <p><b>Thème :</b> Point technique</p>*/
/*                     <p><b>Date :</b> 11/06/2016 à 16h46min</p>*/
/*                     <p><b>Lieu :</b> En ligne</p>*/
/*                     <p><a href="#">Voir les détails &raquo;</a></p>*/
/*                     <p class="text-center">*/
/*                         <button class="btn btn-primary btn-sm">Accepter</button>*/
/*                         <button class="btn btn-orange btn-sm">Rejeter</button>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/*                     <p>*/
/*                         <span class="h3">Ramirez Stephane Bamo</span> */
/*                         <em class="label label-danger pull-right">Terminé</em>*/
/*                     </p>*/
/*                     <p><b>Thème :</b> Bien vendre en ligne avec moins de depenses</p>*/
/*                     <p><b>Date :</b> 11/06/2016 à 16h46min</p>*/
/*                     <p><b>Lieu :</b> En ligne</p>*/
/*                     <p>*/
/*                         <a href="#">Voir les détails &raquo;</a> */
/*                     </p>*/
/*                     <p class="text-center">*/
/*                         <button class="btn btn-primary btn-sm">Accepter</button>*/
/*                         <button class="btn btn-orange btn-sm">Rejeter</button>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/*                     <p><span class="h3">YANNICK Sade</span> <em class="label label-success pull-right">En cours</em></p>*/
/*                     <p><b>Thème :</b> Point technique</p>*/
/*                     <p><b>Date :</b> 11/06/2016 à 16h46min</p>*/
/*                     <p><b>Lieu :</b> En ligne</p>*/
/*                     <p>*/
/*                         <a href="#">Voir les détails &raquo;</a>*/
/*                         <a href="#" class="pull-right">Configurer <i class="fa fa-gears fa-lg"></i></a>*/
/*                     </p>*/
/*                     <p class="text-center">*/
/*                         <button class="btn btn-primary btn-sm">Rejoindre</button>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="list-group">*/
/*                     <a class="list-group-item" href="#">*/
/*                         La vangeance du Tigr... */
/*                         <em class="pull-right label label-success">En cours</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         La vangeance du Tigr... */
/*                         <em class="pull-right label label-success">En cours</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         La vangeance du Tigr... */
/*                         <em class="pull-right label label-success">En cours</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         Le retour de Chang M... */
/*                         <em class="pull-right label label-danger">Terminé</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         Le retour de Chang M... */
/*                         <em class="pull-right label label-danger">Terminé</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         Le retour de Chang M... */
/*                         <em class="pull-right label label-danger">Terminé</em>*/
/*                     </a>*/
/*                     <a class="list-group-item" href="#">*/
/*                         Le retour de Chang M... */
/*                         <em class="pull-right label label-danger">Terminé</em>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
