<?php

/* TestBlogBundle:Post:new.html.twig */
class __TwigTemplate_eab054cd273ab5474a30951b5ab94b4126247628d847ca6d5db6c102e8e4ce3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TestBlogBundle:Post:new.html.twig", 1);
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
        $__internal_2340ce6f26ab970c68cceb3b44dfdc57f81933d72ab0adacfae0d744309a6722 = $this->env->getExtension("native_profiler");
        $__internal_2340ce6f26ab970c68cceb3b44dfdc57f81933d72ab0adacfae0d744309a6722->enter($__internal_2340ce6f26ab970c68cceb3b44dfdc57f81933d72ab0adacfae0d744309a6722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2340ce6f26ab970c68cceb3b44dfdc57f81933d72ab0adacfae0d744309a6722->leave($__internal_2340ce6f26ab970c68cceb3b44dfdc57f81933d72ab0adacfae0d744309a6722_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5172b59df51a782f5b5307c2423da244096e9f47694e1dca2e5953a17464dd2e = $this->env->getExtension("native_profiler");
        $__internal_5172b59df51a782f5b5307c2423da244096e9f47694e1dca2e5953a17464dd2e->enter($__internal_5172b59df51a782f5b5307c2423da244096e9f47694e1dca2e5953a17464dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Create New Post</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        
        $__internal_5172b59df51a782f5b5307c2423da244096e9f47694e1dca2e5953a17464dd2e->leave($__internal_5172b59df51a782f5b5307c2423da244096e9f47694e1dca2e5953a17464dd2e_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
