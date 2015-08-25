<?php

/* TestBlogBundle:Post:edit.html.twig */
class __TwigTemplate_36bdfa183beef134b9a13ad186564b265a931e723f3026c03728ff6ae98c86e0 extends Twig_Template
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
        $__internal_f753427f647e35d23a45f861908390f86c787c652e04147d00dc952b397c97a4 = $this->env->getExtension("native_profiler");
        $__internal_f753427f647e35d23a45f861908390f86c787c652e04147d00dc952b397c97a4->enter($__internal_f753427f647e35d23a45f861908390f86c787c652e04147d00dc952b397c97a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f753427f647e35d23a45f861908390f86c787c652e04147d00dc952b397c97a4->leave($__internal_f753427f647e35d23a45f861908390f86c787c652e04147d00dc952b397c97a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_898d0682713f5578f65ef277ed0be0d5bbc6cc6cd9f9b70b54df45e0df015460 = $this->env->getExtension("native_profiler");
        $__internal_898d0682713f5578f65ef277ed0be0d5bbc6cc6cd9f9b70b54df45e0df015460->enter($__internal_898d0682713f5578f65ef277ed0be0d5bbc6cc6cd9f9b70b54df45e0df015460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Edit Post</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "form")));
        echo "
";
        
        $__internal_898d0682713f5578f65ef277ed0be0d5bbc6cc6cd9f9b70b54df45e0df015460->leave($__internal_898d0682713f5578f65ef277ed0be0d5bbc6cc6cd9f9b70b54df45e0df015460_prof);

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
