<?php

$id_pessoa = $_GET['id'];
try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->deletar();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
