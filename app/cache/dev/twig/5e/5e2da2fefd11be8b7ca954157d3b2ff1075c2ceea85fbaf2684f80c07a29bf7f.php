<?php

/* ASNForumBundle:Forum:index.html.twig */
class __TwigTemplate_cb79410858a726bbdf75cd7512a4ca64be0fada95c399d0b09b56d0d8148e12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle::layout.html.twig", "ASNForumBundle:Forum:index.html.twig", 1);
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
        echo "    Forums - ";
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
                <div  class=\"panel-heading\">
                    <h1><b>Forum du Marketiste</b></h1>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Une description du forum..... 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <h3 class=\"text-orange text-center\">
                <b>
                    Les nouvelles strategies de marketing au Cameroun et en Afrique
                </b>
            </h3>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <div class=\"col-lg-2\">
                        <h1><i class=\"fa fa-user fa-lg\"></i></h1>
                        <p>Yannick </p>
                    </div>
                    <em class=\"text-orange\">11/06/2016 à 12h06</em>
                    <div class=\"col-lg-10 panel\">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                        </p>
                        <br>
                        <h4><b>Réponses</b> <span class=\"badge\">34</span></h4>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-2\">
                                    <h1><i class=\"fa fa-user fa-lg\"></i></h1>
                                    <p>Yannick </p>
                                </div>
                                <em class=\"text-orange\">11/06/2016 à 12h06</em>
                                <div class=\"col-lg-10 panel\">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"col-lg-2\">
                                    <h1><i class=\"fa fa-user fa-lg\"></i></h1>
                                    <p>Yannick </p>
                                </div>
                                <em class=\"text-orange\">11/06/2016 à 12h06</em>
                                <div class=\"col-lg-10 panel\">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p><a href=\"#\">Tous &raquo;</a></p>
                        <p><a href=\"#\">Repondre <i class=\"fa fa-send\"></i></a></p>
                                ";
        // line 83
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <div class=\"col-lg-2\">
                        <h1><i class=\"fa fa-user fa-lg\"></i></h1>
                        <p>Yannick </p>
                    </div>
                    <em class=\"text-orange\">11/06/2016 à 12h06</em>
                    <div class=\"col-lg-10\">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        </p>
                        <p><a href=\"#\">Repondre <i class=\"fa fa-send\"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-12\">
            <form action=\"#\">
                <textarea class=\"form-control\" placeholder=\"Commentaire\"></textarea>
                <button class=\"btn btn-primary btn-sm\">Commenter</button>
            </form>
        </div>
    </div>
