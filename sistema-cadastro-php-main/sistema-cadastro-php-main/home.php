<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,600&display=swap" rel="stylesheet">
    <title>SITE | AWM</title>
    <style>
        body{
            font-family: Roboto Flex;
            background-image: linear-gradient(to left, rgb(20, 147, 220), rgb(0, 0, 0, 100));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 5%;
            left: 83%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        .logo{
            position: absolute;
            height: 33rem;
            top: 56.7%;
            left: 23rem;
            transform: translate(-50%,-50%);
        }
        .lixo{
            position: absolute;
            top: 56.7%;
            left: 70.7%;
            transform: translate(-50%,-50%);
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <img class="logo" src="img/AWM.png" alt="">
    <img class="lixo" src="img/lixo2.png" alt="">
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>