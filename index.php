<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline();?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" type="text/css" href="<?php echo(INCLUDE_PATH)?>assets/style.css">
	<meta charset="utf-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descrição do meu Website">
	<meta name="author" content="Lucas Santos">
	<meta name="keywords" content="projeto01, site-teste, lucas-santos,seu melhor email">
</head>

<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
 <?php 
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'depoimentos':
			echo '<target target ="depoimentos"/>';
			break;

		case 'servicos':
			echo '<target target ="servicos"/>';
			break;
	}
?>
	<div class="sucesso">
	<p>Formulário enviado com sucesso! <i class="fas fa-check"></i> </p>
	</div>
	<div class="overlay-loading">
		<img src="<?php echo (INCLUDE_PATH)?>media/ajax-loader.gif">
	</div>
	<div class="falha">
	<p>Falha no envio do formulário! <i class="fas fa-check"></i> </p>
	</div>
	<div class="overlay-loading">
		<img src="<?php echo (INCLUDE_PATH)?>media/ajax-loader.gif">
	</div>


 	<header>
	<div class="center">	
		<div class="logo left"><a href="/">Logomarca</a></div>
		<nav class="desktop right">
		<ul>
			<li><a href="<?php echo(INCLUDE_PATH)?>">Home</a></li>
			<li><a href="<?php echo(INCLUDE_PATH)?>depoimentos">Depoimentos</a></li>
			<li><a href="<?php echo(INCLUDE_PATH)?>servicos">Serviços</a></li>
			<li><a realtime="contato" href="<?php echo(INCLUDE_PATH)?>contato">Contato</a></li>
		</ul>
		</nav>
		<nav class="mobile right">
		<div class="botao-menu-mobile">
			<i class="fa fa-bars"></i>
		</div>
		<ul>
			<li><a href="<?php echo(INCLUDE_PATH)?>">Home</a></li>
			<li><a href="<?php echo(INCLUDE_PATH)?>depoimentos">Depoimentos</a></li>
			<li><a href="<?php echo(INCLUDE_PATH)?>servicos">Serviços</a></li>
			<li><a realtime="contato" href="<?php echo(INCLUDE_PATH)?>contato">Contato</a></li>
		</ul>
		</nav>
		<div class="clear"></div>
	</div>
	</header>
	<div class="container-principal">	
	<?php 
	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
		}else{
			if($url != 'depoimentos' && $url != 'servicos'){
			$pagina404 = true;
			include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>
	</div>
	<footer <?php if(isset($pagina404) && $pagina404==true) echo 'class="fixed"'?>>
	<div class="center">
		<p> Dev ø Project - Todos os direitos reservados.</p>
	</div>
	</footer>
	<script src="<?php echo(INCLUDE_PATH)?>js/jquery.js"></script>		
	<script src="<?php echo(INCLUDE_PATH)?>js/scripts.js"></script>	
	<?php if($url == 'home' || $url == '' ||  $url =='depoimentos' || $url =='servicos'){
	?>
		<script src="<?php echo(INCLUDE_PATH)?>js/slider.js"></script>
		<?php 
		} 
	?>
	<!-- <script src="<?php echo(INCLUDE_PATH)?>js/exemplo.js"></script> -->
	<script src="<?php echo(INCLUDE_PATH)?>js/formularios.js"></script>
</body>
</html>