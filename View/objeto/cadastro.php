<?php

require_once './View/usuario/validaAcesso.php';

?>
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
                    <legend><b>Cadastro de Objeto</b></legend>
                    <form action="cadastrar.php" name="formulario_cadastro" method="post" >

                        <table border="0" align="center">
                            <tr>
                                <td>Código de Rastreio:</td><td><input type="text" name="txt_codigo" size="30"/></td>
                            </tr>                            
                            <tr>
                                <td>Descrição:</td><td><input type="text" name="txt_desc" size="30"/></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="bt_enviar" value="Cadastrar" /></td>
                                <td><a href="home.php">Voltar</a></td>
                            </tr>

                        </table>

                    </form>
                </fieldset>
            </td>
        </table>
    </body>
</html>
