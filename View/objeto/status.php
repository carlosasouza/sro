<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title></title>
    </head>
    <body>
        <table  border=1>
        <?php
        
        $codigo = $_REQUEST['cod'];
        
        $pagina = file_get_contents("http://websro.correios.com.br/sro_bin/txect01$.QueryList?P_LINGUA=001&P_TIPO=001&P_COD_UNI=".$codigo);
        
        $pagina = explode("<table  border cellpadding=1 hspace=10>", $pagina);
        
        $pagina = explode("</TABLE>", $pagina[1]);
        
        echo $pagina[0];
        
        ?>
        <tr><td colspan="3"><center><button onclick="window.history.back()">Voltar</button></center></td></tr>
        </table>
        
    </body>
</html>
