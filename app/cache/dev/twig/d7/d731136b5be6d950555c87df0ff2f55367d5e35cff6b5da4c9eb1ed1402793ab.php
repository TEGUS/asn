<?php

/* ASNUserBundle::layout.html.twig */
class __TwigTemplate_384da3dd259d00757e71b4f5336c514d247cc8cc3de774fccf8ea65e5a28c1f8 extends Twig_Template
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
            'loginRegister' => array($this, 'block_loginRegister'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-grey\" style=\"padding-top: 0;\">

        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
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
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/font-awesome-4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "        ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        echo " 
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <ul class=\"list-inline pull-right\">
                        <li><a href=\"#\" title=\"Français\"><em>Français</em></a></li>
                        <li><a href=\"#\" title=\"Anglais\"><em>Anglais</em></a></li>
                    </ul>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"text-primary\" style=\"margin: 0;\">
                            <i class=\"fa fa-comments fa-2x\"></i>
                            <br>
                            <small class=\"text-orange\">AVM Social Network</small>
                        </h1>
                    </div>
                </div>
                <br>

                ";
        // line 39
        $this->displayBlock('loginRegister', $context, $blocks);
        // line 41
        echo "
            </div>
        ";
    }

    // line 39
    public function block_loginRegister($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "            <footer class=\"text-center text-muted\">
                <div class=\"container-fluid bg-primary\" style=\"margin-top: 100px\">
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
                                        <a href=\"#\" style=\"color: #1a237e\"><i class=\"fa fa-facebook-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #2196f3;\"><i class=\"fa fa-twitter-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #1565c0\"><i class=\"fa fa-linkedin-square fa-4x\"></i></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" style=\"color: #e53935\"><i class=\"fa fa-google-plus-square fa-4x\"></i></a>
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

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/jquery-js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "ASNUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 101,  208 => 100,  204 => 99,  199 => 98,  196 => 97,  143 => 46,  140 => 45,  136 => 40,  133 => 39,  127 => 41,  125 => 39,  102 => 20,  98 => 18,  95 => 17,  89 => 11,  84 => 9,  79 => 8,  76 => 7,  70 => 6,  64 => 103,  62 => 97,  59 => 96,  57 => 45,  54 => 44,  52 => 20,  49 => 19,  47 => 17,  39 => 13,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}ASN{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('res/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/*             <link href="{{ asset('res/lib/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/*             <link href="{{ asset('res/css/style.css') }}" rel="stylesheet" type="text/css"/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_asn.png') }}" />*/
/*     </head>*/
/*     <body class="bg-grey" style="padding-top: 0;">*/
/* */
/*         {% block header %}*/
/*         {% endblock %}*/
/* */
/*         {% block body %} */
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <ul class="list-inline pull-right">*/
/*                         <li><a href="#" title="Français"><em>Français</em></a></li>*/
/*                         <li><a href="#" title="Anglais"><em>Anglais</em></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="row text-center">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="text-primary" style="margin: 0;">*/
/*                             <i class="fa fa-comments fa-2x"></i>*/
/*                             <br>*/
/*                             <small class="text-orange">AVM Social Network</small>*/
/*                         </h1>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br>*/
/* */
/*                 {% block loginRegister %}*/
/*                 {% endblock %}*/
/* */
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*             <footer class="text-center text-muted">*/
/*                 <div class="container-fluid bg-primary" style="margin-top: 100px">*/
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
/*                                         <a href="#" style="color: #1a237e"><i class="fa fa-facebook-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #2196f3;"><i class="fa fa-twitter-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #1565c0"><i class="fa fa-linkedin-square fa-4x"></i></a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" style="color: #e53935"><i class="fa fa-google-plus-square fa-4x"></i></a>*/
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
/*         {% block javascripts %}*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery-2.2.3.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/jquery-js/jquery.transit.min.js') }}"></script>*/
/*             <script src="{{ asset('res/lib/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('res/js/app.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
