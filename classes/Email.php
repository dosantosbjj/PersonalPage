<?php 	
class Email{
	private $mailer;

	public function __construct($host,$username,$passwd,$name){		

	$this->mailer = new PHPMailer;

	// $this->mailer->SMTPDebug='2';
	$this->mailer->isSMTP();                                    
	$this->mailer->Host = $host;  
	$this->mailer->Port = 587; 
	$this->mailer->SMTPAuth = true; 
	$this->mailer->SMTPSecure = 'tls';                     
	$this->mailer->Username = $username;                
	$this->mailer->Password = $passwd; 
	$this->mailer->setFrom($username, $name);
	$this->mailer->isHTML(true);
	}

	public function addAddress($email,$nome){
		$this->mailer->addAddress($email,$nome);
	}

	public function formatarEmail($info){
		$this->mailer->Subject = $info['assunto'];
		$this->mailer->Body    = $info['corpo'];
		$this->mailer->AltBody = strip_tags($info['corpo']);		
	}

	public function sendEmail(){
		if($this->mailer->send()){
			return true;
		}else{
			return false;
		}
	}
}
?>
