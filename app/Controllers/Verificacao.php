<?php

public function verificarCadastro($nom_cientista,  $cpf_cientista, $dtn_cientista, $email_cientista, 
$email_alternativo_cientista, $lattes_cientista, $snh_cientista, $confirmarSenha)
{
    if (isset($_POST['nom_cientista']) && (!empty($nom_cientista) && !empty($cpf_cientista) 
    && !empty($dtn_cientista) && !empty($email_cientista) && !empty($email_alternativo_cientista)
    && !empty($lattes_cientista) && !empty($snh_cientista) && !empty($confirmarSenha) 
    && $snh_cientista == $confirmarSenha))
    {
        echo("Verificado");
    }
    else
    {
        echo("n verificado");
    }
}
?>