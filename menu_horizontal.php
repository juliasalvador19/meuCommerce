<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<a class="btn btn-success" href="?pagina=sacola">
    Carrinho

    <?php if (isset($_SESSION['sacola'])) {
        echo '(' . count($_SESSION['sacola']) . ')';
    } ?>
</a>
<?php if (isset($_SESSION['autenticado'])) { ?>
<a class="btn btn-info" href="?pagina=meus_pedidos">Meus pedidos</a>
<?php }
?>