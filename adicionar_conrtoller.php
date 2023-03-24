<?php
require_once "pessoas.php";
try {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $pessoas = new Pessoas();
    $pessoas->nome = $nome;
    $pessoas->idade = $idade;
    $pessoas->inserir();
    header('location:');
} catch (Exception $e) {
    echo $e->getMessage();
}
