<?php
@require_once './View/usuario/validaAcesso.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title></title>
    </head>
    <body>
<?php
echo "<table border='1'>
        <tr>
            <th>Código de Rastreio</th>
            <th>Descrição do Objeto</th>
            <th>Verificar</th>
        </tr>";
foreach ($array as $objeto) {

echo "<tr>
        <td>".$objeto['cod_rastreio']."</td>
        <td>".$objeto['desc_obj']."</td>
        <td><a href='status.php?cod=".$objeto['cod_rastreio']."'>Status</a></td>
      </tr>";
}
echo "<td colspan='3'><center><button onclick='window.history.back()'>Voltar</button></center></td>";
echo "</table>";
echo "</form>"
?>
    </body>
</html>
