<?php
/* Smarty version 3.1.29, created on 2016-05-14 02:42:26
  from "/var/www/html/deasoft/src/Template/Layout/Email/html/contact.ctp" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57369092ef7a52_61398072',
  'file_dependency' => 
  array (
    'acfd7dd3451a818f7d2d557f89aed15472284d8d' => 
    array (
      0 => '/var/www/html/deasoft/src/Template/Layout/Email/html/contact.ctp',
      1 => 1463099505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57369092ef7a52_61398072 ($_smarty_tpl) {
?>
<html>
    <head>
        <title>Nova mensagem no formulário de contato</title>
        <style>
            *{ font-size: 12pt; }
        </style>
    </head>
    <body>
        <table border="0" cellpadding="4" cellspacing="1">
            <tbody>
                <tr>
                    <td valign="top">
                        <img src="http://i.imgur.com/aNjgB3N.png" alt="border=0" width="120" height="42">
                    </td>
                    <td nowrap=""><span>Nova Mensagem no Formulário de Contato</span></td>
                    <td valign="top" align="right" width="100%">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <br /><br />
        <table width="600" border="0" cellpadding="4" cellspacing="1" bgcolor="#878676">
            <tbody>
                <tr>
                    <td colspan="2" align="center"><font face="arial,san-serif" size="2" color="white">Mensagem</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Nome: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Email: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2"><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Telefone: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2"><?php echo $_smarty_tpl->tpl_vars['data']->value['mobile'];?>
</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Assunto: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2"><?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" colspan="2"><font face="arial,san-serif" size="2">Olá, Antrosoft,<br />
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
<br />
                        <br />

                        </font></td>
                </tr>
            </tbody>
        </table>
        <br /><br />
    </body>
</html>
<?php }
}
