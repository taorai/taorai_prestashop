<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig */
class __TwigTemplate_fbc00224f80e3b2b280f98d70dde8daaa10fb1f699511264e4c114c136a76d8e extends Twig_Template
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
        $__internal_4551a1c264d5ed09e6b4d5298fc91e2905d493361c9b6ae3c8473699810431e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4551a1c264d5ed09e6b4d5298fc91e2905d493361c9b6ae3c8473699810431e3->enter($__internal_4551a1c264d5ed09e6b4d5298fc91e2905d493361c9b6ae3c8473699810431e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig"));

        // line 25
        echo "<div id=\"module-modal-read-more-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
        echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? $this->getContext($context, "additionalModalSuffix")), "")) : ("")), "html", null, true);
        echo "\" class=\"modal modal-vcenter ps-modal-card fade\" role=\"dialog\">

</div>
";
        
        $__internal_4551a1c264d5ed09e6b4d5298fc91e2905d493361c9b6ae3c8473699810431e3->leave($__internal_4551a1c264d5ed09e6b4d5298fc91e2905d493361c9b6ae3c8473699810431e3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 25,);
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
<div id=\"module-modal-read-more-{{module.attributes.name}}{{ additionalModalSuffix|default('') }}\" class=\"modal modal-vcenter ps-modal-card fade\" role=\"dialog\">

</div>
", "PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more.html.twig");
    }
}
