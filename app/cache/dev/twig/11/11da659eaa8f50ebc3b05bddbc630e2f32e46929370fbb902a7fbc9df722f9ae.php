<?php

/* AvmAsnBundle:admin:index.html.twig */
class __TwigTemplate_ba83373fafdff369c16edfcad25842e69ec0623918fbfea6c36a4e86fc1eea1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "AvmAsnBundle:admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
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
        echo " Admin Panel | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo " 
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"#\">Admin Panel</a>
                <div class=\"nav-collapse collapse\">
                    <p class=\"navbar-text pull-right\">
                        Welcome <a href=\"#\" class=\"navbar-link\">Aurélien</a>
                    </p>
                    <ul class=\"nav\">
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#about\">About</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span3\">
                <div class=\"well sidebar-nav nav-collapse collapse\">
                    <ul class=\"nav nav-list\">
                        <li class=\"nav-header\">Sidebar</li>
                        <li class=\"active\"><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"nav-header\">Sidebar</li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"nav-header\">Sidebar</li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->
            <div class=\"span9\">
                <div class=\"hero-unit\">
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a href=\"#\" class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                </div><!--/row-->
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                    <div class=\"span4\">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                    </div><!--/span-->
                </div><!--/row-->
            </div><!--/span-->
        </div><!--/row-->

        <hr>

        <footer>
            <p>&copy; AVM 2016</p>
        </footer>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AvmAsnBundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "admin_base.html.twig" %}*/
/* */
/* {% block title %} Admin Panel | {{ parent() }} {% endblock %}*/
/* */
/* {% block header %} */
/*     <div class="navbar navbar-fixed-top">*/
/*         <div class="navbar-inner">*/
/*             <div class="container-fluid">*/
/*                 <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="brand" href="#">Admin Panel</a>*/
/*                 <div class="nav-collapse collapse">*/
/*                     <p class="navbar-text pull-right">*/
/*                         Welcome <a href="#" class="navbar-link">Aurélien</a>*/
/*                     </p>*/
/*                     <ul class="nav">*/
/*                         <li class="active"><a href="#">Home</a></li>*/
/*                         <li><a href="#about">About</a></li>*/
/*                         <li><a href="#contact">Contact</a></li>*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %} */
/*     <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             <div class="span3">*/
/*                 <div class="well sidebar-nav nav-collapse collapse">*/
/*                     <ul class="nav nav-list">*/
/*                         <li class="nav-header">Sidebar</li>*/
/*                         <li class="active"><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="nav-header">Sidebar</li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="nav-header">Sidebar</li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                     </ul>*/
/*                 </div><!--/.well -->*/
/*             </div><!--/span-->*/
/*             <div class="span9">*/
/*                 <div class="hero-unit">*/
/*                     <h1>Hello, world!</h1>*/
/*                     <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*                     <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>*/
/*                 </div>*/
/*                 <div class="row-fluid">*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                 </div><!--/row-->*/
/*                 <div class="row-fluid">*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                     <div class="span4">*/
/*                         <h2>Heading</h2>*/
/*                         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                         <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*                     </div><!--/span-->*/
/*                 </div><!--/row-->*/
/*             </div><!--/span-->*/
/*         </div><!--/row-->*/
/* */
/*         <hr>*/
/* */
/*         <footer>*/
/*             <p>&copy; AVM 2016</p>*/
/*         </footer>*/
/* */
/*     </div>*/
/* {% endblock %}*/
