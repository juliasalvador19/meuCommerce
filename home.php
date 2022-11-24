<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meu Commerce</title>     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <style>
            a {
                text-decoration:none;
            }
            #to_bar{
                position: fixed;
                right: 10px;
                bottom: 75px;
                color: #6c757d
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a id="menu" class="navbar-brand" style="margin:0 10px"><strong>Meu Commerce</strong></a>   
            <a class="btn btn-success" style="margin:0 10px" href="?pagina=sacola">Carrinho <i class="bi bi-cart4"></i>
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
        <div class="container" style="margin-left:0;">
            <div class="row">
                <div class="col-3" style="background-color: #e4e4e4;">
                    <?php include 'menu_categorias.php'; ?>
                </div>
                <div class="col-9" style="margin-top: 10px;">
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

        <a id="to_bar" href="#menu"><i class="bi bi-arrow-up-square-fill"></i></a>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                <span>Conecte-se conosco nas redes sociais</span>
                </div>

                <div>
                <a href="https://www.facebook.com/julia.salvador.161" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/julia_salvadoor/" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/julia-salvador-a6b35795/" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://github.com/juliasalvador19" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
                </div>
            </section>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>