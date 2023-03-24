<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo</title>
</head>

<body>
    <form action="adicionar_controller.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>