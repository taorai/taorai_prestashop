<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig */
class __TwigTemplate_3b067ae04069946c98c525bc2ba5f53027a039015804f10b74ffbddd00ff9ae9 extends Twig_Template
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
        $__internal_957d68d43e8f2b761c98356f25573d94d73577f172ca0edec3afdbbc889c2dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957d68d43e8f2b761c98356f25573d94d73577f172ca0edec3afdbbc889c2dc6->enter($__internal_957d68d43e8f2b761c98356f25573d94d73577f172ca0edec3afdbbc889c2dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array())) >= 1)) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array()));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                echo "    ";
                if (twig_in_filter($context["module_action"], array(0 => "disable", 1 => "uninstall", 2 => "reset"))) {
                    // line 28
                    echo "      <div id=\"module-modal-confirm-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                    echo "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 35
                    if (($context["module_action"] == "disable")) {
                        // line 36
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 38
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 39
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 41
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 42
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 44
                    echo "              </h4>
            </div>
            <div class=\"modal-body row\">
              <div class=\"col-md-12\">
                <p>
                  ";
                    // line 49
                    if (($context["module_action"] == "disable")) {
                        // line 50
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to disable %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your current settings will be saved, but the module will no longer be active.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  ";
                    }
                    // line 55
                    echo "                  ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 56
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to uninstall %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will disable the module and delete all its files. For good.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <label>
                      <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional: delete module folder after uninstall.", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                    </label>
                    <br>
                    <span class=\"italic red\">
                      ";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>
                  ";
                    }
                    // line 69
                    echo "                  ";
                    if (($context["module_action"] == "reset")) {
                        // line 70
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You're about to reset %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will restore the defaults settings.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <span class=\"italic red\">
                      ";
                        // line 76
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>
                  ";
                    }
                    // line 79
                    echo "                </p>
              </div>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", array(), "Admin.Actions"), "html", null, true);
                    echo "\" />
              ";
                    // line 84
                    if (($context["module_action"] == "disable")) {
                        // line 85
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 86
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 87
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 91
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, disable it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 94
                    echo "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 95
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 96
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 101
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, uninstall it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 104
                    echo "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 105
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 106
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 107
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 109
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 111
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, reset it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 114
                    echo "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 119
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_957d68d43e8f2b761c98356f25573d94d73577f172ca0edec3afdbbc889c2dc6->leave($__internal_957d68d43e8f2b761c98356f25573d94d73577f172ca0edec3afdbbc889c2dc6_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 119,  232 => 114,  226 => 111,  221 => 109,  216 => 107,  212 => 106,  209 => 105,  206 => 104,  200 => 101,  195 => 99,  190 => 97,  186 => 96,  183 => 95,  180 => 94,  174 => 91,  169 => 89,  164 => 87,  160 => 86,  157 => 85,  155 => 84,  151 => 83,  145 => 79,  139 => 76,  133 => 73,  126 => 70,  123 => 69,  117 => 66,  108 => 62,  102 => 59,  95 => 56,  92 => 55,  87 => 53,  80 => 50,  78 => 49,  71 => 44,  65 => 42,  62 => 41,  56 => 39,  53 => 38,  47 => 36,  45 => 35,  32 => 28,  29 => 27,  24 => 26,  22 => 25,);
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
{% if module.attributes.urls|length >= 1 %}
  {% for module_action, module_url in module.attributes.urls %}
    {% if module_action in ['disable', 'uninstall', 'reset'] %}
      <div id=\"module-modal-confirm-{{module.attributes.name}}-{{ module_action }}\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title module-modal-title\">
                {% if module_action == 'disable' %}
                  {{ \"Disable module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ \"Uninstall module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ \"Reset module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </h4>
            </div>
            <div class=\"modal-body row\">
              <div class=\"col-md-12\">
                <p>
                  {% if module_action == 'disable' %}
                    {{ \"You are about to disable %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    <br>
                    {{ \"Your current settings will be saved, but the module will no longer be active.\"|trans({}, 'Admin.Modules.Notification') }}
                  {% endif %}
                  {% if module_action == 'uninstall' %}
                    {{ \"You are about to uninstall %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    <br>
                    {{ \"This will disable the module and delete all its files. For good.\"|trans({}, 'Admin.Modules.Notification') }}
                    <br>
                    <label>
                      <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"{{module.attributes.name}}\"> {{ \"Optional: delete module folder after uninstall.\"|trans({}, 'Admin.Modules.Feature') }}
                    </label>
                    <br>
                    <span class=\"italic red\">
                      {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                    </span>
                  {% endif %}
                  {% if module_action == 'reset' %}
                    {{ \"You're about to reset %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    <br>
                    {{ \"This will restore the defaults settings.\"|trans({}, 'Admin.Modules.Notification') }}
                    <br>
                    <span class=\"italic red\">
                      {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                    </span>
                  {% endif %}
                </p>
              </div>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"{{ \"Cancel\"|trans({}, 'Admin.Actions') }}\" />
              {% if module_action == 'disable' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, disable it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'uninstall' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, uninstall it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'reset' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, reset it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %}
  {% endfor %}
{% endif %}
", "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm.html.twig");
    }
}
