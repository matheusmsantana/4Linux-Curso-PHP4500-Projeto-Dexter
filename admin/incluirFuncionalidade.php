	<header class="header">
        <?php
			require_once('topo.php');
        ?>
        	<style type="text/css">
        		textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{
	           	padding: 10px;
                height:auto;
            	}
        	</style>
    </header>
    	<div class="container">
    		<div class="row">
    			<div class="span12" style="margin-top:20px">
        			<legend class="title">
            			<h3>Incluir Funcionalidade</h3>
        			</legend>

					<?php
						#checa se houve um post e chama o metodo de inclusão
						if($_POST){
							if(inserir('funcionalidades', $_POST)){
								header('location: index.php');
							}else{
								echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erro: não foi possivel inserir os dados!</div>';
							}
						}	
					?>

					<form action="#" method="post" class="form">
						<p>
							<label for="nome">Nome</label> <input type="text" name="nome"
							id="nome" required>
						</p>
					<p>
						<label for="text">Descrição</label> <input type="text" name="descricao"
						id="descricao" required>
					</p>
					<p>
						<label for="tel">Icone</label> <input type="text" name="url_icone"
						id="url_icone" required>
					</p>

    				<p>
						<button class="btn">Gravar</button>
					</p>
				</form>

    		</div>
		</div>
	</div>

</body>

</html>
