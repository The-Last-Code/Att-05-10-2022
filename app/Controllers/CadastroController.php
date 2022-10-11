<?php
    //include '../Lib/Controller.php';
    //echo "CadastroCOntroller";exit;
    //include "Models/User.php";
  $a = $_POST['dtn_cientista'];
  echo "<h1>".$a."</h1>";
  exit;

include "../../Models/User.php";

class CadastroController
{

    public function __construct()
    {
        $user = new User($this->user->setnom_cientista(), $this->user->setcpf_cientista(), 
        $this->user->setdtn_cientista(), $this->user->setemail_cientista(), $this->user->setemail_alternativo_cientista()
        ,$this->user->setlattes_cientista(), $this->user->setsnh_cientista());

        $user->CadastroBanco();
    }
    
    // private function CadastroBanco()
    // {     

    //     $this->user->setdtn_cientista($_POST['dtn_cientista']);
    //     $this->user->setemail_cientista($_POST['email_cientista']);
    //     $this->user->setemail_alternativo_cientista($_POST['email_alternativo_cientista']);
    //     $this->user->setcpf_cientista($_POST['cpf_cientista']);
    //     $this->user->setlattes_cientista($_POST['lattes_cientista']);
    //     $this->user->setsnh_cientista($_POST['snh_cientista']);
    //     $result=$this->user->CadastroBanco();

    //     if($result >= 1){
    //         echo "<script>alert('Registro incluído com sucesso!');document.location='/public/index.php'</script>";
    //     }else{
    //         echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');</script>";
    //     }
    // }
}

?>