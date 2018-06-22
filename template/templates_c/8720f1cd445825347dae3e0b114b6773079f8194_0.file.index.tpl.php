<?php
/* Smarty version 3.1.32, created on 2018-06-22 10:14:34
  from '/Applications/MAMP/htdocs/smart-eindopdracht/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2cafeae14dd1_97902863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8720f1cd445825347dae3e0b114b6773079f8194' => 
    array (
      0 => '/Applications/MAMP/htdocs/smart-eindopdracht/template/index.tpl',
      1 => 1529655274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2cafeae14dd1_97902863 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eindopdracht Smarty</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="tweet-pos">
    <img height="250" width="250" src="foto/Twitter-Logo-PNG-1.png">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tweets']->value, 'tweet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->value) {
?>
        <div class="tweets">
            <h1><?php echo $_smarty_tpl->tpl_vars['tweet']->value['title'];?>
</h1>
            <h4><?php echo $_smarty_tpl->tpl_vars['tweet']->value['name'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['tweet']->value['tweet'];?>
</p>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

</body>
</html><?php }
}
