<?php

/* TestBlogBundle:Post:index.html.twig */
class __TwigTemplate_1dc24ceec07c171764f05e44ebab9375583533c1eab44cb5945a90af794cf8be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TestBlogBundle:Post:index.html.twig", 1);
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
        $__internal_df76ae0a6e1b1f1f79c86a3ef9535b1257db628a09d6fbc3aab212d14a8b483b = $this->env->getExtension("native_profiler");
        $__internal_df76ae0a6e1b1f1f79c86a3ef9535b1257db628a09d6fbc3aab212d14a8b483b->enter($__internal_df76ae0a6e1b1f1f79c86a3ef9535b1257db628a09d6fbc3aab212d14a8b483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df76ae0a6e1b1f1f79c86a3ef9535b1257db628a09d6fbc3aab212d14a8b483b->leave($__internal_df76ae0a6e1b1f1f79c86a3ef9535b1257db628a09d6fbc3aab212d14a8b483b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f59c9d91612ab9bd8fa355346921f0486cd5d34e092c067b3fd73d34ed16fd = $this->env->getExtension("native_profiler");
        $__internal_77f59c9d91612ab9bd8fa355346921f0486cd5d34e092c067b3fd73d34ed16fd->enter($__internal_77f59c9d91612ab9bd8fa355346921f0486cd5d34e092c067b3fd73d34ed16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h2>Post Manager</h2></div>

        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "                <tr>
                    <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "email", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "address", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">View Post</a>
                        | <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Edit Post</a>
                        | <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_remove", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Are your ' +
                         'sure?');
                        \">Delete  Post</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
    </div>

    <div class=\"pagination\">
        <form id= \"paginator\" name=\"paginator\" method=\"get\" action=\"#\" >
            <label for=\"limit\">Items to show on the page: </label>
            <select name=\"limit\" id=\"limit\" onchange=\"javascript:document.forms.paginator.submit()\">
                ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 38
            echo "                    ";
            if (($context["opt"] > 0)) {
                // line 39
                echo "                        <option value=\"";
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
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                <option value=\"0\" ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "limit", array()) == 0)) {
            echo "selected";
        }
        echo ">All</option>
            </select>
        </form>
        Go to page:<br />
        <ul  class=\"pagination\">
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "numpages", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "                ";
            if (($context["i"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentpage", array()))) {
                // line 49
                echo "                    <li><a class=\"active\" href=\"";
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
                // line 51
                echo "                    <li><a href=\"";
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
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </ul>
    </div>

";
        
        $__internal_77f59c9d91612ab9bd8fa355346921f0486cd5d34e092c067b3fd73d34ed16fd->leave($__internal_77f59c9d91612ab9bd8fa355346921f0486cd5d34e092c067b3fd73d34ed16fd_prof);

    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  170 => 53,  158 => 51,  146 => 49,  143 => 48,  139 => 47,  128 => 42,  122 => 41,  110 => 39,  107 => 38,  103 => 37,  93 => 29,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
