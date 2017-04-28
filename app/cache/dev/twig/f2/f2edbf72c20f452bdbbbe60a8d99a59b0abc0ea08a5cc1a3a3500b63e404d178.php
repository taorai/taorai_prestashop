<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_416bcf5d40c340ec4b0e583a531914a36bd16142922556fb6c889ca1303436e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9822e72f67091b19b598fbe018b5dd06ce5235fb1e6d50ace1ee21c28e7e7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9822e72f67091b19b598fbe018b5dd06ce5235fb1e6d50ace1ee21c28e7e7ce->enter($__internal_e9822e72f67091b19b598fbe018b5dd06ce5235fb1e6d50ace1ee21c28e7e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9822e72f67091b19b598fbe018b5dd06ce5235fb1e6d50ace1ee21c28e7e7ce->leave($__internal_e9822e72f67091b19b598fbe018b5dd06ce5235fb1e6d50ace1ee21c28e7e7ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56cc24dc511242b6da32101a1210169c90e4a7e3fbc955dff53d31a5d5fe9666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cc24dc511242b6da32101a1210169c90e4a7e3fbc955dff53d31a5d5fe9666->enter($__internal_56cc24dc511242b6da32101a1210169c90e4a7e3fbc955dff53d31a5d5fe9666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_56cc24dc511242b6da32101a1210169c90e4a7e3fbc955dff53d31a5d5fe9666->leave($__internal_56cc24dc511242b6da32101a1210169c90e4a7e3fbc955dff53d31a5d5fe9666_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5935aff6a9650235470ba6ba1817cddfe122f942d7763a3f84fd87414d24cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5935aff6a9650235470ba6ba1817cddfe122f942d7763a3f84fd87414d24cf1->enter($__internal_c5935aff6a9650235470ba6ba1817cddfe122f942d7763a3f84fd87414d24cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c5935aff6a9650235470ba6ba1817cddfe122f942d7763a3f84fd87414d24cf1->leave($__internal_c5935aff6a9650235470ba6ba1817cddfe122f942d7763a3f84fd87414d24cf1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf6b6e943c0fea06ace6a6f770a3cbd2ed05722894e0eb19057f77b1f2d99eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6b6e943c0fea06ace6a6f770a3cbd2ed05722894e0eb19057f77b1f2d99eed->enter($__internal_bf6b6e943c0fea06ace6a6f770a3cbd2ed05722894e0eb19057f77b1f2d99eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bf6b6e943c0fea06ace6a6f770a3cbd2ed05722894e0eb19057f77b1f2d99eed->leave($__internal_bf6b6e943c0fea06ace6a6f770a3cbd2ed05722894e0eb19057f77b1f2d99eed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/steven/GitRepository/taorai/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
