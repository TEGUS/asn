<?php

/* ASNCalendarBundle::layout.html.twig */
class __TwigTemplate_923531d3f79b5f5dc720f593eec7a4a4fb0cf047f33416571dab15799a1f221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ASNCalendarBundle::layout.html.twig", 1);
        $this->blocks = array(
            'actualite' => array($this, 'block_actualite'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_actualite($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\" data-ng-disabled=\"!active\"
                    data-toggle=\"modal\" data-target=\".bs-event-modal-sm\">
                Nouvel évènement
            </button>
            <div class=\"modal fade bs-event-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"myModalLabel\" data-ng-show=\"!toUpdate\">Créer un évènement</h4>
                            <h4 class=\"modal-title\" id=\"myModalLabel\" data-ng-show=\"toUpdate\">Modification</h4>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"newAgendaForm\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label class=\"col-lg-4 control-label\">Libelle</label>
                                    <div class=\"col-lg-7\">
                                        <input type=\"text\" placeholder=\"libelle\" class=\"form-control\" ng-model=\"newEvenement.libelle\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-lg-4 control-label\">Description</label>
                                    <div class=\"col-lg-7\">
                                        <textarea placeholder=\"description\" class=\"form-control\" 
                                                  rows=\"3\" ng-model=\"newEvenement.description\"></textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-lg-4 control-label\">Lieu</label>
                                    <div class=\"col-lg-7\">
                                        <input type=\"text\" placeholder=\"Lieu\" class=\"form-control\" ng-model=\"newEvenement.lieu\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"dtp_input1\" class=\"col-lg-4 control-label\">Date et heure</label>
                                    <div class=\"input-group date form_datetime col-lg-7\" data-date=\"\" data-date-format=\"dd MM yyyy HH:ii p\" 
                                         data-link-field=\"dtp_input1\" data-link-format=\"yyyy-mm-dd HH:ii\">
                                        <input class=\"form-control\" size=\"16\" type=\"text\" value=\"\" readonly data-ng-model=\"newEvenement.date\">
                                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-remove\"></span></span>
                                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-th\"></span></span>
                                    </div>
                                    <input type=\"hidden\" id=\"dtp_input1\" value=\"\" /><br/>
                                </div>
                                {[{ newEvenement.date }]}
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" data-ng-show=\"!process\"
                                    ng-click=\"cancel()\">Annuler</button>
                            <button type=\"button\" class=\"btn btn-primary\" data-ng-disabled=\"!newEvenement.libelle\"
                                    data-ng-show=\"!toUpdate && !process\" ng-click=\"createEvenement()\">Enrégistrer</button>
                            <button type=\"button\" class=\"btn btn-primary\" data-ng-disabled=\"!newEvenement.libelle\"
                                    data-ng-show=\"toUpdate && !process\" ng-click=\"updateEvenement()\">Modifier</button>
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/loading.gif"), "html", null, true);
        echo "\" data-ng-show=\"process\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"panel panel-success\" data-ng-show=\"currentAgenda != null\">
                <div class=\"panel-body\">
                    <center>{[{ currentAgenda.libelle }]}</center>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\" data-ng-disabled=\"!active\"
                    data-toggle=\"modal\" data-target=\".bs-task-modal-sm\">
                Nouvel tâche
            </button>
            <div class=\"modal fade bs-task-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Créer une Tâche</h4>
                        </div>
                        <div class=\"modal-body\">
                            ...
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal fade bs-agenda-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"myModalLabel\" data-ng-show=\"!toUpdate\">Créer un agenda</h4>
                            <h4 class=\"modal-title\" id=\"myModalLabel\" data-ng-show=\"toUpdate\">Modification</h4>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert-create-agenda col-md-8 col-md-offset-2\"></div>
                            <form id=\"newAgendaForm\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label class=\"col-lg-4 control-label\">Libelle</label>
                                    <div class=\"col-lg-7\">
                                        <input type=\"text\" placeholder=\"libelle\" class=\"form-control clibelle\" ng-model=\"newAgenda.libelle\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-lg-4 control-label\">Description</label>
                                    <div class=\"col-lg-7\">
                                        <textarea placeholder=\"description\" class=\"form-control cdescription\" 
                                                  rows=\"3\" ng-model=\"newAgenda.description\"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" data-ng-show=\"!process\"
                                    ng-click=\"cancel()\">Annuler</button>
                            <button type=\"button\" class=\"btn btn-primary\" data-ng-disabled=\"!newAgenda.libelle\"
                                    data-ng-show=\"!toUpdate && !process\" ng-click=\"createAgenda()\">Enrégistrer</button>
                            <button type=\"button\" class=\"btn btn-primary\" data-ng-disabled=\"!newAgenda.libelle\"
                                    data-ng-show=\"toUpdate && !process\" ng-click=\"updateAgenda()\">Modifier</button>
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/loading.gif"), "html", null, true);
        echo "\" data-ng-show=\"process\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"well well-sm\" data-ng-show=\"currentAgenda != null\">
            {[{ currentAgenda.description }]}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"panel panel-default\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">
                <center>Calendar Dashboard</center>
            </div>
            <div class=\"panel-body\">
                <center>
                    <div class=\"col-md-12\">
                        <div id=\"datetimepicker12\"></div>
                    </div>
                </center>
            </div>

            <div class=\"table-responsive mCustomScrollbar\" data-mcs-theme=\"dark\" data-mcs-axis=\"x\">
                <table class=\"table table-striped\" style=\"width:100%\">
                    <thead>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr>
                        <tr><td>dfdsdfsffffffffffffffffdfssssssssssssssssf</td><td>dfsdffffffffffffffffffffffffdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td></tr>
                        <tr><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td></tr>
                        <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>
                        <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
";
    }

    // line 176
    public function block_aside($context, array $blocks = array())
    {
        // line 177
        echo "    <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
        <div class=\"panel panel-primary block-organisation-perso\">
            <div class=\"panel-heading\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\" data-toggle=\"modal\" data-target=\".bs-agenda-modal-sm\">
                    Nouvel agenda
                </button>
            </div>
            <div>
                <div data-ng-show=\"agendas.length === 0\">
                    <center>
                        Aucun agenda. Veuillez clicquer sur Nouvel Agenda pour en ajouter!
                    </center>
                </div>
                <div class=\"btn-group btn-block\" data-ng-repeat=\"agenda in agendas\">
                    <button type=\"button\" class=\"btn btn-default btn-block dropdown-toggle\"
                            data-toggle=\"dropdown\">
                        <span class=\"col-lg-10\">{[{ agenda.libelle }]}</span> 
                        <span class=\"col-lg-2\"><span class=\"caret\"></span></span>
                    </button>
                    <ul class=\"dropdown-menu btn-block\" role=\"menu\">
                        <li ng-click=\"visualizeAgenda(agenda)\"><a href=\"\"><i class=\"fa fa-eye text-info\">Visualier</i></a></li>
                        <li ng-click=\"editAgenda(agenda)\"><a href=\"\"><i class=\"fa fa-pencil text-info\"
                                                                        data-toggle=\"modal\" data-target=\".bs-agenda-modal-sm\">Modifier</i></a></li>
                        <li class=\"divider\"></li>
                        <li ng-click=\"deleteAgenda(agenda.id)\"><a href=\"\"><i class=\"fa fa-times bad pull-left\">Supprimer</i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"panel panel-primary block-organisation-perso\" data-ng-show=\"active && evenements.length !== 0\">
            <div class=\"panel-heading\">
                Evènements
            </div>
            <div>
                <div class=\"btn-group btn-block\" data-ng-repeat=\"event in evenements\">
                    <button type=\"button\" class=\"btn btn-default btn-block dropdown-toggle\"
                            data-toggle=\"dropdown\">
                        <span class=\"col-lg-10\">{[{ event.libelle }]}</span> 
                        <span class=\"col-lg-2\"><span class=\"caret\"></span></span>
                    </button>
                    <ul class=\"dropdown-menu btn-block\" role=\"menu\">
                        <li ng-click=\"visualizeAgenda(event)\"><a href=\"\"><i class=\"fa fa-eye text-info\">Visualier</i></a></li>
                        <li ng-click=\"editAgenda(event)\"><a href=\"\"><i class=\"fa fa-pencil text-info\"
                                                                       data-toggle=\"modal\" data-target=\".bs-agenda-modal-sm\">Modifier</i></a></li>
                        <li class=\"divider\"></li>
                        <li ng-click=\"deleteAgenda(event.id)\"><a href=\"\"><i class=\"fa fa-times bad pull-left\">Supprimer</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"panel panel-primary block-organisation-perso\" data-ng-show=\"active && taches.length !== 0\">
            <div class=\"panel-heading\">
                Tâches
            </div>
            <div>
                <div class=\"btn-group btn-block\" data-ng-repeat=\"tache in taches\">
                    <button type=\"button\" class=\"btn btn-default btn-block dropdown-toggle\"
                            data-toggle=\"dropdown\">
                        <span class=\"col-lg-10\">{[{ tache.libelle }]}</span> 
                        <span class=\"col-lg-2\"><span class=\"caret\"></span></span>
                    </button>
                    <ul class=\"dropdown-menu btn-block\" role=\"menu\">
                        <li ng-click=\"visualizeAgenda(tache)\"><a href=\"\"><i class=\"fa fa-eye text-info\">Visualier</i></a></li>
                        <li ng-click=\"editAgenda(tache)\"><a href=\"\"><i class=\"fa fa-pencil text-info\"
                                                                       data-toggle=\"modal\" data-target=\".bs-agenda-modal-sm\">Modifier</i></a></li>
                        <li class=\"divider\"></li>
                        <li ng-click=\"deleteAgenda(tache.id)\"><a href=\"\"><i class=\"fa fa-times bad pull-left\">Supprimer</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /aside -->
    ";
        // line 250
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
";
    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        // line 253
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true,
                todayBtn: 1
            });
            \$('.form_datetime').datetimepicker({
                language: 'fr',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1
            });
            \$('.form_date').datetimepicker({
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });

            //Save new agenda
            \$(\".csave\").click(function () {
                if (\$(\".clibelle\").val() !== \"\") {
                    \$.ajax({
                        type: 'POST',
                        url: 'http://localhost/asn/web/app_dev.php/agenda/create/' + \$(\".clibelle\").val() + '/' + \$(\".cdescription\").val(),
                        beforeSend: function () {
                            \$(\".acagenda\").remove();
                            \$(\".csave\").hide();
                            \$(\".csave\").parent().append('<img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/loading.gif"), "html", null, true);
        echo "\" class=\"loading\">');
                            console.log(\"beforeSend\");
                        },
                        success: function (data) {
                            console.log(data.response);
                            if (data.response === true) {
                                \$(\".loading\").remove();
                                \$(\".csave\").show();
                                \$(\".clibelle\").val(\" \");
                                \$(\".cdescription\").val(\" \");
                            }
                        }
                    });
                } else {
                    \$(\".acagenda\").remove();
                    \$(\".alert-create-agenda\").parent().append('<div class=\"col-lg-12 alert alert-danger acagenda alert-dismissible\" id=\"alert\">Veuillez donner le libelle!</div>');
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ASNCalendarBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 290,  300 => 253,  297 => 252,  291 => 250,  216 => 177,  213 => 176,  159 => 125,  89 => 58,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block actualite %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             <button type="submit" class="btn btn-primary btn-block" data-ng-disabled="!active"*/
/*                     data-toggle="modal" data-target=".bs-event-modal-sm">*/
/*                 Nouvel évènement*/
/*             </button>*/
/*             <div class="modal fade bs-event-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <h4 class="modal-title" id="myModalLabel" data-ng-show="!toUpdate">Créer un évènement</h4>*/
/*                             <h4 class="modal-title" id="myModalLabel" data-ng-show="toUpdate">Modification</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                             <form id="newAgendaForm" class="form-horizontal">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-4 control-label">Libelle</label>*/
/*                                     <div class="col-lg-7">*/
/*                                         <input type="text" placeholder="libelle" class="form-control" ng-model="newEvenement.libelle">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-4 control-label">Description</label>*/
/*                                     <div class="col-lg-7">*/
/*                                         <textarea placeholder="description" class="form-control" */
/*                                                   rows="3" ng-model="newEvenement.description"></textarea>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-4 control-label">Lieu</label>*/
/*                                     <div class="col-lg-7">*/
/*                                         <input type="text" placeholder="Lieu" class="form-control" ng-model="newEvenement.lieu">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="dtp_input1" class="col-lg-4 control-label">Date et heure</label>*/
/*                                     <div class="input-group date form_datetime col-lg-7" data-date="" data-date-format="dd MM yyyy HH:ii p" */
/*                                          data-link-field="dtp_input1" data-link-format="yyyy-mm-dd HH:ii">*/
/*                                         <input class="form-control" size="16" type="text" value="" readonly data-ng-model="newEvenement.date">*/
/*                                         <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>*/
/*                                         <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>*/
/*                                     </div>*/
/*                                     <input type="hidden" id="dtp_input1" value="" /><br/>*/
/*                                 </div>*/
/*                                 {[{ newEvenement.date }]}*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal" data-ng-show="!process"*/
/*                                     ng-click="cancel()">Annuler</button>*/
/*                             <button type="button" class="btn btn-primary" data-ng-disabled="!newEvenement.libelle"*/
/*                                     data-ng-show="!toUpdate && !process" ng-click="createEvenement()">Enrégistrer</button>*/
/*                             <button type="button" class="btn btn-primary" data-ng-disabled="!newEvenement.libelle"*/
/*                                     data-ng-show="toUpdate && !process" ng-click="updateEvenement()">Modifier</button>*/
/*                             <img src="{{ asset('res/img/loading.gif') }}" data-ng-show="process"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             <div class="panel panel-success" data-ng-show="currentAgenda != null">*/
/*                 <div class="panel-body">*/
/*                     <center>{[{ currentAgenda.libelle }]}</center>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             <button type="submit" class="btn btn-primary btn-block" data-ng-disabled="!active"*/
/*                     data-toggle="modal" data-target=".bs-task-modal-sm">*/
/*                 Nouvel tâche*/
/*             </button>*/
/*             <div class="modal fade bs-task-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                             <h4 class="modal-title" id="myModalLabel">Créer une Tâche</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                             ...*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                             <button type="button" class="btn btn-primary">Save changes</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="modal fade bs-agenda-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <h4 class="modal-title" id="myModalLabel" data-ng-show="!toUpdate">Créer un agenda</h4>*/
/*                             <h4 class="modal-title" id="myModalLabel" data-ng-show="toUpdate">Modification</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                             <div class="alert-create-agenda col-md-8 col-md-offset-2"></div>*/
/*                             <form id="newAgendaForm" class="form-horizontal">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-4 control-label">Libelle</label>*/
/*                                     <div class="col-lg-7">*/
/*                                         <input type="text" placeholder="libelle" class="form-control clibelle" ng-model="newAgenda.libelle">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-4 control-label">Description</label>*/
/*                                     <div class="col-lg-7">*/
/*                                         <textarea placeholder="description" class="form-control cdescription" */
/*                                                   rows="3" ng-model="newAgenda.description"></textarea>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal" data-ng-show="!process"*/
/*                                     ng-click="cancel()">Annuler</button>*/
/*                             <button type="button" class="btn btn-primary" data-ng-disabled="!newAgenda.libelle"*/
/*                                     data-ng-show="!toUpdate && !process" ng-click="createAgenda()">Enrégistrer</button>*/
/*                             <button type="button" class="btn btn-primary" data-ng-disabled="!newAgenda.libelle"*/
/*                                     data-ng-show="toUpdate && !process" ng-click="updateAgenda()">Modifier</button>*/
/*                             <img src="{{ asset('res/img/loading.gif') }}" data-ng-show="process"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="well well-sm" data-ng-show="currentAgenda != null">*/
/*             {[{ currentAgenda.description }]}*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="panel panel-default">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">*/
/*                 <center>Calendar Dashboard</center>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <center>*/
/*                     <div class="col-md-12">*/
/*                         <div id="datetimepicker12"></div>*/
/*                     </div>*/
/*                 </center>*/
/*             </div>*/
/* */
/*             <div class="table-responsive mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="x">*/
/*                 <table class="table table-striped" style="width:100%">*/
/*                     <thead>*/
/*                     <th>Lundi</th>*/
/*                     <th>Mardi</th>*/
/*                     <th>Mercredi</th>*/
/*                     <th>Jeudi</th>*/
/*                     <th>Vendredi</th>*/
/*                     <th>Samedi</th>*/
/*                     <th>Dimanche</th>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr>*/
/*                         <tr><td>dfdsdfsffffffffffffffffdfssssssssssssssssf</td><td>dfsdffffffffffffffffffffffffdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td></tr>*/
/*                         <tr><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td></tr>*/
/*                         <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>*/
/*                         <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="col-lg-3 col-md-3 col-sm-3" id="aside">*/
/*         <div class="panel panel-primary block-organisation-perso">*/
/*             <div class="panel-heading">*/
/*                 <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-agenda-modal-sm">*/
/*                     Nouvel agenda*/
/*                 </button>*/
/*             </div>*/
/*             <div>*/
/*                 <div data-ng-show="agendas.length === 0">*/
/*                     <center>*/
/*                         Aucun agenda. Veuillez clicquer sur Nouvel Agenda pour en ajouter!*/
/*                     </center>*/
/*                 </div>*/
/*                 <div class="btn-group btn-block" data-ng-repeat="agenda in agendas">*/
/*                     <button type="button" class="btn btn-default btn-block dropdown-toggle"*/
/*                             data-toggle="dropdown">*/
/*                         <span class="col-lg-10">{[{ agenda.libelle }]}</span> */
/*                         <span class="col-lg-2"><span class="caret"></span></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu btn-block" role="menu">*/
/*                         <li ng-click="visualizeAgenda(agenda)"><a href=""><i class="fa fa-eye text-info">Visualier</i></a></li>*/
/*                         <li ng-click="editAgenda(agenda)"><a href=""><i class="fa fa-pencil text-info"*/
/*                                                                         data-toggle="modal" data-target=".bs-agenda-modal-sm">Modifier</i></a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li ng-click="deleteAgenda(agenda.id)"><a href=""><i class="fa fa-times bad pull-left">Supprimer</i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="panel panel-primary block-organisation-perso" data-ng-show="active && evenements.length !== 0">*/
/*             <div class="panel-heading">*/
/*                 Evènements*/
/*             </div>*/
/*             <div>*/
/*                 <div class="btn-group btn-block" data-ng-repeat="event in evenements">*/
/*                     <button type="button" class="btn btn-default btn-block dropdown-toggle"*/
/*                             data-toggle="dropdown">*/
/*                         <span class="col-lg-10">{[{ event.libelle }]}</span> */
/*                         <span class="col-lg-2"><span class="caret"></span></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu btn-block" role="menu">*/
/*                         <li ng-click="visualizeAgenda(event)"><a href=""><i class="fa fa-eye text-info">Visualier</i></a></li>*/
/*                         <li ng-click="editAgenda(event)"><a href=""><i class="fa fa-pencil text-info"*/
/*                                                                        data-toggle="modal" data-target=".bs-agenda-modal-sm">Modifier</i></a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li ng-click="deleteAgenda(event.id)"><a href=""><i class="fa fa-times bad pull-left">Supprimer</i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel panel-primary block-organisation-perso" data-ng-show="active && taches.length !== 0">*/
/*             <div class="panel-heading">*/
/*                 Tâches*/
/*             </div>*/
/*             <div>*/
/*                 <div class="btn-group btn-block" data-ng-repeat="tache in taches">*/
/*                     <button type="button" class="btn btn-default btn-block dropdown-toggle"*/
/*                             data-toggle="dropdown">*/
/*                         <span class="col-lg-10">{[{ tache.libelle }]}</span> */
/*                         <span class="col-lg-2"><span class="caret"></span></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu btn-block" role="menu">*/
/*                         <li ng-click="visualizeAgenda(tache)"><a href=""><i class="fa fa-eye text-info">Visualier</i></a></li>*/
/*                         <li ng-click="editAgenda(tache)"><a href=""><i class="fa fa-pencil text-info"*/
/*                                                                        data-toggle="modal" data-target=".bs-agenda-modal-sm">Modifier</i></a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li ng-click="deleteAgenda(tache.id)"><a href=""><i class="fa fa-times bad pull-left">Supprimer</i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- /aside -->*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         $(function () {*/
/*             $('#datetimepicker12').datetimepicker({*/
/*                 inline: true,*/
/*                 sideBySide: true,*/
/*                 todayBtn: 1*/
/*             });*/
/*             $('.form_datetime').datetimepicker({*/
/*                 language: 'fr',*/
/*                 weekStart: 1,*/
/*                 todayBtn: 1,*/
/*                 autoclose: 1,*/
/*                 todayHighlight: 1,*/
/*                 startView: 2,*/
/*                 forceParse: 0,*/
/*                 showMeridian: 1*/
/*             });*/
/*             $('.form_date').datetimepicker({*/
/*                 weekStart: 1,*/
/*                 todayBtn: 1,*/
/*                 autoclose: 1,*/
/*                 todayHighlight: 1,*/
/*                 startView: 2,*/
/*                 minView: 2,*/
/*                 forceParse: 0*/
/*             });*/
/* */
/*             //Save new agenda*/
/*             $(".csave").click(function () {*/
/*                 if ($(".clibelle").val() !== "") {*/
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         url: 'http://localhost/asn/web/app_dev.php/agenda/create/' + $(".clibelle").val() + '/' + $(".cdescription").val(),*/
/*                         beforeSend: function () {*/
/*                             $(".acagenda").remove();*/
/*                             $(".csave").hide();*/
/*                             $(".csave").parent().append('<img src="{{ asset('res/img/loading.gif') }}" class="loading">');*/
/*                             console.log("beforeSend");*/
/*                         },*/
/*                         success: function (data) {*/
/*                             console.log(data.response);*/
/*                             if (data.response === true) {*/
/*                                 $(".loading").remove();*/
/*                                 $(".csave").show();*/
/*                                 $(".clibelle").val(" ");*/
/*                                 $(".cdescription").val(" ");*/
/*                             }*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $(".acagenda").remove();*/
/*                     $(".alert-create-agenda").parent().append('<div class="col-lg-12 alert alert-danger acagenda alert-dismissible" id="alert">Veuillez donner le libelle!</div>');*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
