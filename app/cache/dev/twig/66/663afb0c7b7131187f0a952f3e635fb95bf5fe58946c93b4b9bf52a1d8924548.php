<?php

/* AvmAsnBundle:user:asnHomePage.html.twig */
class __TwigTemplate_3ffd665554e5d39fe60fc7b92ae1ebf87467411ba144768b763f35d25324ebd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AvmAsnBundle:user:asnHomePage.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
    public function block_header($context, array $blocks = array())
    {
        echo " 
    ";
        // line 4
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo " 
    
";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        echo " 
    
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    ";
        // line 16
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:user:asnHomePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 15,  50 => 11,  42 => 7,  36 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block header %} */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block footer %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %} */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
