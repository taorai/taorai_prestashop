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
        $__internal_500f88574e9b906b4467d7962643cc240c3b01f6fe89ed15e863c4b74653c900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500f88574e9b906b4467d7962643cc240c3b01f6fe89ed15e863c4b74653c900->enter($__internal_500f88574e9b906b4467d7962643cc240c3b01f6fe89ed15e863c4b74653c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500f88574e9b906b4467d7962643cc240c3b01f6fe89ed15e863c4b74653c900->leave($__internal_500f88574e9b906b4467d7962643cc240c3b01f6fe89ed15e863c4b74653c900_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0838f6f6d6da8bcb2b8e049e5893f9ac1d7a78feb6aa7628697c4eb27ecef457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0838f6f6d6da8bcb2b8e049e5893f9ac1d7a78feb6aa7628697c4eb27ecef457->enter($__internal_0838f6f6d6da8bcb2b8e049e5893f9ac1d7a78feb6aa7628697c4eb27ecef457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0838f6f6d6da8bcb2b8e049e5893f9ac1d7a78feb6aa7628697c4eb27ecef457->leave($__internal_0838f6f6d6da8bcb2b8e049e5893f9ac1d7a78feb6aa7628697c4eb27ecef457_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_412c2f88b4172f9ea13a491701a06af45c046c3201f84a3004038b1df05dbb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412c2f88b4172f9ea13a491701a06af45c046c3201f84a3004038b1df05dbb5a->enter($__internal_412c2f88b4172f9ea13a491701a06af45c046c3201f84a3004038b1df05dbb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_412c2f88b4172f9ea13a491701a06af45c046c3201f84a3004038b1df05dbb5a->leave($__internal_412c2f88b4172f9ea13a491701a06af45c046c3201f84a3004038b1df05dbb5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aea62fb828c00ab41129afda3c83c0a13c54f0b0a44f149aced6f1cec91c35f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea62fb828c00ab41129afda3c83c0a13c54f0b0a44f149aced6f1cec91c35f7->enter($__internal_aea62fb828c00ab41129afda3c83c0a13c54f0b0a44f149aced6f1cec91c35f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aea62fb828c00ab41129afda3c83c0a13c54f0b0a44f149aced6f1cec91c35f7->leave($__internal_aea62fb828c00ab41129afda3c83c0a13c54f0b0a44f149aced6f1cec91c35f7_prof);

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
