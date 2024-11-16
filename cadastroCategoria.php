<?php
require_once "src/ConexaoBD.php";
require_once "src/funcoes.php";

$conexao = ConexaoBD::conectar();
$nome = $_POST['nome'];
$foto = pegarImagem($_FILES);
$sql = "insert into categoria (categoria, foto_categoria) values ('$nome', '$foto')";
$conexao->exec($sql);
echo "Usuario cadastrado!";