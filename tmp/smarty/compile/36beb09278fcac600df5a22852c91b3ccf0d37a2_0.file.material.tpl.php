<?php
/* Smarty version 3.1.29, created on 2016-07-28 03:16:13
  from "/var/www/html/MeuFramework/src/Template/Layout/material.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579978fdcfb6f2_15698556',
  'file_dependency' => 
  array (
    '36beb09278fcac600df5a22852c91b3ccf0d37a2' => 
    array (
      0 => '/var/www/html/MeuFramework/src/Template/Layout/material.tpl',
      1 => 1469675692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579978fdcfb6f2_15698556 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->charset();?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo $_smarty_tpl->tpl_vars['cakeDescription']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->fetch('title');?>

        </title>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->meta('icon');?>


        <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->css(array('/material/css/material.min.css','/material/css/styles.css','/css/jquery-ui.css','/js/toast/src/main/resources/css/jquery.toastmessage.css'));?>




        <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->script(array('/js/jquery.min.js','/js/bootstrap.min.js','/js/jquery-ui.js','/js/masks.js','/js/toast/src/main/javascript/jquery.toastmessage.js'));?>



    </head>
    <body


        <?php echo $_smarty_tpl->tpl_vars['this']->value->fetch('content');?>



</body><?php }
}
