<?php

/* ASNMainBundle:Main:index.html.twig */
class __TwigTemplate_d96d38b9ace2ab409fa7a9c1f8f4c9150fb469811f486eba4e238fea8684fbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle::layout.html.twig", "ASNMainBundle:Main:index.html.twig", 1);
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
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_actualites($context, array $blocks = array())
    {
        // line 8
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
        // line 27
        echo "
    <div class=\"panel\">
        <div class=\"panel-heading border-bottom\">
            <h3 class=\"text-orange text-uppercase\">
                Forum du Marketiste
            </h3>
            <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>
        </div>
        <div class=\"panel-body\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
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
            <h3 class=\"text-orange text-uppercase\">
                Forum du Marketiste
            </h3>
            <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>
        </div>
        <div class=\"panel-body\">
            <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
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
    
";
    }

    // line 89
    public function block_aside($context, array $blocks = array())
    {
        // line 90
        echo "    <div class=\"panel panel-primary\">
        <ul class=\"list-group\">
            <li class=\"list-group-item title\">
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
            <li class=\"list-group-item title\"> 
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
            <li class=\"list-group-item title\">
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
        return array (  134 => 90,  131 => 89,  104 => 65,  72 => 36,  61 => 27,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "ASNMainBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
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
/*             <h3 class="text-orange text-uppercase">*/
/*                 Forum du Marketiste*/
/*             </h3>*/
/*             <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*             <br>*/
/*             <p>*/
/*                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*             </p>*/
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
/*             <h3 class="text-orange text-uppercase">*/
/*                 Forum du Marketiste*/
/*             </h3>*/
/*             <p><b>Thème : </b> <em>La voiture la plus vendue au monde</em></p>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-responsive">*/
/*             <br>*/
/*             <p>*/
/*                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*             </p>*/
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
/*     */
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="panel panel-primary">*/
/*         <ul class="list-group">*/
/*             <li class="list-group-item title">*/
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
/*             <li class="list-group-item title"> */
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
/*             <li class="list-group-item title">*/
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
