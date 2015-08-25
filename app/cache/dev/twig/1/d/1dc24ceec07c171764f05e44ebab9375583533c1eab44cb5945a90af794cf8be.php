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
        $__internal_93537f4bd14ba9e84c7c2a4f52ff1f5bd4ef8b9d2ed96ce8b8aea0443fcee78b = $this->env->getExtension("native_profiler");
        $__internal_93537f4bd14ba9e84c7c2a4f52ff1f5bd4ef8b9d2ed96ce8b8aea0443fcee78b->enter($__internal_93537f4bd14ba9e84c7c2a4f52ff1f5bd4ef8b9d2ed96ce8b8aea0443fcee78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBlogBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93537f4bd14ba9e84c7c2a4f52ff1f5bd4ef8b9d2ed96ce8b8aea0443fcee78b->leave($__internal_93537f4bd14ba9e84c7c2a4f52ff1f5bd4ef8b9d2ed96ce8b8aea0443fcee78b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d237a684ce81784da7f02bb3ea19da50d73e648f79f782ce88136562a3ed23be = $this->env->getExtension("native_profiler");
        $__internal_d237a684ce81784da7f02bb3ea19da50d73e648f79f782ce88136562a3ed23be->enter($__internal_d237a684ce81784da7f02bb3ea19da50d73e648f79f782ce88136562a3ed23be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    ";
        // line 33
        $this->loadTemplate("TestBlogBundle:Common:paginator.html.twig", "TestBlogBundle:Post:index.html.twig", 33)->display($context);
        // line 34
        echo "
";
        
        $__internal_d237a684ce81784da7f02bb3ea19da50d73e648f79f782ce88136562a3ed23be->leave($__internal_d237a684ce81784da7f02bb3ea19da50d73e648f79f782ce88136562a3ed23be_prof);

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
        return array (  101 => 34,  99 => 33,  93 => 29,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
