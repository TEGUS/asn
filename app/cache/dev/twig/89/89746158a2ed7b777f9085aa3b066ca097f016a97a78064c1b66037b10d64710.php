<?php

/* ASNUserBundle::layout.html.twig */
class __TwigTemplate_a72d8ed2c31e28d37834daf81c0beeb541f5b02415aebdc7e2c50cf1de5e085e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ASNUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'loginRegister' => array($this, 'block_loginRegister'),
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
        // line 22
        $this->displayBlock('loginRegister', $context, $blocks);
        // line 24
        echo "
    </div>
";
    }

    // line 22
    public function block_loginRegister($context, array $blocks = array())
    {
        // line 23
        echo "        ";
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
        return array (  63 => 23,  60 => 22,  54 => 24,  52 => 22,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %} */
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <ul class="list-inline pull-right">*/
/*                 <li><a href="#" title="Français"><em>Français</em></a></li>*/
/*                 <li><a href="#" title="Anglais"><em>Anglais</em></a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="row text-center">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="text-primary" style="margin: 0;">*/
/*                     <i class="fa fa-comments fa-2x"></i>*/
/*                     <br>*/
/*                     <small class="text-orange">AVM Social Network</small>*/
/*                 </h1>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/* */
/*         {% block loginRegister %}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
