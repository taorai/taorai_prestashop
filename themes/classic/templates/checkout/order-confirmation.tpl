<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="{$page.body_classes|classnames}">
<main>
    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}

    <header id="header" style="filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
-webkit-filter: grayscale(100%);">
      {block name='header'}
        {include file='checkout/_partials/header.tpl'}
      {/block}
    </header>

    {block name='notifications'}
      {include file='_partials/notifications.tpl'}
    {/block}

    <section id="wrapper">
      <div class="container">

        {block name='page_content_container' prepend}
          <section id="content-hook_order_confirmation" class="card">
            <div class="card-block">
              <div class="row">
                <div class="col-md-12">

                  {block name='order_confirmation_header'}
                    <h3 class="h1 card-title">
                      <i class="material-icons done">&#xE876;</i>{l s='Your order is confirmed' d='Shop.Theme.Checkout'}
                    </h3>
                  {/block}

<!--                   <p>
                    {l s='An email has been sent to your mail address %email%.' d='Shop.Theme.Checkout' sprintf=['%email%' => $customer.email]}
                    {if $order.details.invoice_url}
                      {* [1][/1] is for a HTML tag. *}
                      {l
                        s='You can also [1]download your invoice[/1]'
                        d='Shop.Theme.Checkout'
                        sprintf=[
                          '[1]' => "<a href='{$order.details.invoice_url}'>",
                          '[/1]' => "</a>"
                        ]
                      }
                    {/if}
                  </p> -->

                  {block name='hook_order_confirmation'}
                    {$HOOK_ORDER_CONFIRMATION nofilter}
                  {/block}

                </div>
              </div>
            </div>
          </section>
        {/block}

        {block name='page_content_container'}
          <section id="content" class="page-content page-order-confirmation card">
            <div class="card-block">
              <div class="row">

                {block name='order_confirmation_table'}
                  {include
                    file='checkout/_partials/order-confirmation-table.tpl'
                    products=$order.products
                    subtotals=$order.subtotals
                    totals=$order.totals
                    labels=$order.labels
                    add_product_link=false
                  }
                {/block}

                {block name='order_details'}
                  <div id="order-details" class="col-md-4">
                    <h3 class="h3 card-title">{l s='Order details' d='Shop.Theme.Checkout'}:</h3>
                    <ul>
                      <li>{l s='Order reference: %reference%' d='Shop.Theme.Checkout' sprintf=['%reference%' => $order.details.reference]}</li>
                      <li>
                        {l s='Payment method' d='Shop.Theme.Checkout'}: 
                        {if strcasecmp(trim($order.details.payment), "Wire payment") == 0}
                          {l s='Bank Transfer' d='Shop.Theme.Checkout'}
                        {/if}
                      </li>
                      {if !$order.details.is_virtual}
                        <li>
                          {l s='Shipping method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.carrier.name]}<br>
                        </li>
                      {/if}
                    </ul>
                  </div>
                {/block}

              </div>
            </div>
          </section>

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

          {block name='customer_registration_form'}
            {if $customer.is_guest}
              <div id="registration-form" class="card">
                <div class="card-block">
                  <h4 class="h4">{l s='Save time on your next order, sign up now' d='Shop.Theme.Checkout'}</h4>
                  {render file='customer/_partials/customer-form.tpl' ui=$register_form}
                </div>
              </div>
            {/if}
          {/block}

          {block name='hook_order_confirmation_1'}
            {hook h='displayOrderConfirmation1'}
          {/block}

          {block name='hook_order_confirmation_2'}
            <section id="content-hook-order-confirmation-footer">
              {hook h='displayOrderConfirmation2'}
            </section>
          {/block}
        {/block}

      </div>
    </section>

    <footer id="footer">
      {block name='footer'}
        {include file='checkout/_partials/footer.tpl'}
      {/block}
    </footer>

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}
</main>
<!-- Google Code for taorai.asia Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 850442717;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "OABtCJTSjnMQ3fPClQM";
var google_conversion_value = 1.00;
var google_conversion_currency = "THB";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/850442717/?value=1.00&amp;currency_code=THB&amp;label=OABtCJTSjnMQ3fPClQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

  </body>

</html>
