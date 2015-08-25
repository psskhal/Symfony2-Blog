<?php

/* ::base.html.twig */
class __TwigTemplate_afdf6aec0cc25f63b5506ac62d9783a0cbcb965d81107986a547c13d00f37ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad89c0d4f171e555332bfdd0ecdfbf2fbef2efa39e8ccbf5481cbc7f7dd2ff2b = $this->env->getExtension("native_profiler");
        $__internal_ad89c0d4f171e555332bfdd0ecdfbf2fbef2efa39e8ccbf5481cbc7f7dd2ff2b->enter($__internal_ad89c0d4f171e555332bfdd0ecdfbf2fbef2efa39e8ccbf5481cbc7f7dd2ff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/bootstrap.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

<ul class=\"nav nav-tabs\">
    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">Posts</a></a> </li>
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">New Post</a></a> </li>
    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "        <li><a>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        </li>
        <li><a href=\"/logout\">Logout</a></li>
    ";
        }
        // line 21
        echo "</ul>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>
</html>
";
        
        $__internal_ad89c0d4f171e555332bfdd0ecdfbf2fbef2efa39e8ccbf5481cbc7f7dd2ff2b->leave($__internal_ad89c0d4f171e555332bfdd0ecdfbf2fbef2efa39e8ccbf5481cbc7f7dd2ff2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e6ef44c48021174588ddb7e4fcc69eb5ee5e623f8db34de9907686c6559999e = $this->env->getExtension("native_profiler");
        $__internal_7e6ef44c48021174588ddb7e4fcc69eb5ee5e623f8db34de9907686c6559999e->enter($__internal_7e6ef44c48021174588ddb7e4fcc69eb5ee5e623f8db34de9907686c6559999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e6ef44c48021174588ddb7e4fcc69eb5ee5e623f8db34de9907686c6559999e->leave($__internal_7e6ef44c48021174588ddb7e4fcc69eb5ee5e623f8db34de9907686c6559999e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f589c41b1d8ddf1df0d8ff2c51f1564331b5762970963ffd39ac62b4cba89f4c = $this->env->getExtension("native_profiler");
        $__internal_f589c41b1d8ddf1df0d8ff2c51f1564331b5762970963ffd39ac62b4cba89f4c->enter($__internal_f589c41b1d8ddf1df0d8ff2c51f1564331b5762970963ffd39ac62b4cba89f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f589c41b1d8ddf1df0d8ff2c51f1564331b5762970963ffd39ac62b4cba89f4c->leave($__internal_f589c41b1d8ddf1df0d8ff2c51f1564331b5762970963ffd39ac62b4cba89f4c_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_509d081fdd2deca7a23a15527ec9b8ac5b7768ad33f9c2c56b218793f801925f = $this->env->getExtension("native_profiler");
        $__internal_509d081fdd2deca7a23a15527ec9b8ac5b7768ad33f9c2c56b218793f801925f->enter($__internal_509d081fdd2deca7a23a15527ec9b8ac5b7768ad33f9c2c56b218793f801925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_509d081fdd2deca7a23a15527ec9b8ac5b7768ad33f9c2c56b218793f801925f->leave($__internal_509d081fdd2deca7a23a15527ec9b8ac5b7768ad33f9c2c56b218793f801925f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67e465e33e15820e7453f4d142090d91738a421bb956f0d74b842550b0812b7c = $this->env->getExtension("native_profiler");
        $__internal_67e465e33e15820e7453f4d142090d91738a421bb956f0d74b842550b0812b7c->enter($__internal_67e465e33e15820e7453f4d142090d91738a421bb956f0d74b842550b0812b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_67e465e33e15820e7453f4d142090d91738a421bb956f0d74b842550b0812b7c->leave($__internal_67e465e33e15820e7453f4d142090d91738a421bb956f0d74b842550b0812b7c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 26,  125 => 25,  114 => 6,  102 => 5,  93 => 27,  91 => 26,  89 => 25,  80 => 23,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  59 => 15,  55 => 14,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
