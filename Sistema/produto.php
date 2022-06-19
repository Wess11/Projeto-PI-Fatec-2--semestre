<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastro'])) {
    $ds_produto = $_POST['ds_produto'];
    $preco = $_POST['preco'];
    $marca = $_POST['marca'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_produto($ds_produto, $preco, $marca, $observacao);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <style>
        body{
    font-family: Roboto Flex;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
}

.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -30%);
    background-color: rgba(0, 0, 0, 0.8);
    padding: 1rem;
    border-radius: 1rem;
    width: 25%;
}
fieldset{
    border: 3px solid dodgerblue;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 8px;
    color: white;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
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

#submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
}
    </style>
</head>
<body>
<a class="voltar" href="consulta_produto.php">Voltar</a>
<div class="card text-center" style="padding:15px;">
<legend><b>Fórmulário Produtos</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os Produtos</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="produto.php" method="POST">
                    <div class="form-group">
                      <label for="ds_produto">Produto:</label>
                      <input type="text" class="form-control" name="ds_produto" placeholder="Entre com o Produto" required="">
                    </div>
                    <div class="form-group">
                      <label for="preco">Preço:</label>
                      <input type="text" class="form-control" name="preco" placeholder="Entre com o preço" required="">
                    </div>
                    <div class="form-group">
                      <label for="marca">Marca:</label>
                      <input type="text" class="form-control" name="marca" placeholder="Entre com o marca" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="observacao" placeholder="Entre com a observação" required="">
                    </div>
                                                 
                  

                    <input type="submit" name="cadastro" class="btn btn-primary" style="float:right;" value="Cadastrar">
                   
                      
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>