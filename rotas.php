<?php
$root = "http://" . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . "/Projeto-Sergio" . "/";
$rootBack = $root . "Backend/";
$rootFront = $root . "Frontend/";
$rootBackPages = $rootFront . "BackendPages/";
$connRoute = $_SERVER['DOCUMENT_ROOT'] . '/Projeto-Sergio/Backend/conexao.php';

$loginRoute = $rootBackPages . "login.php";
$listaRoute = $rootBackPages . "lista.php";
$cadFunRoute = $rootBackPages . "cadFuncionario.php";
$registroRoute = $rootBackPages . "registro.php";
$detalhesRoute = $rootBackPages . "detalhes.php";


$procLoginRoute = $rootBack . "proc_login.php";
$procCadFunRoute = $rootBack . "proc_cadFuncionario.php";
$procRegistroRoute = $rootBack . "proc_registro.php";
$procDetalhesRoute = $rootBack . "proc_detalhe.php";
$procFechamentoRoute = $rootBack . "proc_fechamento.php";

$confSenhaRoute = $rootBack . "confsenha.js";
$modalInfRoute = $rootBack . "modalInf.js";