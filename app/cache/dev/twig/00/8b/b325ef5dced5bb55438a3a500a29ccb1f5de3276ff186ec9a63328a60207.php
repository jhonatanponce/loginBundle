<?php

/* TestLoginBundle:Default:index.html.twig */
class __TwigTemplate_008bb325ef5dced5bb55438a3a500a29ccb1f5de3276ff186ec9a63328a60207 extends Twig_Template
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
                    </ol>\t\t\t\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-md-12\">
    <div class=\"page-content-sector\">
        <div class=\"row\">
            <div class=\"jumbotron\">
                    <p>Bienvenidos al LoginBundle</p>
                    <p>Este es un bundle sencillo para hacer el mini-backend de registros de usuarios usando doctrine y librerías Sf2</p>
                    <p>Está página no requiere credenciales (es de acceso público)</p>
                    <p>Si no estas logeado al hacer click en los botones siguientes se te pedira que te identifiques.<br>
                        Si importaste la base de datos adjunta en el repositorio los usuarios son:<br>
                    <strong>Usuario Administrador:</strong> admin<br>
                    <strong>Password Usuario Administrador:</strong> uprueba1<br>
                    <strong>Usuario:</strong> user<br>
                    <strong>Password Usuario:</strong> uprueba2<br>
                    Solo el usuario administrador tiene acceso a crear, editar, eliminar y ver los registros
                    </p>
                    <div class=\"text-center\">
                        <div class=\"options-buttons-box\">
                            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">Usuarios</a>
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_role");
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">Roles</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function(){
            //\$('#registro_user_roles').attr('name','consalud_securitybundle_user[user_roles][]');
            \$('#registro_user_roles').removeAttr('multiple');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  83 => 43,  71 => 35,  67 => 34,  40 => 10,  32 => 4,  29 => 3,);
    }
}
