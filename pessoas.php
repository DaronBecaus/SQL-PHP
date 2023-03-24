<?php
require_once "conexao.php";
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

    public function __construct($id_pessoa = false)
    {
        if ($id_pessoa) {
            $this->id_pessoa = $id_pessoa;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $sql = "SELECT nome, idade FROM pessoas WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
        $lista = $stmt->fetch();
        $this->nome = $lista['nome'];
        $this->idade = $lista['idade'];
    }

    public function inserir()
    {
        $sql = "INSERT INTO pessoas (nome, idade) VALUES (:nome, :idade)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":idade", $this->idade);
        $stmt->execute();
    }

    public static function listar()
    {
        $sql = "SELECT * FROM pessoas";
        $conexao = Conexao::conectar();
        $resultado = $resultado->fetchAll();
        return $lista;
    }

    public function atualizar()
    {
        $sql = "UPDATE pessoas SET nome = :nome, idade = :idade WHERE id_pessoa = :id_pessoa"
        $conexao = Conexao::conectar();
    }

    public function deletar()
    {
        $sql = "DELETE FROM pessoas WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
    }
}
