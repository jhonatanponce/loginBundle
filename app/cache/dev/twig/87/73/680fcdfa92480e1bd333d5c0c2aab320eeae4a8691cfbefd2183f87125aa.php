<?php

/* ::base_login.html.twig */
class __TwigTemplate_8773680fcdfa92480e1bd333d5c0c2aab320eeae4a8691cfbefd2183f87125aa extends Twig_Template
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
        // line 86
        echo "    </head>
";
        // line 88
        echo "    <body class=\"signin\">
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/images/JhonatanPonce-Branding-ColorFull1.png"), "html", null, true);
        echo "\" class=\"pull-right\" style=\"padding-top:10px;\">
                                        </div>
                                    </div>
                                </div><!-- .institutional-header-box -->
                            </div><!-- .header-desktop .hidden-xs -->
                        </header>\t\t\t\t\t\t\t\t\t
                    </div>
                </div>\t\t
            </div><!-- #header-zone -->
            
            <div class=\"container-fluid main-container\">
            ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
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
        /* LOGIN */
body.signin {
\t//background-color:#F3F3F3;
\theight:100%;
}
body.signin .main-container {
\tposition:relative;
\theight:100%;
\twidth:100%;
\tdisplay:table;
        margin-top:200px;
}
.form-signin{
\twidth:400px;
\tdisplay:table-cell;
\tvertical-align:middle;
\tmargin:auto;
}
.form-signin h2 {
\ttext-align:center;
\tmargin-bottom:30px;
}
.form-signin img {
\tmax-width:300px;
}
.form-signin h2 span {
\tdisplay:none;
}
.form-signin .username-box,
.form-signin .password-box {
\tmargin-bottom:10px;
}
        </style>
        ";
    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        echo "                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/login/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    public function getTemplateName()
    {
        return "::base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 113,  196 => 112,  193 => 111,  190 => 110,  185 => 109,  105 => 11,  102 => 10,  96 => 5,  76 => 115,  73 => 110,  71 => 109,  57 => 98,  45 => 88,  42 => 86,  40 => 10,  36 => 9,  29 => 5,  23 => 1,  52 => 10,  47 => 9,  41 => 7,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
