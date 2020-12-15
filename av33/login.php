<?php
session_start();
include('dados_login.php');


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = ( $_POST['usuario']);
$senha =( $_POST['senha']);


$row = ['0'];

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.html');
	exit();
}