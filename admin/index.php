    <header class="header">
           <?php
                require_once('topo.php');
            ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="span12" style="margin-top:20px">
                <legend class="title">
                    <h3>Lista de Funcionalidades</h3>
                </legend>
                <div class="btn-toolbar">
                    <a href="incluirFuncionalidade.php"><button class="btn btn-primary"> + Novo Funcionalidade</button></a>
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
                                $funcionalidades = listar('funcionalidades');
                                foreach($funcionalidades as $funcionalidade):
					        ?>
                        </thead>

                        <tbody>
                            <tr class="bold">
                                <!-- Exibição dos registros na tabela -->
                                <td><?= $funcionalidade['id'] ?></td>
                                <td><?= $funcionalidade['nome'] ?></td>
                                <td><?= $funcionalidade['descricao'] ?></td>
                                <td>
                                <img src="../img/<?= $funcionalidade['icone'] ?>" width="50px" height="50px">
                            </td>

                            <td style="width: 36px;">Ações</td>

                                <td style="width: 36px;">
									<a href="alterarFuncionalidade.php?id=<?= $funcionalidade['id'] ?>">Alterar<i class="icon-pencil"></i></a>
									<a href="excluirFuncionalidade.php?id=<?= $funcionalidade['id'] ?>">Remover<i class="icon-remove"></i></a>
								</td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once('rodape.php');
    ?>    
</body>
</html>
