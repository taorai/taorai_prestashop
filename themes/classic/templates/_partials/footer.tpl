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
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <p>
          {block name='copyright_link'}
              {l s='%copyright% %year% - Powered by %taorai.asia%' sprintf=['%taorai.asia%' => 'taorai.asia', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme'}
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>

<script src="/themes/classic/assets/js/echo.min.js"></script>
<script language="JavaScript" type="text/javascript">
echo.init({
    offset: 1000,
    throttle: 250,
    unload: false
  });
</script>
<script language="JavaScript" type="text/javascript">
TrustLogo("https://taorai.asia/comodo_secure_seal.png", "CL1", "none");
</script>
<a  href="https://secure.comodo.com" id="comodoTL">Comodo SSL</a>