<?php
include 'Cadastro.php';

class User extends Cadastro{

    private $nom_cientista;
    private $snh_cientista;
    private $lattes_cientista;
    private $cpf_cientista;
    private $email_alternativo_cientista;
    private $email_cientista;
    private $dtn_cientista;

    public function __construct($nom_cientista, $cpf_cientista, $dtn_cientista, $email_cientista,
    $email_alternativo_cientista, $lattes_cientista, $snh_cientista)
    {
        $this->nom_cientista = $nom_cientista;
        $this->cpf_cientista = $cpf_cientista;
        $this->dtn_cientista = $dtn_cientista;
        $this->email_cientista = $email_cientista;
        $this->email_alternativo_cientista = $email_alternativo_cientista;
        $this->lattes_cientista = $lattes_cientista;
        $this->snh_cientista = $snh_cientista;

    }

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
        $cie = new User( $this->user->getnom_cientista(), $this->user->getcpf_cientista(), 
        $this->user->getdtn_cientista(), $this->user->getemail_cientista(), $this->user->getemail_alternativo_cientista()
        ,$this->user->getlattes_cientista(), $this->user->getsnh_cientista());

        return $this->setCadastroBanco($cie->nom_cientista,$cie->cpf_cientista,$cie->dtn_cientista
        ,$cie->email_cientista,$cie->email_alternativo_cientista,$cie->lattes_cientista,$cie->snh_cientista,);
    }
}
?>
