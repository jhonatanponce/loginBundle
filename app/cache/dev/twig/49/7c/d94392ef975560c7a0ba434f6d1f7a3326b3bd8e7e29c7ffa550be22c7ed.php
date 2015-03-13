<?php

/* TestLoginBundle:Security:login.html.twig */
class __TwigTemplate_497cd94392ef975560c7a0ba434f6d1f7a3326b3bd8e7e29c7ffa550be22c7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message")), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" class=\"form-signin\" id=\"formulario\" role=\"form\" method=\"post\">
    <input type=\"text\" id=\"_username\" name=\"_username\" class=\"form-control username-box\" placeholder=\"Nombre de Usuario\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus=\"\" autocomplete=\"off\">
    <input type=\"password\" id=\"_password\" name=\"_password\" class=\"form-control password-box\" placeholder=\"Contraseña\" autocomplete=\"off\">
    <label class=\"checkbox\">
    </label>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "TestLoginBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  39 => 6,  33 => 4,  31 => 3,  28 => 2,);
    }
}
