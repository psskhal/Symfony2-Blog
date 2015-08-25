<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fb8bc6c9b40df4a11e0a46756aa3074dbb496ea4f0b81395a940b10534ba5654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46de2356f20a740477df064f5bdc45c689fac686d517921b3bb6f51be52c8ca0 = $this->env->getExtension("native_profiler");
        $__internal_46de2356f20a740477df064f5bdc45c689fac686d517921b3bb6f51be52c8ca0->enter($__internal_46de2356f20a740477df064f5bdc45c689fac686d517921b3bb6f51be52c8ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46de2356f20a740477df064f5bdc45c689fac686d517921b3bb6f51be52c8ca0->leave($__internal_46de2356f20a740477df064f5bdc45c689fac686d517921b3bb6f51be52c8ca0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c751c399289dc3573e2f60beb5993557069967ac5ea9a77711645209871ddba = $this->env->getExtension("native_profiler");
        $__internal_0c751c399289dc3573e2f60beb5993557069967ac5ea9a77711645209871ddba->enter($__internal_0c751c399289dc3573e2f60beb5993557069967ac5ea9a77711645209871ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c751c399289dc3573e2f60beb5993557069967ac5ea9a77711645209871ddba->leave($__internal_0c751c399289dc3573e2f60beb5993557069967ac5ea9a77711645209871ddba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36e46ad9c062c2e88b7cfba2ad854f04219d913c186f93e091f18bdd23d4079 = $this->env->getExtension("native_profiler");
        $__internal_d36e46ad9c062c2e88b7cfba2ad854f04219d913c186f93e091f18bdd23d4079->enter($__internal_d36e46ad9c062c2e88b7cfba2ad854f04219d913c186f93e091f18bdd23d4079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d36e46ad9c062c2e88b7cfba2ad854f04219d913c186f93e091f18bdd23d4079->leave($__internal_d36e46ad9c062c2e88b7cfba2ad854f04219d913c186f93e091f18bdd23d4079_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f4fe8b4350485c5f3c82e5059159b3cdc298c2716a67d5ac1148a63c7d16b5 = $this->env->getExtension("native_profiler");
        $__internal_50f4fe8b4350485c5f3c82e5059159b3cdc298c2716a67d5ac1148a63c7d16b5->enter($__internal_50f4fe8b4350485c5f3c82e5059159b3cdc298c2716a67d5ac1148a63c7d16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_50f4fe8b4350485c5f3c82e5059159b3cdc298c2716a67d5ac1148a63c7d16b5->leave($__internal_50f4fe8b4350485c5f3c82e5059159b3cdc298c2716a67d5ac1148a63c7d16b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
