<h2>Listar Pedidos</h2>
<table class="table" border="1">
    <thead>
        <tr>
            <th></th>
            <th>ID USUARIO</th>
            <th>ID ENDERECO</th>
            <th>ID FORMA DE PAGAMENTO</th>
            <th>VER</th>
        </tr>
    </thead>
</table>
<div class="catalogo">
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td>Usuário: <?= $pedido['idUsuario'] ?></td>
            <td>Endereço: <?= $pedido['idendereco'] ?></td>
            <td>Pagamento: <?= $pedido['idformapagamento'] ?></td>
            <td><a href="produto/ver/<?= $pedido['idPedido'] ?>">Ver</a></td> 
        </tr>
        <?php endforeach; ?>
        
</div>
<br>
<?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
	<a href="produto/adicionar" class="btn btn-primary"> Novo produto</a>
<?php } ?>

</div




