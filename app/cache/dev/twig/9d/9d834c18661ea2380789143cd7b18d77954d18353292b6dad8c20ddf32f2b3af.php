<?php

/* AvmAsnBundle:user:index.html.twig */
class __TwigTemplate_27f4fd18780d104c1b04272a3142268e8a51b31fc8a4108c8b28fea08880fa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_index.html.twig", "AvmAsnBundle:user:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'loginRegister' => array($this, 'block_loginRegister'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <ul class=\"list-inline pull-right\">
                <li><a href=\"#\" title=\"Français\">Français</a></li>
                <li><a href=\"#\" title=\"Anglais\">Anglais</a></li>
            </ul>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-lg-12 text-muted\">
                <h1 class=\"text-purple\">
                    <i class=\"fa fa-comments fa-2x\"></i>
                    <br>
                    <small>AVM Social Network</small>
                </h1>
                <br>
                <p class=\"h5\">
                    Gardez la communication avec votre famille, vos amis et vos collègues où que vous vous trouvez et quoi que vous faites.
                </p>
            </div>
        </div>

        ";
        // line 27
        $this->displayBlock('loginRegister', $context, $blocks);
        // line 29
        echo "
        <div class=\"row text-center bg-purple\">
            <div class=\"col-lg-4\">
                <h4><i class=\"fa fa-location-arrow fa-2x\"></i></h4>
                <ul class=\"list-unstyled\">
                    <li>Cameroun</li>
                    <li>Tchad</li>
                    <li>Kenya</li>
                    <li>Nigéria</li>
                </ul>
            </div>
            <div class=\"col-lg-4\">
                <h4><i class=\"fa fa-flag fa-2x\"></i></h4>
                <ul class=\"list-unstyled\">
                    <li>Français</li>
                    <li>Anglais</li>
                </ul>
            </div>
            <div class=\"col-lg-4\">
                <h4><b>A propos</b></h4>
                <ul class=\"list-unstyled\">
                    <li>AVM Social Network</li>
                    <li>AVM Public Market</li>
                    <li>AVM Paiement Network</li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 27
    public function block_loginRegister($context, array $blocks = array())
    {
        // line 28
        echo "        ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        echo " 
    <footer>
        <br>
        <div class=\"container\">
            <div class=\"row border-top\">
                <div class=\"col-lg-12\">
                    <h5 class=\"text-center\">Copyright &copy; 2016</h5>
                </div>
            </div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 59,  102 => 28,  99 => 27,  67 => 29,  65 => 27,  39 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base_index.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} {% endblock %}*/
/* */
/* {% block body %} */
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <ul class="list-inline pull-right">*/
/*                 <li><a href="#" title="Français">Français</a></li>*/
/*                 <li><a href="#" title="Anglais">Anglais</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="row text-center">*/
/*             <div class="col-lg-12 text-muted">*/
/*                 <h1 class="text-purple">*/
/*                     <i class="fa fa-comments fa-2x"></i>*/
/*                     <br>*/
/*                     <small>AVM Social Network</small>*/
/*                 </h1>*/
/*                 <br>*/
/*                 <p class="h5">*/
/*                     Gardez la communication avec votre famille, vos amis et vos collègues où que vous vous trouvez et quoi que vous faites.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block loginRegister %}*/
/*         {% endblock %}*/
/* */
/*         <div class="row text-center bg-purple">*/
/*             <div class="col-lg-4">*/
/*                 <h4><i class="fa fa-location-arrow fa-2x"></i></h4>*/
/*                 <ul class="list-unstyled">*/
/*                     <li>Cameroun</li>*/
/*                     <li>Tchad</li>*/
/*                     <li>Kenya</li>*/
/*                     <li>Nigéria</li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <h4><i class="fa fa-flag fa-2x"></i></h4>*/
/*                 <ul class="list-unstyled">*/
/*                     <li>Français</li>*/
/*                     <li>Anglais</li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <h4><b>A propos</b></h4>*/
/*                 <ul class="list-unstyled">*/
/*                     <li>AVM Social Network</li>*/
/*                     <li>AVM Public Market</li>*/
/*                     <li>AVM Paiement Network</li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %} */
/*     <footer>*/
/*         <br>*/
/*         <div class="container">*/
/*             <div class="row border-top">*/
/*                 <div class="col-lg-12">*/
/*                     <h5 class="text-center">Copyright &copy; 2016</h5>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
