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
