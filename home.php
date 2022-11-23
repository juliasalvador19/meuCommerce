<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meu Commerce</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>

    <body>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand" style="margin:0 10px"><strong><i class="bi bi-truck"></i> Meu Commerce - Julia Salvador</strong></a>   
            <a class="btn btn-success" style="margin:0 10px" href="?pagina=sacola">Sacola
                <?php if (isset($_SESSION['sacola'])) {
                    echo '(' . count($_SESSION['sacola']) . ')';
                } ?>
            </a>

            <?php if (isset($_SESSION['autenticado'])) { 
            ?>
                <a class="btn btn-info" href="?pagina=meus_pedidos">Meus pedidos</a>
            <?php } 
            ?>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <?php include 'menu_categorias.php'; ?>
                </div>
                <div class="col-9">
                    <?php if (isset($_GET['pagina'])) {
                        if ($_GET['pagina'] == 'produtos') {
                            include 'produtos_home.php';
                        }
                        if ($_GET['pagina'] == 'produto') {
                            include 'produto_detalhe.php';
                        }
                        if ($_GET['pagina'] == 'sacola') {
                            include 'sacola.php';
                        }
                        if ($_GET['pagina'] == 'meus_pedidos') {
                            include 'meus_pedidos.php';
                        }
                        if ($_GET['pagina'] == 'realizar_pedido') {
                            if (!isset($_SESSION['autenticado'])) {
                                include 'login.php';
                            } else {
                                include 'realizar_pedido.php';
                            }
                        }
                    } else {
                        include 'produtos_destaque.php';
                    } ?>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>