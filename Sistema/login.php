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
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>tela de login | AWM</title>
</head>
<body>

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

    
    <div class="login">
        <img src="/images/logo4.png" alt="">
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

