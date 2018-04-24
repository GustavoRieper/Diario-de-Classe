<?php

    include ("conecta_prova.php");

//    $login = $_POST['login'];
//    $senha = $_POST['senha'];
//    
////    $sql = "SELECT * FROM usuario WHERE nome like '$login' and senha like '$senha'";
////
////    $resultado = mysqli_query ($conecta, $sql);
////
////    while ($linha = mysqli_fetch_array ($resultado)) {
////        $nivel = $linha ["nivel_id"];
////        $_SESSION['login']=$_POST['nome'];
////        $_SESSION['senha']=$_POST['senha'];
////    }

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = mysqli_query($conecta, "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'") or die (mysql_error);
    $row = mysqli_num_rows($sql);
    if($row > 0){
        session_start(); 
        $sql = ("SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'") or die (mysql_error);
        $resultado = mysqli_query($conecta,$sql);
        $numero_linhas = mysqli_num_rows($resultado);
        while ($linha = mysqli_fetch_array($resultado)){
            $_SESSION['nivel']=$linha['nivel'];        
            $_SESSION['login']=$_POST['login'];
            $_SESSION['senha']=$_POST['senha'];
            echo($_SESSION['nivel']);
            echo($_SESSION['login']);
            echo($_SESSION['senha']);
            
            if($_SESSION['nivel'] == '3'){
                $sql = ("SELECT cd_aluno FROM alunos where nm_aluno='$login'") or die (mysql_error);
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $_SESSION['cd_aluno']=$linha['cd_aluno'];
                    echo($_SESSION['cd_aluno']);
                }
            }
            
            echo '<script> window.setTimeout(window.location.href = "redirecionamento.php",1000)</script>';
        }
    }
    else{
        echo '<script>alert("Usuario ou senha incorreta");</script>';
        echo '<script> window.setTimeout(window.location.href = "index.php",5000)</script>';
    }



    mysqli_close ($conecta);

    
?>