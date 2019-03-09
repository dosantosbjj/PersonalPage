<!DOCTYPE html>
	<title>Login - Dev0Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
</head>
	<div class="box-login">
		<?php 
		if(isset($_POST['acao'])){
			$user = $_POST['user'];
			$passwd = $_POST['password'];
			$sql = Banco::connect()->prepare('SELECT * FROM tb_admin_usuarios WHERE user = ? AND password = ?');
			$sql->execute(array($user,$passwd));
			if($sql->rowCount() == 1 ){
				$info=$sql->fetch();
				$_SESSION['login'] = true; 
				$_SESSION['user'] = $user;
				$_SESSION['senha']= $passwd;
				$_SESSION['cargo'] = $info['cargo'];
				$_SESSION['nome'] = $info['nome'];
				$_SESSION['img'] = $info['img'];
				header('Location:'.INCLUDE_PATH_PAINEL);
				die();
			}else{
				echo("<div class='box-erro'><i class='fas fa-times'></i> Usuário ou senha incorretos!</div>");
			}
		}

		 ?>
	<h2>Informe os dados para Login:</h2>
	<form method="POST" enctype="multipart/form-data">
	<input type="text" name="user" placeholder="Usuário..." required>
	<input type="password" name="password" placeholder="Senha..." required>
	<input type="submit" name="acao" value="Entrar">
	</form>
	</div>
</body>
</html>