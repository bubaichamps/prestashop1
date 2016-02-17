<?php /* Smarty version Smarty-3.1.19, created on 2016-02-13 11:33:39
         compiled from "C:\xampp\htdocs\prestashop1\modules\livesparc\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2437756bec73be86aa4-21977830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c1f90d5282d96ef7d3dfd54d828fdfb551d26ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1\\modules\\livesparc\\views\\templates\\admin\\configure.tpl',
      1 => 1455240816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2437756bec73be86aa4-21977830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bec73beadbb7_12824179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bec73beadbb7_12824179')) {function content_56bec73beadbb7_12824179($_smarty_tpl) {?>

<div class="panel">
	<h3><i class="icon icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'livesparc','mod'=>'livesparc'),$_smarty_tpl);?>
</h3>
	<p>
		<strong><?php echo smartyTranslate(array('s'=>'Here is my new generic module!','mod'=>'livesparc'),$_smarty_tpl);?>
</strong><br />
		<?php echo smartyTranslate(array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'livesparc'),$_smarty_tpl);?>
<br />
		<?php echo smartyTranslate(array('s'=>'I can configure it using the following configuration form.','mod'=>'livesparc'),$_smarty_tpl);?>

	</p>
	<br />
	<p>
		<?php echo smartyTranslate(array('s'=>'This module will boost your sales!','mod'=>'livesparc'),$_smarty_tpl);?>

	</p>
</div>

<div class="panel">
	<h3><i class="icon icon-tags"></i> <?php echo smartyTranslate(array('s'=>'Documentation','mod'=>'livesparc'),$_smarty_tpl);?>
</h3>
	<p>
		&raquo; <?php echo smartyTranslate(array('s'=>'You can get a PDF documentation to configure this module','mod'=>'livesparc'),$_smarty_tpl);?>
 :
		<ul>
			<li><a href="#" target="_blank"><?php echo smartyTranslate(array('s'=>'English','mod'=>'livesparc'),$_smarty_tpl);?>
</a></li>
			<li><a href="#" target="_blank"><?php echo smartyTranslate(array('s'=>'French','mod'=>'livesparc'),$_smarty_tpl);?>
</a></li>
		</ul>
	</p>
</div>
<?php }} ?>
