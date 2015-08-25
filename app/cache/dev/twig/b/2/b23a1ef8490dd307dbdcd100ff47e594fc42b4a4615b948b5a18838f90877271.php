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
        $__internal_e8396aae9068f56a28d29bb046f6d823fa3a8e38299482785a0111453d18c4cd = $this->env->getExtension("native_profiler");
        $__internal_e8396aae9068f56a28d29bb046f6d823fa3a8e38299482785a0111453d18c4cd->enter($__internal_e8396aae9068f56a28d29bb046f6d823fa3a8e38299482785a0111453d18c4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_e8396aae9068f56a28d29bb046f6d823fa3a8e38299482785a0111453d18c4cd->leave($__internal_e8396aae9068f56a28d29bb046f6d823fa3a8e38299482785a0111453d18c4cd_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_37238b5ba251a245a713371329e794ac61f919b0fb22b64bcea6487bbc843d32 = $this->env->getExtension("native_profiler");
        $__internal_37238b5ba251a245a713371329e794ac61f919b0fb22b64bcea6487bbc843d32->enter($__internal_37238b5ba251a245a713371329e794ac61f919b0fb22b64bcea6487bbc843d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_37238b5ba251a245a713371329e794ac61f919b0fb22b64bcea6487bbc843d32->leave($__internal_37238b5ba251a245a713371329e794ac61f919b0fb22b64bcea6487bbc843d32_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fbafa44dcc3bb9aaf363e82a07c72cf47aedbbe72c193386689e3858cc4df2db = $this->env->getExtension("native_profiler");
        $__internal_fbafa44dcc3bb9aaf363e82a07c72cf47aedbbe72c193386689e3858cc4df2db->enter($__internal_fbafa44dcc3bb9aaf363e82a07c72cf47aedbbe72c193386689e3858cc4df2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_fbafa44dcc3bb9aaf363e82a07c72cf47aedbbe72c193386689e3858cc4df2db->leave($__internal_fbafa44dcc3bb9aaf363e82a07c72cf47aedbbe72c193386689e3858cc4df2db_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_dea00b2b90ddae218b5d32428c9dc66e9c4112dc00a722d005dd0c887680b296 = $this->env->getExtension("native_profiler");
        $__internal_dea00b2b90ddae218b5d32428c9dc66e9c4112dc00a722d005dd0c887680b296->enter($__internal_dea00b2b90ddae218b5d32428c9dc66e9c4112dc00a722d005dd0c887680b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_dea00b2b90ddae218b5d32428c9dc66e9c4112dc00a722d005dd0c887680b296->leave($__internal_dea00b2b90ddae218b5d32428c9dc66e9c4112dc00a722d005dd0c887680b296_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a690e97a55d2e48c7ee5ad4de90d75afd36ea657448c8f7207ff54ee4fbff799 = $this->env->getExtension("native_profiler");
        $__internal_a690e97a55d2e48c7ee5ad4de90d75afd36ea657448c8f7207ff54ee4fbff799->enter($__internal_a690e97a55d2e48c7ee5ad4de90d75afd36ea657448c8f7207ff54ee4fbff799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a690e97a55d2e48c7ee5ad4de90d75afd36ea657448c8f7207ff54ee4fbff799->leave($__internal_a690e97a55d2e48c7ee5ad4de90d75afd36ea657448c8f7207ff54ee4fbff799_prof);

    }

    // line 39
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4fe5ef9592f91531a2c39db1881ca004f265947dd830cdbb19b1a628a0d2c7f5 = $this->env->getExtension("native_profiler");
        $__internal_4fe5ef9592f91531a2c39db1881ca004f265947dd830cdbb19b1a628a0d2c7f5->enter($__internal_4fe5ef9592f91531a2c39db1881ca004f265947dd830cdbb19b1a628a0d2c7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4fe5ef9592f91531a2c39db1881ca004f265947dd830cdbb19b1a628a0d2c7f5->leave($__internal_4fe5ef9592f91531a2c39db1881ca004f265947dd830cdbb19b1a628a0d2c7f5_prof);

    }

    // line 43
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_165c386d4ef0c54af4139cbe6cd4cf3e80afa646e8757732d1f5c21bc90b4a07 = $this->env->getExtension("native_profiler");
        $__internal_165c386d4ef0c54af4139cbe6cd4cf3e80afa646e8757732d1f5c21bc90b4a07->enter($__internal_165c386d4ef0c54af4139cbe6cd4cf3e80afa646e8757732d1f5c21bc90b4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 44
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_165c386d4ef0c54af4139cbe6cd4cf3e80afa646e8757732d1f5c21bc90b4a07->leave($__internal_165c386d4ef0c54af4139cbe6cd4cf3e80afa646e8757732d1f5c21bc90b4a07_prof);

    }

    // line 47
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_bb854d514cfffb797b502d9ce014700d8ea59901958b2ef16e5be7266a5b0ab1 = $this->env->getExtension("native_profiler");
        $__internal_bb854d514cfffb797b502d9ce014700d8ea59901958b2ef16e5be7266a5b0ab1->enter($__internal_bb854d514cfffb797b502d9ce014700d8ea59901958b2ef16e5be7266a5b0ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_bb854d514cfffb797b502d9ce014700d8ea59901958b2ef16e5be7266a5b0ab1->leave($__internal_bb854d514cfffb797b502d9ce014700d8ea59901958b2ef16e5be7266a5b0ab1_prof);

    }

    // line 59
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0d919ad8ab6f29216ed8b1ef4dde642a993e5af02ae9e91f3c0c330d4387c116 = $this->env->getExtension("native_profiler");
        $__internal_0d919ad8ab6f29216ed8b1ef4dde642a993e5af02ae9e91f3c0c330d4387c116->enter($__internal_0d919ad8ab6f29216ed8b1ef4dde642a993e5af02ae9e91f3c0c330d4387c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0d919ad8ab6f29216ed8b1ef4dde642a993e5af02ae9e91f3c0c330d4387c116->leave($__internal_0d919ad8ab6f29216ed8b1ef4dde642a993e5af02ae9e91f3c0c330d4387c116_prof);

    }

    // line 70
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b05f033567ce2963865fc376aedb2d5add3719db6216c956767f13b8e2d638bb = $this->env->getExtension("native_profiler");
        $__internal_b05f033567ce2963865fc376aedb2d5add3719db6216c956767f13b8e2d638bb->enter($__internal_b05f033567ce2963865fc376aedb2d5add3719db6216c956767f13b8e2d638bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 71
        echo "col-sm-10";
        
        $__internal_b05f033567ce2963865fc376aedb2d5add3719db6216c956767f13b8e2d638bb->leave($__internal_b05f033567ce2963865fc376aedb2d5add3719db6216c956767f13b8e2d638bb_prof);

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
