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
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        return array (  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "admin_base.html.twig" %}*/
/* */
/* {% block title %} Login Admin | {{ parent() }} {% endblock %}*/
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
