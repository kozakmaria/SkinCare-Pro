<?php
require_once "src/ProdutoDAO.php";
$categorias = ProdutoDAO::listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos de Cuidado com a Pele</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo-removebg-preview.png">
</head>

<body>
    <?php include "incs/cabecalho.php"; ?>

    <main>
        
        <h1>Explore Produtos por Categoria</h1>
        <div class="category-cards">
            <?php
            foreach ($categorias as $categoria) {
                ?>
                <div class="card">
                    <img src="data:image/jpg;base64,<?= base64_encode($categoria['foto_categoria']) ?>" alt="">
                    <h2><?= $categoria['categoria'] ?></h2>
                    <form action="produtos.php" method="post">
                        <a href="produtos.php">
                            <button>Conheça nossos produtos</button>
                        </a>
                        <input type="hidden" name="categoria" value="<?= $categoria['id'] ?>">
                    </form>
                </div>
                <div class="floating-cart">
        <a href="manutencao.php" class="cart-button">
            🛒 
        </a></div>
            <?php
            }
            ?>
        </div>
        <a href="#" class="more-link">OUTROS &gt;</a>
    </main>

    <?php include "incs/rodape.php"; ?>

</body>

</html>