    <header class="header">
        <?php require_once('topo.php'); ?>
    </header>
        <div class="container">
            <div class="row">
                <div class="span12" style="margin-top:20px">
                    <legend class="title">
                        <h3>Lista de Mensagens</h3>
                    </legend>

                    <div class="well">
                        <table width="100%" class="table">
                        <col style="width:10%">
                            <thead>
                                <tr class="bold">
                                    <td>#</td>
                                    <td>Nome</td>
                                    <td>E-mail</td>
                                    <td>Assunto</td>
                                    <td style="width: 36px;">Ações</td>
                                </tr>
                                <?php //inicio do codigo
                                    $mensagens = listar('fale_conosco');
                                    foreach($mensagens as $mensagem):
                                ?>
                            </thead>
                            <tbody>

                                <tr class="bold">
                                    <!-- Exibição dos registros na tabela -->
                                    <td><?= $mensagem['id'] ?></td>
                                    <td><?= $mensagem['nome'] ?></td>
                                    <td><?= $mensagem['email'] ?></td>
                                    <td><?= $mensagem['assunto'] ?></td>
                                    <td style="width: 36px;">Ações</td>

                                    <td style="width: 36px;">
									    <a href="#"><i class="icon-pencil"></i></a>
									    <a href="#"><i class="icon-remove"></i></a>
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
