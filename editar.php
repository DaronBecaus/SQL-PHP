<?php
require_once "pessoas.php";
try {
    $id_pessoa = $_GET['id'];
    $pessoas = new Pessoas($id_pessoa);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="editar_controller.php" method="post">
        <input type="hidden" name="id" value="<? $pessoas->id_pessoa; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $pessoas->nome; ?>">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" value="<?= $pessoa->idade; ?>">
        <input type="submit" value="Atualizar">
    </form>
</body>

</html>