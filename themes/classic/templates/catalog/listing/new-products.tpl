{*
 * This file allows you to customize your new-product page.
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
			<div id="js-product-list-top" class="row products-selection">
			  <div class="col-md-6 hidden-sm-down total-products">
			    {if $listing.pagination.total_items > 1}
			      <p>{l s='There are %product_count% products.' d='Shop.Theme.Catalog' sprintf=['%product_count%' => $listing.pagination.total_items]}</p>
			    {else if $listing.pagination.total_items > 0}
			      <p>{l s='There is 1 product.' d='Shop.Theme.Catalog'}</p>
			    {/if}
			  </div>
			  <div class="col-sm-12 hidden-md-up text-xs-center showing">
			    {l s='Showing %from%-%to% of %total% item(s)' d='Shop.Theme.Catalog' sprintf=[
			    '%from%' => $listing.pagination.items_shown_from ,
			    '%to%' => $listing.pagination.items_shown_to,
			    '%total%' => $listing.pagination.total_items
			    ]}
			  </div>
			</div>
        </div>

        {block name='product_list_active_filters'}
          <div id="" class="hidden-sm-down">
            {$listing.rendered_active_filters nofilter}
          </div>
        {/block}

        <div id="">
          <div id="js-product-list">
			<div class="products row" style="justify-content: space-between;">
			    {foreach from=$listing.products item="product"}
			      {block name='product_miniature'}
			        {include file='catalog/_partials/miniatures/product.tpl' product=$product}
			      {/block}
			    {/foreach}
			</div>

			<div class="hidden-md-up text-xs-right up">
			    <a href="#header" class="btn btn-secondary">
			      {l s='Back to top' d='Shop.Theme.Actions'}
			      <i class="material-icons">&#xE316;</i>
			    </a>
			</div>
		  </div>

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