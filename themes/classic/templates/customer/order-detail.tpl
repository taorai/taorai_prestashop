{**
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
 *}
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Order details' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  {block name='order_infos'}
    <div id="order-infos">
      <div class="box">
          <div class="row">
            <div class="col-xs-{if $order.details.reorder_url}9{else}12{/if}">
              <strong>
                {l
                  s='Order Reference %reference% - placed on %date%'
                  d='Shop.Theme.Customeraccount'
                  sprintf=['%reference%' => $order.details.reference, '%date%' => $order.details.order_date]
                }
              </strong>
            </div>
            {if $order.details.reorder_url}
              <div class="col-xs-3 text-xs-right">
                <a href="{$order.details.reorder_url}" class="button-primary">{l s='Reorder' d='Shop.Theme.Actions'}</a>
              </div>
            {/if}
            <div class="clearfix"></div>
          </div>
      </div>

      <div class="box">
          <ul>
            <li>
              <strong>{l s='Carrier' d='Shop.Theme.Checkout'}</strong> {$order.carrier.name} - 
              {$order.addresses.delivery.formatted_one_line nofilter}
            </li>
            <li>
              <div class="row">
                <div class="col-xs-8">
                  <strong>
                    {l s='Payment method' d='Shop.Theme.Checkout'}
                  </strong>
                  {if strcasecmp(trim($order.details.payment), "Wire payment") == 0}
                    {l s='Bank Transfer' d='Shop.Theme.Checkout'}
                  {/if}
                </div>
                {if strcasecmp(trim($order.details.payment), "Wire payment") == 0 && !$order.paid_status}
                  <div class="col-xs-4 text-xs-right">
                    <a href="###" class="button-primary" id="toggle-display-payment-details" style="display:block;" onclick="toggleWirePaymentDetail(1);">{l s='Show Detail' d='Shop.Theme.Actions'}</a>
                    <a href="###" class="button-primary" id="toggle-hide-payment-details" style="display:none;" onclick="toggleWirePaymentDetail(0);">{l s='Hide Detail' d='Shop.Theme.Actions'}</a>
                  </div>
                {/if}
              </div>
              
              {if strcasecmp(trim($order.details.payment), "Wire payment") == 0 && !$order.paid_status}
                <div id="div-payment-detail" style="display: none;padding: 1rem;">
                  {block name='hook_payment_return'}
                    {if ! empty($HOOK_PAYMENT_RETURN)}
                    <section id="content-hook_payment_return" class="card definition-list">
                      <div class="card-block">
                        <div class="row">
                          <div class="col-md-12">
                            {$HOOK_PAYMENT_RETURN nofilter}
                          </div>
                        </div>
                      </div>
                    </section>
                    {/if}
                  {/block}
                </div>
              {/if}
            </li>

            {if $order.details.recyclable}
              <li>
                {l s='You have given permission to receive your order in recycled packaging.' d='Shop.Theme.Customeraccount'}
              </li>
            {/if}

            {if $order.details.gift_message}
              <li>{l s='You have requested gift wrapping for this order.' d='Shop.Theme.Customeraccount'}</li>
              <li>{l s='Message' d='Shop.Theme.Customeraccount'} {$order.details.gift_message nofilter}</li>
            {/if}
          </ul>
      </div>
    </div>
  {/block}

  {block name='order_history'}
    <section id="order-history" class="box">
      <h3>{l s='Follow your order\'s status step-by-step' d='Shop.Theme.Customeraccount'}</h3>
      <table class="table table-bordered table-labeled hidden-xs-down">
        <thead class="thead-default">
          <tr>
            <th>{l s='Date' d='Shop.Theme'}</th>
            <th>{l s='Status' d='Shop.Theme'}</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$order.history item=state}
            <tr>
              <td>{$state.history_date}</td>
              <td>
                <span class="label label-pill {$state.contrast}" style="background-color:{$state.color}">
                  {$state.ostate_name}
                </span>
              </td>
            </tr>
          {/foreach}
        </tbody>
      </table>
      <div class="hidden-sm-up history-lines">
        {foreach from=$order.history item=state}
          <div class="history-line">
            <div class="date">{$state.history_date}</div>
            <div class="state" style="text-align: -webkit-right;">
              <span class="label label-pill {$state.contrast}" style="background-color:{$state.color}">
                {$state.ostate_name}
              </span>
            </div>
          </div>
        {/foreach}
      </div>
    </section>
  {/block}

  {if $order.follow_up}
    <div class="box">
      <p>{l s='Click the following link to track the delivery of your order' d='Shop.Theme.Customeraccount'}</p>
      <a href="{$order.follow_up}">{$order.follow_up}</a>
    </div>
  {/if}

  {$HOOK_DISPLAYORDERDETAIL nofilter}

  {block name='order_detail'}
    {if $order.details.is_returnable}
      {include file='customer/_partials/order-detail-return.tpl'}
    {else}
      {include file='customer/_partials/order-detail-no-return.tpl'}
    {/if}
  {/block}

  {block name='order_messages'}
    {include file='customer/_partials/order-messages.tpl'}
  {/block}
{/block}
