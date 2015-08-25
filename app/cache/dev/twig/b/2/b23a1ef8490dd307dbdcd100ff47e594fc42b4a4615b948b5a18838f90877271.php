<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b23a1ef8490dd307dbdcd100ff47e594fc42b4a4615b948b5a18838f90877271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8b48045f0ae6a1bcbc58ae651d72aea15329a16704f51ba3ab1861e4ea83a3 = $this->env->getExtension("native_profiler");
        $__internal_bf8b48045f0ae6a1bcbc58ae651d72aea15329a16704f51ba3ab1861e4ea83a3->enter($__internal_bf8b48045f0ae6a1bcbc58ae651d72aea15329a16704f51ba3ab1861e4ea83a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('radio_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('submit_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_bf8b48045f0ae6a1bcbc58ae651d72aea15329a16704f51ba3ab1861e4ea83a3->leave($__internal_bf8b48045f0ae6a1bcbc58ae651d72aea15329a16704f51ba3ab1861e4ea83a3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e25bd1ddcbd509aa4fd8d9ea3006bf678264a54827f8c7fcbb7728b911212ac6 = $this->env->getExtension("native_profiler");
        $__internal_e25bd1ddcbd509aa4fd8d9ea3006bf678264a54827f8c7fcbb7728b911212ac6->enter($__internal_e25bd1ddcbd509aa4fd8d9ea3006bf678264a54827f8c7fcbb7728b911212ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e25bd1ddcbd509aa4fd8d9ea3006bf678264a54827f8c7fcbb7728b911212ac6->leave($__internal_e25bd1ddcbd509aa4fd8d9ea3006bf678264a54827f8c7fcbb7728b911212ac6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_318bc9fe4668cb0cdcaa8384b80a78242f8e53255779962ae88d4667604d2c21 = $this->env->getExtension("native_profiler");
        $__internal_318bc9fe4668cb0cdcaa8384b80a78242f8e53255779962ae88d4667604d2c21->enter($__internal_318bc9fe4668cb0cdcaa8384b80a78242f8e53255779962ae88d4667604d2c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_318bc9fe4668cb0cdcaa8384b80a78242f8e53255779962ae88d4667604d2c21->leave($__internal_318bc9fe4668cb0cdcaa8384b80a78242f8e53255779962ae88d4667604d2c21_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7596bef261a0be2ffb2eabd2931da70aefd14040b360c063070d51edcc46201a = $this->env->getExtension("native_profiler");
        $__internal_7596bef261a0be2ffb2eabd2931da70aefd14040b360c063070d51edcc46201a->enter($__internal_7596bef261a0be2ffb2eabd2931da70aefd14040b360c063070d51edcc46201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7596bef261a0be2ffb2eabd2931da70aefd14040b360c063070d51edcc46201a->leave($__internal_7596bef261a0be2ffb2eabd2931da70aefd14040b360c063070d51edcc46201a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_33ec37c1bca78c522cda194cd30827b5d12954300c89925b4d1787655f6717f3 = $this->env->getExtension("native_profiler");
        $__internal_33ec37c1bca78c522cda194cd30827b5d12954300c89925b4d1787655f6717f3->enter($__internal_33ec37c1bca78c522cda194cd30827b5d12954300c89925b4d1787655f6717f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        ob_start();
        // line 29
        echo "    <div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_33ec37c1bca78c522cda194cd30827b5d12954300c89925b4d1787655f6717f3->leave($__internal_33ec37c1bca78c522cda194cd30827b5d12954300c89925b4d1787655f6717f3_prof);

    }

    // line 39
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9c574a4acfed6c8971b3c72c553717d6b136be5b343cd7132c3c3bd5fe0f6448 = $this->env->getExtension("native_profiler");
        $__internal_9c574a4acfed6c8971b3c72c553717d6b136be5b343cd7132c3c3bd5fe0f6448->enter($__internal_9c574a4acfed6c8971b3c72c553717d6b136be5b343cd7132c3c3bd5fe0f6448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9c574a4acfed6c8971b3c72c553717d6b136be5b343cd7132c3c3bd5fe0f6448->leave($__internal_9c574a4acfed6c8971b3c72c553717d6b136be5b343cd7132c3c3bd5fe0f6448_prof);

    }

    // line 43
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2270dab64f0cfe6b51f37d9183b4c72b8a61619f24d6f1bcb84f69f6cac86b67 = $this->env->getExtension("native_profiler");
        $__internal_2270dab64f0cfe6b51f37d9183b4c72b8a61619f24d6f1bcb84f69f6cac86b67->enter($__internal_2270dab64f0cfe6b51f37d9183b4c72b8a61619f24d6f1bcb84f69f6cac86b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 44
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_2270dab64f0cfe6b51f37d9183b4c72b8a61619f24d6f1bcb84f69f6cac86b67->leave($__internal_2270dab64f0cfe6b51f37d9183b4c72b8a61619f24d6f1bcb84f69f6cac86b67_prof);

    }

    // line 47
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_6a215526bad2e5840b264536bd03204c7e95a0333411b66b4b0c8b3d78a4f8e8 = $this->env->getExtension("native_profiler");
        $__internal_6a215526bad2e5840b264536bd03204c7e95a0333411b66b4b0c8b3d78a4f8e8->enter($__internal_6a215526bad2e5840b264536bd03204c7e95a0333411b66b4b0c8b3d78a4f8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 48
        ob_start();
        // line 49
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 50
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 51
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6a215526bad2e5840b264536bd03204c7e95a0333411b66b4b0c8b3d78a4f8e8->leave($__internal_6a215526bad2e5840b264536bd03204c7e95a0333411b66b4b0c8b3d78a4f8e8_prof);

    }

    // line 59
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_03f734e1fa05020d7f758c36aec1b985df1a1b70a3e035f5de937fe7a0d55294 = $this->env->getExtension("native_profiler");
        $__internal_03f734e1fa05020d7f758c36aec1b985df1a1b70a3e035f5de937fe7a0d55294->enter($__internal_03f734e1fa05020d7f758c36aec1b985df1a1b70a3e035f5de937fe7a0d55294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 62
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 63
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03f734e1fa05020d7f758c36aec1b985df1a1b70a3e035f5de937fe7a0d55294->leave($__internal_03f734e1fa05020d7f758c36aec1b985df1a1b70a3e035f5de937fe7a0d55294_prof);

    }

    // line 70
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0774fdedcd777b3ad39c50986c32d21ef16fc4aaa049a5b9639bc3405d6f6ca3 = $this->env->getExtension("native_profiler");
        $__internal_0774fdedcd777b3ad39c50986c32d21ef16fc4aaa049a5b9639bc3405d6f6ca3->enter($__internal_0774fdedcd777b3ad39c50986c32d21ef16fc4aaa049a5b9639bc3405d6f6ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 71
        echo "col-sm-10";
        
        $__internal_0774fdedcd777b3ad39c50986c32d21ef16fc4aaa049a5b9639bc3405d6f6ca3->leave($__internal_0774fdedcd777b3ad39c50986c32d21ef16fc4aaa049a5b9639bc3405d6f6ca3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  297 => 71,  291 => 70,  279 => 64,  275 => 63,  271 => 62,  268 => 61,  266 => 60,  260 => 59,  248 => 53,  244 => 52,  240 => 51,  236 => 50,  229 => 49,  227 => 48,  221 => 47,  214 => 44,  208 => 43,  201 => 40,  195 => 39,  183 => 33,  179 => 32,  175 => 31,  171 => 30,  164 => 29,  162 => 28,  156 => 27,  149 => 22,  143 => 21,  134 => 16,  131 => 15,  125 => 13,  122 => 12,  120 => 11,  114 => 10,  107 => 5,  105 => 4,  99 => 3,  92 => 70,  89 => 69,  87 => 59,  84 => 58,  82 => 47,  79 => 46,  77 => 43,  74 => 42,  72 => 39,  69 => 38,  67 => 27,  64 => 26,  61 => 24,  59 => 21,  56 => 20,  54 => 10,  51 => 9,  48 => 7,  46 => 3,  43 => 2,  14 => 1,);
    }
}
