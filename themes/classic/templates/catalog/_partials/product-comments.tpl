<div class="tab-pane fade{if !$product.description} in active{/if}" style="padding:0"
id="product-comments">

{block name='product_comments'}
<section>
  <table style="font-size: small;width: 100%">
    {foreach from=$product.comments item=comment}
    <tr style="border-bottom: 1px solid lightgray;">
      <td style="padding-bottom: 1rem;padding-top: 1rem;padding-left: 1rem">{$comment.content}</td>
      <td style="width: 25%;text-align:center;">
        <b>{$comment.firstname} {$comment.lastname}</b>
        <br/>
        <b>{$comment.date_add}</b>
      </td>
    </tr>
    {/foreach}
  </table>
</section>
{/block}


</div>
