<?php

/* ASNUserBundle:Security:register.html.twig */
class __TwigTemplate_dbf6844904eeefa8cb089bf05106955770fd8d3fa897d0d92fca6a4e368b3604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNUserBundle::layout.html.twig", "ASNUserBundle:Security:register.html.twig", 1);
        $this->blocks = array(
            'loginRegister' => array($this, 'block_loginRegister'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASNUserBundle::layout.html.twig";
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
        <div class=\"col-lg-4 text-center\">
            <br>
            <br>
            <br>
            <h1><i class=\"fa fa-group fa-3x text-primary\"></i></h1>
            <p class=\"text-muted text-primary\">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"row\">
                <h4 class=\"text-center\"><b>Inscription</b></h4>
                <p class=\"col-lg-offset-4\">
                    Vous avez déjà un compte? 
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("asn_login");
        echo "\" title=\"Connexion\">
                        Connectez-vous ici
                    </a>
                </p>
                <form id=\"registerForm\" method=\"post\" class=\"form-horizontal\"  ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        <label for=\"firstname\" class=\"col-lg-4 control-label\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "Prénom"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control firstname", "placeholder" => "Prénom")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"lastname\" class=\"col-lg-4 control-label\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Nom"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control lastname", "placeholder" => "Nom")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date_of_birth\" class=\"col-lg-4 control-label\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), 'label', array("label" => "Date de naissance"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control month")));
        echo "
                                </div>
                                <div class=\"col-lg-4\">
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control day")));
        echo "
                                </div>
                                <div class=\"col-lg-4\">
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control year")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"gender\" class=\"col-lg-4 control-label\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Genre"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control gender")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"country\" class=\"col-lg-4 control-label\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'label', array("label" => "Nationalité"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control country")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"col-lg-4 control-label\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Téléphone"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control phone", "placeholder" => "Numéro de téléphone")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-lg-4 control-label\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "</label>
                        <div class=\"col-lg-4\">
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control email", "placeholder" => "example")));
        echo "
                        </div>
                        <div class=\"col-lg-3\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"@avm.com\">
                        </div>
                        <div class=\"col-lg-1 infoemail\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-lg-4 control-label\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Mot de passe"));
        echo "</label>
                        <div class=\"col-lg-7\">
                            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control mdp", "placeholder" => "Mot de passe")));
        echo "
                        </div>
                        <div class=\"col-lg-1 infomdp\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"confirmeMotDePasse\" class=\"col-lg-4 control-label\">
                            Repéter le mot de passe
                        </label>
                        <div class=\"col-lg-7\">
                            <input type=\"password\" placeholder=\"Repéter le mot de passe\" class=\"form-control rmdp\">
                        </div>
                        <div class=\"col-lg-1 informdp\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-lg-offset-4 col-lg-8\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm submit\">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
                <p class=\"col-lg-offset-4\">
                    Vous avez déjà un compte? 
                    <a href=\"";
        // line 123
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

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
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
                    url: 'http://localhost/asn/web/app_dev.php/user/byemail/' + eml,
                    beforeSend: function () {
                        \$(\".bademail\").remove();
                        \$(\".goodemail\").remove();
                        \$(\".loading\").remove();
                        \$(\".infoemail\").parent().append('<img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/loading.gif"), "html", null, true);
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
        return "ASNUserBundle:Security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 213,  228 => 133,  225 => 132,  213 => 123,  183 => 96,  178 => 94,  165 => 84,  160 => 82,  152 => 77,  147 => 75,  139 => 70,  134 => 68,  126 => 63,  121 => 61,  111 => 54,  105 => 51,  99 => 48,  92 => 44,  84 => 39,  79 => 37,  71 => 32,  66 => 30,  61 => 28,  54 => 24,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ASNUserBundle::layout.html.twig" %}*/
/* */
/* {% block loginRegister %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4 text-center">*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <h1><i class="fa fa-group fa-3x text-primary"></i></h1>*/
/*             <p class="text-muted text-primary">*/
/*                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,*/
/*                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo*/
/*                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse*/
/*                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non*/
/*                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*             </p>*/
/*         </div>*/
/*         <div class="col-lg-6">*/
/*             <div class="row">*/
/*                 <h4 class="text-center"><b>Inscription</b></h4>*/
/*                 <p class="col-lg-offset-4">*/
/*                     Vous avez déjà un compte? */
/*                     <a href="{{ path('asn_login') }}" title="Connexion">*/
/*                         Connectez-vous ici*/
/*                     </a>*/
/*                 </p>*/
/*                 <form id="registerForm" method="post" class="form-horizontal"  {{ form_enctype(form) }}>*/
/*                     <div class="form-group">*/
/*                         <label for="firstname" class="col-lg-4 control-label">{{ form_label(form.firstname, "Prénom") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.firstname, { 'attr': {'class': 'form-control firstname', 'placeholder':'Prénom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="lastname" class="col-lg-4 control-label">{{ form_label(form.lastname, "Nom") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.lastname, { 'attr': {'class': 'form-control lastname', 'placeholder':'Nom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date_of_birth" class="col-lg-4 control-label">{{ form_label(form.date_of_birth, "Date de naissance") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.month, {'attr':{'class':'form-control month'}}) }}*/
/*                                 </div>*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.day, {'attr':{'class':'form-control day'}}) }}*/
/*                                 </div>*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.year, {'attr':{'class':'form-control year'}}) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="gender" class="col-lg-4 control-label">{{ form_label(form.gender, "Genre") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.gender , {'attr':{'class':'form-control gender'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="country" class="col-lg-4 control-label">{{ form_label(form.country, "Nationalité") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.country , {'attr':{'class':'form-control country'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="phone" class="col-lg-4 control-label">{{ form_label(form.phone, "Téléphone") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.phone, { 'attr': {'class': 'form-control phone', 'placeholder':'Numéro de téléphone'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="email" class="col-lg-4 control-label">{{ form_label(form.email, "Email") }}</label>*/
/*                         <div class="col-lg-4">*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'form-control email', 'placeholder':'example'} }) }}*/
/*                         </div>*/
/*                         <div class="col-lg-3">*/
/*                             <input type="text" class="form-control" disabled value="@avm.com">*/
/*                         </div>*/
/*                         <div class="col-lg-1 infoemail">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="col-lg-4 control-label">{{ form_label(form.password, "Mot de passe") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.password, { 'attr': {'class': 'form-control mdp', 'placeholder':'Mot de passe'} }) }}*/
/*                         </div>*/
/*                         <div class="col-lg-1 infomdp">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="confirmeMotDePasse" class="col-lg-4 control-label">*/
/*                             Repéter le mot de passe*/
/*                         </label>*/
/*                         <div class="col-lg-7">*/
/*                             <input type="password" placeholder="Repéter le mot de passe" class="form-control rmdp">*/
/*                         </div>*/
/*                         <div class="col-lg-1 informdp">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="col-lg-offset-4 col-lg-8">*/
/*                             <button type="submit" class="btn btn-primary btn-sm submit">*/
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
/*                     url: 'http://localhost/asn/web/app_dev.php/user/byemail/' + eml,*/
/*                     beforeSend: function () {*/
/*                         $(".bademail").remove();*/
/*                         $(".goodemail").remove();*/
/*                         $(".loading").remove();*/
/*                         $(".infoemail").parent().append('<img src="{{ asset('res/img/loading.gif') }}" class="loading">');*/
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
