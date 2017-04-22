<?php

/* PrestaShopBundle:Admin/Module/Includes:grid.html.twig */
class __TwigTemplate_2f1837953583dc26e6ba71bfdbe09a9134ae29b817aac3a7866330d5d1d4e8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'addon_card' => array($this, 'block_addon_card'),
            'addon_search_card' => array($this, 'block_addon_search_card'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d34498246ca04cf8da85bd94ce34fb73a5bd4596bab76e0c51375ddcd79ee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d34498246ca04cf8da85bd94ce34fb73a5bd4596bab76e0c51375ddcd79ee2d->enter($__internal_8d34498246ca04cf8da85bd94ce34fb73a5bd4596bab76e0c51375ddcd79ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig"));

        // line 25
        echo "<div id=\"modules-list-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"row modules-list\">
  ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_module_catalog_refresh")) {
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 28
                echo "      ";
                $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig", 28)->display(array_merge($context, array("module" => $context["module"], "origin" => ((array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? $this->getContext($context, "origin")), "none")) : ("none")), "level" => ($context["level"] ?? $this->getContext($context, "level")))));
                // line 29
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "  ";
        }
        // line 31
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 32
            echo "    ";
            $this->displayBlock('addon_card', $context, $blocks);
            // line 35
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  ";
        $this->displayBlock('addon_search_card', $context, $blocks);
        // line 42
        echo "</div>
";
        
        $__internal_8d34498246ca04cf8da85bd94ce34fb73a5bd4596bab76e0c51375ddcd79ee2d->leave($__internal_8d34498246ca04cf8da85bd94ce34fb73a5bd4596bab76e0c51375ddcd79ee2d_prof);

    }

    // line 32
    public function block_addon_card($context, array $blocks = array())
    {
        $__internal_d8e36742f81b7b4c0e229b7e64b7b545238373f0d4fadb0f39f8677d04d03cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e36742f81b7b4c0e229b7e64b7b545238373f0d4fadb0f39f8677d04d03cc8->enter($__internal_d8e36742f81b7b4c0e229b7e64b7b545238373f0d4fadb0f39f8677d04d03cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card"));

        // line 33
        echo "      ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig", 33)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "origin" => ((array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? $this->getContext($context, "origin")), "none")) : ("none")))));
        // line 34
        echo "    ";
        
        $__internal_d8e36742f81b7b4c0e229b7e64b7b545238373f0d4fadb0f39f8677d04d03cc8->leave($__internal_d8e36742f81b7b4c0e229b7e64b7b545238373f0d4fadb0f39f8677d04d03cc8_prof);

    }

    // line 36
    public function block_addon_search_card($context, array $blocks = array())
    {
        $__internal_6b7e278beae57962521bda44cd4ddcc7a45a7653ccfacd4fde03e389aedbf8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7e278beae57962521bda44cd4ddcc7a45a7653ccfacd4fde03e389aedbf8c6->enter($__internal_6b7e278beae57962521bda44cd4ddcc7a45a7653ccfacd4fde03e389aedbf8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_search_card"));

        // line 37
        echo "    ";
        if ((array_key_exists("requireAddonsSearch", $context) && (($context["requireAddonsSearch"] ?? $this->getContext($context, "requireAddonsSearch")) == true))) {
            // line 38
            echo "      ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_grid_addons.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig", 38)->display($context);
            // line 39
            echo "      ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_list_addons.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig", 39)->display($context);
            // line 40
            echo "    ";
        }
        // line 41
        echo "  ";
        
        $__internal_6b7e278beae57962521bda44cd4ddcc7a45a7653ccfacd4fde03e389aedbf8c6->leave($__internal_6b7e278beae57962521bda44cd4ddcc7a45a7653ccfacd4fde03e389aedbf8c6_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  131 => 36,  124 => 34,  121 => 33,  115 => 32,  107 => 42,  104 => 36,  90 => 35,  87 => 32,  69 => 31,  66 => 30,  52 => 29,  49 => 28,  31 => 27,  29 => 26,  24 => 25,);
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
<div id=\"modules-list-container-{{ id }}\" class=\"row modules-list\">
  {% if app.request.attributes.get('_route') == 'admin_module_catalog_refresh' %}
    {% for module in modules %}
      {% include 'PrestaShopBundle:Admin/Module/Includes:card_grid.html.twig' with { 'module': module, 'origin': origin|default('none'), 'level' : level } %}
    {% endfor %}
  {% endif %}
  {% for module in modules %}
    {% block addon_card %}
      {% include 'PrestaShopBundle:Admin/Module/Includes:card_list.html.twig' with { 'module': module, 'origin': origin|default('none') } %}
    {% endblock %}
  {% endfor %}
  {% block addon_search_card %}
    {% if requireAddonsSearch is defined and requireAddonsSearch == true %}
      {% include 'PrestaShopBundle:Admin/Module/Includes:card_grid_addons.html.twig'%}
      {% include 'PrestaShopBundle:Admin/Module/Includes:card_list_addons.html.twig'%}
    {% endif %}
  {% endblock %}
</div>
", "PrestaShopBundle:Admin/Module/Includes:grid.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid.html.twig");
    }
}
