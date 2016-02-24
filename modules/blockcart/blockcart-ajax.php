<?php
/*
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
*/
// @TODO Find the reason why the blockcart.php is includ multiple time
mysql_connect("localhost","root","");
mysql_select_db("prestashop1");
$root=mysql_query("select name from url");
if($url_now=mysql_fetch_array($root))
$currenturl=$url_now[0];


	$big=mysql_query("select * from ps_cart_product where id_shop=1 and id_cart=6");
	  while($big1=mysql_fetch_array($big))
	  {
		  
		  
		 $query="insert into ps_cart_product values(7,'$big1[1]',0,5,'$big1[4]','$big1[5]','$big1[6]')";
		 mysql_query($query);
		
		  $irely="insert into ps_cart_product values(10,'$big1[1]',0,3,'$big1[4]','$big1[5]','$big1[6]')";
		   mysql_query($irely);
		  $zopnow="insert into ps_cart_product values(8,'$big1[1]',0,2,'$big1[4]','$big1[5]','$big1[6]')";
		    mysql_query($zopnow);
		 $sangam="insert into ps_cart_product values(9,'$big1[1]',0,6,'$big1[4]','$big1[5]','$big1[6]')";
		  mysql_query($sangam);
		  
		  
		  
		  
	  }
	//cart intregation


$context = Context::getContext();
$blockCart = Module::getInstanceByName('blockcart');
echo $blockCart->hookAjaxCall(array('cookie' => $context->cookie, 'cart' => $context->cart));
