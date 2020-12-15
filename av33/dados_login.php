<?php
session_start();
$_SESSION['logged'] =false;

$usuario =  '1';
$senha = '1';

$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario && $p_senha == $senha) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    $_SESSION['logged'] = true;
}
