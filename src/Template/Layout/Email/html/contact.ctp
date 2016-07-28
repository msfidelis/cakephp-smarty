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
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2">{$data.name}</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Email: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2">{$data.email}</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Telefone: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2">{$data.mobile}</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" nowrap="" width="120"><font face="arial,san-serif" size="2">Assunto: </font></td>
                    <td bgcolor="white" nowrap=""><font face="arial,san-serif" size="2">{$data.subject}</font></td>
                </tr>
                <tr>
                    <td bgcolor="white" colspan="2"><font face="arial,san-serif" size="2">Olá, Antrosoft,<br />
                        <br />
                        {$data.message}<br />
                        <br />

                        </font></td>
                </tr>
            </tbody>
        </table>
        <br /><br />
    </body>
</html>
