<?php
require_once "src/ProdutoDAO.php";
ProdutoDAO::cadastrar();
header("location:formcadastroprodutos.php");