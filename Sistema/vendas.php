<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastrar'])) {
    $id_prod = $_POST['id_prod'];
    $id_cl = $_POST['id_cl'];
    $id_fornec = $_POST['id_fornec'];
    $vl_vendatotal = $_POST['vl_vendatotal'];
    $vl_produto = $_POST['vl_produto'];
    $vl_notafiscal = $_POST['vi_notafiscal'];
    $dt_venda = $_POST['dt_venda'];
    $dt_compra = $_POST['dt_compra'];
    $ds_venda = $_POST['ds_venda'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_venda($id_prod, $id_cl, $id_fornec, $vl_vendatotal, $vl_produto, $vl_notafiscal, $dt_venda, $dt_compra, $ds_venda, $observacao);
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
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Vendas</h4>
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
                      <label for="vl_vendatotal">Total venda:</label>
                      <input type="text" class="form-control" name="id_fornec" placeholder="Entre com o fornecedor" required="">
                    </div>
                    <div class="form-group">
                      <label for="fornecedor">Fornecedor:</label>
                      <input type="text" class="form-control" name="fornecedor" placeholder="Entre com o fornecedor" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_produto">Valor Produto:</label>
                      <input type="text" class="form-control" name="vl_produto" placeholder="Entre com o valor do produto" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_notafiscal">Nota fiscal:</label>
                      <input type="text" class="form-control" name="vl_notafiscal" placeholder="" required="">
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