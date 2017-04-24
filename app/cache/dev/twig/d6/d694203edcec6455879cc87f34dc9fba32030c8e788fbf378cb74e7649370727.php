<?php

/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 26);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a672f6967e02f8aae4037fd014d91781bba0907f046bd0af6db613f1390c522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a672f6967e02f8aae4037fd014d91781bba0907f046bd0af6db613f1390c522->enter($__internal_6a672f6967e02f8aae4037fd014d91781bba0907f046bd0af6db613f1390c522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), array(0 => $this));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a672f6967e02f8aae4037fd014d91781bba0907f046bd0af6db613f1390c522->leave($__internal_6a672f6967e02f8aae4037fd014d91781bba0907f046bd0af6db613f1390c522_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b149b979b31c66c8b209dece00cedce3403f0167f5cf8ea89648247d0c8f7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b149b979b31c66c8b209dece00cedce3403f0167f5cf8ea89648247d0c8f7f9b->enter($__internal_b149b979b31c66c8b209dece00cedce3403f0167f5cf8ea89648247d0c8f7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b149b979b31c66c8b209dece00cedce3403f0167f5cf8ea89648247d0c8f7f9b->leave($__internal_b149b979b31c66c8b209dece00cedce3403f0167f5cf8ea89648247d0c8f7f9b_prof);

    }

    // line 36
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_071b06b439bd8911c7513a90ff93930b300c3ff4bc15a7834b21a8817dd9abea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071b06b439bd8911c7513a90ff93930b300c3ff4bc15a7834b21a8817dd9abea->enter($__internal_071b06b439bd8911c7513a90ff93930b300c3ff4bc15a7834b21a8817dd9abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
    </div>";
        
        $__internal_071b06b439bd8911c7513a90ff93930b300c3ff4bc15a7834b21a8817dd9abea->leave($__internal_071b06b439bd8911c7513a90ff93930b300c3ff4bc15a7834b21a8817dd9abea_prof);

    }

    // line 46
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_1882d0e091103766371da9a1c4ea43e7db05b993c588c10331f614692027c1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1882d0e091103766371da9a1c4ea43e7db05b993c588c10331f614692027c1de->enter($__internal_1882d0e091103766371da9a1c4ea43e7db05b993c588c10331f614692027c1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 47
        echo "<li>
        ";
        // line 48
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 49
        echo "
         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
        echo "
                 <input
                   type=\"radio\"
                   name=\"form[";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
                   value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo "
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        ";
        // line 61
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 62
            echo "            <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    ";
                $context["child"] = $context["item"];
                // line 65
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>
        ";
        }
        // line 69
        echo "    </li>";
        
        $__internal_1882d0e091103766371da9a1c4ea43e7db05b993c588c10331f614692027c1de->leave($__internal_1882d0e091103766371da9a1c4ea43e7db05b993c588c10331f614692027c1de_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f8786f61b6237278bdce9e51d6302cb85c26c66065fd73625f5d9d808c84888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8786f61b6237278bdce9e51d6302cb85c26c66065fd73625f5d9d808c84888->enter($__internal_5f8786f61b6237278bdce9e51d6302cb85c26c66065fd73625f5d9d808c84888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "
  <div class=\"products-catalog\">

    ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 80
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 81
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              ";
            // line 87
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 93
        echo "
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["import_link"] ?? $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
              ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => (($context["offset"] ?? $this->getContext($context, "offset")) + ($context["limit"] ?? $this->getContext($context, "limit"))), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        >
          ";
        // line 134
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 146
        echo "
          ";
        // line 148
        echo "          ";
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 149
            echo "            ";
            $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
            // line 159
            echo "          ";
        }
        // line 160
        echo "
          ";
        // line 161
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 171
        echo "
          ";
        // line 172
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 172)->display(array_merge($context, array("div_style" => "btn-group dropup", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "tertiary-outline", "menu_icon" => "icon-caret-up", "items" =>         // line 179
($context["buttons_action"] ?? $this->getContext($context, "buttons_action")))));
        // line 181
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["categories"] ?? $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "desc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 247
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 248
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 249
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 250
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 251
        echo "\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    ";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 257
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 257)->display(array_merge($context, array("column" => "id_product")));
        // line 260
        echo "                  </th>
                  <th>
                    ";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th>
                    ";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 266
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 266)->display(array_merge($context, array("column" => "name")));
        // line 269
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 272
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 272)->display(array_merge($context, array("column" => "reference")));
        // line 275
        echo "                  </th>
                  <th>
                    ";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 278
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 278)->display(array_merge($context, array("column" => "name_category")));
        // line 281
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 284
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 284)->display(array_merge($context, array("column" => "price")));
        // line 287
        echo "                  </th>

                  ";
        // line 289
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 290
            echo "                  <th style=\"width: 9%\">
                    ";
            // line 291
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 292
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 292)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 295
            echo "                  </th>
                  ";
        } else {
            // line 297
            echo "                    <th></th>
                  ";
        }
        // line 299
        echo "
                  <th>
                    ";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 302
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 302)->display(array_merge($context, array("column" => "active")));
        // line 305
        echo "                  </th>
                  ";
        // line 306
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 307
            echo "                    <th>
                      ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 309
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 309)->display(array_merge($context, array("column" => "position")));
            // line 312
            echo "                    </th>
                  ";
        }
        // line 314
        echo "                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 318
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 318)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 324
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")))));
        // line 326
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 334
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 343
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 352
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 356
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 356)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 362
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")))));
        // line 364
        echo "                  </th>

                  ";
        // line 366
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 367
            echo "                  <th>
                    ";
            // line 368
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 368)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 374
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")))));
            // line 376
            echo "                  </th>
                  ";
        } else {
            // line 378
            echo "                    <th></th>
                  ";
        }
        // line 380
        echo "
                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" ";
        // line 384
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                      <option value=\"0\" ";
        // line 385
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                    </select>
                  </th>
                  ";
        // line 388
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 389
            echo "                    <th>
                      ";
            // line 390
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 391
                echo "                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 393
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 395
            echo "
                    </th>
                  ";
        }
        // line 398
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 421
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 422
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 423
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 424
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 425
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 426
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 427
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 428
        echo "
            </table>
          </div>
        </div>

        ";
        // line 433
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 434
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 436
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 437
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_parameters" => ($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" => ($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices")))));
            // line 438
            echo "
            </div>
          </div>
        ";
        }
        // line 442
        echo "
      </form>

    </div>
  </div>

  ";
        // line 449
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 449, "760618790")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 468
        echo "

  ";
        // line 471
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 471, "339867768")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 490
        echo "

  ";
        // line 493
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 493, "1105145241")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 512
        echo "

  ";
        // line 515
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 515, "2023377798")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 534
        echo "

  ";
        // line 537
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 537, "521627311")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 554
        echo "
  ";
        // line 555
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 555, "516094445")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 575
        echo "
