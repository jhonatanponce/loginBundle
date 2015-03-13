<?php

/* TestLoginBundle:User:index.html.twig */
class __TwigTemplate_27246668b309910406b0d0b165d2abbf274c732f03c37b4c3794802771b895da extends Twig_Template
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
                        <li class=\"active\">Usuarios</li>
                    </ol>\t\t\t\t\t\t\t\t
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"page-content-sector\">
            <div class=\"row\">
                <h1>Listado de Usuarios</h1>
                 <table class=\"table table-hover table-responsive table-striped\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Username</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                        <tr>
                            <td class=\"text-center\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                            <td class=\"text-center\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-search\"></a>
                                &nbsp;|&nbsp;
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\"></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"text-center\">
            <div class=\"options-buttons-box\">
                <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">Crear Nuevo Usuario</a>
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("test_login_homepage");
        echo "\" class=\"btn btn-default btn-lg\" role=\"button\">Regresar</a>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  111 => 49,  107 => 48,  99 => 42,  89 => 38,  84 => 36,  77 => 34,  71 => 33,  68 => 32,  64 => 31,  40 => 10,  32 => 4,  29 => 3,);
    }
}
