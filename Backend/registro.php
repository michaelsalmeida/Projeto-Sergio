<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="proc_registro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa"><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>