<?php
    
    $nm_escola = $_POST["nm_escola"];
    $nm_professora = $_POST["nm_professora"];
    $cd_turma = $_POST["cd_turma"];
    $ano = $_POST["ano"];
    

    include ("conecta_prova.php");

        $sql = "SELECT * FROM turma WHERE cd_turma= '$cd_turma'"; 

        mysqli_set_charset($conecta,'utf8');

        $resultado_turma = mysqli_query($conecta,$sql);


        $num_linhas = mysqli_num_rows($resultado_turma);

        if ($num_linhas == 0) {
            $sql = "insert into turma values ('$nm_escola', '$nm_professora', '$cd_turma', '$ano')";
            $resultado_turma = mysqli_query($conecta, $sql);
            echo ("Cadastro realizado com sucesso!");
        }

        else {
            echo ("Turma já cadastrada, insira outra!");
        }

        mysqli_close($conecta);
?>