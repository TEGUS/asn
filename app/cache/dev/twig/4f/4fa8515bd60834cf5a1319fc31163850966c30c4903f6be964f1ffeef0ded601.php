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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/images/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "asn";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/css/materialize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
        ";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        echo " 
            <nav class=\"white z-depth-4\" role=\"navigation\">
                <div class=\"nav-wrapper container\">
                    <a id=\"logo-container\" href=\"#\" class=\"brand-logo light-blue-text darken-4\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/images/favicon_asn.png"), "html", null, true);
        echo "\">
                    </a>

                    <ul class=\"right hide-on-med-and-down\">
                        <li><a href=\"#\" class=\"btn buttonNav z-depth-1 waves-effect waves-teal\">Link</a></li>
                        <li><a href=\"#\" class=\"btn buttonNav z-depth-1 waves-effect waves-teal\">Link</a></li>
                        <li><a href=\"#\" class=\"btn buttonNav z-depth-1 waves-effect waves-teal\">Link</a></li>
                    </ul>

                    <div id=\"nav-mobile\" class=\"side-nav textSize-mobileNav transparent\">
                        <div class=\"center\">
                            Menu
                        </div>

                        <div class=\"collection transparent textSize-mobileNav\">
                            <a href=\"#!\" class=\"collection-item transparent\">
                                <div class=\"white-text collectionitem textSize-mobileNav\">Link <span class=\"white-text badge right\">1</span></div>
                            </a>
                            <a href=\"#!\" class=\"collection-item transparent\">
                                <div class=\"white-text collectionitem textSize-mobileNav\">Link<span class=\"light-blue darken-4 new badge right\">4</span></div>
                            </a>
                            <a href=\"#!\" class=\"collection-item transparent\">
                                <div class=\"white-text collectionitem textSize-mobileNav\">Link</div>
                            </a>
                            <a href=\"#!\" class=\"collection-item transparent\">
                                <div class=\"white-text collectionitem textSize-mobileNav\">Link <span class=\"white-text badge right\">1</span></div>
                            </a>
                        </div>

                    </div>
                    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
                </div>
            </nav>
        ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "
        ";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "        ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/js/materialize.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/js/init.js"), "html", null, true);
        echo "\"></script>
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
        return array (  163 => 64,  159 => 63,  154 => 62,  151 => 61,  147 => 59,  144 => 58,  139 => 55,  136 => 54,  98 => 19,  90 => 15,  84 => 10,  80 => 9,  77 => 8,  74 => 7,  68 => 6,  62 => 66,  60 => 61,  57 => 60,  55 => 58,  52 => 57,  50 => 54,  47 => 53,  45 => 15,  38 => 12,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}asn{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*             <link href="{{ asset('lib/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>*/
/*             <link href="{{ asset('lib/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('lib/images/logo_asn.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block header %} */
/*             <nav class="white z-depth-4" role="navigation">*/
/*                 <div class="nav-wrapper container">*/
/*                     <a id="logo-container" href="#" class="brand-logo light-blue-text darken-4">*/
/*                         <img src="{{ asset('lib/images/favicon_asn.png') }}">*/
/*                     </a>*/
/* */
/*                     <ul class="right hide-on-med-and-down">*/
/*                         <li><a href="#" class="btn buttonNav z-depth-1 waves-effect waves-teal">Link</a></li>*/
/*                         <li><a href="#" class="btn buttonNav z-depth-1 waves-effect waves-teal">Link</a></li>*/
/*                         <li><a href="#" class="btn buttonNav z-depth-1 waves-effect waves-teal">Link</a></li>*/
/*                     </ul>*/
/* */
/*                     <div id="nav-mobile" class="side-nav textSize-mobileNav transparent">*/
/*                         <div class="center">*/
/*                             Menu*/
/*                         </div>*/
/* */
/*                         <div class="collection transparent textSize-mobileNav">*/
/*                             <a href="#!" class="collection-item transparent">*/
/*                                 <div class="white-text collectionitem textSize-mobileNav">Link <span class="white-text badge right">1</span></div>*/
/*                             </a>*/
/*                             <a href="#!" class="collection-item transparent">*/
/*                                 <div class="white-text collectionitem textSize-mobileNav">Link<span class="light-blue darken-4 new badge right">4</span></div>*/
/*                             </a>*/
/*                             <a href="#!" class="collection-item transparent">*/
/*                                 <div class="white-text collectionitem textSize-mobileNav">Link</div>*/
/*                             </a>*/
/*                             <a href="#!" class="collection-item transparent">*/
/*                                 <div class="white-text collectionitem textSize-mobileNav">Link <span class="white-text badge right">1</span></div>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*                 </div>*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('lib/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('lib/js/materialize.js') }}"></script>*/
/*             <script src="{{ asset('lib/js/init.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
