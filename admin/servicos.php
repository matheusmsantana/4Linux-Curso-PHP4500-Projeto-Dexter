    <header class="header">
           <?php require_once('topo.php'); ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="span12" style="margin-top:20px">
                <legend class="title">
                    <h3>Lista de Serviços</h3>
                </legend>
                <div class="btn-toolbar">
                    <a href="incluirServico.php"><button class="btn btn-primary"> + Novo Serviço</button></a>
                </div>
                <div class="well">
                    <table width="100%" class="table">
                        <col style="width:10%">
                        <thead>

                            <tr class="bold">
                                <td>#</td>
                                <td>Nome</td>
                                <td>Descrição</td>
                                <td>Ìcone</td>
                                <td style="width: 36px;">Ações</td>
                            </tr>
                            <?php //inicio do codigo
                                $servicos = listar('servicos');
                                foreach($servicos as $servico):
					        ?>
                        </thead>
                        <tbody>

                            <tr class="bold">
                                <!-- Exibição dos registros na tabela -->
                                <td><?= $servico['id'] ?></td>
                                <td><?= $servico['nome'] ?></td>
                                <td><?= $servico['descricao'] ?></td>
                                <td>
                                    <img src="../img/<?= $funcionalidade['url_icone'] ?>" width="50px" height="50px">
                                </td>
                                <td style="width: 36px;">Ações</td>

                                    <td style="width: 36px;">
									    <a href="alterarServico.php?id=<?= $servico['id'] ?>">Alterar<i class="icon-pencil"></i></a>
									    <a href="excluirServico.php?id=<?= $servico['id'] ?>">Remover<i class="icon-remove"></i></a>
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
