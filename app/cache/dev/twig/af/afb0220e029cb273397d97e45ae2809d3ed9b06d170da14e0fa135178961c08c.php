<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_815cd39c3a0005af07193fdb5022a1a8fe0a8230d75988cd9337c1c8928d8d8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2d213293ec77f48febbfea7d935f689ac2c5f4f954705f095f79410f75992263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d213293ec77f48febbfea7d935f689ac2c5f4f954705f095f79410f75992263->enter($__internal_2d213293ec77f48febbfea7d935f689ac2c5f4f954705f095f79410f75992263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d213293ec77f48febbfea7d935f689ac2c5f4f954705f095f79410f75992263->leave($__internal_2d213293ec77f48febbfea7d935f689ac2c5f4f954705f095f79410f75992263_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3acd62e75d5841913189a5569b910dd05432215ec25651aefb49938095bb2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acd62e75d5841913189a5569b910dd05432215ec25651aefb49938095bb2c81->enter($__internal_3acd62e75d5841913189a5569b910dd05432215ec25651aefb49938095bb2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        if ((($context["callCount"] ?? $this->getContext($context, "callCount")) == 0)) {
            // line 10
            echo "        ";
            $context["color_code"] = "";
            // line 11
            echo "    ";
        } elseif ((($context["errorCount"] ?? $this->getContext($context, "errorCount")) > 0)) {
            // line 12
            echo "        ";
            $context["color_code"] = "red";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $context["color_code"] = "green";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 19
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo twig_escape_filter($this->env, ($context["color_code"] ?? $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 23
            echo twig_escape_filter($this->env, ($context["callCount"] ?? $this->getContext($context, "callCount")), "html", null, true);
            echo "</span>
        ";
        }
        // line 25
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        ob_start();
        // line 28
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 30
        echo twig_escape_filter($this->env, (($context["callCount"] ?? $this->getContext($context, "callCount")) - ($context["errorCount"] ?? $this->getContext($context, "errorCount"))), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["errorCount"] ?? $this->getContext($context, "errorCount")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_3acd62e75d5841913189a5569b910dd05432215ec25651aefb49938095bb2c81->leave($__internal_3acd62e75d5841913189a5569b910dd05432215ec25651aefb49938095bb2c81_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f0d789cad23e430b3a770f0dea4c3e5ff70c0e88df371f41b09ade09ef08e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0d789cad23e430b3a770f0dea4c3e5ff70c0e88df371f41b09ade09ef08e6a->enter($__internal_3f0d789cad23e430b3a770f0dea4c3e5ff70c0e88df371f41b09ade09ef08e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 42
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 45
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 46
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 47
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_3f0d789cad23e430b3a770f0dea4c3e5ff70c0e88df371f41b09ade09ef08e6a->leave($__internal_3f0d789cad23e430b3a770f0dea4c3e5ff70c0e88df371f41b09ade09ef08e6a_prof);

    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4535754eac64eeb49d25863c45877ea8260c60d55bec12117b23c5f3cded549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4535754eac64eeb49d25863c45877ea8260c60d55bec12117b23c5f3cded549->enter($__internal_f4535754eac64eeb49d25863c45877ea8260c60d55bec12117b23c5f3cded549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 54
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 56
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 57
        echo "            ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 62
        echo "
        </span>
        <strong>";
        // line 64
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        <span class=\"count\">
            ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) {
            // line 67
            echo "                <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            ";
        }
        // line 69
        echo "        </span>
    </span>
";
        
        $__internal_f4535754eac64eeb49d25863c45877ea8260c60d55bec12117b23c5f3cded549->leave($__internal_f4535754eac64eeb49d25863c45877ea8260c60d55bec12117b23c5f3cded549_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a469a20abce748a47f0351e09446d2d10a373cb52261f2ec6db12c69da715ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a469a20abce748a47f0351e09446d2d10a373cb52261f2ec6db12c69da715ac->enter($__internal_6a469a20abce748a47f0351e09446d2d10a373cb52261f2ec6db12c69da715ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 75
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())));
        echo "
";
        
        $__internal_6a469a20abce748a47f0351e09446d2d10a373cb52261f2ec6db12c69da715ac->leave($__internal_6a469a20abce748a47f0351e09446d2d10a373cb52261f2ec6db12c69da715ac_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 75,  247 => 74,  241 => 73,  232 => 69,  226 => 67,  224 => 66,  219 => 64,  215 => 62,  209 => 60,  203 => 58,  200 => 57,  198 => 56,  190 => 54,  184 => 53,  173 => 48,  168 => 47,  165 => 46,  163 => 45,  159 => 44,  155 => 43,  150 => 42,  144 => 41,  135 => 38,  132 => 37,  126 => 34,  119 => 30,  115 => 28,  113 => 27,  110 => 26,  107 => 25,  102 => 23,  97 => 22,  90 => 20,  85 => 19,  82 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        <span class=\"count\">
            {% if collector.calls is not empty %}
                <span>{{ collector.calls|length }}</span>
            {% endif %}
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "CsaGuzzleBundle:Collector:guzzle.html.twig", "/home/steven/GitRepository/taorai/vendor/csa/guzzle-bundle/src/Resources/views/Collector/guzzle.html.twig");
    }
}
