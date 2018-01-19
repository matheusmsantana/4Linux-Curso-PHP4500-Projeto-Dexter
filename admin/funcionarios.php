        <header class="header">
        <?php require_once('topo.php'); ?>
        </header>
        <div class="container">
            <div class="row">
                <div class="span12" style="margin-top:20px">
                    <legend class="title">
                        <h3>Lista de Funcionários</h3>
                    </legend>
                    <div class="btn-toolbar">
                        <a href="incluirFuncionario.php"><button class="btn btn-primary">Novo Funcionário</button></a>
                    </div>
                    <div class="well">
                        <table width="100%" class="table">
                            <col style="width:10%">
                            <thead>
                                <tr class="bold">
                                    <td>#</td>
                                    <td>Nome</td>
                                    <td>E-mail</td>
                                    <td>Perfil</td>
                                    <td style="width: 36px;">Ações</td>
                                </tr>
                                <?php //inicio do codigo
                                    $funcionarios = listar('funcionarios');
                                    foreach($funcionarios as $funcionario):
					            ?>

                            </thead>
                            <tbody>

                                <tr class="bold">
                                    <!-- Exibição dos registros na tabela -->
                                    <td><?= $funcionario['id'] ?></td>
                                    <td><?= $funcionario['nome'] ?></td>
                                    <td><?= $funcionario['email'] ?></td>
                                    <td><?= $funcionario['prf_id'] ?></td>
                                    <td style="width: 36px;">Ações</td>

                                    <td style="width: 36px;">
									    <a href="alterarFuncionario.php?id=<?= $funcionario['id'] ?>">Alterar<i class="icon-pencil"></i></a>
									    <a href="excluirFuncionario.php?id=<?= $funcionario['id'] ?>">Remover<i class="icon-remove"></i></a>
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
