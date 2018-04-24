<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title> Prova Acesso Diário de Classe </title>
        <style>
            form{
                text-align: center;
                margin-left:50%;
            }
            .dados{
                background-color: dodgerblue;
                width: 50%;
                padding: 50px;
                border-radius: 20px;
                margin-left: -28%;
                margin-top: 100px;
                
            }
            legend{
                font-size: 30px;
                color: #FFF;
                font-family: sans-serif;
                padding: 20px;
            }
            form input{
                height: 20px;
                width: 150px;
                outline: none;
                border-radius: 10px;
                border: none;
                text-align: center;
                padding: 10px;
            }
            #logar{
                height: 40px;
                transition: all 0.5s;
                cursor: pointer;
            }
            #logar:hover{
                background-color: silver;
                transition: all 0.5s;
            }
        
        </style>
    </head>
    
    <body> 
        <form method="post" action="validacao.php" id="formlogin" name="formlogin" >
                <div class="dados">
                    <legend> Diário de Classe </legend>  

                    <input type="text" placeholder="Login" name="login" id="login" maxlength="25" autofocus />
                      <br><br>
                    <input type="password" placeholder="Senha" name="senha" id="senha" />
                               <br><br>
                    <input type="submit" value="Logar" id="logar"/>
                </div>
        </form>
    </body>
</html>