<?php

/* AvmAsnBundle:Default:index.html.twig */
class __TwigTemplate_4612510abac0558f4fde96faf53cb3f40dee691906ee6062cbb9278f3c04d8e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AvmAsnBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container vspacer\">
            <div class=\"row center formColorText\">
                <div class=\"col s12 m3\"><p></p></div>

                <div class=\"col s12 m6\">
                    <div class=\"logoCenterPage\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/images/logo_asn.png"), "html", null, true);
        echo "\">
                    </div>

                </div>

                <div class=\"col s12 m3\"><p></p></div>
            </div>
            <div class=\"row formColorText\">
                <div class=\"col s12 m6\">
                    <div class=\"white-text titleASN left\">
                        Bienvenu sur avm social network 
                    </div>
                </div>
                <div class=\"col s12 m6\"><p></p></div>
            </div>
        </div>
    </div>


    <div class=\"container vspacer\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"row formColorText\">
                    <div class=\"col s12 m6 aboutASN\">
                        <h5 class=\"white-text\">asn</h5>
                        <p class=\"grey-text text-lighten-4\">
                            Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.
                        </p>
                    </div>

                    <div class=\"center col s12 m6\">
                        <form class=\"card-panel white z-depth-5\">
                            <div class=\"row\">
                                Sign up
                            </div>
                            <div class=\"row\">
                                <div class=\"row\">
                                    <div class=\"input-field col s12\">
                                        <input id=\"email\" type=\"email\" class=\"validate\">
                                        <label for=\"email\">Email</label>
                                    </div>
                                    <div class=\"input-field col s12\">
                                        <input id=\"password\" type=\"password\" class=\"validate\">
                                        <label for=\"password\">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <a class=\"btn buttonConnexion waves-effect waves-teal z-depth-2\">Connexion</a>
                            </div>
                            <div class=\"row right\">
                                <a href=\"#\">Create an account ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"section\">

        </div>
    </div>
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    ";
        // line 77
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 77,  109 => 76,  41 => 11,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %} */
/*     <div class="section no-pad-bot" id="index-banner">*/
/*         <div class="container vspacer">*/
/*             <div class="row center formColorText">*/
/*                 <div class="col s12 m3"><p></p></div>*/
/* */
/*                 <div class="col s12 m6">*/
/*                     <div class="logoCenterPage">*/
/*                         <img src="{{ asset('lib/images/logo_asn.png') }}">*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="col s12 m3"><p></p></div>*/
/*             </div>*/
/*             <div class="row formColorText">*/
/*                 <div class="col s12 m6">*/
/*                     <div class="white-text titleASN left">*/
/*                         Bienvenu sur avm social network */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col s12 m6"><p></p></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="container vspacer">*/
/*         <div class="section">*/
/*             <div class="row">*/
/*                 <div class="row formColorText">*/
/*                     <div class="col s12 m6 aboutASN">*/
/*                         <h5 class="white-text">asn</h5>*/
/*                         <p class="grey-text text-lighten-4">*/
/*                             Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <div class="center col s12 m6">*/
/*                         <form class="card-panel white z-depth-5">*/
/*                             <div class="row">*/
/*                                 Sign up*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="row">*/
/*                                     <div class="input-field col s12">*/
/*                                         <input id="email" type="email" class="validate">*/
/*                                         <label for="email">Email</label>*/
/*                                     </div>*/
/*                                     <div class="input-field col s12">*/
/*                                         <input id="password" type="password" class="validate">*/
/*                                         <label for="password">Password</label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <a class="btn buttonConnexion waves-effect waves-teal z-depth-2">Connexion</a>*/
/*                             </div>*/
/*                             <div class="row right">*/
/*                                 <a href="#">Create an account ?</a>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="section">*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %} */
/*     {{ parent() }}*/
/*     */
/* {% endblock %}*/
