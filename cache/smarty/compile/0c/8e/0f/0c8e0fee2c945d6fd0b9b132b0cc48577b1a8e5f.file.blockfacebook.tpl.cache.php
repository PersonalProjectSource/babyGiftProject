<?php /* Smarty version Smarty-3.1.19, created on 2016-04-30 00:42:08
         compiled from "/var/www/babyGift/prestashop/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4943667945723e340c920f8-18698780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8e0fee2c945d6fd0b9b132b0cc48577b1a8e5f' => 
    array (
      0 => '/var/www/babyGift/prestashop/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1460106276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4943667945723e340c920f8-18698780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5723e340c9ebf3_57327164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5723e340c9ebf3_57327164')) {function content_5723e340c9ebf3_57327164($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
