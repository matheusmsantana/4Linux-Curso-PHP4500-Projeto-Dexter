<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Dexter Courier | Fale Conosco</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <?php include "template/topo.php"; ?>
    </header>

    <div class="container content">
            <div class="title center">
                <h1>Fale conosco</h1>
            </div>

            <!-- <div class="banner-fixed">
                <img src="http://lorempixel.com/940/300" alt="Banner Sobre">
            </div> -->

            <?php
                
                if($_POST){
                    if(! validarCampos($_POST)){
                        echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erro: Todos os campos devem ser preenchidos </div>';
                    }else{
                        if(inserir('fale_conosco', $_POST)){
                            echo '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Dados salvos com sucesso!</div>';                            
                        }else{
                            var_dump($_POST);
                            echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erro: não foi possivel inserir os dados!</div>';
                        }
                    }
                }

            ?>

            <iframe class="map" width="940" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=4Linux+-+Rua+Vergueiro,+Vila+Mariana,+S%C3%A3o+Paulo&amp;aq=0&amp;oq=4linux+rua&amp;sll=-23.65333,-46.595764&amp;sspn=0.906957,1.454315&amp;ie=UTF8&amp;hq=4Linux+-&amp;hnear=Rua+Vergueiro,+S%C3%A3o+Paulo&amp;t=m&amp;ll=-23.587469,-46.633487&amp;spn=0.013765,0.04034&amp;z=15&amp;output=embed"></iframe>

            <form action="#" method="post" class="form">
                <p>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required
                    value="<?= isset($_POST['nome'])? $_POST['nome'] : ''?>">
                </p>
                <p>
                    <label for="assunto">Assunto</label>
                    <input type="text" name="assunto" id="assunto" placeholder="Assunto" required
                    value="<?= isset($_POST['assunto'])? $_POST['assunto'] : ''?>">
                </p>
                <p>
                    <label for="msg">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" rows="5" placeholder="Sua mensagem..." required
                    value="<?= isset($_POST['mensagem'])? $_POST['mensagem'] : ''?>"></textarea>
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="seu@email.com" required
                    value="<?= isset($_POST['email'])? $_POST['email'] : ''?>">
                </p>
                <p>
                    <button class="btn">Enviar</button>
                </p>
            </form>
    </div>

    <footer class="footer">
        <?php #rodape ?>
		<?php include "template/rodape.php"; ?>
    </footer>

</body>

</html>
