<?php /* Smarty version Smarty-3.1.19, created on 2016-02-13 13:41:23
         compiled from "C:\xampp\htdocs\prestashop1\admin120uo4kbc\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133056bee52b93d3f0-70657665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b94b430dbecc6711dff7904de50726a7bc44bc47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1\\admin120uo4kbc\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1452079228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133056bee52b93d3f0-70657665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bee52b9a2d00_67607491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bee52b9a2d00_67607491')) {function content_56bee52b9a2d00_67607491($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
