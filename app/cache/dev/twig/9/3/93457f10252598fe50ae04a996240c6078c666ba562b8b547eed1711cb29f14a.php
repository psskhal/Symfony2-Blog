<?php

/* TestBlogBundle:Post:new.html.twig */
class __TwigTemplate_93457f10252598fe50ae04a996240c6078c666ba562b8b547eed1711cb29f14a extends Twig_Template
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
        $__internal_c1d274546591fd763a1383e2cad5fb56c1d9e79feb44f156fd391dfe93e3166a = $this->env->getExtension("native_profiler");
        $__internal_c1d274546591fd763a1383e2cad5fb56c1d9e79feb44f156fd391dfe93e3166a->enter($__internal_c1d274546591fd763a1383e2cad5fb56c1d9e79feb44f156fd391dfe93e3166a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d274546591fd763a1383e2cad5fb56c1d9e79feb44f156fd391dfe93e3166a->leave($__internal_c1d274546591fd763a1383e2cad5fb56c1d9e79feb44f156fd391dfe93e3166a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec781571c49fdc95de7443077167a2fa1c0bdc2ef75ce7b1fa2a65e5fdab4844 = $this->env->getExtension("native_profiler");
        $__internal_ec781571c49fdc95de7443077167a2fa1c0bdc2ef75ce7b1fa2a65e5fdab4844->enter($__internal_ec781571c49fdc95de7443077167a2fa1c0bdc2ef75ce7b1fa2a65e5fdab4844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Create New Post</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        
        $__internal_ec781571c49fdc95de7443077167a2fa1c0bdc2ef75ce7b1fa2a65e5fdab4844->leave($__internal_ec781571c49fdc95de7443077167a2fa1c0bdc2ef75ce7b1fa2a65e5fdab4844_prof);

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
