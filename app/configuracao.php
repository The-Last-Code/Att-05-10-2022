<?php 
    /* definir a url padrao */
    
    define('APP', dirname(__FILE__));
    define('URL', 'http://localhost/crudizinho_php_mvc_pdo/index.php');

    /* conectar no banco */

    global $pdo;
    global $msgErro;   
    
    define('HOST','localhost');
    define('DATABASENAME','projeto_scilink');
    define('USER','root');
    define('PASSWORD','');
    define('PORT', '3307');
    class Conn{
        
    }
    function conectar() 
    {
        global $pdo;
        global $msgErro;
        try 
        {
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME.';port='.PORT,USER,PASSWORD);
            echo ("banco conectado");
        } catch (PDOException $e) 
        {
            echo ("banco nao conectado");
            $msgErro = $e->getMessage();
        }
    }
?>