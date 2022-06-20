<?php

   session_start();
  // Incluir arquivo de dados
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
if(isset($_POST['email']) || isset($_POST['senha']))

  if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}


if(isset($_POST['submit'])) {
$cliente = $DBMagico->selecionar_login($email);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,600&display=swap" rel="stylesheet">
    <title>tela de login | AWM</title>

    <!-- favicon  -->
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <style>
        body{
            font-family: Roboto Flex;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
        }
        .login{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(50%, -49%);
            padding: 3.2rem;
            border-radius: 1rem;
            color: white;
        }

        .texto{
            
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 42%;
            left: 50%;
            transform: translate(-110%, -40%);
            padding: 3rem;
            padding-top: 1.6rem;
            border-radius: 1rem;
            color: white;
        }
        input{
            padding: 1rem;
            border: none;
            outline: none;
            font-size: 1rem;
            border-radius: 1rem;
        }

       .botao{
        display: flex;
       }

        button{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            border-radius: 1rem;
            padding: 6px;
            border: none;
            cursor: pointer;
            color: white;
            font-size:12px;
            cursor: pointer;
        }

        .suporte{
            height: 70px;
            width: 65px;
        }

        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 1rem;
            width: 100%;
            border-radius: 1rem;
            color: white;
            font-size: 1rem;
            cursor: pointer;
                        
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }

        .voltar{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            text-decoration: none;
            color: white;
            cursor: pointer;
            border-radius: 10px;
            font-size: 15px;
            padding: 10px;
        }

    .login img{
        height: 90px;
        width: 200px; 
    }    
    </style>

</head>
<body>
<!--
    <section class="content">
        <div class="texto">
            <img class="suporte" src="images/icone-suporte.png">
            <h1>CONTATO SUPORTE</h1> 
        <p>
            <span style="color: #469FCA;"><br><br>Caso esteja com algum problema: <br><br></span>entre em contato conosco que iremos retornar <br> o mais rapido possivel.
        </p>
        <br><br>
        <div class="contatos" >
                        <h3>Contate-Nos</h3>
                    <p> <i class="fas fa-phone"></i> +55 19 999999999. </p>
                    <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
                    <p> <i class="fas fa-map-marker-alt"></i> Araras, Brasil - 400104 </p>
                    </div>
        </div>
    </section>
    -->
    
    <div class="login">
        <img src="images/AWM.png" alt="">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

