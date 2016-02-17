<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 13:30:01
         compiled from "C:\xampp\htdocs\prestashop1\modules\livesparc\views\templates\front\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652656bec73bf328d7-05929370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc47ea81416eef2e3e9874939023030f593ef1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1\\modules\\livesparc\\views\\templates\\front\\test.tpl',
      1 => 1455609596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652656bec73bf328d7-05929370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bec73bf36751_17040782',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bec73bf36751_17040782')) {function content_56bec73bf36751_17040782($_smarty_tpl) {?>

<div class="panel">
<script language="javascript" type="text/javascript">

        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=yes, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        
 window.location = "http://localhost/prestashop1/";

    return false;
		
		} 
    </script>
</head>
<body onload="OpenPopupCenter('http://localhost/prestashop1/cart_comp1.php', 'TEST!?', 800, 600);">
    
</body>

<?php }} ?>
