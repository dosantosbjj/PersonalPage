<?php 
	include('../config.php');
	$data = array();
	$assunto = 'Mensagem do site Dev0Project';
	$corpo = '';
	foreach($_POST as $key => $value){
			$corpo.=ucfirst($key).": ".$value.'<hr>';
			// $corpo='<hr>';			
	}				
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Email('smtp.gmail.com','testesdev0@gmail.com','96354677lucas','Lucas Santos');
	$mail->addAddress($_POST['email'] ,'Lucas');
	$mail->formatarEmail($info);
	 if($mail->sendEmail()){
	 	$data['sucesso'] = true;
	 	}else{
		$data['erro'] = true;
	 	}
	$data['retorno'] = 'sucesso'; 			
	die(json_encode($data));
?>