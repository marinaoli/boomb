<?php
include ("partedocorpo.php");

$CABECA = isset($_POST["CABEÇA"])? 1 : 0;
$
$
$
$
$
$
$
$
$
$
$
$
$
$
$
$
$
$
$


$comando = $pdo->prepare("INSERT INTO corpo VALUES($CABECA");
$resultado = $comando->execute();
header("Location:partedocorpo.php");
