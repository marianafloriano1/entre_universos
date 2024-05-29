
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include_once 'cabecalho.php'; ?>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css" >
        <link rel="icon" href="../img/livros.png" type="image/png">
    </head>
    <body>
       
        <div class="container">
            <div class="row mt-3">
                
                <div class="col-md-12 col-sm-12">
                
                    <?php
                    $pagina = filter_input(INPUT_GET, 'p');
 
                    if (file_exists($pagina . '.php')) {
                        include_once $pagina . '.php'; 
                        include_once $pagina . '.php';
                    } else {
                        include_once 'home.php';
                        include_once 'navbar.php'; 
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include_once 'plugins.php'; ?>
    </body>
</html>