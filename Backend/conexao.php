<?php
$host = "appbcdmichael-server.mysql.database.azure.com";
$user = "lefwpzreju";
$pass = 'UQ12RWYLU7TCS0Z7$';
// $user = "teste";
// $pass = 'P4$sword';
$dbname = "appbcdmichael-database";

// Criar a conexao com o Banco de Dados
try {
    $conn = mysqli_connect($host, $user, $pass, $dbname);
} catch (Exception $e) {
    // Handle exception
    echo 'Caught exception: ', $e->getMessage(), "<br>";
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
