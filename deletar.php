<?php
require_once "pessoas.php";
$id_pessoa = $_GET['id'];
try {
    $pessoa = new Pessoas($id_pessoa);
    $pessoa->deletar();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
