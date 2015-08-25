<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e00680837d2137e5cc333d2df1a8a35fd483f92cdfa31cf6aad9da15ca40e7e8 extends Twig_Template
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
        $__internal_163b67fbf1c3853aa99b2e2d61991fd91d0ead9534a2cbcf8f50392432dd5f8a = $this->env->getExtension("native_profiler");
        $__internal_163b67fbf1c3853aa99b2e2d61991fd91d0ead9534a2cbcf8f50392432dd5f8a->enter($__internal_163b67fbf1c3853aa99b2e2d61991fd91d0ead9534a2cbcf8f50392432dd5f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_163b67fbf1c3853aa99b2e2d61991fd91d0ead9534a2cbcf8f50392432dd5f8a->leave($__internal_163b67fbf1c3853aa99b2e2d61991fd91d0ead9534a2cbcf8f50392432dd5f8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
