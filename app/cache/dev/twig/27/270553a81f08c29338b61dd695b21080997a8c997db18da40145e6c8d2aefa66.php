<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_9cdf37823f8d8781cb7447f7d0d7f9bbd0334b0da2290d9f734e1794f6cdec5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5666093b8515a491e5f47ef3e3c294133a9c6c693d655e2da346e0ad7e751506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5666093b8515a491e5f47ef3e3c294133a9c6c693d655e2da346e0ad7e751506->enter($__internal_5666093b8515a491e5f47ef3e3c294133a9c6c693d655e2da346e0ad7e751506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 116
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 122
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 127
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 140
        $this->displayBlock('date_widget', $context, $blocks);
        // line 154
        $this->displayBlock('time_widget', $context, $blocks);
        // line 165
        $this->displayBlock('number_widget', $context, $blocks);
        // line 171
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 176
        $this->displayBlock('money_widget', $context, $blocks);
        // line 180
        $this->displayBlock('url_widget', $context, $blocks);
        // line 185
        $this->displayBlock('search_widget', $context, $blocks);
        // line 190
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 195
        $this->displayBlock('password_widget', $context, $blocks);
        // line 200
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 205
        $this->displayBlock('email_widget', $context, $blocks);
        // line 210
        $this->displayBlock('button_widget', $context, $blocks);
        // line 224
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 229
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 236
        $this->displayBlock('form_label', $context, $blocks);
        // line 263
        $this->displayBlock('button_label', $context, $blocks);
        // line 267
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 275
        $this->displayBlock('form_row', $context, $blocks);
        // line 283
        $this->displayBlock('button_row', $context, $blocks);
        // line 289
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 295
        $this->displayBlock('form', $context, $blocks);
        // line 301
        $this->displayBlock('form_start', $context, $blocks);
        // line 315
        $this->displayBlock('form_end', $context, $blocks);
        // line 322
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 326
        $this->displayBlock('form_errors', $context, $blocks);
        // line 336
        $this->displayBlock('form_rest', $context, $blocks);
        // line 343
        echo "
";
        // line 346
        $this->displayBlock('form_rows', $context, $blocks);
        // line 352
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 369
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 383
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 397
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_5666093b8515a491e5f47ef3e3c294133a9c6c693d655e2da346e0ad7e751506->leave($__internal_5666093b8515a491e5f47ef3e3c294133a9c6c693d655e2da346e0ad7e751506_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_04ff51816a120b9b66ccbb38aade920eb28e4ee96b77e339780e88a80f70dd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ff51816a120b9b66ccbb38aade920eb28e4ee96b77e339780e88a80f70dd45->enter($__internal_04ff51816a120b9b66ccbb38aade920eb28e4ee96b77e339780e88a80f70dd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_04ff51816a120b9b66ccbb38aade920eb28e4ee96b77e339780e88a80f70dd45->leave($__internal_04ff51816a120b9b66ccbb38aade920eb28e4ee96b77e339780e88a80f70dd45_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b006765f3dabcf5dd0b3e707bb6c3595e19ca31d6954935c01a668dd29db70e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b006765f3dabcf5dd0b3e707bb6c3595e19ca31d6954935c01a668dd29db70e5->enter($__internal_b006765f3dabcf5dd0b3e707bb6c3595e19ca31d6954935c01a668dd29db70e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 37)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        // line 38
        echo "  <input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_b006765f3dabcf5dd0b3e707bb6c3595e19ca31d6954935c01a668dd29db70e5->leave($__internal_b006765f3dabcf5dd0b3e707bb6c3595e19ca31d6954935c01a668dd29db70e5_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c892fa2c2be7aaa4bda6853f78339c39369791d9bd134320e29a6167671f350d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c892fa2c2be7aaa4bda6853f78339c39369791d9bd134320e29a6167671f350d->enter($__internal_c892fa2c2be7aaa4bda6853f78339c39369791d9bd134320e29a6167671f350d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_c892fa2c2be7aaa4bda6853f78339c39369791d9bd134320e29a6167671f350d->leave($__internal_c892fa2c2be7aaa4bda6853f78339c39369791d9bd134320e29a6167671f350d_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_2771c43e962ff7cea76d858d64f18db80b1e9c25874f0268eefb08881595867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2771c43e962ff7cea76d858d64f18db80b1e9c25874f0268eefb08881595867a->enter($__internal_2771c43e962ff7cea76d858d64f18db80b1e9c25874f0268eefb08881595867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_2771c43e962ff7cea76d858d64f18db80b1e9c25874f0268eefb08881595867a->leave($__internal_2771c43e962ff7cea76d858d64f18db80b1e9c25874f0268eefb08881595867a_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dcd98fd5c1a2a4867ddd63b73e3985fc1dddbb4b252e3477157e3fb5daf08ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd98fd5c1a2a4867ddd63b73e3985fc1dddbb4b252e3477157e3fb5daf08ef3->enter($__internal_dcd98fd5c1a2a4867ddd63b73e3985fc1dddbb4b252e3477157e3fb5daf08ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 59)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        // line 60
        echo "  <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_dcd98fd5c1a2a4867ddd63b73e3985fc1dddbb4b252e3477157e3fb5daf08ef3->leave($__internal_dcd98fd5c1a2a4867ddd63b73e3985fc1dddbb4b252e3477157e3fb5daf08ef3_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_8f1164c260391a3e35e425828d543547e79172402c4055677cd4cca198287cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1164c260391a3e35e425828d543547e79172402c4055677cd4cca198287cc0->enter($__internal_8f1164c260391a3e35e425828d543547e79172402c4055677cd4cca198287cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_8f1164c260391a3e35e425828d543547e79172402c4055677cd4cca198287cc0->leave($__internal_8f1164c260391a3e35e425828d543547e79172402c4055677cd4cca198287cc0_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_793adbeaa09923df45007dcd8a947824b1f6c1be3bc65b3a99b513db3a48b5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793adbeaa09923df45007dcd8a947824b1f6c1be3bc65b3a99b513db3a48b5ac->enter($__internal_793adbeaa09923df45007dcd8a947824b1f6c1be3bc65b3a99b513db3a48b5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_793adbeaa09923df45007dcd8a947824b1f6c1be3bc65b3a99b513db3a48b5ac->leave($__internal_793adbeaa09923df45007dcd8a947824b1f6c1be3bc65b3a99b513db3a48b5ac_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_679c30bae7def094174f5e62dbbd3b0164549e5bb95a40623cef5072f30c1081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679c30bae7def094174f5e62dbbd3b0164549e5bb95a40623cef5072f30c1081->enter($__internal_679c30bae7def094174f5e62dbbd3b0164549e5bb95a40623cef5072f30c1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " data-toggle=\"select2\">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_679c30bae7def094174f5e62dbbd3b0164549e5bb95a40623cef5072f30c1081->leave($__internal_679c30bae7def094174f5e62dbbd3b0164549e5bb95a40623cef5072f30c1081_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_f07dc9d033342280fb2de0a82297998ec1ba0d0c5ca7cd2bd17064bcce98dba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07dc9d033342280fb2de0a82297998ec1ba0d0c5ca7cd2bd17064bcce98dba6->enter($__internal_f07dc9d033342280fb2de0a82297998ec1ba0d0c5ca7cd2bd17064bcce98dba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
        ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 110
                echo "      <option
        value=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f07dc9d033342280fb2de0a82297998ec1ba0d0c5ca7cd2bd17064bcce98dba6->leave($__internal_f07dc9d033342280fb2de0a82297998ec1ba0d0c5ca7cd2bd17064bcce98dba6_prof);

    }

    // line 116
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a27f09343c9f589a9a453457e1d42a350984ec8184338c9fc3426712f398652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27f09343c9f589a9a453457e1d42a350984ec8184338c9fc3426712f398652c->enter($__internal_a27f09343c9f589a9a453457e1d42a350984ec8184338c9fc3426712f398652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 117
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 118
        echo "<input type=\"checkbox\"
         ";
        // line 119
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_a27f09343c9f589a9a453457e1d42a350984ec8184338c9fc3426712f398652c->leave($__internal_a27f09343c9f589a9a453457e1d42a350984ec8184338c9fc3426712f398652c_prof);

    }

    // line 122
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7414a0fd15070276097a9717067d5a47d1e2527491fb50bc018c6695fbc619be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7414a0fd15070276097a9717067d5a47d1e2527491fb50bc018c6695fbc619be->enter($__internal_7414a0fd15070276097a9717067d5a47d1e2527491fb50bc018c6695fbc619be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 123
        echo "<input
    type=\"radio\" ";
        // line 124
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_7414a0fd15070276097a9717067d5a47d1e2527491fb50bc018c6695fbc619be->leave($__internal_7414a0fd15070276097a9717067d5a47d1e2527491fb50bc018c6695fbc619be_prof);

    }

    // line 127
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3b6bb38b0bc8bc35d51821effb421264a81909e8cc6a970b1dd679fd8249979b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6bb38b0bc8bc35d51821effb421264a81909e8cc6a970b1dd679fd8249979b->enter($__internal_3b6bb38b0bc8bc35d51821effb421264a81909e8cc6a970b1dd679fd8249979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 128
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 129
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 136
            echo "</div>";
        }
        
        $__internal_3b6bb38b0bc8bc35d51821effb421264a81909e8cc6a970b1dd679fd8249979b->leave($__internal_3b6bb38b0bc8bc35d51821effb421264a81909e8cc6a970b1dd679fd8249979b_prof);

    }

    // line 140
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e69adc65c1ea474d32c20981c898a103b1383e0edb8ca30778555d0921ca0fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69adc65c1ea474d32c20981c898a103b1383e0edb8ca30778555d0921ca0fab->enter($__internal_e69adc65c1ea474d32c20981c898a103b1383e0edb8ca30778555d0921ca0fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 141
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 142
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 144
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 145
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 147
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 148
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 150
            echo "</div>";
        }
        
        $__internal_e69adc65c1ea474d32c20981c898a103b1383e0edb8ca30778555d0921ca0fab->leave($__internal_e69adc65c1ea474d32c20981c898a103b1383e0edb8ca30778555d0921ca0fab_prof);

    }

    // line 154
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3541ad544a84957c8acbb3653c0995752601e6b10e35023dd2027423035c9b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3541ad544a84957c8acbb3653c0995752601e6b10e35023dd2027423035c9b0d->enter($__internal_3541ad544a84957c8acbb3653c0995752601e6b10e35023dd2027423035c9b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 155
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 156
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 158
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 159
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 161
            echo "    </div>";
        }
        
        $__internal_3541ad544a84957c8acbb3653c0995752601e6b10e35023dd2027423035c9b0d->leave($__internal_3541ad544a84957c8acbb3653c0995752601e6b10e35023dd2027423035c9b0d_prof);

    }

    // line 165
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_4cf9bc8ab88c510cc97d5626f15329c37f9d35f0608102191e0131df83d1ff16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf9bc8ab88c510cc97d5626f15329c37f9d35f0608102191e0131df83d1ff16->enter($__internal_4cf9bc8ab88c510cc97d5626f15329c37f9d35f0608102191e0131df83d1ff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4cf9bc8ab88c510cc97d5626f15329c37f9d35f0608102191e0131df83d1ff16->leave($__internal_4cf9bc8ab88c510cc97d5626f15329c37f9d35f0608102191e0131df83d1ff16_prof);

    }

    // line 171
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_e03a3466ab9ed178bb30f660715644cb0793c01d90d51763c8b99c461cefa74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03a3466ab9ed178bb30f660715644cb0793c01d90d51763c8b99c461cefa74b->enter($__internal_e03a3466ab9ed178bb30f660715644cb0793c01d90d51763c8b99c461cefa74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e03a3466ab9ed178bb30f660715644cb0793c01d90d51763c8b99c461cefa74b->leave($__internal_e03a3466ab9ed178bb30f660715644cb0793c01d90d51763c8b99c461cefa74b_prof);

    }

    // line 176
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fa51e55f636699c5f97503a29d2b60a6f3014e29d4374778ef504bf2ac24c9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa51e55f636699c5f97503a29d2b60a6f3014e29d4374778ef504bf2ac24c9bf->enter($__internal_fa51e55f636699c5f97503a29d2b60a6f3014e29d4374778ef504bf2ac24c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 177
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_fa51e55f636699c5f97503a29d2b60a6f3014e29d4374778ef504bf2ac24c9bf->leave($__internal_fa51e55f636699c5f97503a29d2b60a6f3014e29d4374778ef504bf2ac24c9bf_prof);

    }

    // line 180
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_7ebe422e458d79ab7d3b202b79d7ca635f661d2e526a06efb008ddbad3f0955f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebe422e458d79ab7d3b202b79d7ca635f661d2e526a06efb008ddbad3f0955f->enter($__internal_7ebe422e458d79ab7d3b202b79d7ca635f661d2e526a06efb008ddbad3f0955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7ebe422e458d79ab7d3b202b79d7ca635f661d2e526a06efb008ddbad3f0955f->leave($__internal_7ebe422e458d79ab7d3b202b79d7ca635f661d2e526a06efb008ddbad3f0955f_prof);

    }

    // line 185
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_44a6995908c065c94bedf7c246047298d758e9ab8ba306d226cd00635644eff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a6995908c065c94bedf7c246047298d758e9ab8ba306d226cd00635644eff1->enter($__internal_44a6995908c065c94bedf7c246047298d758e9ab8ba306d226cd00635644eff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 186
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 187
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_44a6995908c065c94bedf7c246047298d758e9ab8ba306d226cd00635644eff1->leave($__internal_44a6995908c065c94bedf7c246047298d758e9ab8ba306d226cd00635644eff1_prof);

    }

    // line 190
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a31e83e177a7e164e3754bf344009472fece139c790d243ccde4afa48db77291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31e83e177a7e164e3754bf344009472fece139c790d243ccde4afa48db77291->enter($__internal_a31e83e177a7e164e3754bf344009472fece139c790d243ccde4afa48db77291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 191
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 192
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_a31e83e177a7e164e3754bf344009472fece139c790d243ccde4afa48db77291->leave($__internal_a31e83e177a7e164e3754bf344009472fece139c790d243ccde4afa48db77291_prof);

    }

    // line 195
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_fbde60073b997df62238e25d5662bdb53236db75db0d232c9278de410a4b7235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbde60073b997df62238e25d5662bdb53236db75db0d232c9278de410a4b7235->enter($__internal_fbde60073b997df62238e25d5662bdb53236db75db0d232c9278de410a4b7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 196
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 197
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fbde60073b997df62238e25d5662bdb53236db75db0d232c9278de410a4b7235->leave($__internal_fbde60073b997df62238e25d5662bdb53236db75db0d232c9278de410a4b7235_prof);

    }

    // line 200
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_8edc2855fcb192c8ec0cefe9bfe23d2a9b43a711ee5a8a1ce6502245511ca32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edc2855fcb192c8ec0cefe9bfe23d2a9b43a711ee5a8a1ce6502245511ca32a->enter($__internal_8edc2855fcb192c8ec0cefe9bfe23d2a9b43a711ee5a8a1ce6502245511ca32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 201
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 202
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8edc2855fcb192c8ec0cefe9bfe23d2a9b43a711ee5a8a1ce6502245511ca32a->leave($__internal_8edc2855fcb192c8ec0cefe9bfe23d2a9b43a711ee5a8a1ce6502245511ca32a_prof);

    }

    // line 205
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a1f2837b34408358440728fe81ef0cddeb7b1e699c5dfa0a07a8da4305162f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f2837b34408358440728fe81ef0cddeb7b1e699c5dfa0a07a8da4305162f88->enter($__internal_a1f2837b34408358440728fe81ef0cddeb7b1e699c5dfa0a07a8da4305162f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 206
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 207
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a1f2837b34408358440728fe81ef0cddeb7b1e699c5dfa0a07a8da4305162f88->leave($__internal_a1f2837b34408358440728fe81ef0cddeb7b1e699c5dfa0a07a8da4305162f88_prof);

    }

    // line 210
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e0850f9b1986993a911e5703a0f8bffba8d0fb8f8a4d008a0fcb7378ecaad9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0850f9b1986993a911e5703a0f8bffba8d0fb8f8a4d008a0fcb7378ecaad9bb->enter($__internal_e0850f9b1986993a911e5703a0f8bffba8d0fb8f8a4d008a0fcb7378ecaad9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 211
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 212
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 213
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 214
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 215
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 218
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 221
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_e0850f9b1986993a911e5703a0f8bffba8d0fb8f8a4d008a0fcb7378ecaad9bb->leave($__internal_e0850f9b1986993a911e5703a0f8bffba8d0fb8f8a4d008a0fcb7378ecaad9bb_prof);

    }

    // line 224
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_96d41e4df46ef15bd6983e77569876b15636c0ae6af6dd353c11057d63767b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d41e4df46ef15bd6983e77569876b15636c0ae6af6dd353c11057d63767b80->enter($__internal_96d41e4df46ef15bd6983e77569876b15636c0ae6af6dd353c11057d63767b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 225
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 226
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_96d41e4df46ef15bd6983e77569876b15636c0ae6af6dd353c11057d63767b80->leave($__internal_96d41e4df46ef15bd6983e77569876b15636c0ae6af6dd353c11057d63767b80_prof);

    }

    // line 229
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_dc2f97ab9c75d3e7f8a36d71c29b55d50c4ad0c59683d43b6424d1ef5488113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2f97ab9c75d3e7f8a36d71c29b55d50c4ad0c59683d43b6424d1ef5488113e->enter($__internal_dc2f97ab9c75d3e7f8a36d71c29b55d50c4ad0c59683d43b6424d1ef5488113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 230
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 231
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_dc2f97ab9c75d3e7f8a36d71c29b55d50c4ad0c59683d43b6424d1ef5488113e->leave($__internal_dc2f97ab9c75d3e7f8a36d71c29b55d50c4ad0c59683d43b6424d1ef5488113e_prof);

    }

    // line 236
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d76c7c8d4e12e1a1671daa6560d720e7ad606cdb5460a64dbb40709751734f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76c7c8d4e12e1a1671daa6560d720e7ad606cdb5460a64dbb40709751734f12->enter($__internal_d76c7c8d4e12e1a1671daa6560d720e7ad606cdb5460a64dbb40709751734f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 237
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 238
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 239
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 241
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 242
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 244
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 245
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 246
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 247
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 248
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 251
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 254
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "</label>
    ";
            // line 255
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 256
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 257
                echo "      <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
         title=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
    ";
            }
        }
        
        $__internal_d76c7c8d4e12e1a1671daa6560d720e7ad606cdb5460a64dbb40709751734f12->leave($__internal_d76c7c8d4e12e1a1671daa6560d720e7ad606cdb5460a64dbb40709751734f12_prof);

    }

    // line 263
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_66fac8c6e4f6ab13d8bf3650420f0506e4be6fc8de769f3f13a1027823a17afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fac8c6e4f6ab13d8bf3650420f0506e4be6fc8de769f3f13a1027823a17afa->enter($__internal_66fac8c6e4f6ab13d8bf3650420f0506e4be6fc8de769f3f13a1027823a17afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_66fac8c6e4f6ab13d8bf3650420f0506e4be6fc8de769f3f13a1027823a17afa->leave($__internal_66fac8c6e4f6ab13d8bf3650420f0506e4be6fc8de769f3f13a1027823a17afa_prof);

    }

    // line 267
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_302930b51a32e4b71837ab99198db216c5020df1d4ca25016a65f0af4515d0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302930b51a32e4b71837ab99198db216c5020df1d4ca25016a65f0af4515d0e5->enter($__internal_302930b51a32e4b71837ab99198db216c5020df1d4ca25016a65f0af4515d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 272
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_302930b51a32e4b71837ab99198db216c5020df1d4ca25016a65f0af4515d0e5->leave($__internal_302930b51a32e4b71837ab99198db216c5020df1d4ca25016a65f0af4515d0e5_prof);

    }

    // line 275
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8956815cd4a99f9e23187364095072c358fa06013f97e59f6fc31280961ebdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8956815cd4a99f9e23187364095072c358fa06013f97e59f6fc31280961ebdf8->enter($__internal_8956815cd4a99f9e23187364095072c358fa06013f97e59f6fc31280961ebdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 276
        echo "<div>";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 280
        echo "</div>";
        
        $__internal_8956815cd4a99f9e23187364095072c358fa06013f97e59f6fc31280961ebdf8->leave($__internal_8956815cd4a99f9e23187364095072c358fa06013f97e59f6fc31280961ebdf8_prof);

    }

    // line 283
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b3378d344409e01623e6e95c8ff51b70e0157f4e9faf47e390cc1902cd5f8232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3378d344409e01623e6e95c8ff51b70e0157f4e9faf47e390cc1902cd5f8232->enter($__internal_b3378d344409e01623e6e95c8ff51b70e0157f4e9faf47e390cc1902cd5f8232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 284
        echo "<div>";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 286
        echo "</div>";
        
        $__internal_b3378d344409e01623e6e95c8ff51b70e0157f4e9faf47e390cc1902cd5f8232->leave($__internal_b3378d344409e01623e6e95c8ff51b70e0157f4e9faf47e390cc1902cd5f8232_prof);

    }

    // line 289
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ab26dce496e3556b1c591b8f730ed2e5e7efc286139bdbab954fc2142e31fa46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab26dce496e3556b1c591b8f730ed2e5e7efc286139bdbab954fc2142e31fa46->enter($__internal_ab26dce496e3556b1c591b8f730ed2e5e7efc286139bdbab954fc2142e31fa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_ab26dce496e3556b1c591b8f730ed2e5e7efc286139bdbab954fc2142e31fa46->leave($__internal_ab26dce496e3556b1c591b8f730ed2e5e7efc286139bdbab954fc2142e31fa46_prof);

    }

    // line 295
    public function block_form($context, array $blocks = array())
    {
        $__internal_1f3328d6e3f78472123be98f134061a7489be6e77aa39cea69628498be11dcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3328d6e3f78472123be98f134061a7489be6e77aa39cea69628498be11dcdf->enter($__internal_1f3328d6e3f78472123be98f134061a7489be6e77aa39cea69628498be11dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 296
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 298
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_1f3328d6e3f78472123be98f134061a7489be6e77aa39cea69628498be11dcdf->leave($__internal_1f3328d6e3f78472123be98f134061a7489be6e77aa39cea69628498be11dcdf_prof);

    }

    // line 301
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2659d9b56108079b34be17584db8e8c902226a5e65853d696f7f605328c0c7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2659d9b56108079b34be17584db8e8c902226a5e65853d696f7f605328c0c7e2->enter($__internal_2659d9b56108079b34be17584db8e8c902226a5e65853d696f7f605328c0c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 302
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 303
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 304
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 306
            $context["form_method"] = "POST";
        }
        // line 308
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 309
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 310
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 311
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_2659d9b56108079b34be17584db8e8c902226a5e65853d696f7f605328c0c7e2->leave($__internal_2659d9b56108079b34be17584db8e8c902226a5e65853d696f7f605328c0c7e2_prof);

    }

    // line 315
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_5fe5a90a68c10f8574e2432f42ab6f37a8521b508923b4c58fdce21892cbebb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe5a90a68c10f8574e2432f42ab6f37a8521b508923b4c58fdce21892cbebb0->enter($__internal_5fe5a90a68c10f8574e2432f42ab6f37a8521b508923b4c58fdce21892cbebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 316
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 317
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 319
        echo "</form>";
        
        $__internal_5fe5a90a68c10f8574e2432f42ab6f37a8521b508923b4c58fdce21892cbebb0->leave($__internal_5fe5a90a68c10f8574e2432f42ab6f37a8521b508923b4c58fdce21892cbebb0_prof);

    }

    // line 322
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_f3c5cbac85f5d4f7de3c034b59ed710d651e713c658d3a81f47da42a8bf839ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c5cbac85f5d4f7de3c034b59ed710d651e713c658d3a81f47da42a8bf839ce->enter($__internal_f3c5cbac85f5d4f7de3c034b59ed710d651e713c658d3a81f47da42a8bf839ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 323
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_f3c5cbac85f5d4f7de3c034b59ed710d651e713c658d3a81f47da42a8bf839ce->leave($__internal_f3c5cbac85f5d4f7de3c034b59ed710d651e713c658d3a81f47da42a8bf839ce_prof);

    }

    // line 326
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8f9a1a57a288a52e340b11e345208b936ffb2ed9fa4b94e0c53b86529b169027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9a1a57a288a52e340b11e345208b936ffb2ed9fa4b94e0c53b86529b169027->enter($__internal_8f9a1a57a288a52e340b11e345208b936ffb2ed9fa4b94e0c53b86529b169027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 327
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 328
            echo "<ul>";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 330
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "</ul>";
        }
        
        $__internal_8f9a1a57a288a52e340b11e345208b936ffb2ed9fa4b94e0c53b86529b169027->leave($__internal_8f9a1a57a288a52e340b11e345208b936ffb2ed9fa4b94e0c53b86529b169027_prof);

    }

    // line 336
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_3fb4de7efcb92ee3eedb2e9d24eec5f53fc30891bc29fd8fcfdea545e855e8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb4de7efcb92ee3eedb2e9d24eec5f53fc30891bc29fd8fcfdea545e855e8e8->enter($__internal_3fb4de7efcb92ee3eedb2e9d24eec5f53fc30891bc29fd8fcfdea545e855e8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 338
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 339
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3fb4de7efcb92ee3eedb2e9d24eec5f53fc30891bc29fd8fcfdea545e855e8e8->leave($__internal_3fb4de7efcb92ee3eedb2e9d24eec5f53fc30891bc29fd8fcfdea545e855e8e8_prof);

    }

    // line 346
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_714c6c2fd29edbb174403801835e97a79c4668817f88e01ff87b6a6e09c2aa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714c6c2fd29edbb174403801835e97a79c4668817f88e01ff87b6a6e09c2aa4b->enter($__internal_714c6c2fd29edbb174403801835e97a79c4668817f88e01ff87b6a6e09c2aa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 348
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_714c6c2fd29edbb174403801835e97a79c4668817f88e01ff87b6a6e09c2aa4b->leave($__internal_714c6c2fd29edbb174403801835e97a79c4668817f88e01ff87b6a6e09c2aa4b_prof);

    }

    // line 352
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_27fc06c256c4e573bd837a140e3300fcea344488a23a6bebaf4ec5199b17907c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fc06c256c4e573bd837a140e3300fcea344488a23a6bebaf4ec5199b17907c->enter($__internal_27fc06c256c4e573bd837a140e3300fcea344488a23a6bebaf4ec5199b17907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 353
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 354
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 355
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 356
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 358
            echo " ";
            // line 359
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 361
$context["attrvalue"] === true)) {
                // line 362
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 363
$context["attrvalue"] === false)) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_27fc06c256c4e573bd837a140e3300fcea344488a23a6bebaf4ec5199b17907c->leave($__internal_27fc06c256c4e573bd837a140e3300fcea344488a23a6bebaf4ec5199b17907c_prof);

    }

    // line 369
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_22428a16e08bda3a830e759b6845585fa706cc4d2f9ebe834f9a7947167a7149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22428a16e08bda3a830e759b6845585fa706cc4d2f9ebe834f9a7947167a7149->enter($__internal_22428a16e08bda3a830e759b6845585fa706cc4d2f9ebe834f9a7947167a7149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 370
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 372
            echo " ";
            // line 373
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 374
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 375
$context["attrvalue"] === true)) {
                // line 376
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 377
$context["attrvalue"] === false)) {
                // line 378
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_22428a16e08bda3a830e759b6845585fa706cc4d2f9ebe834f9a7947167a7149->leave($__internal_22428a16e08bda3a830e759b6845585fa706cc4d2f9ebe834f9a7947167a7149_prof);

    }

    // line 383
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_417808d96eb7a7902a605f272ae7556a4f5ff1d48ca9b833488a27aa672b9385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417808d96eb7a7902a605f272ae7556a4f5ff1d48ca9b833488a27aa672b9385->enter($__internal_417808d96eb7a7902a605f272ae7556a4f5ff1d48ca9b833488a27aa672b9385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 384
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 386
            echo " ";
            // line 387
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 389
$context["attrvalue"] === true)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 391
$context["attrvalue"] === false)) {
                // line 392
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_417808d96eb7a7902a605f272ae7556a4f5ff1d48ca9b833488a27aa672b9385->leave($__internal_417808d96eb7a7902a605f272ae7556a4f5ff1d48ca9b833488a27aa672b9385_prof);

    }

    // line 397
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_e4689a1201b498f24e5076cfe00e10544d1b6a0513f7ab39ad439b7ad791011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4689a1201b498f24e5076cfe00e10544d1b6a0513f7ab39ad439b7ad791011d->enter($__internal_e4689a1201b498f24e5076cfe00e10544d1b6a0513f7ab39ad439b7ad791011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 399
            echo " ";
            // line 400
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 401
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 402
$context["attrvalue"] === true)) {
                // line 403
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 404
$context["attrvalue"] === false)) {
                // line 405
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e4689a1201b498f24e5076cfe00e10544d1b6a0513f7ab39ad439b7ad791011d->leave($__internal_e4689a1201b498f24e5076cfe00e10544d1b6a0513f7ab39ad439b7ad791011d_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1313 => 405,  1311 => 404,  1306 => 403,  1304 => 402,  1299 => 401,  1297 => 400,  1295 => 399,  1291 => 398,  1285 => 397,  1270 => 392,  1268 => 391,  1263 => 390,  1261 => 389,  1256 => 388,  1254 => 387,  1252 => 386,  1248 => 385,  1239 => 384,  1233 => 383,  1218 => 378,  1216 => 377,  1211 => 376,  1209 => 375,  1204 => 374,  1202 => 373,  1200 => 372,  1196 => 371,  1190 => 370,  1184 => 369,  1169 => 364,  1167 => 363,  1162 => 362,  1160 => 361,  1155 => 360,  1153 => 359,  1151 => 358,  1147 => 357,  1143 => 356,  1139 => 355,  1135 => 354,  1129 => 353,  1123 => 352,  1112 => 348,  1108 => 347,  1102 => 346,  1090 => 339,  1088 => 338,  1084 => 337,  1078 => 336,  1070 => 332,  1062 => 330,  1058 => 329,  1056 => 328,  1054 => 327,  1048 => 326,  1039 => 323,  1033 => 322,  1026 => 319,  1023 => 317,  1021 => 316,  1015 => 315,  1005 => 311,  1003 => 310,  982 => 309,  977 => 308,  974 => 306,  971 => 304,  969 => 303,  967 => 302,  961 => 301,  954 => 298,  952 => 297,  950 => 296,  944 => 295,  937 => 290,  931 => 289,  924 => 286,  922 => 285,  920 => 284,  914 => 283,  907 => 280,  905 => 279,  903 => 278,  901 => 277,  899 => 276,  893 => 275,  886 => 272,  880 => 267,  869 => 263,  858 => 258,  853 => 257,  850 => 256,  848 => 255,  830 => 254,  826 => 251,  823 => 248,  822 => 247,  821 => 246,  819 => 245,  816 => 244,  813 => 242,  810 => 241,  807 => 239,  805 => 238,  803 => 237,  797 => 236,  790 => 231,  788 => 230,  782 => 229,  775 => 226,  773 => 225,  767 => 224,  754 => 221,  750 => 218,  747 => 215,  746 => 214,  745 => 213,  743 => 212,  741 => 211,  735 => 210,  728 => 207,  726 => 206,  720 => 205,  713 => 202,  711 => 201,  705 => 200,  698 => 197,  696 => 196,  690 => 195,  682 => 192,  680 => 191,  674 => 190,  667 => 187,  665 => 186,  659 => 185,  652 => 182,  650 => 181,  644 => 180,  637 => 177,  631 => 176,  624 => 173,  622 => 172,  616 => 171,  609 => 168,  607 => 167,  601 => 165,  593 => 161,  583 => 160,  578 => 159,  576 => 158,  573 => 156,  571 => 155,  565 => 154,  557 => 150,  555 => 148,  554 => 147,  553 => 146,  552 => 145,  548 => 144,  545 => 142,  543 => 141,  537 => 140,  529 => 136,  527 => 135,  525 => 134,  523 => 133,  521 => 132,  517 => 131,  514 => 129,  512 => 128,  506 => 127,  489 => 124,  486 => 123,  480 => 122,  453 => 119,  450 => 118,  448 => 117,  442 => 116,  414 => 111,  411 => 110,  409 => 109,  406 => 107,  404 => 106,  402 => 105,  397 => 104,  395 => 103,  378 => 102,  372 => 101,  365 => 98,  363 => 97,  361 => 96,  355 => 93,  353 => 92,  351 => 91,  349 => 90,  347 => 89,  339 => 87,  336 => 86,  334 => 85,  327 => 84,  324 => 82,  322 => 81,  316 => 80,  309 => 77,  303 => 75,  301 => 74,  297 => 73,  293 => 72,  287 => 71,  279 => 67,  276 => 65,  274 => 64,  268 => 63,  257 => 60,  255 => 59,  249 => 58,  242 => 55,  239 => 53,  237 => 52,  231 => 51,  224 => 48,  222 => 47,  220 => 46,  217 => 44,  215 => 43,  211 => 42,  205 => 41,  188 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 397,  150 => 383,  148 => 369,  146 => 352,  144 => 346,  141 => 343,  139 => 336,  137 => 326,  135 => 322,  133 => 315,  131 => 301,  129 => 295,  127 => 289,  125 => 283,  123 => 275,  121 => 267,  119 => 263,  117 => 236,  115 => 229,  113 => 224,  111 => 210,  109 => 205,  107 => 200,  105 => 195,  103 => 190,  101 => 185,  99 => 180,  97 => 176,  95 => 171,  93 => 165,  91 => 154,  89 => 140,  87 => 127,  85 => 122,  83 => 116,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{# Widgets #}

{%- block form_widget -%}
  {% if compound %}
    {{- block('form_widget_compound') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {%- set type = type|default('text') -%}
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
  <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
      {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
  </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
  {% if prototype is defined %}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
  {% endif %}
  {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
  <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
  {% if expanded %}
    {{- block('choice_widget_expanded') -}}
  {% else %}
    {{- block('choice_widget_collapsed') -}}
  {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      {{- form_widget(child) -}}
      {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
  </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} data-toggle=\"select2\">
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
    {%- endif -%}
    {%- if preferred_choices|length > 0 -%}
      {% set options = preferred_choices %}
      {{- block('choice_widget_options') -}}
      {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">{{ separator }}</option>
      {%- endif -%}
    {%- endif -%}
    {%- set options = choices -%}
    {{- block('choice_widget_options') -}}
  </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
  {% for group_label, choice in options %}
    {%- if choice is iterable -%}
      <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label }}\">
        {% set options = choice %}
        {{- block('choice_widget_options') -}}
      </optgroup>
    {%- else -%}
      {% set attr = choice.attr %}
      <option
        value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label }}</option>
    {%- endif -%}
  {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date) -}}
      {{- form_widget(form.time) -}}
    </div>
  {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw -}}
    </div>
  {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
    <div {{ block('widget_container_attributes') }}>
      {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
    </div>
  {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
  {# type=\"number\" doesn't work with floats #}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
  {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
  {%- set type = type|default('search') -%}
  {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
  {%- set type = type|default('hidden') -%}
  {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
        '%name%': name,
        '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}</label>
    {% if label_attr['tooltip'] is defined %}
      {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
      <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr['tooltip'] }}\"></i>
    {% endif %}
  {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
  <div>
    {{- form_label(form) -}}
    {{- form_errors(form) -}}
    {{- form_widget(form) -}}
  </div>
{%- endblock form_row -%}

{%- block button_row -%}
  <div>
    {{- form_widget(form) -}}
  </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
  {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
  {{ form_start(form) }}
  {{- form_widget(form) -}}
  {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
  {%- if errors|length > 0 -%}
    <ul>
      {%- for error in errors -%}
        <li>{{ error.message }}</li>
      {%- endfor -%}
    </ul>
  {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
  {% for child in form -%}
    {% if not child.rendered %}
      {{- form_row(child) -}}
    {% endif %}
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
