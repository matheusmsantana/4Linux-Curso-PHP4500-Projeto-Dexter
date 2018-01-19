    <header class="header">
           <?php require_once('topo.php') ?>
    </header>
    <div class="container">
            <div class="row">
                <div class="span12" style="margin-top:20px">
                    <legend class="title">
                        <h3>Lista de Clientes</h3>
                    </legend>
                    <div class="btn-toolbar">
                        <a href="incluirCliente.php">
                            <button class="btn btn-primary">Novo Cliente</button>
                        </a>
                    </div>
                    <div class="well">
                        <table width="100%" class="table">
                            <col style="width:10%">
                            <thead>
                                <tr class="bold">
                                    <td>#</td>
                                    <td>Nome/Razão</td>
                                    <td>Cpf/CNPJ</td>
                                    <td>Email</td>
                                    <td>Telefone</td>
                                    <td>Celular</td>
                                    <td style="width: 36px;">Ações</td>
                                </tr>
                                <?php //inicio do codigo
                                    $clientes = listar('clientes');
                                    foreach($clientes as $cliente):
					            ?>
                        </thead>
                        <tbody>

                            <tr class="bold">
                                <!-- Exibição dos registros na tabela -->
                                <td><?= $cliente['id'] ?></td>
                                <td><?= $cliente['nome_razao'] ?></td>
                                <td><?= $cliente['cpf_cnpj'] ?></td>
                                <td><?= $cliente['email'] ?></td>
                                <td><?= $cliente['telefone'] ?></td>
                                <td><?= $cliente['celular'] ?></td>
                            
                           
                                <td style="width: 36px;">
			                        <a href="alterarCliente.php?id=<?= $cliente['id'] ?>">Alterar<i class="icon-pencil"> </i></a>
			                        <a href="excluirCliente.php?id=<?= $cliente['id'] ?>">Remover<i class="icon-remove"> </i></a>
					            </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
