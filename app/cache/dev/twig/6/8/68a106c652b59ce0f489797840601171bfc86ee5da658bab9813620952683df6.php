<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_68a106c652b59ce0f489797840601171bfc86ee5da658bab9813620952683df6 extends Twig_Template
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
        $__internal_ca74e48bdeb115cf5768a01af25039267cd8ea46badea20a7d3bdffaa3acf205 = $this->env->getExtension("native_profiler");
        $__internal_ca74e48bdeb115cf5768a01af25039267cd8ea46badea20a7d3bdffaa3acf205->enter($__internal_ca74e48bdeb115cf5768a01af25039267cd8ea46badea20a7d3bdffaa3acf205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_ca74e48bdeb115cf5768a01af25039267cd8ea46badea20a7d3bdffaa3acf205->leave($__internal_ca74e48bdeb115cf5768a01af25039267cd8ea46badea20a7d3bdffaa3acf205_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_45104fd58d5cec0fc14a003962d6d96f03c328c38fa6952945fb513ce2da651b = $this->env->getExtension("native_profiler");
        $__internal_45104fd58d5cec0fc14a003962d6d96f03c328c38fa6952945fb513ce2da651b->enter($__internal_45104fd58d5cec0fc14a003962d6d96f03c328c38fa6952945fb513ce2da651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_45104fd58d5cec0fc14a003962d6d96f03c328c38fa6952945fb513ce2da651b->leave($__internal_45104fd58d5cec0fc14a003962d6d96f03c328c38fa6952945fb513ce2da651b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f4ddfef82c82b24fbce25b013901f2897b77d23b3b8f900f97357ccc6a40f76f = $this->env->getExtension("native_profiler");
        $__internal_f4ddfef82c82b24fbce25b013901f2897b77d23b3b8f900f97357ccc6a40f76f->enter($__internal_f4ddfef82c82b24fbce25b013901f2897b77d23b3b8f900f97357ccc6a40f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f4ddfef82c82b24fbce25b013901f2897b77d23b3b8f900f97357ccc6a40f76f->leave($__internal_f4ddfef82c82b24fbce25b013901f2897b77d23b3b8f900f97357ccc6a40f76f_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9714be6b2282d9e5783f0941c595bab71ec0c1772e62106992154a6fa21f0409 = $this->env->getExtension("native_profiler");
        $__internal_9714be6b2282d9e5783f0941c595bab71ec0c1772e62106992154a6fa21f0409->enter($__internal_9714be6b2282d9e5783f0941c595bab71ec0c1772e62106992154a6fa21f0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_9714be6b2282d9e5783f0941c595bab71ec0c1772e62106992154a6fa21f0409->leave($__internal_9714be6b2282d9e5783f0941c595bab71ec0c1772e62106992154a6fa21f0409_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_43e1a7d1f6dfeef9009f49c89a151799fa4c52a415c2e02e05347bc11e508e4b = $this->env->getExtension("native_profiler");
        $__internal_43e1a7d1f6dfeef9009f49c89a151799fa4c52a415c2e02e05347bc11e508e4b->enter($__internal_43e1a7d1f6dfeef9009f49c89a151799fa4c52a415c2e02e05347bc11e508e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_43e1a7d1f6dfeef9009f49c89a151799fa4c52a415c2e02e05347bc11e508e4b->leave($__internal_43e1a7d1f6dfeef9009f49c89a151799fa4c52a415c2e02e05347bc11e508e4b_prof);

    }

    // line 39
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0c7e4dc538b34795c986c7bdd0825836294fa8dfee905316d81e94958bf0b2d2 = $this->env->getExtension("native_profiler");
        $__internal_0c7e4dc538b34795c986c7bdd0825836294fa8dfee905316d81e94958bf0b2d2->enter($__internal_0c7e4dc538b34795c986c7bdd0825836294fa8dfee905316d81e94958bf0b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0c7e4dc538b34795c986c7bdd0825836294fa8dfee905316d81e94958bf0b2d2->leave($__internal_0c7e4dc538b34795c986c7bdd0825836294fa8dfee905316d81e94958bf0b2d2_prof);

    }

    // line 43
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3f613e3e4d91b247128413d249e73fb51743aff7cc340d36ed34f40a83e85360 = $this->env->getExtension("native_profiler");
        $__internal_3f613e3e4d91b247128413d249e73fb51743aff7cc340d36ed34f40a83e85360->enter($__internal_3f613e3e4d91b247128413d249e73fb51743aff7cc340d36ed34f40a83e85360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 44
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3f613e3e4d91b247128413d249e73fb51743aff7cc340d36ed34f40a83e85360->leave($__internal_3f613e3e4d91b247128413d249e73fb51743aff7cc340d36ed34f40a83e85360_prof);

    }

    // line 47
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ffe3d6ee7dab37ec99872cd4d701e35edcaaec7dd2af07f878cfb554f5c10100 = $this->env->getExtension("native_profiler");
        $__internal_ffe3d6ee7dab37ec99872cd4d701e35edcaaec7dd2af07f878cfb554f5c10100->enter($__internal_ffe3d6ee7dab37ec99872cd4d701e35edcaaec7dd2af07f878cfb554f5c10100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_ffe3d6ee7dab37ec99872cd4d701e35edcaaec7dd2af07f878cfb554f5c10100->leave($__internal_ffe3d6ee7dab37ec99872cd4d701e35edcaaec7dd2af07f878cfb554f5c10100_prof);

    }

    // line 59
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5ac2ee5fe5a43d482c06bab79ec363d60229998490e1baf25bcba84dccbedb12 = $this->env->getExtension("native_profiler");
        $__internal_5ac2ee5fe5a43d482c06bab79ec363d60229998490e1baf25bcba84dccbedb12->enter($__internal_5ac2ee5fe5a43d482c06bab79ec363d60229998490e1baf25bcba84dccbedb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_5ac2ee5fe5a43d482c06bab79ec363d60229998490e1baf25bcba84dccbedb12->leave($__internal_5ac2ee5fe5a43d482c06bab79ec363d60229998490e1baf25bcba84dccbedb12_prof);

    }

    // line 70
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7734fea4bc7609b2c8605daebbd123eaf50c87fbd62a970fef1f57d8c83c1317 = $this->env->getExtension("native_profiler");
        $__internal_7734fea4bc7609b2c8605daebbd123eaf50c87fbd62a970fef1f57d8c83c1317->enter($__internal_7734fea4bc7609b2c8605daebbd123eaf50c87fbd62a970fef1f57d8c83c1317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 71
        echo "col-sm-10";
        
        $__internal_7734fea4bc7609b2c8605daebbd123eaf50c87fbd62a970fef1f57d8c83c1317->leave($__internal_7734fea4bc7609b2c8605daebbd123eaf50c87fbd62a970fef1f57d8c83c1317_prof);

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
