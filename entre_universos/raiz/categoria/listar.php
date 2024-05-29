<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<?php include_once 'navbar.php'; ?>
<body style="background-color:#FFFFEC;">
    
<h3 style="color:#C4B3F3; text-shadow: -1px -1px 0 #000, 0.5px -1px 0 #000, -0.5px 0.5px 0 #000, 0.5px 0.5px 0 #000; text-align:center; font-size:44px; font-family: Cascadia Code;">Avaliações dos Livros</h3>
<h4 style="color:#F691E0; text-shadow: -1px -1px 0 #000, 0.5px -1px 0 #000, -0.5px 0.5px 0 #000, 0.5px 0.5px 0 #000; text-align:center; font-size: 24px; font-family: cursive;">Entre Universos</h4>
<br><br>

<div class="row" >
    <?php
    include_once '../class/Categoria.php';
    $cat = new Categoria();
    $dados = $cat->listar(NULL);

    // Verifica se há categorias para exibir
    if (!empty($dados)) {
        foreach ($dados as $mostrar) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body" style="background-color:#E8FFE4;">
                        <h5 class="card-title"><?= $mostrar['nome'] ?></h5>
                        <p class="card-text"><?= $mostrar['descricao'] ?></p>
                        <a href="?p=categoria/editar&id=<?= $mostrar['id'] ?>" class="btn btn-primary">Editar</a>
                        <a href="?p=categoria/excluir&id=<?= $mostrar['id'] ?>" class="btn btn-danger" data-confirm="Excluir registro?">Excluir</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    // Sempre mostra o card especial com o botão "Add"
    ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body" style="background-color:#E8FFE4;">
                <h5 class="card-title">Adicionar Categoria</h5>
                <p class="card-text">Clique abaixo para adicionar uma nova categoria.</p>
                <a href="?p=categoria/salvar" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>




