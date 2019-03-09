<?php

class Site{

    public static function updateUsuarioOnline(){

        if(isset($_SESSION['online'])){
            $token = $_SESSION['online'];
            $horario_atual = date('Y-m-d H:i:s');
            $sql = Banco::connect()->prepare("UPDATE tb_admin_online set ultima_acao = ? where token = ?");
            $sql->execute(array($horario_atual,$token));
        }else{
            $_SESSION['online'] = uniqid();
            $token = $_SESSION['online'];
            $horario_atual = date('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'];
            $sql = Banco::connect()->prepare("INSERT into tb_admin_online values (null,?,?,?)");
            $sql->execute(array($ip,$horario_atual,$token));
        }
    }
}

?>