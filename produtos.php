<?php
require_once 'src/ProdutoDAO.php';
$id_categoria = $_POST['categoria'];
$produtos = ProdutoDAO::listarProduto($id_categoria);
$categorias = ProdutoDAO::listarCategoria($id_categoria);
foreach ($categorias as $categoria) {
    $nome_categoria = $categoria['categoria'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include "incs/cabecalho.php"; ?>
    <div class="container">


        <section class="section"> <br>
            <h2 class="section-title"><?= $nome_categoria ?></h2>
            <div class="category-cards">
            <?php
            foreach ($produtos as $produto) {
                ?>
                    <div class="card">
                        <img src="data:image/jpg;base64,<?= base64_encode($produto['foto']) ?>" alt="">
                        <h4><?= $produto['nome'] ?></h4> <br>
                        <p>R$ <?= $produto['valor'] ?></p>
                            <a href="formcadastropessoas.php">
                                <button>Compre</button>
                            </a>
                    </div>
                    <?php
            }
            ?>
            </div>
        </section>

        <div class="button-container">
            <button>MAIS PRODUTOS</button>
        </div>
        </div>
                <div class="floating-cart">
        <a href="manutencao.php" class="cart-button">
            🛒 
        </a></div>

        <?php include "incs/rodape.php"; ?>
    </div>
</body>

</html>