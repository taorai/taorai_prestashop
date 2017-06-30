<div class="tab-pane fade{if !$product.description} in active{/if}" style="padding:0"
id="product-comments">

{block name='product_comments'}
<section>
  <table style="font-size: small;width: 100%">
    {foreach from=$product.comments item=comment}
    <tr style="border-bottom: 1px solid lightgray;">
      <td style="padding-bottom: 1rem;padding-top: 1rem;padding-left: 1rem">
        <div style="margin-bottom: 1rem;">
          {$comment.content}
        </div>
        <div>
          {if $comment.path_img1 != ""}
            <img src="{$comment.path_img1}" style="max-width:48px; margin-right: 1rem; cursor: pointer;" onclick="showFullImage('{$comment.path_img1}');">
          {/if}
          {if $comment.path_img2 != ""}
            <img src="{$comment.path_img2}" style="max-width:48px; margin-right: 1rem; cursor: pointer;" onclick="showFullImage('{$comment.path_img2}');">
          {/if}
          {if $comment.path_img3 != ""}
            <img src="{$comment.path_img3}" style="max-width:48px; margin-right: 1rem; cursor: pointer;" onclick="showFullImage('{$comment.path_img3}');">
          {/if}
        </div>
      </td>
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

<div id="div-product-comments" class="modal fade in" style="text-align: center;padding-top: 10%; background: rgba(30,30,30,0.5);" onclick="dismissFullImage();">
  <img src="" style="max-width: 90%;" id="img_product_comment">
</div>

