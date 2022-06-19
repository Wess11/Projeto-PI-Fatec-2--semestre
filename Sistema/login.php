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
    <title>Tela de login</title>
    <style>
        body{
            font-family: Roboto Flex;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 3rem;
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
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 1rem;
            width: 100%;
            border-radius: 0.5rem;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div>
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