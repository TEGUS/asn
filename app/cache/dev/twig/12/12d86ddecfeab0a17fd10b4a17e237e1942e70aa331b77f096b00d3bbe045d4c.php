<?php

/* ASNContactsBundle:Contacts:index.html.twig */
class __TwigTemplate_43629820a0f9dbd3e4b1c819bf3fb02bb1ea5f9402d36889d61e3b6ddd8cbf93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle::layout.html.twig", "ASNContactsBundle:Contacts:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
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
        echo "    Contacts - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Nom du contact\">
            </div>
            <br>
        </div>
        <div class=\"col-lg-12\">
            <div  class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel text-center\">
                        <div class=\"panel-body\">
                            <h3 class=\"col-lg-7\">Importer mes contacts à partir de</h3>
                            <ul class=\"list-unstyled list-inline col-lg-5\">
                                <li>
                                    <a href=\"#\" style=\"color: #1a237e\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" style=\"color: #2196f3;\"><i class=\"fa fa-twitter-square fa-3x\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" style=\"color: #1565c0\"><i class=\"fa fa-linkedin-square fa-3x\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\" style=\"color: #e53935\"><i class=\"fa fa-google-plus-square fa-3x\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body\">
                            <h3><b>Mes contacts ASN</b></h3>
                            <ul class=\"list-group col-lg-6\">
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <input type=\"checkbox\" name=\"usr1\" class=\"pull-right\"> 
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <input type=\"checkbox\" name=\"usr1\" class=\"pull-right\"> 
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <span class=\"pull-right label label-primary\">Les boutiquiers du Sud</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class=\"list-group col-lg-6\">
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <input type=\"checkbox\" name=\"usr1\" class=\"pull-right\"> 
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <span class=\"pull-right label label-primary\">Les boutiquiers du Sud</span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-2\">
                                            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/voiture.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\">
                                        </div>
                                        <div class=\"col-lg-10\">
                                            <label for=\"usr1\">Yannick Sade</label>
                                            <span class=\"pull-right label label-primary\">Les boutiquiers du Sud</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class=\"text-center\">
                                <button class=\"btn btn-orange btn-sm\">Ajouter à un groupe</button>
                            </p>
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
        return "ASNContactsBundle:Contacts:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 104,  141 => 93,  127 => 82,  111 => 69,  97 => 58,  83 => 47,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'ASNMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Contacts - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*                 <input type="text" class="form-control" placeholder="Nom du contact">*/
/*             </div>*/
/*             <br>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div  class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="panel text-center">*/
/*                         <div class="panel-body">*/
/*                             <h3 class="col-lg-7">Importer mes contacts à partir de</h3>*/
/*                             <ul class="list-unstyled list-inline col-lg-5">*/
/*                                 <li>*/
/*                                     <a href="#" style="color: #1a237e"><i class="fa fa-facebook-square fa-3x"></i></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" style="color: #2196f3;"><i class="fa fa-twitter-square fa-3x"></i></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" style="color: #1565c0"><i class="fa fa-linkedin-square fa-3x"></i></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" style="color: #e53935"><i class="fa fa-google-plus-square fa-3x"></i></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <div class="panel">*/
/*                         <div class="panel-body">*/
/*                             <h3><b>Mes contacts ASN</b></h3>*/
/*                             <ul class="list-group col-lg-6">*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <input type="checkbox" name="usr1" class="pull-right"> */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <input type="checkbox" name="usr1" class="pull-right"> */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <span class="pull-right label label-primary">Les boutiquiers du Sud</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <ul class="list-group col-lg-6">*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <input type="checkbox" name="usr1" class="pull-right"> */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <span class="pull-right label label-primary">Les boutiquiers du Sud</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-2">*/
/*                                             <img src="{{ asset('res/img/voiture.jpg') }}" class="img-circle img-responsive">*/
/*                                         </div>*/
/*                                         <div class="col-lg-10">*/
/*                                             <label for="usr1">Yannick Sade</label>*/
/*                                             <span class="pull-right label label-primary">Les boutiquiers du Sud</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <p class="text-center">*/
/*                                 <button class="btn btn-orange btn-sm">Ajouter à un groupe</button>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
