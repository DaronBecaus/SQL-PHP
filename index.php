<?php
/* // criando e testando conexão 
try {
    $conn = new  PDO("mysql:host=localhost;dbname=projeto01", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexão feita com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo "<br>";

// criando uma tabela
try {
    $conn = new  PDO("mysql:host=localhost;dbname=projeto01", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS pessoas (
        id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
        nome varchar(255) NOT null,
        idade INT
    )";
    $conn->exec($sql);
    echo "tabela criada com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo "<br>";

// inserindo via php
try {
    $conn = new  PDO("mysql:host=localhost;dbname=projeto01", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO pessoas (nome, idade) VALUES ('Enzo', 14)";
    $conn->exec($sql);
    echo "dado inserido com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo "<br>";

// buscando dados via php
try {
    $conn = new  PDO("mysql:host=localhost;dbname=projeto01", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM pessoas";
    $resultado = $conn->query($sql);
    // var_dump($resultado);
    // echo "--------------";
    $lista = $resultado->fetchAll();
    // var_dump($lista);
} catch (PDOException $e) {
    echo $e->getMessage();
} */

require_once "pessoas.php";
try {
    $lista = Pessoas::lista();
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
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #d0e0eb;
        }

        table tr th,
        table tr td {
            border: 1px solid black;
            padding: 0 1rem 0 1rem;
            text-align: center;
        }

        table tr th a,
        table tr td a {
            text-decoration: none;
        }

        th a,
        td a {
            display: flex;
            align-items: center;
            padding: .1rem;
            justify-content: center;
        }

        .cont {
            width: 7%;
            background-color: #ebf7f8;
        }

        .add:hover {
            background-color: #dfffc4;
            cursor: pointer;
        }

        .delete:hover {
            background-color: #ffae7f;
            cursor: pointer;
        }

        .edit:hover {
            background-color: #c9bffc;
            cursor: pointer;
        }

        .icon img {
            padding: 0 5px 0 5px;
        }
    </style>
</head>

<body>
    <hr>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th colspan="2" class="icon add cont">
                <a href="adicionar.php" style="color:green;"><span><img src="plus.png" width="20px"></span>Adicionar Novo</a>
            </th>
        </tr>
        <?php foreach ($lista as $p) : ?>
            <tr>
                <td><?= $p['id_pessoa']; ?></td>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['idade']; ?></td>
                <td class="icon edit cont">
                    <a href="editar.php?id=<?= $p['id_pessoa']; ?>" style="color:blue;"><span><img src="edit.png" width="24px"></span> Editar</a>
                </td>
                <td class="icon delete cont">
                    <a href="deletar.php?id=<?= $p['id_pessoa']; ?>" style="color:red;"><span><img src="remove.png" width="20px"></span>Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>