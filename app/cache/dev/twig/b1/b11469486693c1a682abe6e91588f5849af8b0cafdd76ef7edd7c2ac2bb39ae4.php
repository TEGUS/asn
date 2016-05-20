<?php

/* admin_base.html.twig */
class __TwigTemplate_606359e716c355582c01812b417ec057899931b05b98934fc96bfd89f4022287 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
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
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/images/logo_asn.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
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
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <style type=\"text/css\">
                body {
                    padding-top: 60px;
                    padding-bottom: 40px;
                }
                .sidebar-nav {
                    padding: 9px 0;
                }

                @media (max-width: 980px) {
                    /* Enable use of floated navbar text */
                    .navbar-text.pull-right {
                        float: none;
                        padding-left: 5px;
                        padding-right: 5px;
                    }
                }
            </style>
        ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/bootstrap/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  162 => 50,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  122 => 40,  117 => 39,  114 => 38,  107 => 35,  100 => 32,  76 => 9,  71 => 8,  68 => 7,  62 => 6,  56 => 53,  54 => 38,  51 => 37,  49 => 35,  46 => 34,  44 => 32,  37 => 29,  35 => 7,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/*         <title>{% block title %}asn{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/*             <link href="{{ asset('admin/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" media="screen">*/
/*             <style type="text/css">*/
/*                 body {*/
/*                     padding-top: 60px;*/
/*                     padding-bottom: 40px;*/
/*                 }*/
/*                 .sidebar-nav {*/
/*                     padding: 9px 0;*/
/*                 }*/
/* */
/*                 @media (max-width: 980px) {*/
/*                     /* Enable use of floated navbar text *//* */
/*                     .navbar-text.pull-right {*/
/*                         float: none;*/
/*                         padding-left: 5px;*/
/*                         padding-right: 5px;*/
/*                     }*/
/*                 }*/
/*             </style>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('lib/images/logo_asn.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block header %} */
/*         {% endblock %}*/
/* */
/*         {% block body %} */
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('admin/bootstrap/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-transition.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-alert.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-modal.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-dropdown.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-scrollspy.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-tab.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-tooltip.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-popover.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-button.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-collapse.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-carousel.js') }}"></script>*/
/*             <script src="{{ asset('admin/bootstrap/js/bootstrap-typeahead.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
