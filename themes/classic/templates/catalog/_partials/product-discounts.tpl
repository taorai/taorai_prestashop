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
<section class="product-discounts">
  {if $product.quantity_discounts}
    <h3 class="h6 product-discounts-title">{l s='Volume discounts' d='Shop.Theme.Catalog'}</h3>
    {block name='product_discount_table'}
      <table class="table-product-discounts">
        <thead>
        <tr>
          <th>{l s='Quantity' d='Shop.Theme.Catalog'}</th>
          <th>{l s='Wholesale Price' d='Shop.Theme.Catalog'}</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td>0 - {$product.quantity_discounts[0].quantity - 1}</td>
            <td>{$product.original_price}</td>
          </tr>
          {foreach from=$product.quantity_discounts item='quantity_discount' key='index' name='quantity_discounts'}
            {if $index > 0}
              <tr>
                <td>{$product.quantity_discounts[$index - 1].quantity} - {$quantity_discount.quantity - 1}</td>
                <td>{$product.original_price - $product.quantity_discounts[$index - 1].real_value}</td>
              </tr>
            {/if}
          {/foreach}
          <tr>
            <td>{l s='More than %quantity%' d='Shop.Theme.Catalog' sprintf=['%quantity%' => $product.quantity_discounts[count($product.quantity_discounts) - 1].quantity]}</td>
            <td>{$product.original_price - $product.quantity_discounts[count($product.quantity_discounts) - 1].real_value}</td>
          </tr>
        </tbody>
      </table>
    {/block}
  {/if}
</section>
