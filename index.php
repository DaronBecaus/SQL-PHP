<?php
// criando e testando conexão 
try {
    $conn = new  PDO("mysql:host=localhost;dbname=projeto01", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexão feita com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
}
