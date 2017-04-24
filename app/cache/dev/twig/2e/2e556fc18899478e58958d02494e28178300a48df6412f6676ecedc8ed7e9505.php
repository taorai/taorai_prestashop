<?php

/* PrestaShopBundle:Admin/Module:catalog.html.twig */
class __TwigTemplate_dc66ca1083e44fc275a646f47df73a128a6eac3e1977eb5aab7ba1d4dab764d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d06275eae642e3c502dba4e8d4aaf52dd1d85e7338b999ee14af59f28c99109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d06275eae642e3c502dba4e8d4aaf52dd1d85e7338b999ee14af59f28c99109->enter($__internal_1d06275eae642e3c502dba4e8d4aaf52dd1d85e7338b999ee14af59f28c99109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d06275eae642e3c502dba4e8d4aaf52dd1d85e7338b999ee14af59f28c99109->leave($__internal_1d06275eae642e3c502dba4e8d4aaf52dd1d85e7338b999ee14af59f28c99109_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_306bb99c86630ebd99a4db3d55ccc8225029208eaaa4e766d0388b3a633766c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306bb99c86630ebd99a4db3d55ccc8225029208eaaa4e766d0388b3a633766c3->enter($__internal_306bb99c86630ebd99a4db3d55ccc8225029208eaaa4e766d0388b3a633766c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/module/drop.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/plugins/jquery.pstagger.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_306bb99c86630ebd99a4db3d55ccc8225029208eaaa4e766d0388b3a633766c3->leave($__internal_306bb99c86630ebd99a4db3d55ccc8225029208eaaa4e766d0388b3a633766c3_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0a135be3ed0a49b3f3fc7870fa4e788378fde8178e7eccddffa2e78bcb4ab6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a135be3ed0a49b3f3fc7870fa4e788378fde8178e7eccddffa2e78bcb4ab6e->enter($__internal_f0a135be3ed0a49b3f3fc7870fa4e788378fde8178e7eccddffa2e78bcb4ab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f0a135be3ed0a49b3f3fc7870fa4e788378fde8178e7eccddffa2e78bcb4ab6e->leave($__internal_f0a135be3ed0a49b3f3fc7870fa4e788378fde8178e7eccddffa2e78bcb4ab6e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_d25000393731474a6119a26baf1d166820b478ae3ba8c1bddd91f6acaa3caad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25000393731474a6119a26baf1d166820b478ae3ba8c1bddd91f6acaa3caad9->enter($__internal_d25000393731474a6119a26baf1d166820b478ae3ba8c1bddd91f6acaa3caad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1 module-catalog-page\">
            ";
        // line 45
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 45)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 47)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 49)->display($context);
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 51)->display($context);
        // line 52
        echo "            ";
        // line 53
        echo "            ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", array(), "any", true, true)) {
            // line 54
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig", "PrestaShopBundle:Admin/Module:catalog.html.twig", 54)->display(array_merge($context, array("categories" => $this->getAttribute(($context["topMenuData"] ?? $this->getContext($context, "topMenuData")), "categories", array()))));
            // line 55
            echo "            ";
        }
        // line 56
        echo "        </div>
    </div>
";
        
        $__internal_d25000393731474a6119a26baf1d166820b478ae3ba8c1bddd91f6acaa3caad9->leave($__internal_d25000393731474a6119a26baf1d166820b478ae3ba8c1bddd91f6acaa3caad9_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  128 => 55,  125 => 54,  122 => 53,  120 => 52,  117 => 51,  115 => 50,  112 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  98 => 42,  92 => 41,  83 => 38,  79 => 37,  75 => 36,  71 => 35,  66 => 34,  60 => 33,  51 => 30,  47 => 29,  42 => 28,  36 => 27,  11 => 25,);
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
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/module/drop.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/plugins/jquery.pstagger.css') }}\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1 module-catalog-page\">
            {# Addons connect modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains toolbar-nav for module page #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains menu with Selection/Categories/Popular and Tag Search #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig' %}
            {# Temporary loader until ajax has finished and display the full catalog #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_loader.html.twig' %}
            {# Module Categories Grid #}
            {% if topMenuData.categories is defined %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:categories_grid.html.twig' with { 'categories' : topMenuData.categories }  %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "PrestaShopBundle:Admin/Module:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Module/catalog.html.twig");
    }
}
