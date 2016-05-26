<?php

/* ASNMainBundle:user:register.html.twig */
class __TwigTemplate_9778ae07d3e7ac3dfb97ff087ff703f078ea7cb568323e6afbec7960351ea432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNMainBundle:user:base.html.twig", "ASNMainBundle:user:register.html.twig", 1);
        $this->blocks = array(
            'loginRegister' => array($this, 'block_loginRegister'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASNMainBundle:user:base.html.twig";
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
                <form id=\"registerForm\" method=\"post\" class=\"form-horizontal\"  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        <label for=\"firstname\" class=\"col-lg-4 control-label\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "Prénom"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control firstname", "placeholder" => "Prénom")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"lastname\" class=\"col-lg-4 control-label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Nom"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control lastname", "placeholder" => "Nom")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date_of_birth\" class=\"col-lg-4 control-label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), 'label', array("label" => "Date de naissance"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            <div class=\"col-lg-4\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control month")));
        echo "
                            </div>
                            <div class=\"col-lg-4\">
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control day")));
        echo "
                            </div>
                            <div class=\"col-lg-4\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control year")));
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"gender\" class=\"col-lg-4 control-label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Genre"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control gender")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"country\" class=\"col-lg-4 control-label\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'label', array("label" => "Nationalité"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control country")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"col-lg-4 control-label\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Téléphone"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control phone", "placeholder" => "Numéro de téléphone")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-lg-4 control-label\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            <div class=\"col-lg-11\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control email", "placeholder" => "example@avm.cm")));
        echo "
                            </div>
                            <div class=\"col-lg-1 infoemail\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-lg-4 control-label\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Mot de passe"));
        echo "</label>
                        <div class=\"col-lg-8\">
                            <div class=\"col-lg-11\">
                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control mdp", "placeholder" => "Mot de passe")));
        echo "
                            </div>
                            <div class=\"col-lg-1 infomdp\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"confirmeMotDePasse\" class=\"col-lg-4 control-label\">
                            Repéter le mot de passe
                        </label>
                        <div class=\"col-lg-8\">
                            <div class=\"col-lg-11\">
                                <input type=\"password\" placeholder=\"Repéter le mot de passe\" class=\"form-control rmdp\">
                            </div>
                            <div class=\"col-lg-1 informdp\">
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-lg-offset-4 col-lg-8\">
                            <button type=\"submit\" class=\"btn btn-purple btn-sm submit\">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
                <p class=\"col-lg-offset-4\">
                    Vous avez déjà un compte? 
                    <a href=\"";
        // line 104
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

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$(\"input\").focus(function () {
                \$(this).css(\"background-color\", \"#f3e5f5\");
            });
            \$(\"input\").blur(function () {
                \$(this).css(\"background-color\", \"#fff\");
            });
            \$(\"select\").click(function () {
                \$(this).css(\"background-color\", \"#f3e5f5\");
            });
            \$(\"select\").mouseleave(function () {
                \$(this).css(\"background-color\", \"#fff\");
            });

            \$(\".submit\").hide();
            \$(\".rmdp\").keyup(function () {
                if (\$(\".mdp\").val().length >= 8 && \$(\".rmdp\").val().length !== 0) {
                    if (\$(\".rmdp\").val() !== \$(\".mdp\").val()) {
                        \$(\".submit\").hide();
                        \$(\".badrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badrmdp\"></i>');
                        \$(\".goodrmdp\").remove();
                    } else {
                        \$(\".submit\").show();
                        \$(\".goodrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodrmdp\"></i>');
                        \$(\".badrmdp\").remove();
                    }
                } else {
                    \$(\".submit\").hide();
                    \$(\".goodrmdp\").remove();
                    \$(\".badrmdp\").remove();
                }
            });

            \$(\".mdp\").keyup(function () {
                if (\$(\".mdp\").val().length >= 8 && \$(\".rmdp\").val().length !== 0) {
                    if (\$(\".rmdp\").val() !== \$(\".mdp\").val()) {
                        \$(\".submit\").hide();
                        \$(\".badrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badrmdp\"></i>');
                        \$(\".goodrmdp\").remove();
                    } else {
                        \$(\".submit\").show();
                        \$(\".goodrmdp\").remove();
                        ;
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodrmdp\"></i>');
                        \$(\".badrmdp\").remove();
                    }
                } else {
                    \$(\".submit\").hide();
                    \$(\".goodrmdp\").remove();
                    \$(\".badrmdp\").remove();
                }

                if (\$(\".mdp\").val().length >= 8) {
                    \$(\".badmdp\").remove();
                    \$(\".goodmdp\").remove();
                    \$(\".infomdp\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodmdp\"></i>');
                } else if (\$(\".mdp\").val().length > 0) {
                    \$(\".badmdp\").remove();
                    \$(\".goodmdp\").remove();
                    \$(\".infomdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badmdp\"></i>');
                } else {
                    \$(\".goodmdp\").remove();
                    \$(\".badmdp\").remove();
                }
            });

            \$(\".email\").change(function () {
                var eml = \$(\".email\").val();
                \$.ajax({
                    type: 'get',
                    url: 'http://localhost/asn/web/app_dev.php/asn/user/byemail/' + eml,
                    beforeSend: function () {
                        \$(\".bademail\").remove();
                        \$(\".goodemail\").remove();
                        \$(\".loading\").remove();
                        \$(\".infoemail\").parent().append('<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" class=\"loading\">');
                    },
                    success: function (data) {
                        \$(\".bademail\").remove();
                        \$(\".goodemail\").remove();
                        \$(\".loading\").remove();
                        console.log(data.response);
                        if (data.response) {
                            \$(\".submit\").hide();
                            \$(\".infoemail\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad bademail\"></i>');
                        } else {
                            \$(\".submit\").show();
                            \$(\".infoemail\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodemail\"></i>');
                        }
                    }
                });
            });

            \$(\".phone\").keyup(function () {

            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ASNMainBundle:user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 194,  206 => 114,  203 => 113,  191 => 104,  158 => 74,  152 => 71,  141 => 63,  135 => 60,  127 => 55,  122 => 53,  114 => 48,  109 => 46,  101 => 41,  96 => 39,  87 => 33,  81 => 30,  75 => 27,  69 => 24,  61 => 19,  56 => 17,  48 => 12,  43 => 10,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ASNMainBundle:user:base.html.twig" %}*/
/* */
/* {% block loginRegister %}*/
/*     <div class="row">*/
/*         <div class="col-lg-6 col-lg-offset-3">*/
/*             <div class="row">*/
/*                 <h4 class="text-center"><b>Inscription</b></h4>*/
/*                 <form id="registerForm" method="post" class="form-horizontal"  {{ form_enctype(form) }}>*/
/*                     <div class="form-group">*/
/*                         <label for="firstname" class="col-lg-4 control-label">{{ form_label(form.firstname, "Prénom") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             {{ form_widget(form.firstname, { 'attr': {'class': 'form-control firstname', 'placeholder':'Prénom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="lastname" class="col-lg-4 control-label">{{ form_label(form.lastname, "Nom") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             {{ form_widget(form.lastname, { 'attr': {'class': 'form-control lastname', 'placeholder':'Nom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date_of_birth" class="col-lg-4 control-label">{{ form_label(form.date_of_birth, "Date de naissance") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             <div class="col-lg-4">*/
/*                                 {{ form_widget(form.date_of_birth.month, {'attr':{'class':'form-control month'}}) }}*/
/*                             </div>*/
/*                             <div class="col-lg-4">*/
/*                                 {{ form_widget(form.date_of_birth.day, {'attr':{'class':'form-control day'}}) }}*/
/*                             </div>*/
/*                             <div class="col-lg-4">*/
/*                                 {{ form_widget(form.date_of_birth.year, {'attr':{'class':'form-control year'}}) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="gender" class="col-lg-4 control-label">{{ form_label(form.gender, "Genre") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             {{ form_widget(form.gender , {'attr':{'class':'form-control gender'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="country" class="col-lg-4 control-label">{{ form_label(form.country, "Nationalité") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             {{ form_widget(form.country , {'attr':{'class':'form-control country'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="phone" class="col-lg-4 control-label">{{ form_label(form.phone, "Téléphone") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             {{ form_widget(form.phone, { 'attr': {'class': 'form-control phone', 'placeholder':'Numéro de téléphone'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="email" class="col-lg-4 control-label">{{ form_label(form.email, "Email") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             <div class="col-lg-11">*/
/*                                 {{ form_widget(form.email, { 'attr': {'class': 'form-control email', 'placeholder':'example@avm.cm'} }) }}*/
/*                             </div>*/
/*                             <div class="col-lg-1 infoemail">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="col-lg-4 control-label">{{ form_label(form.password, "Mot de passe") }}</label>*/
/*                         <div class="col-lg-8">*/
/*                             <div class="col-lg-11">*/
/*                                 {{ form_widget(form.password, { 'attr': {'class': 'form-control mdp', 'placeholder':'Mot de passe'} }) }}*/
/*                             </div>*/
/*                             <div class="col-lg-1 infomdp">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="confirmeMotDePasse" class="col-lg-4 control-label">*/
/*                             Repéter le mot de passe*/
/*                         </label>*/
/*                         <div class="col-lg-8">*/
/*                             <div class="col-lg-11">*/
/*                                 <input type="password" placeholder="Repéter le mot de passe" class="form-control rmdp">*/
/*                             </div>*/
/*                             <div class="col-lg-1 informdp">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="col-lg-offset-4 col-lg-8">*/
/*                             <button type="submit" class="btn btn-purple btn-sm submit">*/
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
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         $(function () {*/
/*             $("input").focus(function () {*/
/*                 $(this).css("background-color", "#f3e5f5");*/
/*             });*/
/*             $("input").blur(function () {*/
/*                 $(this).css("background-color", "#fff");*/
/*             });*/
/*             $("select").click(function () {*/
/*                 $(this).css("background-color", "#f3e5f5");*/
/*             });*/
/*             $("select").mouseleave(function () {*/
/*                 $(this).css("background-color", "#fff");*/
/*             });*/
/* */
/*             $(".submit").hide();*/
/*             $(".rmdp").keyup(function () {*/
/*                 if ($(".mdp").val().length >= 8 && $(".rmdp").val().length !== 0) {*/
/*                     if ($(".rmdp").val() !== $(".mdp").val()) {*/
/*                         $(".submit").hide();*/
/*                         $(".badrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badrmdp"></i>');*/
/*                         $(".goodrmdp").remove();*/
/*                     } else {*/
/*                         $(".submit").show();*/
/*                         $(".goodrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodrmdp"></i>');*/
/*                         $(".badrmdp").remove();*/
/*                     }*/
/*                 } else {*/
/*                     $(".submit").hide();*/
/*                     $(".goodrmdp").remove();*/
/*                     $(".badrmdp").remove();*/
/*                 }*/
/*             });*/
/* */
/*             $(".mdp").keyup(function () {*/
/*                 if ($(".mdp").val().length >= 8 && $(".rmdp").val().length !== 0) {*/
/*                     if ($(".rmdp").val() !== $(".mdp").val()) {*/
/*                         $(".submit").hide();*/
/*                         $(".badrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badrmdp"></i>');*/
/*                         $(".goodrmdp").remove();*/
/*                     } else {*/
/*                         $(".submit").show();*/
/*                         $(".goodrmdp").remove();*/
/*                         ;*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodrmdp"></i>');*/
/*                         $(".badrmdp").remove();*/
/*                     }*/
/*                 } else {*/
/*                     $(".submit").hide();*/
/*                     $(".goodrmdp").remove();*/
/*                     $(".badrmdp").remove();*/
/*                 }*/
/* */
/*                 if ($(".mdp").val().length >= 8) {*/
/*                     $(".badmdp").remove();*/
/*                     $(".goodmdp").remove();*/
/*                     $(".infomdp").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodmdp"></i>');*/
/*                 } else if ($(".mdp").val().length > 0) {*/
/*                     $(".badmdp").remove();*/
/*                     $(".goodmdp").remove();*/
/*                     $(".infomdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badmdp"></i>');*/
/*                 } else {*/
/*                     $(".goodmdp").remove();*/
/*                     $(".badmdp").remove();*/
/*                 }*/
/*             });*/
/* */
/*             $(".email").change(function () {*/
/*                 var eml = $(".email").val();*/
/*                 $.ajax({*/
/*                     type: 'get',*/
/*                     url: 'http://localhost/asn/web/app_dev.php/asn/user/byemail/' + eml,*/
/*                     beforeSend: function () {*/
/*                         $(".bademail").remove();*/
/*                         $(".goodemail").remove();*/
/*                         $(".loading").remove();*/
/*                         $(".infoemail").parent().append('<img src="{{ asset('images/loading.gif') }}" class="loading">');*/
/*                     },*/
/*                     success: function (data) {*/
/*                         $(".bademail").remove();*/
/*                         $(".goodemail").remove();*/
/*                         $(".loading").remove();*/
/*                         console.log(data.response);*/
/*                         if (data.response) {*/
/*                             $(".submit").hide();*/
/*                             $(".infoemail").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad bademail"></i>');*/
/*                         } else {*/
/*                             $(".submit").show();*/
/*                             $(".infoemail").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodemail"></i>');*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $(".phone").keyup(function () {*/
/* */
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
