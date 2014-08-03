<?php

session_start();

session_destroy();

echo "<script>alert('Acesso finalizado com sucesso!')</script>";
echo "<script language= 'JavaScript'>location.href='./'</script>";

?>
