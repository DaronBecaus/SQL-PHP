<?php

define('DB_DRIVE', 'mysql');
define('NOME_SERVIDOR', 'localhost');
define('NOME_BANCO', 'projeto01');
define('USUARIO', 'root');
define('SENHA', '');

class Conexao
{
    public static function conectar()
    {
        $conexao = new PDO(DB_DRIVE . ":host=" . NOME_SERVIDOR . ";dbname=" . NOME_BANCO, USUARIO, SENHA);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}
