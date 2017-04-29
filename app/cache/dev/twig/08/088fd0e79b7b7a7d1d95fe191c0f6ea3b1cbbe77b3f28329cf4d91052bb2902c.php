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
        $__internal_dc6bdded31158df974dc9ead1849b8180ea6c7a5c406dcb5c9bc8f2997510bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6bdded31158df974dc9ead1849b8180ea6c7a5c406dcb5c9bc8f2997510bfc->enter($__internal_dc6bdded31158df974dc9ead1849b8180ea6c7a5c406dcb5c9bc8f2997510bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6bdded31158df974dc9ead1849b8180ea6c7a5c406dcb5c9bc8f2997510bfc->leave($__internal_dc6bdded31158df974dc9ead1849b8180ea6c7a5c406dcb5c9bc8f2997510bfc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a038d4dad04d460491f8ba38548dd2b01488ef57e7adc014673dbe64c4b4da68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a038d4dad04d460491f8ba38548dd2b01488ef57e7adc014673dbe64c4b4da68->enter($__internal_a038d4dad04d460491f8ba38548dd2b01488ef57e7adc014673dbe64c4b4da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a038d4dad04d460491f8ba38548dd2b01488ef57e7adc014673dbe64c4b4da68->leave($__internal_a038d4dad04d460491f8ba38548dd2b01488ef57e7adc014673dbe64c4b4da68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66dae2d3ff292bbb63bb47bf659ef0dff1541c541f6cc33bf33432c58543bb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dae2d3ff292bbb63bb47bf659ef0dff1541c541f6cc33bf33432c58543bb27->enter($__internal_66dae2d3ff292bbb63bb47bf659ef0dff1541c541f6cc33bf33432c58543bb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66dae2d3ff292bbb63bb47bf659ef0dff1541c541f6cc33bf33432c58543bb27->leave($__internal_66dae2d3ff292bbb63bb47bf659ef0dff1541c541f6cc33bf33432c58543bb27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66370639ce6700c576a01e2fddc680d1f6a82d992135e2efd1487da04a43526c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66370639ce6700c576a01e2fddc680d1f6a82d992135e2efd1487da04a43526c->enter($__internal_66370639ce6700c576a01e2fddc680d1f6a82d992135e2efd1487da04a43526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66370639ce6700c576a01e2fddc680d1f6a82d992135e2efd1487da04a43526c->leave($__internal_66370639ce6700c576a01e2fddc680d1f6a82d992135e2efd1487da04a43526c_prof);

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
