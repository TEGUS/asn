<?php

/* AvmAsnBundle:user:register.html.twig */
class __TwigTemplate_d252326684a7b446255ac872adb2753061d05295dcffc04f4e35fc09bc96e4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvmAsnBundle:user:base.html.twig", "AvmAsnBundle:user:register.html.twig", 1);
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
        <div class=\"col-lg-6 col-lg-offset-3\">
            <div class=\"row\">
                <h4 class=\"text-center\"><b>Inscription</b></h4>
                <form action=\"#\" method=\"get\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label for=\"nom\" class=\"col-lg-4 control-label\">Nom</label>
                        <div class=\"col-lg-8\">
                            <input type=\"text\" placeholder=\"Nom\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"prenoms\" class=\"col-lg-4 control-label\">Prénoms</label>
                        <div class=\"col-lg-8\">
                            <input type=\"text\" placeholder=\"Prénoms\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"dateNaissance\" class=\"col-lg-4 control-label\">Date de naissance</label>
                        <div class=\"col-lg-8\">
                            <input type=\"text\" placeholder=\"Date de naissance\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"sexe\" class=\"col-lg-4 control-label\">Sexe</label>
                        <div class=\"col-lg-8\">
                            <select class=\"form-control\">
                                <option value=\"\">--</option>
                                <option value=\"Masculin\">Masculin</option>
                                <option value=\"Feminin\">Féminin</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"motDePasse\" class=\"col-lg-4 control-label\">Mot de passe</label>
                        <div class=\"col-lg-8\">
                            <input type=\"password\" placeholder=\"Mot de passe\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"confirmeMotDePasse\" class=\"col-lg-4 control-label\">
                            Confirmer mot de passe
                        </label>
                        <div class=\"col-lg-8\">
                            <input type=\"password\" placeholder=\"Confirmer mot de passe\" 
                                   class=\"form-control\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-lg-offset-4 col-lg-8\">
                            <button type=\"submit\" class=\"btn btn-purple btn-sm\">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
                <p class=\"col-lg-offset-4\">
                    Vous avez déjà un compte? 
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("asn_login");
        echo "\" title=\"Connexion\">
                        Connectez-vous ici
                    </a>
                </p>
            </div>\t\t\t\t\t\t\t
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 64,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AvmAsnBundle:user:base.html.twig" %}*/
/* */
/* {% block loginRegister %}*/
/*     <div class="row">*/
/*         <div class="col-lg-6 col-lg-offset-3">*/
/*             <div class="row">*/
/*                 <h4 class="text-center"><b>Inscription</b></h4>*/
/*                 <form action="#" method="get" class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label for="nom" class="col-lg-4 control-label">Nom</label>*/
/*                         <div class="col-lg-8">*/
/*                             <input type="text" placeholder="Nom" class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="prenoms" class="col-lg-4 control-label">Prénoms</label>*/
/*                         <div class="col-lg-8">*/
/*                             <input type="text" placeholder="Prénoms" class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="dateNaissance" class="col-lg-4 control-label">Date de naissance</label>*/
/*                         <div class="col-lg-8">*/
/*                             <input type="text" placeholder="Date de naissance" class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="sexe" class="col-lg-4 control-label">Sexe</label>*/
/*                         <div class="col-lg-8">*/
/*                             <select class="form-control">*/
/*                                 <option value="">--</option>*/
/*                                 <option value="Masculin">Masculin</option>*/
/*                                 <option value="Feminin">Féminin</option>*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="motDePasse" class="col-lg-4 control-label">Mot de passe</label>*/
/*                         <div class="col-lg-8">*/
/*                             <input type="password" placeholder="Mot de passe" class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="confirmeMotDePasse" class="col-lg-4 control-label">*/
/*                             Confirmer mot de passe*/
/*                         </label>*/
/*                         <div class="col-lg-8">*/
/*                             <input type="password" placeholder="Confirmer mot de passe" */
/*                                    class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="col-lg-offset-4 col-lg-8">*/
/*                             <button type="submit" class="btn btn-purple btn-sm">*/
/*                                 S'inscrire*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*                 <p class="col-lg-offset-4">*/
/*                     Vous avez déjà un compte? */
/*                     <a href="{{ path('asn_login') }}" title="Connexion">*/
/*                         Connectez-vous ici*/
/*                     </a>*/
/*                 </p>*/
/*             </div>							*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
