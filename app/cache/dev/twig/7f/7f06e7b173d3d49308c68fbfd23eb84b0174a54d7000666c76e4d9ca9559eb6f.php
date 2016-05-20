<?php

/* AvmAsnBundle:admin:login.html.twig */
class __TwigTemplate_3a3ec36e3308ee5438081a46cf4eb3bf0779ef324c93895741631d2c8fc78c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "AvmAsnBundle:admin:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Login Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "    <div id=\"login\" class=\"container\">
        <form class=\"form-signin\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <input type=\"text\" class=\"input-block-level\" placeholder=\"Email address\">
            <input type=\"password\" class=\"input-block-level\" placeholder=\"Password\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" value=\"remember-me\"> Remember me
            </label>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  81 => 42,  41 => 6,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "admin_base.html.twig" %}*/
/* */
/* {% block title %} Login Admin | {{ parent() }} {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         body {*/
/*             padding-top: 40px;*/
/*             padding-bottom: 40px;*/
/*             background-color: #f5f5f5;*/
/*         }*/
/* */
/*         .form-signin {*/
/*             max-width: 300px;*/
/*             padding: 19px 29px 29px;*/
/*             margin: 0 auto 20px;*/
/*             background-color: #fff;*/
/*             border: 1px solid #e5e5e5;*/
/*             -webkit-border-radius: 5px;*/
/*             -moz-border-radius: 5px;*/
/*             border-radius: 5px;*/
/*             -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);*/
/*             -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);*/
/*             box-shadow: 0 1px 2px rgba(0,0,0,.05);*/
/*         }*/
/*         .form-signin .form-signin-heading,*/
/*         .form-signin .checkbox {*/
/*             margin-bottom: 10px;*/
/*         }*/
/*         .form-signin input[type="text"],*/
/*         .form-signin input[type="password"] {*/
/*             font-size: 16px;*/
/*             height: auto;*/
/*             margin-bottom: 15px;*/
/*             padding: 7px 9px;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="login" class="container">*/
/*         <form class="form-signin">*/
/*             <h2 class="form-signin-heading">Please sign in</h2>*/
/*             <input type="text" class="input-block-level" placeholder="Email address">*/
/*             <input type="password" class="input-block-level" placeholder="Password">*/
/*             <label class="checkbox">*/
/*                 <input type="checkbox" value="remember-me"> Remember me*/
/*             </label>*/
/*             <button class="btn btn-large btn-primary" type="submit">Sign in</button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
