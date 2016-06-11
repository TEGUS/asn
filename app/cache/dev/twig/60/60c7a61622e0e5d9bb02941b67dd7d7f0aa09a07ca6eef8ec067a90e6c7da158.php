<?php

/* ASNUserBundle:Security:register.html.twig */
class __TwigTemplate_dc79c12ca82d2271bfe83780db1427c49d3103f801109063239ef09f99770885 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "Prénom "));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Nom "));
        echo "<span class=\"bad\"> *</span></label>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), 'label', array("label" => "Date de naissance "));
        echo "<span class=\"bad\"> *</span></label>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_of_birth", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control yearSelect")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"gender\" class=\"col-lg-4 control-label\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label" => "Genre"));
        echo "<span class=\"bad\"> *</span></label>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'label', array("label" => "Nationalité "));
        echo "<span class=\"bad\"> *</span></label>
                        <div class=\"col-lg-7\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control country")));
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hidefieldCountry", array()), 'widget', array("attr" => array("type" => "hidden")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"col-lg-4 control-label\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Téléphone"));
        echo "<span class=\"bad\"> *</span></label>
                        <div class=\"col-lg-3 \">
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indicatifCountry", array()), 'widget', array("attr" => array("class" => "form-control indicatifInput", "placeholder" => "Indicatif", "disabled" => "true")));
        echo "
                            <select class=\"form-control indicatifSelect\"></select>
                        </div>
                        <div class=\"col-lg-4 \">
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de téléphone")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-lg-4 control-label\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hidefield", array()), 'label', array("label" => "Email "));
        echo " <span class=\"bad\"> *</span></label>
                        <div class=\"col-lg-4\">
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hidefield", array()), 'widget', array("attr" => array("class" => "form-control email", "placeholder" => "example")));
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
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailRecuperation", array()), 'label', array("label" => "Email externe "));
        echo " <span class=\"bad\"> *</span></label>
                        <div class=\"col-lg-7\">
                            <div>
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailRecuperation", array()), 'widget', array("attr" => array("class" => "form-control emailRecup", "placeholder" => "example@email.teg")));
        // line 104
        echo "
                            </div>
                            <div class=\"text-info\">
                                <i class=\"fa fa-info-circle\"></i> 
                                Email en cas de perte de mot de passe de votre compte.
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-lg-4 control-label\">";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Mot de passe"));
        echo "<span class=\"bad\"> *</span></label>
                        <div class=\"col-lg-7\">
                            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control mdp", "placeholder" => "Mot de passe")));
        echo "
                        </div>
                        <div class=\"col-lg-1 infomdp\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"confirmeMotDePasse\" class=\"col-lg-4 control-label\">
                            Repéter le mot de passe <span class=\"bad\"> *</span>
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
        // line 143
        echo $this->env->getExtension('routing')->getPath("asn_login");
        echo "\" title=\"Connexion\">
                        Connectez-vous ici
                    </a>
                </p>
            </div>\t\t\t\t\t\t\t
        </div>

    </div>
