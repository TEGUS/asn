<?php

/* AvmAsnBundle:user:login.html.twig */
class __TwigTemplate_39a84bcc73ac0948505126c8a226d8e231d28de62c74a3157abfc801235d58fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvmAsnBundle:user:base.html.twig", "AvmAsnBundle:user:login.html.twig", 1);
        $this->blocks = array(
            'loginRegister' => array($this, 'block_loginRegister'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvmAsnBundle:user:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_loginRegister($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-4 col-lg-offset-4\">
            <div class=\"row\">

                <div class=\"col-lg-10 col-lg-offset-1\">
                    <h4 class=\"text-center\"><b>Connexion</b></h4>
                    <!-- formulaire connexion -->
                    <form action=\"#\" method=\"get\">
                        <div class=\"input-group form-group form-group-lg\">
                            <label for=\"login\" class=\"input-group-addon\">
                                <i class=\"fa fa-user\"></i>
                            </label>
                            <input type=\"text\" placeholder=\"Username or email\" class=\"form-control\">
                        </div>
                        <div class=\"input-group form-group form-group-lg\">
                            <label for=\"motDePasse\" class=\"input-group-addon\">
                                <i class=\"fa fa-lock\"></i>
                            </label>
                            <input type=\"password\" placeholder=\"Mot de passe\" class=\"form-control\">
                        </div>
                        <div class=\"form-group form-group-lg\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group form-group-lg\">
                            <button type=\"submit\" class=\"btn btn-purple btn-block\">
                                Se connecter
                            </button>
                        </div>
                    </form>
                    <h4 class=\"text-center\">OU</h4>
                    <p>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <a href=\"#\" class=\"btn btn-primary col-lg-12\">
                                <i class=\"fa fa-facebook\"></i>
                                Facebook
                            </a>
                        </div>
                        <div class=\"col-lg-6\">
                            <a href=\"#\" class=\"btn btn-danger col-lg-12\">
                                <i class=\"fa fa-google fa-1x\"></i>
                                Google
                            </a>
                        </div>
                    </div>
                    </p>
                    <p>
                        Pas de compte? <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("asn_register");
        echo "\" title=\"Créer ici\">S'inscrire ici</a>
                    </p>
                </div>

            </div>\t\t\t\t\t\t\t
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 55,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AvmAsnBundle:user:base.html.twig" %}*/
/* */
/* {% block loginRegister %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4 col-lg-offset-4">*/
/*             <div class="row">*/
/* */
/*                 <div class="col-lg-10 col-lg-offset-1">*/
/*                     <h4 class="text-center"><b>Connexion</b></h4>*/
/*                     <!-- formulaire connexion -->*/
/*                     <form action="#" method="get">*/
/*                         <div class="input-group form-group form-group-lg">*/
/*                             <label for="login" class="input-group-addon">*/
/*                                 <i class="fa fa-user"></i>*/
/*                             </label>*/
/*                             <input type="text" placeholder="Username or email" class="form-control">*/
/*                         </div>*/
/*                         <div class="input-group form-group form-group-lg">*/
/*                             <label for="motDePasse" class="input-group-addon">*/
/*                                 <i class="fa fa-lock"></i>*/
/*                             </label>*/
/*                             <input type="password" placeholder="Mot de passe" class="form-control">*/
/*                         </div>*/
/*                         <div class="form-group form-group-lg">*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox"> Se souvenir de moi*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group form-group-lg">*/
/*                             <button type="submit" class="btn btn-purple btn-block">*/
/*                                 Se connecter*/
/*                             </button>*/
/*                         </div>*/
/*                     </form>*/
/*                     <h4 class="text-center">OU</h4>*/
/*                     <p>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6">*/
/*                             <a href="#" class="btn btn-primary col-lg-12">*/
/*                                 <i class="fa fa-facebook"></i>*/
/*                                 Facebook*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <a href="#" class="btn btn-danger col-lg-12">*/
/*                                 <i class="fa fa-google fa-1x"></i>*/
/*                                 Google*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     </p>*/
/*                     <p>*/
/*                         Pas de compte? <a href="{{ path('asn_register') }}" title="Créer ici">S'inscrire ici</a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/*             </div>							*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
