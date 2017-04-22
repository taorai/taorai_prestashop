<?php

/* @CsaGuzzle/Calls/macros.html.twig */
class __TwigTemplate_21ef36545cdf3968b1b413abb43354e1951c38ddc53b9f5e4d0e5a59cfbfe404 extends Twig_Template
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
        $__internal_efa04c73de5c939093a28dd823c6f230f2022fa090676c4617c51037e7989e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa04c73de5c939093a28dd823c6f230f2022fa090676c4617c51037e7989e5c->enter($__internal_efa04c73de5c939093a28dd823c6f230f2022fa090676c4617c51037e7989e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CsaGuzzle/Calls/macros.html.twig"));

        // line 32
        echo "
";
        // line 42
        echo "
";
        
        $__internal_efa04c73de5c939093a28dd823c6f230f2022fa090676c4617c51037e7989e5c->leave($__internal_efa04c73de5c939093a28dd823c6f230f2022fa090676c4617c51037e7989e5c_prof);

    }

    // line 1
    public function getrender_headers($__headers__ = null, $__uri__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "headers" => $__headers__,
            "uri" => $__uri__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ae2e600f258623522f07eae76792368185b38dd26d1364f4da0b8f52f5e0c228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ae2e600f258623522f07eae76792368185b38dd26d1364f4da0b8f52f5e0c228->enter($__internal_ae2e600f258623522f07eae76792368185b38dd26d1364f4da0b8f52f5e0c228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_headers"));

            // line 2
            echo "    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
            foreach ($context['_seq'] as $context["header"] => $context["values"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 14
                if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                    // line 15
                    echo "                    <ul>
                        ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["values"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 17
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </ul>
                    ";
                } else {
                    // line 21
                    echo "                        ";
                    if (($context["header"] == "X-Debug-Token-Link")) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->shortenUri(($context["uri"] ?? $this->getContext($context, "uri"))), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["values"], 0, array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </table>
";
            
            $__internal_ae2e600f258623522f07eae76792368185b38dd26d1364f4da0b8f52f5e0c228->leave($__internal_ae2e600f258623522f07eae76792368185b38dd26d1364f4da0b8f52f5e0c228_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getrender_body($__body__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "body" => $__body__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f7db6a9eea51d3186fb609e16f9bd877cb73617a284229304bb59d2ad196582e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f7db6a9eea51d3186fb609e16f9bd877cb73617a284229304bb59d2ad196582e->enter($__internal_f7db6a9eea51d3186fb609e16f9bd877cb73617a284229304bb59d2ad196582e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_body"));

            // line 34
            echo "    ";
            if ( !twig_test_empty(($context["body"] ?? $this->getContext($context, "body")))) {
                // line 35
                echo "        <h4>Content</h4>

        ";
                // line 37
                $context["lang"] = $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->detectLang(($context["body"] ?? $this->getContext($context, "body")));
                // line 38
                echo "
        <pre><code class=\"language-";
                // line 39
                echo twig_escape_filter($this->env, ($context["lang"] ?? $this->getContext($context, "lang")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->prettyPrint(($context["body"] ?? $this->getContext($context, "body")), ($context["lang"] ?? $this->getContext($context, "lang"))), "html", null, true);
                echo "</code></pre>
    ";
            }
            
            $__internal_f7db6a9eea51d3186fb609e16f9bd877cb73617a284229304bb59d2ad196582e->leave($__internal_f7db6a9eea51d3186fb609e16f9bd877cb73617a284229304bb59d2ad196582e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getrender_infos($__info__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "info" => $__info__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5dc9367ed57703a705a7564139914221498e797e970c151ca075d5078dd2e37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5dc9367ed57703a705a7564139914221498e797e970c151ca075d5078dd2e37d->enter($__internal_5dc9367ed57703a705a7564139914221498e797e970c151ca075d5078dd2e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_infos"));

            // line 44
            echo "    ";
            if ((($context["info"] ?? $this->getContext($context, "info")) && $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "total_time", array()))) {
                // line 45
                echo "        <h4>Time</h4>

        ";
                // line 47
                $context["wait_time"] = (($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "namelookup_time", array()) + $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "connect_time", array())) + $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "redirect_time", array()));
                // line 48
                echo "        ";
                $context["process_time"] = ($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "total_time", array()) - ($context["wait_time"] ?? $this->getContext($context, "wait_time")));
                // line 49
                echo "
        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "total_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "namelookup_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "connect_time", array())), "html", null, true);
                echo "</td>
            </tr>
            ";
                // line 69
                if ($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "redirect_time", array())) {
                    // line 70
                    echo "                <tr>
                    <td>Redirect</td>
                    <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "redirect_time", array())), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 75
                echo "            <tr>
                <td>Process</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(($context["process_time"] ?? $this->getContext($context, "process_time"))), "html", null, true);
                echo "</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: ";
                // line 82
                echo twig_escape_filter($this->env, ((($context["wait_time"] ?? $this->getContext($context, "wait_time")) / $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                // line 85
                echo twig_escape_filter($this->env, ((($context["process_time"] ?? $this->getContext($context, "process_time")) / $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    ";
            }
            
            $__internal_5dc9367ed57703a705a7564139914221498e797e970c151ca075d5078dd2e37d->leave($__internal_5dc9367ed57703a705a7564139914221498e797e970c151ca075d5078dd2e37d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Calls/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 85,  273 => 82,  265 => 77,  261 => 75,  255 => 72,  251 => 70,  249 => 69,  244 => 67,  237 => 63,  230 => 59,  218 => 49,  215 => 48,  213 => 47,  209 => 45,  206 => 44,  191 => 43,  168 => 39,  165 => 38,  163 => 37,  159 => 35,  156 => 34,  141 => 33,  122 => 30,  114 => 27,  111 => 26,  105 => 24,  96 => 22,  93 => 21,  89 => 19,  80 => 17,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  63 => 11,  59 => 10,  49 => 2,  33 => 1,  25 => 42,  22 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_headers(headers, uri) %}
    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        {% for header, values in headers %}
            <tr>
                <td>{{ header }}</td>
                <td>
                    {% if values|length > 1 %}
                    <ul>
                        {% for value in values %}
                            <li>{{ value }}</li>
                        {% endfor %}
                    </ul>
                    {% else %}
                        {% if header == 'X-Debug-Token-Link' %}
                            <a href=\"{{ uri|csa_guzzle_short_uri }}{{ values.0}}\" target=\"_blank\">{{ values.0 }}</a>
                        {% else %}
                            {{ values.0 }}
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_body(body) %}
    {% if body is not empty %}
        <h4>Content</h4>

        {% set lang = csa_guzzle_detect_lang(body) %}

        <pre><code class=\"language-{{ lang }}\">{{ body|csa_guzzle_pretty_print(lang) }}</code></pre>
    {% endif %}
{% endmacro %}

{% macro render_infos(info) %}
    {% if info and info.total_time %}
        <h4>Time</h4>

        {% set wait_time = info.namelookup_time + info.connect_time + info.redirect_time %}
        {% set process_time = info.total_time - wait_time %}

        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>{{ info.total_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>{{ info.namelookup_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>{{ info.connect_time|csa_guzzle_format_duration }}</td>
            </tr>
            {% if info.redirect_time %}
                <tr>
                    <td>Redirect</td>
                    <td>{{ info.redirect_time|csa_guzzle_format_duration }}</td>
                </tr>
            {% endif %}
            <tr>
                <td>Process</td>
                <td>{{ process_time | csa_guzzle_format_duration }}</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: {{ wait_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: {{ process_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    {% endif %}
{% endmacro %}
", "@CsaGuzzle/Calls/macros.html.twig", "/home/steven/GitRepository/taorai/vendor/csa/guzzle-bundle/src/Resources/views/Calls/macros.html.twig");
    }
}
