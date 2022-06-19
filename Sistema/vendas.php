<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastro'])) {
    $id_prod = $_POST['id_prod'];
    $id_cl = $_POST['id_cl'];
    $id_fornec = $_POST['id_fornec'];
    $vl_vendatotal = $_POST['vl_vendatotal'];
    $vl_produto = $_POST['vl_produto'];
    $vl_notafiscal = $_POST['vl_notafiscal'];
    $dt_venda = $_POST['dt_venda'];
    $ds_venda = $_POST['ds_venda'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_venda($id_prod, $id_cl, $id_fornec, $vl_vendatotal, $vl_produto, $vl_notafiscal, $dt_venda,$ds_venda, $observacao);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vendas</title>
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
<a class="voltar" href="consulta_vendas.php">Voltar</a>
<div class="card text-center" style="padding:15px;">
<legend><b>Fórmulário Vendas</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="vendas.php" method="POST">
                    <div class="form-group">
                      <label for="id_prod">Produto:</label>
                      <input type="text" class="form-control" name="id_prod" placeholder="Entre com o produto" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_cl">Id Cliente:</label>
                      <input type="text" class="form-control" name="id_cl" placeholder="Entre com o ID cliente" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_fornec">Id fornecedor:</label>
                      <input type="text" class="form-control" name="id_fornec" placeholder="Entre com o fornecedor" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_vendatotal">Valor total:</label>
                      <input type="text" class="form-control" name="vl_vendatotal" placeholder="Entre com o valor total" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_produto">Valor Produto:</label>
                      <input type="text" class="form-control" name="vl_produto" placeholder="Entre com o valor do produto" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_notafiscal">Nota fiscal:</label>
                      <input type="text" class="form-control" name="vl_notafiscal" placeholder="Entre com a nota fiscal" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_venda">Data:</label>
                      <input type="text" class="form-control" name="dt_venda" placeholder="Entre com a data" required="">
                    </div>
                    <div class="form-group">
                      <label for="ds_venda">Descrição venda:</label>
                      <input type="text" class="form-control" name="ds_venda" placeholder="Entre com a descrição de venda" required="">
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