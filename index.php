<?php
// criando e testando conexão 
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

/* echo "<br>";

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

echo "<br>"; */

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
            border: 1px solid black;
        }

        table tr th,
        table tr td {
            border: 1px solid black;
            padding: 0 1rem 0 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach ($lista as $p) : ?>
            <tr>
                <td><?= $p['id_pessoa']; ?></td>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['idade']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>