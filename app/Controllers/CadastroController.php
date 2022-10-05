<?php
    //include '../Lib/Controller.php';
    include("../app/Models/CadastraUser.php");
  
class CadastroController
{
    private $cadastro;

        public function __construct()
        {
            $this->cadastro = new Cadastro();
            $this->CadastroBanco();

        }
    
    private function CadastroBanco()
    {     

        $this->cadastro->setnom_cientista($_POST['nom_cientista']);
        $this->cadastro->setdtn_cientista($_POST['dtn_cientista']);
        $this->cadastro->setemail_cientista($_POST['email_cientista']);
        $this->cadastro->setemail_alternativo_cientista($_POST['email_alternativo_cientista']);
        $this->cadastro->setcpf_cientista($_POST['cpf_cientista']);
        $this->cadastro->setlattes_cientista($_POST['lattes_cientista']);
        $this->cadastro->setsnh_cientista($_POST['snh_cientista']);
        $result=$this->cadastro->CadastroBanco();

        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='/public/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');</script>";
        }
    }
}

?>