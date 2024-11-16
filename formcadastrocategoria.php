<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container m-5 p-5">
    <h4 class="mb-4">Cadastro de Produtos</h4>

    <form action="cadastroCategoria.php" method="POST" enctype="multipart/form-data">
    <div class="form-group mb-2">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>
    <br>
        <br>
        <div class="form-group mb-2">
            <label for="categoriaId">Categoria:</label>
        </div>
        <br>
        <div class="form-group mb-2">
            <label for="imagem">Foto:</label>
            <input type="file" id="foto" name="imagem" class="form-control-file" accept="image/*" required>
        </div>

        <div class="form-group mb-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

</body>

</html>