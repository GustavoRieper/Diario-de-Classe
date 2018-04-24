<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <title> Prova Acesso Diário de Classe </title>
    <script type="text/javascript">
        
    function mudar_cor_de_fundo(){

        var cor = document.getElementById("seletor_de_cores").value;
        document.getElementById("pagina").style.backgroundColor = cor;
        document.getElementById("cor_escolhida").innerHTML = "A Cor escolhida é "+cor;
        if(cor == '#000000'){
                document.body.style.color = "white";
               }
            else{
                document.body.style.color = "black";
            }
}

                $(document).ready(function(){
                    $('#form1').submit(function(){

                        var dados = $(this).serialize(); 
                        // dados = "nome=" + nome.value + "&email=" + email.value;

                        $.ajax({
                            type: "POST",
                            url: "grava.php",
                            data: dados,
                            success: function(RESPOSTA_PHP)
                            {
                                RESULTADO.innerHTML = RESPOSTA_PHP;
                            }
                        });
                        return false; // Usado para não dar um refresh.
                    });
                });         
	          
        
                function grava(COD, DIA, ID)
            {
                var PRESENCA = ID.checked; // retorna true ou false
                
                var URL = "grava_chamada.php?COD=" + COD + "&DIA=" + DIA + "&PRESENCA=" + PRESENCA; // no meu caso, true é presente e false é falta.
                
                window.open(URL,"_blank");
            }
            
	   </script>
         <style>
            
            #nm_aluno{
                width: 100px;
            }
            #dia{
                cursor:no-drop;
            }
            #linha{
                height: 40px;
            }
            #linha:hover{
                background-color: #d7d7d7;
            }
            #logout{
                position: absolute;
                right: 0;
                top: 0px;
                padding: 25px;
            }
            #logout a{
                padding: 10px 30px 10px 30px;
                background-color: dodgerblue;
                text-decoration: none;
                color: #FFF;
                font-family: sans-serif;
                font-size: 17px;
                border-radius: 5px;
                transition: 0.7s all;
            }
            #logout a:hover{
                background-color: #387dc1;
                transition: 0.7s all;
            }
            #seletor_de_cores{
                border: solid 1px #000;
                padding: 0px;
                margin: 0px;
                width: 50px;
                height: 50px;
            }
            .altera{
                font-family: sans-serif;
                border: solid 2px #000;
                box-shadow: 2px 2px 2px #FFF;
            }
            .altera p{
                text-align: center;
                font-size: 30px;
                padding: 0px;
                margin: 0px;
            }
            #seletor_de_cores{
                margin-left: 23px;
            }
            #alterar{
                width: 100px;
                margin-bottom: 20px;
                margin-top: -20px; 
                height: 30px;
                background-color: dodgerblue;
                border: none;
                margin: 5px;
                color: #FFF;
                font-family: sans-serif;
                border-radius: 5px;
            }
             table{
                 width: 100%;
             }
             table tr{
                 
             }
             table tr:hover{
                 background-color: #d7d7d7;
             }
        
        </style>
    </head>
    
<?php 

        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');            
        }
    
?>      <body id="pagina">
        <div id="pagina" class="altera">
            <form id="alterar_cores">
            <p> Escolha uma cor para o fundo da página </p>
            <input id="seletor_de_cores" type="color"/>
            <br />
            <button type="button" onclick="mudar_cor_de_fundo()" id="alterar">Alterar</button>
            </form>
            <p id="cor_escolhida"></p>
            <div id="logout">
                <a href="logout.php">Sair</a>
            </div>
        </div>

        <table align="center" border="1" cellspacing="0">
                <tr>
                    <td align="center" id="cd_aluno" style="width:50px;"> Número </td>
                    <td align="center" id="nm_aluno" style="width:200px;"> Nome do Aluno </td>
                    <td align="center" id="dia_1" style="width:30px;"> 1 </td>
                    <td align="center" id="dia_2" style="width:30px;"> 2 </td>
                    <td align="center" id="dia_3" style="width:30px;"> 3 </td>
                    <td align="center" id="dia_4" style="width:30px;"> 4 </td>
                    <td align="center" id="dia_5" style="width:30px;"> 5 </td>
                    <td align="center" id="dia_6" style="width:30px;"> 6 </td>
                    <td align="center" id="dia_7" style="width:30px;"> 7 </td>
                    <td align="center" id="dia_8" style="width:30px;"> 8 </td>
                    <td align="center" id="dia_9" style="width:30px;"> 9 </td>
                    <td align="center" id="dia_10" style="width:30px;"> 10 </td>
                    <td align="center" id="dia_11" style="width:30px;"> 11 </td>
                    <td align="center" id="dia_12" style="width:30px;"> 12 </td>
                    <td align="center" id="dia_13" style="width:30px;"> 13 </td>
                    <td align="center" id="dia_14" style="width:30px;"> 14 </td>
                    <td align="center" id="dia_15" style="width:30px;"> 15 </td>
                    <td align="center" id="dia_16" style="width:30px;"> 16 </td>
                    <td align="center" id="dia_17" style="width:30px;"> 17 </td>
                    <td align="center" id="dia_18" style="width:30px;"> 18 </td>
                    <td align="center" id="dia_19" style="width:30px;"> 19 </td>
                    <td align="center" id="dia_20" style="width:30px;"> 20 </td>
                    <td align="center" id="dia_21" style="width:30px;"> 21 </td>
                    <td align="center" id="dia_22" style="width:30px;"> 22 </td>
                    <td align="center" id="dia_23" style="width:30px;"> 23 </td>
                    <td align="center" id="dia_24" style="width:30px;"> 24 </td>
                    <td align="center" id="dia_25" style="width:30px;"> 25 </td>
                    <td align="center" id="dia_26" style="width:30px;"> 26 </td>
                    <td align="center" id="dia_27" style="width:30px;"> 27 </td>
                    <td align="center" id="dia_28" style="width:30px;"> 28 </td>
                    <td align="center" id="dia_29" style="width:30px;"> 29 </td>
                    <td align="center" id="dia_30" style="width:30px;"> 30 </td>
                    <td align="center" id="dia_31" style="width:30px; background-color:black;" input type='checkbox' disabled> 31 </td>
                </tr>
            
            
            <?php
            
            include ("conecta_prova.php");
            
            $sql = "SELECT * FROM alunos WHERE cd_turma='2018-01'";
            $resultado2 = mysqli_query($conecta, $sql);
            while ($linha = mysqli_fetch_array($resultado2))
            {
                $cod = $linha["cd_aluno"];
                $nome = $linha["nm_aluno"];
                for ($i=1; $i<=30; $i++)
                {
                    $c[$i] = $linha["dia_$i"];
                       if ($c[$i]=="true")
                       {
                           $c[$i] = "checked = 'checked'";
                       } else {$c[$i]="";}         
                }
                
                echo ("<tr> <td> $cod </td> <td> $nome </td>");
                for ($i=1; $i<=30; $i++)
                {
                    echo ("
                    <td> <input type='checkbox' onclick=\"grava($cod, $i, this);\" id=\"c$cod$i\" $c[$i] /> </td>
                    ");
                }
                    
                    echo ("</tr>");
             }
            
          ?>
        </table>
            
        <br />
        <br />
              
    </body>
</html>