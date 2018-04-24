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
	   </script>
        <style>
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
            #form1{
                width: 97%;
                border: solid 1px #000;
                padding: 20px;
                text-align: center;
            }           
            form input[type=text]{
                outline: none;
                width: 250px;
            }
            form input[type=date]{
                width: 150px;
            }
            label{
                padding: 10px;
            }
            #enviar{
                width: 100px;
                background-color: dodgerblue;
                border: none;
                padding: 10px;
                border-radius: 5px;
                transition: 0.7s all;
            }
            #enviar:hover{
                background-color: #387dc1;
                transition: 0.7s all;
                color: #FFF;
            }
            
        </style>
    </head>
    
<?php 
        
        include ("conecta_prova.php");
        
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');            
        }
   
?>    
        <body id="pagina">
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
            <br />

                <form method="post" action=""  id="form1">

                    <label>Escola:</label> <input type="text" id="nm_escola" name="nm_escola" value=""/>
                    <br />
                    <br />  
                    <label>Professor:</label> <input type="text" id="nm_professora" name="nm_professora" value=""/>
                    <br />
                    <br /> 
                    <label>Turma:</label> <input type="text" id="cd_turma" name="cd_turma" value=""/>
                    <br>
                    <br /> 
                    <label>Ano:</label> <input type="date" id="ano" name="ano" value=""/>

                    <br />
                    <br />

                    <input type="submit" name="enviar" value="Enviar" id="enviar" />
                </form>
            
		  <br />
          <br />
          <br />
	      <div id="RESULTADO"></div> 
    
        </body>    
</html>