	<header class="header">
		   <?php 
		   		require_once('topo.php');
                #incluir o topo
                #checa se houve um post e chama o metodo de inclusão
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
            	<h3>Alterar Funcionário</h3>
        		</legend>
			<?php
				if($_POST){
					#checa se houve um post e chama o metodo de inclusão
					if(inserir('funcionarios', $_POST)){
						header('location: funcionarios.php');
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
					<label for="email">Email</label> <input type="email" name="email"
					id="email" required>
				</p>
				<p>
					<label for="senha">Senha</label> <input type="password" name="senha"
					id="senha" required>
				</p>

				<p>
					<label for="prf_id">Perfíl</label>
		 			<select name="prf_id" id="prf_id">
						<option value="">Perfis</option>
						<option value="1">Safado</option>
		 			</select>
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
