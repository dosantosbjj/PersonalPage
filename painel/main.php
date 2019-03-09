<?php 
	if(isset($_GET['logout'])){
		Painel::logout();	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle - Dev0Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
</head>
<body>
<div class="menu">
	<div class="wrapper">
		<div class="box-usuario">
			<?php 
					if($_SESSION['img']==''){
			?>
				<div class="avatar-usuario">
					<i class="fas fa-user-circle"></i>
				</div>
			<?php }else{ ?>
				<div class="imagem-usuario">
					<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php $_SESSION['img']; ?>">
				</div>
			<?php } ?>		
			<div class="nome-usuario">
				<p><?php echo $_SESSION['nome'];?></p>
				<p><?php echo getCargo($_SESSION['cargo']);?></p>
			</div>
		</div>
		<div class="itens-menu">
			<h2>Cadastro</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
			<a href="">Cadastrar Serviço</a>
			<a href="">Cadastrar Slide</a>
			<h2>Gestão</h2>	
			<a href="">Listar Depoimentos</a>
			<a href="">Listar Serviços</a>
			<a href="">Listar Slide</a>
			<h2>Administração do Painel</h2>	
			<a href="">Editar Usuário</a>
			<a href="">Adicionar Usuário</a>
			<h2>Configuração Geral</h2>
			<a href="">Editar</a>
		</div>
	</div>
</div>
<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars"></i>
		</div>
		<div class="logout">
			<a href="<?php echo INCLUDE_PATH_PAINEL?>"><i class="fas fa-home"></i><span>Página Inicial</span></a>
			<!-- <div style="padding:0 20px;display:inline;"></div> -->
			<a href="<?php echo INCLUDE_PATH_PAINEL?>?logout"><span>Sair </span><i class="fas fa-sign-out-alt"></i></a>
		</div>
		<div class="clear"></div>
	</div>
</header>
<div class="content">
	<?php
	Painel::carregarPagina();
	?>
</div>
<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>	
</body>
</html>