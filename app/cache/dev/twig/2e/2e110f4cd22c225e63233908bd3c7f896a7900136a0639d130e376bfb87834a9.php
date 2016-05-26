<?php

/* ASNUserBundle:Security:login.html.twig */
class __TwigTemplate_62763e570f83b85b21de19dff8a0fd8745b9a86b1bd857e8130b136439d02642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASNUserBundle::layout.html.twig", "ASNUserBundle:Security:login.html.twig", 1);
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
        <div class=\"col-lg-4 col-lg-offset-4\">
            <div class=\"row\">

                <div class=\"col-lg-10 col-lg-offset-1\">
                    <h4 class=\"text-center\"><b>Connexion</b></h4>
                    <!-- formulaire connexion -->
                    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                        <div class=\"col-lg-12 alert alert-danger alert-dismissible\" id=\"alert\">
                            <strong>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</strong>
                        </div>
                    ";
        }
        // line 16
        echo "                    <form id=\"loginForm\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                        <div class=\"input-group form-group form-group-lg\">
                            <label for=\"login\" class=\"input-group-addon\">
                                <i class=\"fa fa-user\"></i>
                            </label>
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control email", "placeholder" => "example@avm.com")));
        echo "
                        </div>
                        <div class=\"input-group form-group form-group-lg\">
                            <label for=\"motDePasse\" class=\"input-group-addon\">
                                <i class=\"fa fa-lock\"></i>
                            </label>
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control pwd", "placeholder" => "Mot de passe")));
        echo "
                        </div>
                        <div class=\"form-group form-group-lg\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group form-group-lg\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">
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
                        Pas de compte? 
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("asn_register");
        echo "\" title=\"Créer ici\">
                            S'inscrire ici
                        </a>
                    </p>
                </div>

            </div>\t\t\t\t\t\t\t
        </div>
    </div>
";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
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

            /*\$(\"#loginForm\").submit(function () {
             \$.ajax({
             type: 'POST',
             url: url,
             data: {
             email: \$(\".email\").val(),
             pwd: \$(\".pwd\").val()
             },
             beforeSend: function () {
             
             },
             success: function (data) {
             
             }
             });
             });*/
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ASNUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 73,  121 => 72,  107 => 61,  70 => 27,  61 => 21,  52 => 16,  46 => 13,  43 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "ASNUserBundle::layout.html.twig" %}*/
/* */
/* {% block loginRegister %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4 col-lg-offset-4">*/
/*             <div class="row">*/
/* */
/*                 <div class="col-lg-10 col-lg-offset-1">*/
/*                     <h4 class="text-center"><b>Connexion</b></h4>*/
/*                     <!-- formulaire connexion -->*/
/*                     {% if error %}*/
/*                         <div class="col-lg-12 alert alert-danger alert-dismissible" id="alert">*/
/*                             <strong>{{ error }}</strong>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <form id="loginForm" method="post" {{ form_enctype(form) }}>*/
/*                         <div class="input-group form-group form-group-lg">*/
/*                             <label for="login" class="input-group-addon">*/
/*                                 <i class="fa fa-user"></i>*/
/*                             </label>*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'form-control email', 'placeholder':'example@avm.com'} }) }}*/
/*                         </div>*/
/*                         <div class="input-group form-group form-group-lg">*/
/*                             <label for="motDePasse" class="input-group-addon">*/
/*                                 <i class="fa fa-lock"></i>*/
/*                             </label>*/
/*                             {{ form_widget(form.password, { 'attr': {'class': 'form-control pwd', 'placeholder':'Mot de passe'} }) }}*/
/*                         </div>*/
/*                         <div class="form-group form-group-lg">*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox"> Se souvenir de moi*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group form-group-lg">*/
/*                             <button type="submit" class="btn btn-primary btn-block">*/
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
/*                         Pas de compte? */
/*                         <a href="{{ path('asn_register') }}" title="Créer ici">*/
/*                             S'inscrire ici*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
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
/*             /*$("#loginForm").submit(function () {*/
/*              $.ajax({*/
/*              type: 'POST',*/
/*              url: url,*/
/*              data: {*/
/*              email: $(".email").val(),*/
/*              pwd: $(".pwd").val()*/
/*              },*/
/*              beforeSend: function () {*/
/*              */
/*              },*/
/*              success: function (data) {*/
/*              */
/*              }*/
/*              });*/
/*              });*//* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
