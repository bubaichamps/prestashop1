<?php /* Smarty version Smarty-3.1.19, created on 2016-02-15 11:46:39
         compiled from "C:\xampp\htdocs\prestashop1\modules\compare\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45456c16d475e3c35-02257605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16d9148f2be8dde85437b48e5be28660e018cdcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1\\modules\\compare\\views\\templates\\admin\\configure.tpl',
      1 => 1455500326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45456c16d475e3c35-02257605',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c16d476b6b64_24513771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c16d476b6b64_24513771')) {function content_56c16d476b6b64_24513771($_smarty_tpl) {?>

<div class="panel">
	<h3><i class="icon icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'compare','mod'=>'compare'),$_smarty_tpl);?>
</h3>
	<p>
		<strong><?php echo smartyTranslate(array('s'=>'Here is my new generic module!','mod'=>'compare'),$_smarty_tpl);?>
</strong><br />
		<?php echo smartyTranslate(array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'compare'),$_smarty_tpl);?>
<br />
		<?php echo smartyTranslate(array('s'=>'I can configure it using the following configuration form.','mod'=>'compare'),$_smarty_tpl);?>

	</p>
	<br />
	<p>
		<?php echo smartyTranslate(array('s'=>'This module will boost your sales!','mod'=>'compare'),$_smarty_tpl);?>

	</p>
</div>

<div class="panel">
	<h3><i class="icon icon-tags"></i> <?php echo smartyTranslate(array('s'=>'Documentation','mod'=>'compare'),$_smarty_tpl);?>
</h3>
	<p>
		&raquo; <?php echo smartyTranslate(array('s'=>'You can get a PDF documentation to configure this module','mod'=>'compare'),$_smarty_tpl);?>
 :
		<ul>
			<li><a href="#" target="_blank"><?php echo smartyTranslate(array('s'=>'English','mod'=>'compare'),$_smarty_tpl);?>
</a></li>
			<li><a href="#" target="_blank"><?php echo smartyTranslate(array('s'=>'French','mod'=>'compare'),$_smarty_tpl);?>
</a></li>
		</ul>
	</p>
</div>
<?php }} ?>
