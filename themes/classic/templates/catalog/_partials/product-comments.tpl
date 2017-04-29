<div class="tab-pane fade{if !$product.description} in active{/if}"
     id="product-comments">
 

  {block name='product_comments'}
    {if $product.comments}
      <section class="product-comments">
          {foreach from=$product.comments item=comment}
            <dt class="name">{$comment.name}</dt>
            <dd class="value">{$comment.value}</dd>
          {/foreach}
        </dl>
      </section>
    {/if}
  {/block}


</div>
