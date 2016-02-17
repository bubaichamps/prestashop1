<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 17:09:16
         compiled from "C:\xampp\htdocs\prestashop1\themes\default-bootstrap\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2469756bec7431e3899-07381048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6b1baf3d1973b20c283d662a2f9cdf1cc4fc7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1\\themes\\default-bootstrap\\modules\\blockcontact\\nav.tpl',
      1 => 1455622751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2469756bec7431e3899-07381048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bec7432126a3_59420533',
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bec7432126a3_59420533')) {function content_56bec7432126a3_59420533($_smarty_tpl) {?>

<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>

	</div>
	
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
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
		<!--<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>-->
		

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
	
<?php }?>
<?php }} ?>
