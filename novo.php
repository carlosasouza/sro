<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Sistema de Rastreio de Objetos</title>
    </head>
    <body>
            <table border="0" align="center">
                <td>
                    <fieldset>
                        <legend><b>Cadastro</b></legend>
                        <form action="cadastro.php" name="formulario_cadastro" method="post" >

                        <table border="0" align="center">
                            <tr>
                                <td>Nome:&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nome" size="30"/></td>
                            </tr>                            
                            <tr>
                                <td>Login:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_login" size="30"/></td>
                            </tr>
                            <tr>
                                <td>Senha:&nbsp;&nbsp;&nbsp;<input type="password" id="senha" name="txt_senha" size="30" /></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="bt_enviar" value="Cadastrar" /></td>
                                <td><a href="./">Voltar</a></td>
                            </tr>

                        </table>

                        </form>
                    </fieldset>
                </td>
            </table>
    </body>
</html>
