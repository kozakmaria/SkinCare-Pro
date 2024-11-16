<?php
require_once "ConexaoBD.php";
require_once "funcoes.php";


class ProdutoDAO{

    static function cadastrar(){
        $conexao = ConexaoBD::conectar();
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        $foto = pegarImagem($_FILES);
        $sql = "insert into produtos (nome, categoria, valor, foto) values ('$nome', '$categoria', '$valor', '$foto')";
        $perguntas = $conexao->query($sql);
        return $perguntas->fetchAll(PDO::FETCH_ASSOC);
       
       
    }
   
    static function listar(){
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM categoria";
        $perguntas = $conexao->query($sql);
        return $perguntas->fetchAll(PDO::FETCH_ASSOC);
    }
    static function listarProduto($categoria){
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM produtos where categoria=$categoria";
        $perguntas = $conexao->query($sql);
        return $perguntas->fetchAll(PDO::FETCH_ASSOC);
    }
    static function listarCategoria($categoria){
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM categoria where id=$categoria";
        $perguntas = $conexao->query($sql);
        return $perguntas->fetchAll(PDO::FETCH_ASSOC);
    }
}