<?php
$sql_produto = 'SELECT * from produtos where id = :id';
$produto = $conn->prepare($sql_produto);
$produto->execute(['id' => $_GET['id']]);
$produto_detalhes = $produto->fetch();
?>
<h1><?php echo $produto_detalhes['descricao']; ?></h1>


<div class="card mb-3">
    <img src="https://i.zst.com.br/thumbs/12/3b/b/-709050601.jpg" class="card-img-top" style="margin-top:20px; width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $produto_detalhes['descricao']; ?></h5>
        <p class="card-text"><?php echo $produto_detalhes['resumo']; ?></p>
        <p class="card-text">
        <h3>R$ <?php echo $produto_detalhes['valor']; ?></h3>
        </p>
        <p class="card-text">
        <form method="post">
            <input class="btn btn-success" type="submit" name="adicionar_sacola" value="Adicionar ao carrinho">
        </form>
        </p>
        <p class="card-text"><small class="text-muted"><?php echo $produto_detalhes['caracteristicas']; ?></small></p>
    </div>
</div>