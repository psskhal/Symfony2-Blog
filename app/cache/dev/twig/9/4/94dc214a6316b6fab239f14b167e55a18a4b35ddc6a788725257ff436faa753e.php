<?php

/* TestBlogBundle:Common:paginator.html.twig */
class __TwigTemplate_94dc214a6316b6fab239f14b167e55a18a4b35ddc6a788725257ff436faa753e extends Twig_Template
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
        $__internal_7d30a8c50f277ff467132c1f936e5645cb6204ca7e75031ff0bea749dc28830e = $this->env->getExtension("native_profiler");
        $__internal_7d30a8c50f277ff467132c1f936e5645cb6204ca7e75031ff0bea749dc28830e->enter($__internal_7d30a8c50f277ff467132c1f936e5645cb6204ca7e75031ff0bea749dc28830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Common:paginator.html.twig"));

        // line 1
        echo "<div class=\"pagination\">
    <form id= \"paginator\" name=\"paginator\" method=\"get\" action=\"#\" >
        <label for=\"limit\">Items to show on the page: </label>
        <select name=\"limit\" id=\"limit\" onchange=\"javascript:document.forms.paginator.submit()\">
            ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 6
            echo "                ";
            if (($context["opt"] > 0)) {
                // line 7
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "limit", array()) == $context["opt"])) {
                    echo "selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                echo "</option>
                ";
            }
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <option value=\"0\" ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "limit", array()) == 0)) {
            echo "selected";
        }
        echo ">All</option>
        </select>
    </form>
    Go to page:<br />
    <ul  class=\"pagination\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "numpages", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            ";
            if (($context["i"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentpage", array()))) {
                // line 17
                echo "                <li><a class=\"active\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentUrl", array()), "html", null, true);
                echo "?limit=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "limit", array()), "html", null, true);
                echo "&amp;page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 19
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentUrl", array()), "html", null, true);
                echo "?limit=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "limit", array()), "html", null, true);
                echo "&amp;page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
</div>";
        
        $__internal_7d30a8c50f277ff467132c1f936e5645cb6204ca7e75031ff0bea749dc28830e->leave($__internal_7d30a8c50f277ff467132c1f936e5645cb6204ca7e75031ff0bea749dc28830e_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Common:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  95 => 21,  83 => 19,  71 => 17,  68 => 16,  64 => 15,  53 => 10,  47 => 9,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
