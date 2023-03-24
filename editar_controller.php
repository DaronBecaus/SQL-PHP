<?php
require_once 'pessoas.php';

$id_pessoa = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

try {
    $pessoa = new Pessoas($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->idade = $idade;
    $pessoa->atualizar();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
