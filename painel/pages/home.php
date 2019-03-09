
<div class="box-content w100">
		<h3><i class="fa fa-home"></i> Painel de Controle - <?php echo empresa ?></h3>	
	<div class="box-metricas">
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Usuários Online</h2>
				<p>12</p>
			</div>
		</div>
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Total de Visitas</h2>
				<p>100</p>
			</div>
		</div>
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Visistas Hoje</h2>
				<p>17</p>
			</div>
		</div>
	</div>		
	<div class="clear"></div>
</div>
<div class="box-content w100">
<h3><i class="fa fa-user"></i> Usuários Online</h3>
	<div class="tabela">
		<div class="row">
			<div class="col">
				<span><h3>IP</h3></span>
			</div>
			<div class="col">
				<span><h3>Última ação</h3></span>
			</div>
		</div>
		<div class="clear"></div>
	<?php 
		for($i = 0; $i < 10; $i++){ 
	?>			
		<div class="row">
			<div class="col">
				<span>186.201.147.18</span>
			</div>
			<div class="col">
				<span>16/10/2017 19:00:07</span>
			</div>
			<div class="clear"></div>
		</div>
	<?php } ?>
	</div>
</div>

