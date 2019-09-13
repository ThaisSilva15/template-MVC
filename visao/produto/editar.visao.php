<form action="" method="POST" enctype="multipart/form-data" class="formulario-usuario">
    <h1 align="center">Edição do Produto</h1>
    <img src="<?=$produto['imagem']?>" class="img-formulario">
    
    <label class="formulario-label" for="nome">
        Nome <?php if(isset($errors['nome'])): echo "(".$errors['nome'].")"; endif;?>
    </label>
    <input value="<?=$produto['nomeproduto']?>" class="formulario-input" id="nome" type="text" name=" nomeproduto">


    <label class="formulario-label" for="preco">
        Preço <?php if(isset($errors['preco'])): echo "(".$errors['preco'].")"; endif;?>
    </label>
    <input value="<?=$produto['preco']?>" class="formulario-input" id="preco" type="number" name="preco">


    <label class="formulario-label" for="descricao">
        Descrição <?php if(isset($errors['descricao'])): echo "(".$errors['descricao'].")"; endif;?>
    </label>
    <textarea class="formulario-input" id="descricao" type="text" name="descricao"><?=$produto['descricao']?></textarea>


    <label class="formulario-label" for="est_min">
        Estoque Mínimo <?php if(isset($errors['estoque_minimo'])): echo "(".$errors['estoque_minimo'].")"; endif;?>
    </label>
    <input value="<?=$produto['estoque_minimo']?>" class="formulario-input" id="est_min" type="number" name="estoque_minimo">


    <label class="formulario-label" for="est_max">
        Estoque Máximo <?php if(isset($errors['estoque_maximo'])): echo "(".$errors['estoque_maximo'].")"; endif;?>
    </label>
    <input value="<?=$produto['estoque_maximo']?>" class="formulario-input" id="est_max" type="number" name="estoque_maximo">
    
    <label class="formulario-label" for="quant_estoque">
        quant_estoque <?php if(isset($errors['quant_estoque'])): echo "(".$errors['quant_estoque'].")"; endif;?>
    </label>
    <input value="<?=$produto['quant_estoque']?>" class="formulario-input" id="quant_estoque" type="number" name="quant_estoque">


    <input value="<?=$produto['imagem']?>" class="formulario-input" id="imagem" type="file" name="imagem">
    <label class="formulario-label" for="imagem" id="label-imagem">
        + Escolha uma Imagem + <?php if(isset($errors['imagem'])): echo "(".$errors['imagem'].")"; endif;?>
    </label>


    <label class="formulario-label" for="categoria">
        Categoria <?php if(isset($errors['categoria'])): echo "(".$errors['categoria'].")"; endif;?>
    </label>
    <select name="categoria" id="categoria" class="formulario-select-option">
        <?php
        foreach ($categorias as $categoria):
            if ($produto["idcategoria"] == $categoria["idcategoria"]):?>
                <option value="<?= $categoria["idcategoria"] ?>" selected=""><?= $categoria["descricao"] ?></option>
            <?php else: ?>
                <option value="<?= $categoria["idcategoria"] ?>"><?= $categoria["descricao"] ?></option>
            <?php endif;
        endforeach;
        ?>
    </select>


    <button class="submit-button" type="submit">Atualizar</button>
</form>