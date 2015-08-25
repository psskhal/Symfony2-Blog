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
        $__internal_40ed061f8b9f9631d78335a68d8918e2242d2f8b8e06dae354d92ee098259135 = $this->env->getExtension("native_profiler");
        $__internal_40ed061f8b9f9631d78335a68d8918e2242d2f8b8e06dae354d92ee098259135->enter($__internal_40ed061f8b9f9631d78335a68d8918e2242d2f8b8e06dae354d92ee098259135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_40ed061f8b9f9631d78335a68d8918e2242d2f8b8e06dae354d92ee098259135->leave($__internal_40ed061f8b9f9631d78335a68d8918e2242d2f8b8e06dae354d92ee098259135_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b39b4a3cd61998ab3dff9ec101b25a9213242d347ef716a8858f57796fd80e = $this->env->getExtension("native_profiler");
        $__internal_37b39b4a3cd61998ab3dff9ec101b25a9213242d347ef716a8858f57796fd80e->enter($__internal_37b39b4a3cd61998ab3dff9ec101b25a9213242d347ef716a8858f57796fd80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37b39b4a3cd61998ab3dff9ec101b25a9213242d347ef716a8858f57796fd80e->leave($__internal_37b39b4a3cd61998ab3dff9ec101b25a9213242d347ef716a8858f57796fd80e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77f2a91a3c38bd7172853d6bc265847e1a352299776e2b575408cbf4457808aa = $this->env->getExtension("native_profiler");
        $__internal_77f2a91a3c38bd7172853d6bc265847e1a352299776e2b575408cbf4457808aa->enter($__internal_77f2a91a3c38bd7172853d6bc265847e1a352299776e2b575408cbf4457808aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77f2a91a3c38bd7172853d6bc265847e1a352299776e2b575408cbf4457808aa->leave($__internal_77f2a91a3c38bd7172853d6bc265847e1a352299776e2b575408cbf4457808aa_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9c141dbae0d65133c2ef22e1dbc841877acb7fded94e7f91010aa4da9025c0 = $this->env->getExtension("native_profiler");
        $__internal_4e9c141dbae0d65133c2ef22e1dbc841877acb7fded94e7f91010aa4da9025c0->enter($__internal_4e9c141dbae0d65133c2ef22e1dbc841877acb7fded94e7f91010aa4da9025c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e9c141dbae0d65133c2ef22e1dbc841877acb7fded94e7f91010aa4da9025c0->leave($__internal_4e9c141dbae0d65133c2ef22e1dbc841877acb7fded94e7f91010aa4da9025c0_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39b7fe37ebff5c507f3a034edf2ec511b9c0b6af29c2eb6dfbd6e318bf756080 = $this->env->getExtension("native_profiler");
        $__internal_39b7fe37ebff5c507f3a034edf2ec511b9c0b6af29c2eb6dfbd6e318bf756080->enter($__internal_39b7fe37ebff5c507f3a034edf2ec511b9c0b6af29c2eb6dfbd6e318bf756080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39b7fe37ebff5c507f3a034edf2ec511b9c0b6af29c2eb6dfbd6e318bf756080->leave($__internal_39b7fe37ebff5c507f3a034edf2ec511b9c0b6af29c2eb6dfbd6e318bf756080_prof);

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
