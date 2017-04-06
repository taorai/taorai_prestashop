<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_193ddf74a6b6a7c06d74f135dbe046b2d0f9f6462a3321c0a35652ab3125d41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2bfb63cf4caa47aecabe11d865f6cf3a3bac36ad9d7bd16bf69b69edd38a160d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfb63cf4caa47aecabe11d865f6cf3a3bac36ad9d7bd16bf69b69edd38a160d->enter($__internal_2bfb63cf4caa47aecabe11d865f6cf3a3bac36ad9d7bd16bf69b69edd38a160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfb63cf4caa47aecabe11d865f6cf3a3bac36ad9d7bd16bf69b69edd38a160d->leave($__internal_2bfb63cf4caa47aecabe11d865f6cf3a3bac36ad9d7bd16bf69b69edd38a160d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46636e0152874c97ee3b88ba319e5585afe94df2316370ef8475eac135e98ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46636e0152874c97ee3b88ba319e5585afe94df2316370ef8475eac135e98ced->enter($__internal_46636e0152874c97ee3b88ba319e5585afe94df2316370ef8475eac135e98ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46636e0152874c97ee3b88ba319e5585afe94df2316370ef8475eac135e98ced->leave($__internal_46636e0152874c97ee3b88ba319e5585afe94df2316370ef8475eac135e98ced_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6e839f4848e1aeb19c06426d231960b7e62d558522fcddb2fe619421dc204a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e839f4848e1aeb19c06426d231960b7e62d558522fcddb2fe619421dc204a2->enter($__internal_b6e839f4848e1aeb19c06426d231960b7e62d558522fcddb2fe619421dc204a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6e839f4848e1aeb19c06426d231960b7e62d558522fcddb2fe619421dc204a2->leave($__internal_b6e839f4848e1aeb19c06426d231960b7e62d558522fcddb2fe619421dc204a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f04dfbe74b683c2137c1a801e05a1e39c895a90f167ba719df328fb9ee1c3dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04dfbe74b683c2137c1a801e05a1e39c895a90f167ba719df328fb9ee1c3dd2->enter($__internal_f04dfbe74b683c2137c1a801e05a1e39c895a90f167ba719df328fb9ee1c3dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f04dfbe74b683c2137c1a801e05a1e39c895a90f167ba719df328fb9ee1c3dd2->leave($__internal_f04dfbe74b683c2137c1a801e05a1e39c895a90f167ba719df328fb9ee1c3dd2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/steven/GitRepository/taorai/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
