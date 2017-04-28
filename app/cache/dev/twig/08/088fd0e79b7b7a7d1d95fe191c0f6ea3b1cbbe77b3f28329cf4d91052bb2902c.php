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
        $__internal_f568c1ba341bd58dd72a8e5161dba9caf67fcc0fd524036c5493ffd97ef15200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f568c1ba341bd58dd72a8e5161dba9caf67fcc0fd524036c5493ffd97ef15200->enter($__internal_f568c1ba341bd58dd72a8e5161dba9caf67fcc0fd524036c5493ffd97ef15200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f568c1ba341bd58dd72a8e5161dba9caf67fcc0fd524036c5493ffd97ef15200->leave($__internal_f568c1ba341bd58dd72a8e5161dba9caf67fcc0fd524036c5493ffd97ef15200_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd0905e069b039ab7738de3413cf7842eee8bd3ec0e03146dfcc13e28dffff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0905e069b039ab7738de3413cf7842eee8bd3ec0e03146dfcc13e28dffff8f->enter($__internal_fd0905e069b039ab7738de3413cf7842eee8bd3ec0e03146dfcc13e28dffff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd0905e069b039ab7738de3413cf7842eee8bd3ec0e03146dfcc13e28dffff8f->leave($__internal_fd0905e069b039ab7738de3413cf7842eee8bd3ec0e03146dfcc13e28dffff8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a422684d57c827080a41fc131c8889aee0219169e599be435272b2145bb03a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a422684d57c827080a41fc131c8889aee0219169e599be435272b2145bb03a4->enter($__internal_5a422684d57c827080a41fc131c8889aee0219169e599be435272b2145bb03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a422684d57c827080a41fc131c8889aee0219169e599be435272b2145bb03a4->leave($__internal_5a422684d57c827080a41fc131c8889aee0219169e599be435272b2145bb03a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35d934e49caf0a3db9697697b2c6fbef4ee940c3750bfd95801fee50440fc1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d934e49caf0a3db9697697b2c6fbef4ee940c3750bfd95801fee50440fc1bc->enter($__internal_35d934e49caf0a3db9697697b2c6fbef4ee940c3750bfd95801fee50440fc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35d934e49caf0a3db9697697b2c6fbef4ee940c3750bfd95801fee50440fc1bc->leave($__internal_35d934e49caf0a3db9697697b2c6fbef4ee940c3750bfd95801fee50440fc1bc_prof);

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
