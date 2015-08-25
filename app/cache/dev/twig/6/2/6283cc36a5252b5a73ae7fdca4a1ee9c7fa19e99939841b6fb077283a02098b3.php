<?php

/* ::base.html.twig */
class __TwigTemplate_6283cc36a5252b5a73ae7fdca4a1ee9c7fa19e99939841b6fb077283a02098b3 extends Twig_Template
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
        $__internal_62c29aa174db82c1fb20f8d129b9c69d65983fc3f3386b5354e1c7986dbf29cc = $this->env->getExtension("native_profiler");
        $__internal_62c29aa174db82c1fb20f8d129b9c69d65983fc3f3386b5354e1c7986dbf29cc->enter($__internal_62c29aa174db82c1fb20f8d129b9c69d65983fc3f3386b5354e1c7986dbf29cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_62c29aa174db82c1fb20f8d129b9c69d65983fc3f3386b5354e1c7986dbf29cc->leave($__internal_62c29aa174db82c1fb20f8d129b9c69d65983fc3f3386b5354e1c7986dbf29cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd78ad120d8878fd76c81d141c87c0b6fcb6bc475cadf3eccacc1577472860d7 = $this->env->getExtension("native_profiler");
        $__internal_cd78ad120d8878fd76c81d141c87c0b6fcb6bc475cadf3eccacc1577472860d7->enter($__internal_cd78ad120d8878fd76c81d141c87c0b6fcb6bc475cadf3eccacc1577472860d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cd78ad120d8878fd76c81d141c87c0b6fcb6bc475cadf3eccacc1577472860d7->leave($__internal_cd78ad120d8878fd76c81d141c87c0b6fcb6bc475cadf3eccacc1577472860d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c64cc31d82fadd81fc2b92c00f58a6c22d367714dbaae0499a5d919f57b6fbaf = $this->env->getExtension("native_profiler");
        $__internal_c64cc31d82fadd81fc2b92c00f58a6c22d367714dbaae0499a5d919f57b6fbaf->enter($__internal_c64cc31d82fadd81fc2b92c00f58a6c22d367714dbaae0499a5d919f57b6fbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c64cc31d82fadd81fc2b92c00f58a6c22d367714dbaae0499a5d919f57b6fbaf->leave($__internal_c64cc31d82fadd81fc2b92c00f58a6c22d367714dbaae0499a5d919f57b6fbaf_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1c3f180a462971b31bc5e5758e416d2bc9d9ab70e5a36c314c54495bcce7f23 = $this->env->getExtension("native_profiler");
        $__internal_a1c3f180a462971b31bc5e5758e416d2bc9d9ab70e5a36c314c54495bcce7f23->enter($__internal_a1c3f180a462971b31bc5e5758e416d2bc9d9ab70e5a36c314c54495bcce7f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1c3f180a462971b31bc5e5758e416d2bc9d9ab70e5a36c314c54495bcce7f23->leave($__internal_a1c3f180a462971b31bc5e5758e416d2bc9d9ab70e5a36c314c54495bcce7f23_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b3b0eaf7d21cbef651bf232094c41974c8b9835e4edf1f92aca38456ebf8d7a = $this->env->getExtension("native_profiler");
        $__internal_4b3b0eaf7d21cbef651bf232094c41974c8b9835e4edf1f92aca38456ebf8d7a->enter($__internal_4b3b0eaf7d21cbef651bf232094c41974c8b9835e4edf1f92aca38456ebf8d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b3b0eaf7d21cbef651bf232094c41974c8b9835e4edf1f92aca38456ebf8d7a->leave($__internal_4b3b0eaf7d21cbef651bf232094c41974c8b9835e4edf1f92aca38456ebf8d7a_prof);

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