";
    }

    // line 116
    public function block_aside($context, array $blocks = array())
    {
        // line 117
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel\">
                <div class=\"list-group\">
                    <a class=\"list-group-item\" href=\"#\">Forum du Marketiste</a>
                    <a class=\"list-group-item\" href=\"#\">Forum de Etudiants d'INFOTEL</a>
                    <a class=\"list-group-item\" href=\"#\">Forum des Buy&Sallam de L'E...</a>
                    <a class=\"list-group-item\" href=\"#\">Forum de Etudiants d'INFOTEL</a>
                    <a class=\"list-group-item\" href=\"#\">Forum des Buy&Sallam de L'E...</a>
                    <a class=\"list-group-item\" href=\"#\">Forum de Etudiants d'INFOTEL</a>
                    <a class=\"list-group-item\" href=\"#\">Forum des Buy&Sallam de L'E...</a>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <p>
                
            </p>
            <h4 class=\"text-primary\">
                Sujets de discussion
                <a href=\"#\" class=\"pull-right\" title=\"Nouveau sujet\">
                    <i class=\"fa fa-plus-circle fa-lg\"></i>
                </a>
            </h4>
            <div class=\"panel\">
                <div class=\"list-group\">
                    <a class=\"list-group-item\" href=\"#\">Les nouvelles strategies de marketing</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ASNForumBundle:Forum:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 117,  149 => 116,  114 => 83,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'ASNMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Forums - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block actualites %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div  class="panel-heading">*/
/*                     <h1><b>Forum du Marketiste</b></h1>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <p>*/
/*                         Une description du forum..... */
/*                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <h3 class="text-orange text-center">*/
/*                 <b>*/
/*                     Les nouvelles strategies de marketing au Cameroun et en Afrique*/
/*                 </b>*/
/*             </h3>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/*                     <div class="col-lg-2">*/
/*                         <h1><i class="fa fa-user fa-lg"></i></h1>*/
/*                         <p>Yannick </p>*/
/*                     </div>*/
/*                     <em class="text-orange">11/06/2016 à 12h06</em>*/
/*                     <div class="col-lg-10 panel">*/
/*                         <p>*/
/*                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam*/
/*                         </p>*/
/*                         <br>*/
/*                         <h4><b>Réponses</b> <span class="badge">34</span></h4>*/
/*                         <div class="row">*/
/*                             <div class="col-lg-12">*/
/*                                 <div class="col-lg-2">*/
/*                                     <h1><i class="fa fa-user fa-lg"></i></h1>*/
/*                                     <p>Yannick </p>*/
/*                                 </div>*/
/*                                 <em class="text-orange">11/06/2016 à 12h06</em>*/
/*                                 <div class="col-lg-10 panel">*/
/*                                     <p>*/
/*                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-lg-12">*/
/*                                 <div class="col-lg-2">*/
/*                                     <h1><i class="fa fa-user fa-lg"></i></h1>*/
/*                                     <p>Yannick </p>*/
/*                                 </div>*/
/*                                 <em class="text-orange">11/06/2016 à 12h06</em>*/
/*                                 <div class="col-lg-10 panel">*/
/*                                     <p>*/
/*                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <p><a href="#">Tous &raquo;</a></p>*/
/*                         <p><a href="#">Repondre <i class="fa fa-send"></i></a></p>*/
/*                                 {#<div class="col-lg-12">*/
/*                                     <form action="#">*/
/*                                         <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                                         <button class="btn btn-primary btn-sm">Commenter</button>*/
/*                                     </form>*/
/*                                 </div>#}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="panel-body">*/
/*                     <div class="col-lg-2">*/
/*                         <h1><i class="fa fa-user fa-lg"></i></h1>*/
/*                         <p>Yannick </p>*/
/*                     </div>*/
/*                     <em class="text-orange">11/06/2016 à 12h06</em>*/
/*                     <div class="col-lg-10">*/
/*                         <p>*/
/*                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                         </p>*/
/*                         <p><a href="#">Repondre <i class="fa fa-send"></i></a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-12">*/
/*             <form action="#">*/
/*                 <textarea class="form-control" placeholder="Commentaire"></textarea>*/
/*                 <button class="btn btn-primary btn-sm">Commenter</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel">*/
/*                 <div class="list-group">*/
/*                     <a class="list-group-item" href="#">Forum du Marketiste</a>*/
/*                     <a class="list-group-item" href="#">Forum de Etudiants d'INFOTEL</a>*/
/*                     <a class="list-group-item" href="#">Forum des Buy&Sallam de L'E...</a>*/
/*                     <a class="list-group-item" href="#">Forum de Etudiants d'INFOTEL</a>*/
/*                     <a class="list-group-item" href="#">Forum des Buy&Sallam de L'E...</a>*/
/*                     <a class="list-group-item" href="#">Forum de Etudiants d'INFOTEL</a>*/
/*                     <a class="list-group-item" href="#">Forum des Buy&Sallam de L'E...</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <p>*/
/*                 */
/*             </p>*/
/*             <h4 class="text-primary">*/
/*                 Sujets de discussion*/
/*                 <a href="#" class="pull-right" title="Nouveau sujet">*/
/*                     <i class="fa fa-plus-circle fa-lg"></i>*/
/*                 </a>*/
/*             </h4>*/
/*             <div class="panel">*/
/*                 <div class="list-group">*/
/*                     <a class="list-group-item" href="#">Les nouvelles strategies de marketing</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
