{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{block name='social_sharing'}
  {if $social_share_links}
    <div class="social-sharing">
      <span style="margin-right:1rem;">{l s='Share' d='Shop.Theme.Actions'}</span>
      <!-- <ul> -->
        <!-- {foreach from=$social_share_links item='social_share_link'}
          <li class="{$social_share_link.class} icon-gray"><a href="{$social_share_link.url}" class="text-hide" title="{$social_share_link.label}" target="_blank">{$social_share_link.label}</a></li>
        {/foreach} -->
        <!-- <li> -->
          <div class="line-it-button" data-lang="en" data-type="share-d" data-url="{$social_share_links['LINE'].url}" style="display: none;margin-left:1rem;"></div>
        <!-- </li>
        <li> -->
          <div style="margin-left:1rem;">
            <a target="_blank" href="{$social_share_links['facebook'].url}">
              <img src="/img/facebook_40_40.png" />
            </a></div>
        <!-- </li> -->
      <!-- </ul> -->
      
      <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    </div>
  {/if}
{/block}
