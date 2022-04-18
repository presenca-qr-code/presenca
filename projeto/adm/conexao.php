<?php
$local="localhost";
$user="root";
$senha="";
$banco="qrcode";
$conectar = mysqli_connect($local,$user,$senha) or die ("Erro na conexão");
mysqli_select_db($conectar, $banco)or die ("Base não encontrada");
?>