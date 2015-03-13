<?php

/* TestLoginBundle:Role:new.html.twig */
class __TwigTemplate_7df10ddb224d4171f11ed10e99b6a1b36512e9c2e38ee50428d539c42a9fad7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"page-header-sector\">
            <div class=\"row\">
                <div class=\"col-md-12 breadcrumb-bar\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("test_login_homepage");
        echo "\">Hompage</a></li>
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_role");
        echo "\">Role</a></li>
                        <li class=\"active\">Nuevo Rol</li>
                    </ol>\t\t\t\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"page-content-sector\">
            <div class=\"row\">
                <h1>Nuevo Rol</h1>
                 ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
        </div>
        <div class=\"text-center\">
            <div class=\"options-buttons-box\">
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_role");
        echo "\" class=\"btn btn-default\" role=\"button\">Regresar</a>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:Role:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  67 => 28,  59 => 23,  44 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
