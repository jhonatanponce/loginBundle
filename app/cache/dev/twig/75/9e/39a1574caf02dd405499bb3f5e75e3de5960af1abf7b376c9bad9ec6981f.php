<?php

/* ::base.html.twig */
class __TwigTemplate_759e39a1574caf02dd405499bb3f5e75e3de5960af1abf7b376c9bad9ec6981f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/images/ios_icon_57.png"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo " 
    </head>
    ";
        // line 56
        echo "    <body class=\"archive\">
        <div class=\"container\">
            <div id=\"header-zone\">
                <div class=\"row\">
                    <div class=\"col-md-12\">\t\t\t\t\t
                        <header>
                            <div class=\"header-desktop hidden-xs\">
                                <div class=\"institutional-header-box hidden-xs\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12 row\">
                                            <img alt=\"Jhonatan Ponce\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/images/JhonatanPonce-Branding-ColorFull1.png"), "html", null, true);
        echo "\" class=\"pull-right\" style=\"padding-top:10px;\">
                                        </div>
                                    </div>
                                </div><!-- .institutional-header-box -->
                                <div class=\"navigation-header-sector\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12 navigation-bar\">
                                            <ul class=\"menu-small\">
                                            ";
        // line 74
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 75
            echo "                                                <li><a href=\"\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getUrl("logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Cerrar sesión</a></li>
                                            ";
        }
        // line 78
        echo "                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .navigation-header-box -->
                            </div><!-- .header-desktop .hidden-xs -->
                        </header>\t\t\t\t\t\t\t\t\t
                    </div>
                </div>\t\t
            </div><!-- #header-zone -->
            
            <div id=\"middle-zone\">
                
            ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "            </div>
            <div id=\"footer-zone\" class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12\">\t\t\t\t\t
                        <div class=\"credits-sector\">
                            <div class=\"row\">
                                <div class=\"col-md-6 legal-bar\">LoginBundle</div>
                                <div class=\"col-md-6 developer-bar\">Diseño y Desarrollo por <strong><a href=\"http://ponceelrelajado.tumblr.com\" target=\"_blank\">Jhontan Ponce</a></strong></div>
                            </div>
                        </div><!-- .credits-sector -->
                    </div>
                </div>
            </div>
        </div>
    </body>  
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo ".:: LoginBundle ::.";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/css/bootstrap.css"), "html", null, true);
        echo "\">
        <style>
        #footer-zone{
        background-color: #4F4F4F;
        color: #bbbbbb;
        padding: 10px 20px;
        margin-top: 30px;
        }
        #header-zone .navigation-header-sector {
        height: 93px;
        background-position: left bottom;
        border-bottom: 4px #2696D0 solid;
        }
        ul, menu, dir {
        display: block;
        list-style-type: disc;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 40px;
        }
        li {
        display: list-item;
        text-align: -webkit-match-parent;
        }
        #header-zone .navigation-header-sector .navigation-bar ul.menu-small {
        right: 20px;
        top: 5px;
        list-style: none;
        position: absolute;
        }
        .breadcrumb-bar {
        top: 10px;
        }
        .breadcrumb > .active {
        color: #777;
        }
        .breadcrumb > li {
        display: inline-block;
        }
        </style>
        ";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 94,  188 => 93,  185 => 92,  182 => 91,  177 => 90,  129 => 11,  126 => 10,  120 => 5,  100 => 96,  97 => 91,  95 => 90,  81 => 78,  76 => 76,  71 => 75,  69 => 74,  58 => 66,  46 => 56,  42 => 53,  40 => 10,  36 => 9,  29 => 5,  23 => 1,);
    }
}
