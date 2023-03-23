<?php

class Pessoas
{
    public $id_pessoa;
    public $nome;
    public $idade;

    // CRUD
    // CREATE = criar
    // READ = ler ou buscar
    // UPDATE = atualizar
    // DELETe = deletar

    public function deletar()
    {
        $sql = "DELETE FROM pessoas WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
    }
}