";
        
        $__internal_5f8786f61b6237278bdce9e51d6302cb85c26c66065fd73625f5d9d808c84888->leave($__internal_5f8786f61b6237278bdce9e51d6302cb85c26c66065fd73625f5d9d808c84888_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_760618790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 449
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 449);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b012b8e23fd6b4373ff0c84752dba58f87cbaa423f74ec3d1e8d460ef74c1167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b012b8e23fd6b4373ff0c84752dba58f87cbaa423f74ec3d1e8d460ef74c1167->enter($__internal_b012b8e23fd6b4373ff0c84752dba58f87cbaa423f74ec3d1e8d460ef74c1167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b012b8e23fd6b4373ff0c84752dba58f87cbaa423f74ec3d1e8d460ef74c1167->leave($__internal_b012b8e23fd6b4373ff0c84752dba58f87cbaa423f74ec3d1e8d460ef74c1167_prof);

    }

    // line 459
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb018982889787d7cf44451406869fcdd0f7d23f29fef32196678b613eee96dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb018982889787d7cf44451406869fcdd0f7d23f29fef32196678b613eee96dd->enter($__internal_cb018982889787d7cf44451406869fcdd0f7d23f29fef32196678b613eee96dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 460
        echo "      <div class=\"modal-body\">
        ";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_cb018982889787d7cf44451406869fcdd0f7d23f29fef32196678b613eee96dd->leave($__internal_cb018982889787d7cf44451406869fcdd0f7d23f29fef32196678b613eee96dd_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_339867768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 471
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 471);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22e9a09d1c80af238cabcdc0d83f1203f2b91be89925954bedb3d46b4e9fe81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22e9a09d1c80af238cabcdc0d83f1203f2b91be89925954bedb3d46b4e9fe81->enter($__internal_b22e9a09d1c80af238cabcdc0d83f1203f2b91be89925954bedb3d46b4e9fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22e9a09d1c80af238cabcdc0d83f1203f2b91be89925954bedb3d46b4e9fe81->leave($__internal_b22e9a09d1c80af238cabcdc0d83f1203f2b91be89925954bedb3d46b4e9fe81_prof);

    }

    // line 481
    public function block_content($context, array $blocks = array())
    {
        $__internal_eaef53b0bb016b312b8a0f32f09a971d21b5a862bfb34df53b9c2df0891b016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaef53b0bb016b312b8a0f32f09a971d21b5a862bfb34df53b9c2df0891b016c->enter($__internal_eaef53b0bb016b312b8a0f32f09a971d21b5a862bfb34df53b9c2df0891b016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 482
        echo "      <div class=\"modal-body\">
        ";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_eaef53b0bb016b312b8a0f32f09a971d21b5a862bfb34df53b9c2df0891b016c->leave($__internal_eaef53b0bb016b312b8a0f32f09a971d21b5a862bfb34df53b9c2df0891b016c_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2120 => 485,  2115 => 483,  2112 => 482,  2106 => 481,  2083 => 471,  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_1105145241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 493
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 493);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c250da3ce12ff64cc0c952246324b251d9104a959720fb666fe1afb76a0bc649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250da3ce12ff64cc0c952246324b251d9104a959720fb666fe1afb76a0bc649->enter($__internal_c250da3ce12ff64cc0c952246324b251d9104a959720fb666fe1afb76a0bc649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c250da3ce12ff64cc0c952246324b251d9104a959720fb666fe1afb76a0bc649->leave($__internal_c250da3ce12ff64cc0c952246324b251d9104a959720fb666fe1afb76a0bc649_prof);

    }

    // line 503
    public function block_content($context, array $blocks = array())
    {
        $__internal_f40b55d522f7150c886bbbc5302dc01a70b9ed84a8c48af934c51798002c0ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40b55d522f7150c886bbbc5302dc01a70b9ed84a8c48af934c51798002c0ab9->enter($__internal_f40b55d522f7150c886bbbc5302dc01a70b9ed84a8c48af934c51798002c0ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 504
        echo "      <div class=\"modal-body\">
        ";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_f40b55d522f7150c886bbbc5302dc01a70b9ed84a8c48af934c51798002c0ab9->leave($__internal_f40b55d522f7150c886bbbc5302dc01a70b9ed84a8c48af934c51798002c0ab9_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2781 => 507,  2776 => 505,  2773 => 504,  2767 => 503,  2744 => 493,  2120 => 485,  2115 => 483,  2112 => 482,  2106 => 481,  2083 => 471,  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_2023377798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 515
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 515);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995d6d750c272b9ee5f9ebcffbe45d60a25115e31bbc0dba09692c791309d43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995d6d750c272b9ee5f9ebcffbe45d60a25115e31bbc0dba09692c791309d43f->enter($__internal_995d6d750c272b9ee5f9ebcffbe45d60a25115e31bbc0dba09692c791309d43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995d6d750c272b9ee5f9ebcffbe45d60a25115e31bbc0dba09692c791309d43f->leave($__internal_995d6d750c272b9ee5f9ebcffbe45d60a25115e31bbc0dba09692c791309d43f_prof);

    }

    // line 525
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a907d830a26c006d3fe1e58102b12cae7d6580f5b7d56ee8c8755c94ecdd408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a907d830a26c006d3fe1e58102b12cae7d6580f5b7d56ee8c8755c94ecdd408->enter($__internal_0a907d830a26c006d3fe1e58102b12cae7d6580f5b7d56ee8c8755c94ecdd408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 526
        echo "      <div class=\"modal-body\">
        ";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_0a907d830a26c006d3fe1e58102b12cae7d6580f5b7d56ee8c8755c94ecdd408->leave($__internal_0a907d830a26c006d3fe1e58102b12cae7d6580f5b7d56ee8c8755c94ecdd408_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3442 => 529,  3437 => 527,  3434 => 526,  3428 => 525,  3405 => 515,  2781 => 507,  2776 => 505,  2773 => 504,  2767 => 503,  2744 => 493,  2120 => 485,  2115 => 483,  2112 => 482,  2106 => 481,  2083 => 471,  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_521627311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 537
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 537);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea756c2e295cb4586f7c774fabe52817c337b05ce8dd03b7c818a913e2687792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea756c2e295cb4586f7c774fabe52817c337b05ce8dd03b7c818a913e2687792->enter($__internal_ea756c2e295cb4586f7c774fabe52817c337b05ce8dd03b7c818a913e2687792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea756c2e295cb4586f7c774fabe52817c337b05ce8dd03b7c818a913e2687792->leave($__internal_ea756c2e295cb4586f7c774fabe52817c337b05ce8dd03b7c818a913e2687792_prof);

    }

    // line 548
    public function block_content($context, array $blocks = array())
    {
        $__internal_86688c3c576213cecd39100b13d667cf50b6bdd8aafe5aef72212961cf578102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86688c3c576213cecd39100b13d667cf50b6bdd8aafe5aef72212961cf578102->enter($__internal_86688c3c576213cecd39100b13d667cf50b6bdd8aafe5aef72212961cf578102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 549
        echo "      <div class=\"modal-body\">
        ";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_86688c3c576213cecd39100b13d667cf50b6bdd8aafe5aef72212961cf578102->leave($__internal_86688c3c576213cecd39100b13d667cf50b6bdd8aafe5aef72212961cf578102_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4098 => 550,  4095 => 549,  4089 => 548,  4066 => 537,  3442 => 529,  3437 => 527,  3434 => 526,  3428 => 525,  3405 => 515,  2781 => 507,  2776 => 505,  2773 => 504,  2767 => 503,  2744 => 493,  2120 => 485,  2115 => 483,  2112 => 482,  2106 => 481,  2083 => 471,  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f3a3815645b875a35b1f4f77b713227a2800e9364f13424a7e4f6ccdb856a28e_516094445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 555
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 555);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4c5899a7df886c42a877546d1c61ed61e96e0c2f51b02357c589fc646085132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c5899a7df886c42a877546d1c61ed61e96e0c2f51b02357c589fc646085132->enter($__internal_e4c5899a7df886c42a877546d1c61ed61e96e0c2f51b02357c589fc646085132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c5899a7df886c42a877546d1c61ed61e96e0c2f51b02357c589fc646085132->leave($__internal_e4c5899a7df886c42a877546d1c61ed61e96e0c2f51b02357c589fc646085132_prof);

    }

    // line 566
    public function block_content($context, array $blocks = array())
    {
        $__internal_56ef34427815d880dd68be8523e72e20a05463bf3aa48706c8b8ee7c39dd8997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ef34427815d880dd68be8523e72e20a05463bf3aa48706c8b8ee7c39dd8997->enter($__internal_56ef34427815d880dd68be8523e72e20a05463bf3aa48706c8b8ee7c39dd8997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 567
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_56ef34427815d880dd68be8523e72e20a05463bf3aa48706c8b8ee7c39dd8997->leave($__internal_56ef34427815d880dd68be8523e72e20a05463bf3aa48706c8b8ee7c39dd8997_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4750 => 567,  4744 => 566,  4721 => 555,  4098 => 550,  4095 => 549,  4089 => 548,  4066 => 537,  3442 => 529,  3437 => 527,  3434 => 526,  3428 => 525,  3405 => 515,  2781 => 507,  2776 => 505,  2773 => 504,  2767 => 503,  2744 => 493,  2120 => 485,  2115 => 483,  2112 => 482,  2106 => 481,  2083 => 471,  1459 => 463,  1454 => 461,  1451 => 460,  1445 => 459,  1422 => 449,  801 => 575,  799 => 555,  796 => 554,  793 => 537,  789 => 534,  786 => 515,  782 => 512,  779 => 493,  775 => 490,  772 => 471,  768 => 468,  765 => 449,  757 => 442,  751 => 438,  749 => 437,  748 => 436,  744 => 434,  742 => 433,  735 => 428,  733 => 427,  732 => 426,  731 => 425,  730 => 424,  729 => 423,  728 => 422,  727 => 421,  719 => 416,  713 => 413,  703 => 406,  697 => 403,  690 => 398,  685 => 395,  679 => 393,  673 => 391,  671 => 390,  668 => 389,  666 => 388,  658 => 385,  652 => 384,  646 => 380,  642 => 378,  638 => 376,  636 => 374,  635 => 368,  632 => 367,  630 => 366,  626 => 364,  624 => 362,  623 => 356,  616 => 352,  611 => 350,  601 => 343,  596 => 341,  586 => 334,  581 => 332,  573 => 326,  571 => 324,  570 => 318,  564 => 314,  560 => 312,  558 => 309,  554 => 308,  551 => 307,  549 => 306,  546 => 305,  544 => 302,  540 => 301,  536 => 299,  532 => 297,  528 => 295,  526 => 292,  522 => 291,  519 => 290,  517 => 289,  513 => 287,  511 => 284,  507 => 283,  503 => 281,  501 => 278,  497 => 277,  493 => 275,  491 => 272,  487 => 271,  483 => 269,  481 => 266,  477 => 265,  471 => 262,  467 => 260,  465 => 257,  461 => 256,  454 => 251,  452 => 250,  451 => 249,  450 => 248,  449 => 247,  448 => 246,  437 => 238,  430 => 234,  426 => 233,  422 => 232,  410 => 223,  404 => 220,  391 => 210,  378 => 200,  363 => 188,  354 => 181,  352 => 179,  351 => 172,  348 => 171,  346 => 161,  343 => 160,  340 => 159,  337 => 149,  334 => 148,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/home/steven/GitRepository/taorai/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}
