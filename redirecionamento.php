<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title> Prova Acesso Diário de Classe </title>
    </head>
    
<?php 
        
        include ("conecta_prova.php");
        $nivel =   $_SESSION['nivel'];
    
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');            
        }
        
        
        if($nivel=="1") {
          header('location:pagina_funcionarios.php'); 
            echo($nivel);
        }
        
        if($nivel=="2") {
          header('location:pagina_professor.php');
             echo($nivel);
        }
        
        if($nivel=="3") {
          header('location:pagina_aluno.php');
             echo($nivel);
        }

        $_SESSION["nivel_id"] = "$nivel";
?>
    