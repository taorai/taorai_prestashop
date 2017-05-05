{extends file='customer/_partials/address-form.tpl'}

{block name='form_field'}
  {if $field.name eq "alias"}
    {* we don't ask for alias here *}
  {else}
    {$smarty.block.parent}
  {/if}
{/block}



{block name='form_buttons'}
  {if !$form_has_continue_button}
    <button type="submit" class="btn btn-primary pull-xs-right">{l s='Save' d='Shop.Theme.Actions'}</button>
    <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress={$type}">{l s='Cancel' d='Shop.Theme.Actions'}</a>
  {else}
    <form>
      <button type="submit" class="continue btn btn-primary pull-xs-right" name="confirm-addresses" value="1">
          {l s='Continue' d='Shop.Theme.Actions'}
      </button>
      {if $customer.addresses|count > 0}
        <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress={$type}">{l s='Cancel' d='Shop.Theme.Actions'}</a>
      {/if}
    </form>
  {/if}
{/block}
