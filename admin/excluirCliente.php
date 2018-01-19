    <?php
    //Incluindo array com dados de acesso ao banco de dados
    require_once('../config.php');
    require_once('../include/utils.php');

    if(! isset($_GET['id'])){
        header('location: clientes.php');
        exit();
    }else{
        $id = $_GET['id'];
    
        if(excluir('clientes', "id=$id")){
            header('location: clientes.php');
        }else{
            echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erro: não foi possivel alterar os dados!</div>';
        }
    }

