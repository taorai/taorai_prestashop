{*
 * This file allows you to customize your price-drop page.
 * You can safely remove it if you want it to appear exactly like all other product listing pages
 *}
{extends file='layouts/layout-full-width.tpl'}

{block name='content'}
  <section id="main" style="padding-left: 1rem;padding-right: 1rem;">

    {block name='product_list_header'}
      <h2 class="h2">{$listing.label}</h2>
    {/block}

    <section id="products">
      {if $listing.products|count}

        <div id="">
          {block name='product_list_top'}
            {include file='catalog/_partials/products-top.tpl' listing=$listing}
          {/block}
        </div>

        {block name='product_list_active_filters'}
          <div id="" class="hidden-sm-down">
            {$listing.rendered_active_filters nofilter}
          </div>
        {/block}

        <div id="">
          {block name='product_list'}
            {include file='catalog/_partials/products.tpl' listing=$listing}
          {/block}
        </div>

        <div id="js-product-list-bottom">
          {block name='product_list_bottom'}
            {include file='catalog/_partials/products-bottom.tpl' listing=$listing}
          {/block}
        </div>

      {else}

        {include file='errors/not-found.tpl'}

      {/if}
    </section>

  </section>
{/block}
