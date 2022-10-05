<?php
include("Cadastro.php");

class CadastraUser extends Cadastro{

    private $nom_cientista;
    private $snh_cientista;
    private $lattes_cientista;
    private $cpf_cientista;
    private $email_alternativo_cientista;
    private $email_cientista;
    private $dtn_cientista;

    //Metodos Set
    public function setnom_cientista($string){
        $this->nom_cientista = $string;
    }
    public function setcpf_cientista($string){
        $this->cpf_cientista = $string;
    }
    public function setdtn_cientista($string){
        $this->dtn_cientista = $string;
    }
    public function setemail_cientista($string){
        $this->email_cientista = $string;
    }
    public function setemail_alternativo_cientista($string){
        $this->email_alternativo_cientista = $string;
    }
    public function setlattes_cientista($string){
        $this->lattes_cientista = $string;
    }
    public function setsnh_cientista($string){
        $this->snh_cientista = $string;   
    }
 
    //Metodos Get
    public function getnom_cientista(){
        return $this->nom_cientista;
    }
    public function getcpf_cientista(){
        return $this->cpf_cientista;
    }
    public function getdtn_cientista(){
        return $this->dtn_cientista;
    }
    public function getemail_cientista(){
        return $this->email_cientista;
    }
    public function getemail_alternativo_cientista(){
        return $this->email_alternativo_cientista;
    }
    public function getlattes_cientista(){
        return $this->lattes_cientista;
    }
    public function getsnh_cientista(){
        return $this->snh_cientista;
    }
 

    public function CadastroBanco(){
        return $this->setCadastroBanco($this->getnom_cientista(),$this->getcpf_cientista(),$this->getdtn_cientista(),$this->getemail_cientista(),$this->getemail_alternativo_cientista(),$this->getlattes_cientista()
        ,$this->getsnh_cientista());
    }

}
?>
