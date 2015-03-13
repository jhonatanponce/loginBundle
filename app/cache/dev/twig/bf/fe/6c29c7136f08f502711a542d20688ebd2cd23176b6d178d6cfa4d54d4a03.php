<?php

/* TestLoginBundle:Role:edit.html.twig */
class __TwigTemplate_bffe6c29c7136f08f502711a542d20688ebd2cd23176b6d178d6cfa4d54d4a03 extends Twig_Template
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
        echo "\">Rol</a></li>
                        <li class=\"active\">Editar Rol</li>
                    </ol>\t\t\t\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"page-content-sector\">
            <div class=\"row\">
                <h1>Editar Rol</h1>
                 ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
            </div>
        </div>
        <div class=\"text-center\">
            <div class=\"options-buttons-box\">
                ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_role");
        echo "\" class=\"btn btn-default\" role=\"button\">Regresar</a>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:Role:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  71 => 29,  67 => 28,  59 => 23,  44 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
