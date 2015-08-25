<?php

/* TestBlogBundle:security:login.html.twig */
class __TwigTemplate_69364621064d4c98294a40180f1005acd4a5a3a9c003aa9767d729d2f3f84b3f extends Twig_Template
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
        $__internal_cf39fdd12ee45e9acb0eb6994594fc8ac84d481e92cf0e2d77410008dd1b3811 = $this->env->getExtension("native_profiler");
        $__internal_cf39fdd12ee45e9acb0eb6994594fc8ac84d481e92cf0e2d77410008dd1b3811->enter($__internal_cf39fdd12ee45e9acb0eb6994594fc8ac84d481e92cf0e2d77410008dd1b3811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:security:login.html.twig"));

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
        
        $__internal_cf39fdd12ee45e9acb0eb6994594fc8ac84d481e92cf0e2d77410008dd1b3811->leave($__internal_cf39fdd12ee45e9acb0eb6994594fc8ac84d481e92cf0e2d77410008dd1b3811_prof);

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
