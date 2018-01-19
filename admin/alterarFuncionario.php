	<header class="header">
           <?php
				require_once('topo.php');

				if(! isset($_GET['id'])){
					header('location: funcionarios.php');
					exit();
				}else{
					$id = $_GET['id'];
				}
				$funcionario = ver('funcionarios', "id=$id");

				if($_POST){
					if(editar('funcionarios', "id=$id", $_POST)){
						header('location: funcionarios.php');
					}else{
						echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erro: não foi possivel alterar os dados!</div>';
					}
				}
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
            			<h3>+ Novo Funcionário</h3>
        			</legend>

					<form action="#" method="post" class="form">
						<p>
							<label for="nome">Nome</label> <input type="text" name="nome"
							id="nome" value="<?= $funcionario['nome'] ?>" required>
						</p>
						<p>
							<label for="email">Email</label> <input type="email" name="email"
							id="email" value="<?= $funcionario['email'] ?>" required>
						</p>
						<p>
							<label for="tel">Senha</label> <input type="password" name="senha"
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
							button class="btn">Gravar</button>
						</p>
					</form>

    			</div>
			</div>
		</div>

</body>

</html>
