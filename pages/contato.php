<div id="map">
	<script src="./js/mapa.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXhyl-VZLAbrJyqaiIAgcKQeL_H2QPCxU&callback=initMap">
	</script>	  
</div>
<div class="contato-container">
	<div class="center">
		<form method="post" action="" >
			<input type="hidden" name="identificador" value="form_contato">
			<h3>Envie uma mensagem, será uma satisfação atendê-lo!</h3>
			<input type="text" name ="nome" placeholder="Nome..." required>
			<div></div>
			<input type="text" name="email" placeholder="E-mail..." required>
			<div></div>
			<input type="text" name="telefone" placeholder="Telefone..." required>
			<div></div>
			<textarea name="mensagem" placeholder="Sua mensagem..." required></textarea>
			<div></div>
			<input type="submit" name="acao" value="Enviar">
		</form>	
	</div>	
</div>

