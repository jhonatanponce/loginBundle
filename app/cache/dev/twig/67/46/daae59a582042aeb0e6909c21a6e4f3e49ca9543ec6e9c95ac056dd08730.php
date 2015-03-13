<?php

/* TestLoginBundle:Role:show.html.twig */
class __TwigTemplate_6746daae59a582042aeb0e6909c21a6e4f3e49ca9543ec6e9c95ac056dd08730 extends Twig_Template
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
                        <li class=\"active\">Detalle Role</li>
                    </ol>\t\t\t\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"page-content-sector\">
            <div class=\"row\">
                <h1>Detalle Role</h1>
                <table class=\"records_list table table-bordered table-striped table-hover\" border=\"1\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"text-center\">
            <div class=\"options-buttons-box inline\">
                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_role_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">Modificar</a>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_role");
        echo "\" class=\"btn btn-success\" role=\"button\">Regresar</a>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:Role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  89 => 41,  85 => 40,  81 => 39,  70 => 31,  63 => 27,  44 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
