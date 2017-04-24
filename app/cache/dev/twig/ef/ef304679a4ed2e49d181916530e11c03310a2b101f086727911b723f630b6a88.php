<?php

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_db7297b1b0c1264ab3631e6178f2edc9f49cf1bef79e08955b99c6dc61133a34 extends Twig_Template
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
        $__internal_a5b13564fef7a5bc83ba6d4b46a25c1d55f3112e829d8e419095c78159a412e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b13564fef7a5bc83ba6d4b46a25c1d55f3112e829d8e419095c78159a412e0->enter($__internal_a5b13564fef7a5bc83ba6d4b46a25c1d55f3112e829d8e419095c78159a412e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        // line 25
        $context["ats"] = $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array());
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         array($this->getAttribute(        // line 29
($context["ats"] ?? $this->getContext($context, "ats")), "name", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "displayName", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "nbRates", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "starsRate", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "img", array()), ((($this->getAttribute(        // line 30
($context["ats"] ?? null), "serviceUrl", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", array())) : (false)), $this->getAttribute(        // line 31
($context["ats"] ?? $this->getContext($context, "ats")), "version", array()), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "cover", array()), ((($this->getAttribute(        // line 32
($context["ats"] ?? null), "additionalDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", array())) : (false)), ((($this->getAttribute(        // line 33
($context["ats"] ?? null), "fullDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", array())) : (false)), ((($this->getAttribute(        // line 34
($context["ats"] ?? null), "changeLog", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", array())) : (false)), ((($this->getAttribute(        // line 35
($context["ats"] ?? null), "customer_benefits", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", array())) : (false)), ((($this->getAttribute(        // line 36
($context["ats"] ?? null), "demo_video", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", array())) : (false)), $this->getAttribute(        // line 37
($context["ats"] ?? $this->getContext($context, "ats")), "author", array()), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
($context["ats"] ?? $this->getContext($context, "ats")), "features", array()), ((($this->getAttribute(        // line 39
($context["ats"] ?? null), "badges", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", array())) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", array())) : (false)));
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\">
          <span aria-hidden=\"true\">
            <i class=\"material-icons\">close</i>
          </span>
      </button>
      ";
        // line 50
        if ((($context["nbRates"] ?? $this->getContext($context, "nbRates")) > 0)) {
            // line 51
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? $this->getContext($context, "starsRate")), "html", null, true);
            echo "\">
          (
          ";
            // line 53
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? $this->getContext($context, "nbRates")), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 57
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["img"] ?? $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 60
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "<br>
            <small class=\"version\">
              ";
        // line 62
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? $this->getContext($context, "serviceUrl"))) > 0))) {
            // line 63
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => ($context["author"] ?? $this->getContext($context, "author"))), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 65
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", array("%version%" => ($context["version"] ?? $this->getContext($context, "version")), "%author%" => ($context["author"] ?? $this->getContext($context, "author"))), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 67
        echo "            </small>
          </h1>

        </div>
      </div>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 76
        if ($this->getAttribute(($context["cover"] ?? null), "big", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cover"] ?? $this->getContext($context, "cover")), "big", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? $this->getContext($context, "notFoundImg")), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 81
        echo "          <ul class=\"nav navbar-nav navbar-separator\">
            <li class=\"nav-item active\">
              <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#overview-";
        // line 83
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 85
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 86
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 87
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 90
        echo "            ";
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 91
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 92
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 95
        echo "            ";
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 96
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 100
        echo "            ";
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 101
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 102
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 105
        echo "            ";
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 106
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 107
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 110
        echo "            ";
        // line 111
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 115
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 117
        if (($context["fullDescription"] ?? $this->getContext($context, "fullDescription"))) {
            // line 118
            echo "                ";
            echo ($context["fullDescription"] ?? $this->getContext($context, "fullDescription"));
            echo "
              ";
        } else {
            // line 120
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 122
        echo "            </p>
          </div>

          <div id=\"additional-";
        // line 125
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 127
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 128
            echo "                ";
            echo ($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"));
            echo "
              ";
        } else {
            // line 130
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 132
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 135
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 137
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 138
            echo "                ";
            echo ($context["features"] ?? $this->getContext($context, "features"));
            echo "
              ";
        } else {
            // line 140
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 142
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 145
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 147
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 148
            echo "                ";
            echo ($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"));
            echo "
              ";
        } else {
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 152
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 155
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 157
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 158
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink(($context["demoVideo"] ?? $this->getContext($context, "demoVideo")));
            echo "
              ";
        } else {
            // line 160
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 162
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 165
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 166
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 167
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast(($context["changeLog"] ?? $this->getContext($context, "changeLog")))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 169
                echo "                  <li>
                    <b>";
                // line 170
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 172
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "              </ul>
            ";
        } else {
            // line 178
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 180
        echo "          </div>
          ";
        // line 182
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      ";
        // line 187
        if (($context["badges"] ?? $this->getContext($context, "badges"))) {
            // line 188
            echo "        <div class=\"pull-left module-badges-display\">
          ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? $this->getContext($context, "badges")));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 190
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
                echo "\"/>
            ";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "        </div>
      ";
        }
        // line 195
        echo "      ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 195)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 196
        echo "    </div>
  </div>
</div>
";
        
        $__internal_a5b13564fef7a5bc83ba6d4b46a25c1d55f3112e829d8e419095c78159a412e0->leave($__internal_a5b13564fef7a5bc83ba6d4b46a25c1d55f3112e829d8e419095c78159a412e0_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 196,  410 => 195,  406 => 193,  398 => 191,  391 => 190,  387 => 189,  384 => 188,  382 => 187,  375 => 182,  372 => 180,  366 => 178,  362 => 176,  355 => 174,  346 => 172,  342 => 171,  338 => 170,  335 => 169,  331 => 168,  328 => 167,  326 => 166,  322 => 165,  317 => 162,  311 => 160,  305 => 158,  303 => 157,  298 => 155,  293 => 152,  287 => 150,  281 => 148,  279 => 147,  274 => 145,  269 => 142,  263 => 140,  257 => 138,  255 => 137,  250 => 135,  245 => 132,  239 => 130,  233 => 128,  231 => 127,  226 => 125,  221 => 122,  215 => 120,  209 => 118,  207 => 117,  201 => 115,  196 => 111,  194 => 110,  186 => 107,  183 => 106,  180 => 105,  172 => 102,  169 => 101,  166 => 100,  158 => 97,  155 => 96,  152 => 95,  144 => 92,  141 => 91,  138 => 90,  130 => 87,  127 => 86,  125 => 85,  118 => 83,  114 => 81,  103 => 76,  92 => 67,  86 => 65,  80 => 63,  78 => 62,  73 => 60,  66 => 58,  63 => 57,  56 => 53,  50 => 51,  48 => 50,  37 => 41,  35 => 39,  34 => 38,  33 => 37,  32 => 36,  31 => 35,  30 => 34,  29 => 33,  28 => 32,  27 => 31,  26 => 30,  25 => 29,  24 => 26,  22 => 25,);
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
{% set ats = module.attributes %}
{% set name, displayName, nbRates,
  starsRate, img, serviceUrl, version, cover, additionalDescription,
  fullDescription, changeLog, customerBenefits, demoVideo, author, notFoundImg, features, badges =
  ats.name, ats.displayName, ats.nbRates, ats.starsRate, ats.img,
  ats.serviceUrl is defined and ats.serviceUrl|length > 0 ? ats.serviceUrl : false,
  ats.version, ats.cover,
  ats.additionalDescription is defined and ats.additionalDescription|length > 0 ? ats.additionalDescription : false,
  ats.fullDescription is defined and ats.fullDescription|length > 0 ? ats.fullDescription : false,
  ats.changeLog is defined and ats.changeLog|length > 0 ? ats.changeLog : false,
  ats.customer_benefits is defined and ats.customer_benefits|length > 0 ? ats.customer_benefits : false,
  ats.demo_video is defined and ats.demo_video|length > 0 ? ats.demo_video : false,
  ats.author, 'https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png',
  ats.features,
  ats.badges is defined and ats.badges|length > 0 ? ats.badges : false
%}
<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\">
          <span aria-hidden=\"true\">
            <i class=\"material-icons\">close</i>
          </span>
      </button>
      {% if nbRates > 0 %}
        <div class=\"read-more-stars module-star-ranking-grid-{{ starsRate }}\">
          (
          {{ nbRates }}
          )
        </div>
      {% endif %}
      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"{{ img }}\" alt=\"{{ displayName }}\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>{{ displayName }}<br>
            <small class=\"version\">
              {% if serviceUrl is defined and serviceUrl|length > 0 %}
                {{ 'Service by %author%'|trans({'%author%' : author}, 'Admin.Modules.Feature') }}
              {% else %}
                {{ 'v%version% by %author%'|trans({ '%version%' : version, '%author%' : author }, 'Admin.Modules.Feature') }}
              {% endif %}
            </small>
          </h1>

        </div>
      </div>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"{% if cover.big is defined %}{{ cover.big }}{% else %}{{ notFoundImg }}{% endif %}\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          {# tab list #}
          <ul class=\"nav navbar-nav navbar-separator\">
            <li class=\"nav-item active\">
              <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#overview-{{ name }}\">{{ 'Overview'|trans({}, 'Admin.Modules.Feature') }}</a>
            </li>
            {% if additionalDescription %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-{{ name }}\">{{ 'Additional information'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if customerBenefits %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-{{ name }}\">{{ 'Benefits'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if features %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-{{ name }}\">{{ 'Features'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if demoVideo %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-{{ name }}\">{{ 'Demo video'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if changeLog %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-{{ name }}\">{{ 'Changelog'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {# end tab list #}
          </ul>
        </nav>
        <div class=\"tab-content\">
          {# tab content list #}
          <div id=\"overview-{{ name }}\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              {% if fullDescription %}
                {{ fullDescription|raw }}
              {% else %}
                {{ 'No description found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"additional-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if additionalDescription %}
                {{ additionalDescription|raw }}
              {% else %}
                {{ 'No additional description provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"features-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if features %}
                {{ features|raw }}
              {% else %}
                {{ 'No feature list provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"customer_benefits-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if customerBenefits %}
                {{ customerBenefits|raw }}
              {% else %}
                {{ 'No customer benefits notes found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"demo_video-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if demoVideo %}
                {{ youtube_link(demoVideo)|raw }}
              {% else %}
                {{ 'No demonstration video found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"changelog-{{ name }}\" class=\"tab-pane fade\">
            {% if changeLog %}
              <ul class=\"module-readmore-tab-content\">
                {% for version, lines in changeLog|arrayCast|reverse %}
                  <li>
                    <b>{{version}}:</b>
                    {% for line in lines %}
                      {{line}}<br/>
                    {% endfor %}
                  </li>
                {% endfor %}
              </ul>
            {% else %}
              {{ 'No changelog provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
            {% endif %}
          </div>
          {# end tab content list #}
        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      {% if badges %}
        <div class=\"pull-left module-badges-display\">
          {% for badge in badges %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endfor %}
        </div>
      {% endif %}
      {% include 'PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig' with { 'module': module, 'level' : level } %}
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more_content.html.twig");
    }
}
