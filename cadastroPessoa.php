<?php
require_once "src/ConexaoBD.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$datanasc = $_POST['data_nascimento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sql = "insert into usuarios (nome, cpf, data_nascimento, estado, cidade, endereco, telefone, email, senha) values ('$nome', '$cpf', '$datanasc', '$estado', '$cidade', '$endereco', '$telefone', '$email', '$senha')";
$conexao = ConexaoBD::conectar();
$conexao->exec($sql);
echo "Usuario cadastrado!";


/*
CÓDIGO PARA CRIAÇÃO DA TABELA DE CADASTRO

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cpf VARCHAR(14),
    data_nascimento DATE,
    estado VARCHAR(255),
    cidade VARCHAR(255),
    endereco TEXT,
    telefone VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);

CREATE TABLE categoria (
 id INT AUTO_INCREMENT PRIMARY KEY,
 categoria VARCHAR(255),
 foto_categoria BLOB

);

CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  valor VARCHAR(255),
  categoria INT,
  foto LONGBLOB
 );
 ALTER TABLE produtos add constraint fk_categoria foreign key (categoria) references categoria(id);

*/