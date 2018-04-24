<?php

    $cod = $_GET["COD"];
    $dia = $_GET["DIA"];
     if ($dia<30)
     {
         $dia = "$dia";
     }

    $presenca = $_GET["PRESENCA"];

    
    include ("conecta_prova.php");

    $sql = "UPDATE alunos SET dia_$dia = '$presenca' WHERE cd_aluno = $cod";

    $resultado = mysqli_query($conecta, $sql);

    mysqli_close($conecta);

    echo ("<script> window.close(); </script>");

?>