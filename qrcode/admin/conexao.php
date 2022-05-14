<?php


date_default_timezone_set ("America/Sao_Paulo");




$local="localhost";
$user="root";
$senha="";
$banco="qrcode";
$conectar = mysqli_connect($local,$user,$senha) or die ("Erro na conexão");
mysqli_select_db($conectar, $banco)or die ("Base não encontrada");
?>