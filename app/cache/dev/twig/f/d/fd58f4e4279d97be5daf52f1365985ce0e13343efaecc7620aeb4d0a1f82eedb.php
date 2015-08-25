<?php

/* TestBlogBundle:Post:edit.html.twig */
class __TwigTemplate_fd58f4e4279d97be5daf52f1365985ce0e13343efaecc7620aeb4d0a1f82eedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TestBlogBundle:Post:edit.html.twig", 1);
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
        $__internal_4db11adfe7e4045f1cd15fb314b4ca28bd8e43cec02ae1a5a1a30c741bcefef2 = $this->env->getExtension("native_profiler");
        $__internal_4db11adfe7e4045f1cd15fb314b4ca28bd8e43cec02ae1a5a1a30c741bcefef2->enter($__internal_4db11adfe7e4045f1cd15fb314b4ca28bd8e43cec02ae1a5a1a30c741bcefef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db11adfe7e4045f1cd15fb314b4ca28bd8e43cec02ae1a5a1a30c741bcefef2->leave($__internal_4db11adfe7e4045f1cd15fb314b4ca28bd8e43cec02ae1a5a1a30c741bcefef2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3448f6ae3600d3f9de3cce588b1bd866936da6adc4aa18aa22a1be8b277c7c5c = $this->env->getExtension("native_profiler");
        $__internal_3448f6ae3600d3f9de3cce588b1bd866936da6adc4aa18aa22a1be8b277c7c5c->enter($__internal_3448f6ae3600d3f9de3cce588b1bd866936da6adc4aa18aa22a1be8b277c7c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Edit Post</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "form")));
        echo "
";
        
        $__internal_3448f6ae3600d3f9de3cce588b1bd866936da6adc4aa18aa22a1be8b277c7c5c->leave($__internal_3448f6ae3600d3f9de3cce588b1bd866936da6adc4aa18aa22a1be8b277c7c5c_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Post:edit.html.twig";
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
