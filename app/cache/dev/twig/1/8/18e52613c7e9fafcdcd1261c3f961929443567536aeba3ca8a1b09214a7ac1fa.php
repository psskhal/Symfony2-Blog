<?php

/* TestBlogBundle:Post:show.html.twig */
class __TwigTemplate_18e52613c7e9fafcdcd1261c3f961929443567536aeba3ca8a1b09214a7ac1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TestBlogBundle:Post:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4099a06280b8e70368c7849970d00c71b6711037a87a28ef521ad140ac5a0d48 = $this->env->getExtension("native_profiler");
        $__internal_4099a06280b8e70368c7849970d00c71b6711037a87a28ef521ad140ac5a0d48->enter($__internal_4099a06280b8e70368c7849970d00c71b6711037a87a28ef521ad140ac5a0d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:show.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["delete_from"]) ? $context["delete_from"] : $this->getContext($context, "delete_from")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4099a06280b8e70368c7849970d00c71b6711037a87a28ef521ad140ac5a0d48->leave($__internal_4099a06280b8e70368c7849970d00c71b6711037a87a28ef521ad140ac5a0d48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6301423f4fa6bca827f8fe8478db6dc495a52d9760736d686a197a65917a9ca = $this->env->getExtension("native_profiler");
        $__internal_a6301423f4fa6bca827f8fe8478db6dc495a52d9760736d686a197a65917a9ca->enter($__internal_a6301423f4fa6bca827f8fe8478db6dc495a52d9760736d686a197a65917a9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"panel panel-default\">
        <div class=\"panel-heading\">Post</div>
        <div class=\"panel-body\">
            <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "text", array()), "html", null, true);
        echo "</p>
        </div>


        <ul class=\"list-group\">
            <li class=\"list-group-item\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "email", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "address", array()), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"> ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_from"]) ? $context["delete_from"] : $this->getContext($context, "delete_from")), 'form');
        echo "</li>

        </ul>
    </div>
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_from"]) ? $context["delete_from"] : $this->getContext($context, "delete_from")), 'form');
        echo "
";
        
        $__internal_a6301423f4fa6bca827f8fe8478db6dc495a52d9760736d686a197a65917a9ca->leave($__internal_a6301423f4fa6bca827f8fe8478db6dc495a52d9760736d686a197a65917a9ca_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  48 => 8,  43 => 5,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
