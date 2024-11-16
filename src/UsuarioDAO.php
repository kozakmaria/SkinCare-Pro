<?php
require_once "ConexaoBD.php";
class UsuarioDAO {
    public static function autenticarUsuario($login, $senha) {
        $senha = md5($senha);
        $conexao = ConexaoBD::conectar();
        $sql = "select * from usuarios where email='$login' and senha='$senha'";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function ConsultarProduto($idcategoria) {
        $conexao = ConexaoBD::conectar();
        $sql = "select*from produto where categoria = $idcategoria";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function consultarCategoria(){
        $conexao = ConexaoBD::conectar();
        $sql = "select*from categoria";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
   
}