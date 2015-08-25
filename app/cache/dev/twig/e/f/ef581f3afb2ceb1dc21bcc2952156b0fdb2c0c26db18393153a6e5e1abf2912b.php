<?php

/* TestBlogBundle:security:login.html.twig */
class __TwigTemplate_ef581f3afb2ceb1dc21bcc2952156b0fdb2c0c26db18393153a6e5e1abf2912b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43931f357e2aa2a3eae00c94c48477e3801c31dd3629ec60fbcfca7d6dd33e05 = $this->env->getExtension("native_profiler");
        $__internal_43931f357e2aa2a3eae00c94c48477e3801c31dd3629ec60fbcfca7d6dd33e05->enter($__internal_43931f357e2aa2a3eae00c94c48477e3801c31dd3629ec60fbcfca7d6dd33e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:security:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <input type=\"hidden\" name=\"_target_path\" value=\"/\" />

    <button type=\"submit\">login</button>
</form>";
        
        $__internal_43931f357e2aa2a3eae00c94c48477e3801c31dd3629ec60fbcfca7d6dd33e05->leave($__internal_43931f357e2aa2a3eae00c94c48477e3801c31dd3629ec60fbcfca7d6dd33e05_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
