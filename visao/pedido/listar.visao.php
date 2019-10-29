<h2>Listar Pedidos</h2>
<table class="table">
    <thead>
        <tr>
            <th>USUARIO</th>
            <th>ENDEREÇO</th>
            <th>PAGAMENTO</th>
            <th>DETALHES</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= $pedido['nomeUsuario'] ?></td>
            <td><?= $pedido['logradouro'] ?></td>
            <td><?= $pedido['descricao'] ?></td>
            <td><a href="pedido/ver/<?= $pedido['idPedido'] ?>">Ver</a></td> 
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<br>
<?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
	<a href="produto/adicionar" class="btn btn-primary"> Novo produto</a>
<?php } ?>

</div




