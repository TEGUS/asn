<?php

/* ::base.html.twig */
class __TwigTemplate_811356ce909eb05f91a0b4824516184838c145ead05ff2d68218c4333c737432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"asnApp\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-grey\">

        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        
        ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "ASN";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo " 
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "            
        ";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "            <footer class=\"text-center text-muted\">
                <div class=\"container-fluid bg-primary\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <h1><i class=\"fa fa-location-arrow\"></i></h1>
                            <ul class=\"list-unstyled\">
                                <li>Cameroun</li>
                                <li>Kenya</li>
                                <li>Cote d'ivoire</li>
                                <li>Tchad</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\">
                            <h1><i class=\"fa fa-flag\"></i></h1>
                            <ul class=\"list-unstyled\">
                                <li>Français</li>
                                <li>Anglais</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\">
                            <br>
                            <h4>Suivez nous</h4>
                            <div class=\"\">
                                <ul class=\"list-unstyled list-inline\">
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
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p>
                                Copyright &copy; 2016.
                            </p>
                        </div>
                    </div>
                </div>
            </footer><!-- /footer -->
        ";
    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        // line 82
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/moment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/app.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/angular-js/angular.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/angular-js/angular.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/angularjs/asnApp.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 97,  242 => 96,  238 => 95,  233 => 93,  229 => 92,  225 => 91,  221 => 90,  217 => 89,  213 => 88,  209 => 87,  205 => 86,  201 => 85,  197 => 84,  193 => 83,  188 => 82,  185 => 81,  132 => 28,  129 => 27,  124 => 24,  121 => 23,  116 => 20,  113 => 19,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  91 => 9,  86 => 8,  83 => 7,  77 => 6,  71 => 99,  69 => 81,  65 => 80,  61 => 79,  58 => 78,  56 => 27,  53 => 26,  51 => 23,  48 => 22,  46 => 19,  38 => 15,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="asnApp">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}ASN{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/css/jquery-ui.css') }}" rel="stylesheet" media="screen" type="text/css">*/
/*             <link href="{{ asset('res/lib/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{ asset('res/css/style.css') }}" rel="stylesheet" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('res/img/logo_asn.png') }}" />*/
/*     </head>*/
/*     <body class="bg-grey">*/
/* */
/*         {% block header %}*/
/*  */
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*             */
/*         {% endblock %}*/
/*         */
/*         {% block footer %}*/
/*             <footer class="text-center text-muted">*/
/*                 <div class="container-fluid bg-primary">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-4">*/
/*                             <h1><i class="fa fa-location-arrow"></i></h1>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>Cameroun</li>*/
/*                                 <li>Kenya</li>*/
/*                                 <li>Cote d'ivoire</li>*/
/*                                 <li>Tchad</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-lg-4">*/
/*                             <h1><i class="fa fa-flag"></i></h1>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>Français</li>*/
/*                                 <li>Anglais</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-lg-4">*/
/*                             <br>*/
/*                             <h4>Suivez nous</h4>*/
/*                             <div class="">*/
/*                                 <ul class="list-unstyled list-inline">*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #1a237e"><i class="fa fa-facebook-square fa-3x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #2196f3;"><i class="fa fa-twitter-square fa-3x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #1565c0"><i class="fa fa-linkedin-square fa-3x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #e53935"><i class="fa fa-google-plus-square fa-3x"></i></a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <p>*/
/*                                 Copyright &copy; 2016.*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer><!-- /footer -->*/
/*         {% endblock %}*/
/* */
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-2.2.3.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/moment.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/transition.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/carousel.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-ui.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.validate.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.transit.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/additional-methods.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.mCustomScrollbar.concat.min.js') }}"></script>*/
/*             <script src="{{ asset('res/js/app.js') }}"></script>*/
/* */
/*             <script src="{{ asset('res/lib/angular-js/angular.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/lib/angular-js/angular.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('res/angularjs/asnApp.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
