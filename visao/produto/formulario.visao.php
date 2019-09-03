<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<h1> Cadastro do produto</h1>
<form action="" method="POST" enctype="multipart/form-data">
    Preco: <input type="text" name="preco" value="<?= @$produto['preco'] ?>">
    <br>Nome do Produto: <input type="text" name="nomeproduto" value="<?= @$produto['nomeproduto'] ?>">
    <br>Descricão:  <input type="text" name="descricao" value="<?= @$produto['descricao'] ?>">
    <br>Imagem: <input type="file" name="imagem">
    <br>Categoria:
    <select name="categoria">
        <?php
        foreach ($categorias as $categoria):
            if ($produto["idcategoria"] == $categoria["idcategoria"]):
                ?>
                <option value="<?= $categoria["idcategoria"] ?>" selected=""><?= $categoria["descricao"] ?></option>
                <?php else:
                ?>
                <option value="<?= $categoria["idcategoria"] ?>"><?= $categoria["descricao"] ?></option>
            <?php
            endif;
        endforeach;
        ?>
    </select>
    <br>Estoque Minimo: <input type="text" name="estoque_minimo" value="<?= @$produto['estoque_minimo'] ?>">
    <br>Estoque Maximo: <input type="text" name="estoque_maximo" value="<?= @$produto['estoque_maximo'] ?>">
    <br><button>Enviar</button>
</form>