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
            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                Nouvel évènement
            </button>
        </div>
        <div class=\"col-lg-4\">
        </div>
        <div class=\"col-lg-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">
                Nouvel tâche
            </button>
        </div>
    </div>
    <br>
    <div class=\"row\">
        <center>
            <div id=\"datepicker\" class=\"col-md-12\"></div>
        </center>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"table-responsive\">
            <table class=\"table table-striped\" style=\"width:100%\">
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
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
";
    }

    // line 47
    public function block_aside($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"col-lg-3 col-md-3 col-sm-3\" id=\"aside\">
        <div class=\"panel panel-primary block-organisation-perso\">
            <div class=\"panel-heading\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">
                    Nouvel agenda
                </button>
            </div>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <div class=\"row\">
                            <div class='col-lg-2 height-radio'>
                                <input type=\"radio\" class=\"height-radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"personnel\">
                            </div>
                            <div class=\"col-lg-6\">Personnel</div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-pencil text-info\"></i></div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-times bad pull-right\"></i></div>
                        </div>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"row\">
                            <div class='col-lg-2 text-primary'>
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"travail\">
                            </div>
                            <div class=\"col-lg-6\">Travail</div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-pencil text-info\"></i></div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-times bad pull-right\"></i></div>
                        </div>
                    </li>
                    <li class=\"list-group-item\">
                        <div class=\"row\">
                            <div class='col-lg-2 text-primary'>
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"sport\">
                            </div>
                            <div class=\"col-lg-6\">Sport</div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-pencil text-info\"></i></div>
                            <div class=\"col-lg-2\"><i class=\"fa fa-times bad pull-right\"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- /aside -->
    ";
        // line 91
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$(\"#datepicker\").datepicker({
                numberOfMonths: 2,
                changeMonth: true,
                changeYear: true
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
        return array (  135 => 94,  132 => 93,  126 => 91,  81 => 48,  78 => 47,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block actualite %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             <button type="submit" class="btn btn-primary btn-block">*/
/*                 Nouvel évènement*/
/*             </button>*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             <button type="submit" class="btn btn-primary btn-block">*/
/*                 Nouvel tâche*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*     <div class="row">*/
/*         <center>*/
/*             <div id="datepicker" class="col-md-12"></div>*/
/*         </center>*/
/*     </div>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="table-responsive">*/
/*             <table class="table table-striped" style="width:100%">*/
/*                 <th>Lundi</th>*/
/*                 <th>Mardi</th>*/
/*                 <th>Mercredi</th>*/
/*                 <th>Jeudi</th>*/
/*                 <th>Vendredi</th>*/
/*                 <th>Samedi</th>*/
/*                 <th>Dimanche</th>*/
/*                 <tbody>*/
/*                     <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr>*/
/*                     <tr><td>dfdsdfsffffffffffffffffdfssssssssssssssssf</td><td>dfsdffffffffffffffffffffffffdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td></tr>*/
/*                     <tr><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td><td>dfdf</td><td></td><td>dfdf</td></tr>*/
/*                     <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>*/
/*                     <tr><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td><td>dfdf</td></tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block aside %}*/
/*     <div class="col-lg-3 col-md-3 col-sm-3" id="aside">*/
/*         <div class="panel panel-primary block-organisation-perso">*/
/*             <div class="panel-heading">*/
/*                 <button type="submit" class="btn btn-primary btn-block">*/
/*                     Nouvel agenda*/
/*                 </button>*/
/*             </div>*/
/*             <div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <div class="row">*/
/*                             <div class='col-lg-2 height-radio'>*/
/*                                 <input type="radio" class="height-radio" name="optionsRadios" id="optionsRadios1" value="personnel">*/
/*                             </div>*/
/*                             <div class="col-lg-6">Personnel</div>*/
/*                             <div class="col-lg-2"><i class="fa fa-pencil text-info"></i></div>*/
/*                             <div class="col-lg-2"><i class="fa fa-times bad pull-right"></i></div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="row">*/
/*                             <div class='col-lg-2 text-primary'>*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="travail">*/
/*                             </div>*/
/*                             <div class="col-lg-6">Travail</div>*/
/*                             <div class="col-lg-2"><i class="fa fa-pencil text-info"></i></div>*/
/*                             <div class="col-lg-2"><i class="fa fa-times bad pull-right"></i></div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <div class="row">*/
/*                             <div class='col-lg-2 text-primary'>*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="sport">*/
/*                             </div>*/
/*                             <div class="col-lg-6">Sport</div>*/
/*                             <div class="col-lg-2"><i class="fa fa-pencil text-info"></i></div>*/
/*                             <div class="col-lg-2"><i class="fa fa-times bad pull-right"></i></div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- /aside -->*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         $(function () {*/
/*             $("#datepicker").datepicker({*/
/*                 numberOfMonths: 2,*/
/*                 changeMonth: true,*/
/*                 changeYear: true*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