</div>
";
    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/indicatifs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/js/years.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            var country, gender;

            \$(\".hidefieldCountry\").hide();
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

            //Search and Check IsoCode country
            \$(\".indicatifSelect\").hide();
            function searchIndicatifCountry(val) {
                var indice, indicat;
                for (var i = 0; i < indicatifs[1].length; i++) {
                    if (val === indicatifs[1][i]) {
                        indice = i;
                    }
                }
                indicat = val;
                for (var j = 0; j < indicatifs[0].length; j++) {
                    if (indice === j) {
                        indicat = indicatifs[0][j];
                    }
                }
                \$(\".indicatifSelect\").empty();
                if (indicat instanceof Array) {
                    for (var k = 0; k < indicat.length; k++) {
                        \$(\".indicatifSelect\").show();
                        \$(\".indicatifInput\").hide();
                        \$(\".indicatifSelect\").append(new Option(\"+\" + indicat[k], \"+\" + indicat[k]));
                    }
                } else {
                    \$(\".indicatifSelect\").hide();
                    \$(\".indicatifInput\").show();
                    \$(\".indicatifInput\").val(\"+\" + indicat);
                    console.log(\$(\".indicatifInput\").val());
                }
            }

            \$(\".country\").change(function () {
                searchIndicatifCountry(\$(this).val());
            });

            \$(\".indicatifSelect\").click(function () {
                \$(\".indicatifInput\").val(\$(\".indicatifSelect\").val());
                console.log(\$(\".indicatifInput\").val());
            });
            \$(\".indicatifSelect\").change(function () {
                \$(\".indicatifInput\").val(\$(\".indicatifSelect\").val());
                console.log(\$(\".indicatifInput\").val());
            });

            //Checking the repeatPassword
            \$(\".submit\").attr(\"disabled\", \"true\");
            \$(\".rmdp\").keyup(function () {
                if (\$(\".mdp\").val().length >= 8 && \$(\".rmdp\").val().length !== 0) {
                    if (\$(\".rmdp\").val() !== \$(\".mdp\").val()) {
                        \$(\".submit\").attr(\"disabled\", \"true\");
                        \$(\".badrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badrmdp\"></i>');
                        \$(\".goodrmdp\").remove();
                    } else {
                        \$(\".submit\").removeAttr(\"disabled\");
                        \$(\".goodrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodrmdp\"></i>');
                        \$(\".badrmdp\").remove();
                    }
                } else {
                    \$(\".submit\").attr(\"disabled\", \"true\");
                    \$(\".goodrmdp\").remove();
                    \$(\".badrmdp\").remove();
                }
            });

            //Checking password
            \$(\".mdp\").keyup(function () {
                if (\$(\".mdp\").val().length >= 8 && \$(\".rmdp\").val().length !== 0) {
                    if (\$(\".rmdp\").val() !== \$(\".mdp\").val()) {
                        \$(\".submit\").attr(\"disabled\", \"true\");
                        \$(\".badrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badrmdp\"></i>');
                        \$(\".goodrmdp\").remove();
                    } else {
                        \$(\".submit\").removeAttr(\"disabled\");
                        \$(\".goodrmdp\").remove();
                        \$(\".informdp\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodrmdp\"></i>');
                        \$(\".badrmdp\").remove();
                    }
                } else {
                    \$(\".submit\").attr(\"disabled\", \"true\");
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
                    \$(\".submit\").attr(\"disabled\", \"true\");
                    \$(\".infomdp\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad badmdp\"></i>');
                } else {
                    \$(\".submit\").attr(\"disabled\", \"true\");
                    \$(\".goodmdp\").remove();
                    \$(\".badmdp\").remove();
                }
            });

            //Checking username@Email
            var regex = [];
            regex[0] = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\\.[a-z]{2,4}\$/;
            regex[1] = /^[a-z0-9._-]+@\$/;
            regex[3] = /^[a-z0-9._-]+@[a-z0-9._-]{1,}\$/;

            function testEmail(val) {
                \$(\".submit\").attr(\"disabled\", \"true\");
                \$(\".bademail\").remove();
                \$(\".goodemail\").remove();
                \$(\".loading\").remove();
                if (val.length > 0) {
                    if (regex[0].test(val) || regex[1].test(val) || regex[3].test(val)) {
                        console.log(\"correspond!\");
                        \$(\".submit\").attr(\"disabled\", \"true\");
                        \$(\".bademail\").remove();
                        \$(\".goodemail\").remove();
                        \$(\".loading\").remove();
                        \$(\".infoemail\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad bademail\"></i>');
                    } else {
                        console.log(\"ne correspond pas!\");
                        \$.ajax({
                            type: 'get',
                            url: 'http://localhost/asn/web/app_dev.php/user/byemail/' + val + \"@avm.com\",
                            beforeSend: function () {
                                \$(\".submit\").attr(\"disabled\", \"true\");
                                \$(\".bademail\").remove();
                                \$(\".goodemail\").remove();
                                \$(\".loading\").remove();
                                \$(\".infoemail\").parent().append('<img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("res/img/loading.gif"), "html", null, true);
        echo "\" class=\"loading\">');
                            },
                            success: function (data) {
                                \$(\".loading\").remove();
                                \$(\".bademail\").remove();
                                \$(\".goodemail\").remove();
                                if (data.response) {
                                    \$(\".submit\").attr(\"disabled\", \"true\");
                                    \$(\".bademail\").remove();
                                    \$(\".infoemail\").parent().append('<i class=\"fa fa-thumbs-o-down fa-2x bad bademail\"></i>');
                                } else {
                                    \$(\".submit\").removeAttr(\"disabled\");
                                    \$(\".goodemail\").remove();
                                    \$(\".infoemail\").parent().append('<i class=\"fa fa-thumbs-o-up fa-2x good goodemail\"></i>');
                                }
                            }
                        });
                    }
                } else {
                    \$(\".submit\").attr(\"disabled\", \"true\");
                    \$(\".bademail\").remove();
                    \$(\".goodemail\").remove();
                    \$(\".loading\").remove();
                }
            }

            \$(\".email\").blur(function () {
                testEmail(\$(this).val());
            });

            //Checking the last config before Submitting!
            /*\$(\".submit\").click(function () {
             \$(\".country\").val(country);
             \$(\".indicatifInput\").removeAttr(\"disabled\");
             });*/


            \$(\".submit\").click(function () {
                \$.ajax({
                    beforeSend: function () {
                        country = \$(\".country option:selected\").text();
                        \$(\".hidefieldCountry\").val(country);

                        \$(\".indicatifInput\").removeAttr(\"disabled\");
                    }
                });
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
        return array (  422 => 306,  270 => 157,  266 => 156,  261 => 155,  258 => 154,  244 => 143,  214 => 116,  209 => 114,  197 => 104,  195 => 102,  189 => 99,  176 => 89,  171 => 87,  163 => 82,  156 => 78,  151 => 76,  143 => 71,  139 => 70,  134 => 68,  126 => 63,  121 => 61,  111 => 54,  105 => 51,  99 => 48,  92 => 44,  84 => 39,  79 => 37,  71 => 32,  66 => 30,  61 => 28,  54 => 24,  32 => 4,  29 => 3,  11 => 1,);
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
/*                         <label for="firstname" class="col-lg-4 control-label">{{ form_label(form.firstname, "Prénom ") }}</label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.firstname, { 'attr': {'class': 'form-control firstname', 'placeholder':'Prénom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="lastname" class="col-lg-4 control-label">{{ form_label(form.lastname, "Nom ") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.lastname, { 'attr': {'class': 'form-control lastname', 'placeholder':'Nom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date_of_birth" class="col-lg-4 control-label">{{ form_label(form.date_of_birth, "Date de naissance ") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.month, {'attr':{'class':'form-control month'}}) }}*/
/*                                 </div>*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.day, {'attr':{'class':'form-control day'}}) }}*/
/*                                 </div>*/
/*                                 <div class="col-lg-4">*/
/*                                     {{ form_widget(form.date_of_birth.year, {'attr':{'class':'form-control yearSelect'}}) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="gender" class="col-lg-4 control-label">{{ form_label(form.gender, "Genre") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.gender , {'attr':{'class':'form-control gender'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="country" class="col-lg-4 control-label">{{ form_label(form.country, "Nationalité ") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.country , {'attr':{'class':'form-control country'}}) }}*/
/*                             {{ form_widget(form.hidefieldCountry , {'attr':{'type':'hidden'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="phone" class="col-lg-4 control-label">{{ form_label(form.phone, "Téléphone") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-3 ">*/
/*                             {{ form_widget(form.indicatifCountry , {'attr':{'class':'form-control indicatifInput', 'placeholder':'Indicatif' , 'disabled':'true'}}) }}*/
/*                             <select class="form-control indicatifSelect"></select>*/
/*                         </div>*/
/*                         <div class="col-lg-4 ">*/
/*                             {{ form_widget(form.phone , {'attr':{'class':'form-control' , 'placeholder':'Numéro de téléphone' }}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="email" class="col-lg-4 control-label">{{ form_label(form.hidefield, "Email ") }} <span class="bad"> *</span></label>*/
/*                         <div class="col-lg-4">*/
/*                             {{ form_widget(form.hidefield, { 'attr': {'class': 'form-control email', 'placeholder':'example'} }) }}*/
/*                         </div>*/
/*                         <div class="col-lg-3">*/
/*                             <input type="text" class="form-control" disabled value="@avm.com">*/
/*                         </div>*/
/*                         <div class="col-lg-1 infoemail">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="col-lg-4 control-label">{{ form_label(form.emailRecuperation, "Email externe ") }} <span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             <div>*/
/*                                 {{ form_widget(form.emailRecuperation, */
/*                                     { 'attr': {'class': 'form-control emailRecup', 'placeholder':'example@email.teg'} }) */
/*                                 }}*/
/*                             </div>*/
/*                             <div class="text-info">*/
/*                                 <i class="fa fa-info-circle"></i> */
/*                                 Email en cas de perte de mot de passe de votre compte.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="col-lg-4 control-label">{{ form_label(form.password, "Mot de passe") }}<span class="bad"> *</span></label>*/
/*                         <div class="col-lg-7">*/
/*                             {{ form_widget(form.password, { 'attr': {'class': 'form-control mdp', 'placeholder':'Mot de passe'} }) }}*/
/*                         </div>*/
/*                         <div class="col-lg-1 infomdp">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="confirmeMotDePasse" class="col-lg-4 control-label">*/
/*                             Repéter le mot de passe <span class="bad"> *</span>*/
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
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('res/js/indicatifs.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('res/js/years.js') }}" type="text/javascript"></script>*/
/*     <script>*/
/*         $(function () {*/
/*             var country, gender;*/
/* */
/*             $(".hidefieldCountry").hide();*/
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
/*             //Search and Check IsoCode country*/
/*             $(".indicatifSelect").hide();*/
/*             function searchIndicatifCountry(val) {*/
/*                 var indice, indicat;*/
/*                 for (var i = 0; i < indicatifs[1].length; i++) {*/
/*                     if (val === indicatifs[1][i]) {*/
/*                         indice = i;*/
/*                     }*/
/*                 }*/
/*                 indicat = val;*/
/*                 for (var j = 0; j < indicatifs[0].length; j++) {*/
/*                     if (indice === j) {*/
/*                         indicat = indicatifs[0][j];*/
/*                     }*/
/*                 }*/
/*                 $(".indicatifSelect").empty();*/
/*                 if (indicat instanceof Array) {*/
/*                     for (var k = 0; k < indicat.length; k++) {*/
/*                         $(".indicatifSelect").show();*/
/*                         $(".indicatifInput").hide();*/
/*                         $(".indicatifSelect").append(new Option("+" + indicat[k], "+" + indicat[k]));*/
/*                     }*/
/*                 } else {*/
/*                     $(".indicatifSelect").hide();*/
/*                     $(".indicatifInput").show();*/
/*                     $(".indicatifInput").val("+" + indicat);*/
/*                     console.log($(".indicatifInput").val());*/
/*                 }*/
/*             }*/
/* */
/*             $(".country").change(function () {*/
/*                 searchIndicatifCountry($(this).val());*/
/*             });*/
/* */
/*             $(".indicatifSelect").click(function () {*/
/*                 $(".indicatifInput").val($(".indicatifSelect").val());*/
/*                 console.log($(".indicatifInput").val());*/
/*             });*/
/*             $(".indicatifSelect").change(function () {*/
/*                 $(".indicatifInput").val($(".indicatifSelect").val());*/
/*                 console.log($(".indicatifInput").val());*/
/*             });*/
/* */
/*             //Checking the repeatPassword*/
/*             $(".submit").attr("disabled", "true");*/
/*             $(".rmdp").keyup(function () {*/
/*                 if ($(".mdp").val().length >= 8 && $(".rmdp").val().length !== 0) {*/
/*                     if ($(".rmdp").val() !== $(".mdp").val()) {*/
/*                         $(".submit").attr("disabled", "true");*/
/*                         $(".badrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badrmdp"></i>');*/
/*                         $(".goodrmdp").remove();*/
/*                     } else {*/
/*                         $(".submit").removeAttr("disabled");*/
/*                         $(".goodrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodrmdp"></i>');*/
/*                         $(".badrmdp").remove();*/
/*                     }*/
/*                 } else {*/
/*                     $(".submit").attr("disabled", "true");*/
/*                     $(".goodrmdp").remove();*/
/*                     $(".badrmdp").remove();*/
/*                 }*/
/*             });*/
/* */
/*             //Checking password*/
/*             $(".mdp").keyup(function () {*/
/*                 if ($(".mdp").val().length >= 8 && $(".rmdp").val().length !== 0) {*/
/*                     if ($(".rmdp").val() !== $(".mdp").val()) {*/
/*                         $(".submit").attr("disabled", "true");*/
/*                         $(".badrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badrmdp"></i>');*/
/*                         $(".goodrmdp").remove();*/
/*                     } else {*/
/*                         $(".submit").removeAttr("disabled");*/
/*                         $(".goodrmdp").remove();*/
/*                         $(".informdp").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodrmdp"></i>');*/
/*                         $(".badrmdp").remove();*/
/*                     }*/
/*                 } else {*/
/*                     $(".submit").attr("disabled", "true");*/
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
/*                     $(".submit").attr("disabled", "true");*/
/*                     $(".infomdp").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad badmdp"></i>');*/
/*                 } else {*/
/*                     $(".submit").attr("disabled", "true");*/
/*                     $(".goodmdp").remove();*/
/*                     $(".badmdp").remove();*/
/*                 }*/
/*             });*/
/* */
/*             //Checking username@Email*/
/*             var regex = [];*/
/*             regex[0] = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;*/
/*             regex[1] = /^[a-z0-9._-]+@$/;*/
/*             regex[3] = /^[a-z0-9._-]+@[a-z0-9._-]{1,}$/;*/
/* */
/*             function testEmail(val) {*/
/*                 $(".submit").attr("disabled", "true");*/
/*                 $(".bademail").remove();*/
/*                 $(".goodemail").remove();*/
/*                 $(".loading").remove();*/
/*                 if (val.length > 0) {*/
/*                     if (regex[0].test(val) || regex[1].test(val) || regex[3].test(val)) {*/
/*                         console.log("correspond!");*/
/*                         $(".submit").attr("disabled", "true");*/
/*                         $(".bademail").remove();*/
/*                         $(".goodemail").remove();*/
/*                         $(".loading").remove();*/
/*                         $(".infoemail").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad bademail"></i>');*/
/*                     } else {*/
/*                         console.log("ne correspond pas!");*/
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/asn/web/app_dev.php/user/byemail/' + val + "@avm.com",*/
/*                             beforeSend: function () {*/
/*                                 $(".submit").attr("disabled", "true");*/
/*                                 $(".bademail").remove();*/
/*                                 $(".goodemail").remove();*/
/*                                 $(".loading").remove();*/
/*                                 $(".infoemail").parent().append('<img src="{{ asset('res/img/loading.gif') }}" class="loading">');*/
/*                             },*/
/*                             success: function (data) {*/
/*                                 $(".loading").remove();*/
/*                                 $(".bademail").remove();*/
/*                                 $(".goodemail").remove();*/
/*                                 if (data.response) {*/
/*                                     $(".submit").attr("disabled", "true");*/
/*                                     $(".bademail").remove();*/
/*                                     $(".infoemail").parent().append('<i class="fa fa-thumbs-o-down fa-2x bad bademail"></i>');*/
/*                                 } else {*/
/*                                     $(".submit").removeAttr("disabled");*/
/*                                     $(".goodemail").remove();*/
/*                                     $(".infoemail").parent().append('<i class="fa fa-thumbs-o-up fa-2x good goodemail"></i>');*/
/*                                 }*/
/*                             }*/
/*                         });*/
/*                     }*/
/*                 } else {*/
/*                     $(".submit").attr("disabled", "true");*/
/*                     $(".bademail").remove();*/
/*                     $(".goodemail").remove();*/
/*                     $(".loading").remove();*/
/*                 }*/
/*             }*/
/* */
/*             $(".email").blur(function () {*/
/*                 testEmail($(this).val());*/
/*             });*/
/* */
/*             //Checking the last config before Submitting!*/
/*             /*$(".submit").click(function () {*/
/*              $(".country").val(country);*/
/*              $(".indicatifInput").removeAttr("disabled");*/
/*              });*//* */
/* */
/* */
/*             $(".submit").click(function () {*/
/*                 $.ajax({*/
/*                     beforeSend: function () {*/
/*                         country = $(".country option:selected").text();*/
/*                         $(".hidefieldCountry").val(country);*/
/* */
/*                         $(".indicatifInput").removeAttr("disabled");*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
