<?php
class ConexaoBD{
    public static function conectar():PDO{
        $conexao = new PDO("mysql:host=localhost;dbname=skincarepro","root","Batman");
        return $conexao;
    }
}