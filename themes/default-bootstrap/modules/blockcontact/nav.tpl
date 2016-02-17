{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="contact-link" {if isset($is_logged) && $is_logged} class="is_logged"{/if}>
	<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact us' mod='blockcontact'}">{l s='Contact us' mod='blockcontact'}</a>

	</div>
	
{if $telnumber}
	<span class="shop-phone{if isset($is_logged) && $is_logged} is_logged{/if}">
	<img src="http://localhost/prestashop1/traato.jpg" alt="Mountain View" style="width:60px;height:30px;">
	<a style="color:red;font-weight:bold;font-size:20px;font-family:Verdana, Geneva, sans-serif;">WELCOME TO TRAATO</a>
		
		
		
		
		
		
		
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<style>
select {
    border: 0 none;
 font-weight: bold;
    background: pink;
    font-size: 13px;
    font-weight: bold;
    padding: 1px 10px;

   
}

</style>
<select id="foo1" style="word-wrap:break-word;">
<option value="">Pick A Grocery store</option>
<option value="http://localhost/prestashop1/">bigbusket</option>
<option value="http://localhost/prestashop1/irely/">irely</option>
<option value="http://localhost/prestashop1/zopnow/">zopnow</option>
<option value="http://localhost/prestashop1/askmegrocery/">askmegrocery</option>
<option value="http://localhost/prestashop1/sangamdirect/">sangamdirect</option>
</select>
<script>
document.getElementById("foo1").onchange = function()
 {
  window.location.href = this.value;     
    }   
</script>	
		<!--<i class="icon-phone"></i>{l s='Call us now:' mod='blockcontact'} <strong>{$telnumber}</strong>-->
		

<style>
a.view:link {
    color: red;
    background-color: transparent;
    text-decoration: none;
	font-size:170%;
	

}
a.view:visited {
    color: red;
    background-color: transparent;
    text-decoration: none;
	font-size:20%;
	font-weight:bold;
	
}
a.view:hover {
    color:red;
    background-color: transparent;
    text-decoration:none;
	font-weight:bold;
	 
    border-width: medium;
}
a.view:active {
    color: cyan;
    background-color: transparent;
    text-decoration: underline;
}
</style>
		
		




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://localhost/prestashop1/module/livesparc/test" class="view">Lowest Basket</a>
		
		
		
		
		
		
		
		
		
	</span>
	
{/if}
