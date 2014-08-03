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
                    <legend>Bem vindo ao SRO</legend>
                    <form action="login.php" name="formulario_login" name="login" method="post" >
                        <table border="0" align="center">
                            <tr>
                                <td rowspan="2"><center><img alt='Login' title='Login'  src="View/personal.png" width="50" height="50" /></center></td><td width="195"><h3>Login:</h3></td>
                            </tr>
                            <tr>
                                <td><input type="text" alt='Login' title='Login' name="txt_login" size="30"/></td>
                            </tr>
                            <tr>
                                <td rowspan="2"><center><img alt='Senha' title='Senha' src="View/password.png" width="50" height="50"/></center></td><td><h3>Senha:</h3></td>
                            </tr>
                            <tr>
                                <td><input type="password" alt='Senha' title='Senha' name="txt_senha" size="30" /></td>
                            </tr>
                            <tr>
                            </tr>                            
                            <tr>
                                <td><input type="submit" alt='Entrar' title='Entrar' name="bt_enviar" value="Entrar" /></td>
                                <td><a href="novo.php" alt='Novo Cadastro' title='Novo Cadastro'>Novo Cadastro</a></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </table>
    </body>
</html>
