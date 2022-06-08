<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastro'])) {
    $ds_fornecedor = $_POST['ds_fornecedor'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cnpjcpf = $_POST['cnpjcpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $data_cadastro = $_POST['data_cadastro'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_fornecedor($ds_fornecedor, $endereco, $bairro, $complemento, $cidade, $cnpjcpf, $telefone, $email, $whatsapp, $data_cadastro, $observacao);
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro Fornecedores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Fornecedores</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="fornecedor.php" method="POST">
                    <div class="form-group">
                      <label for="ds_fornecedor">Fornecedor:</label>
                      <input type="text" class="form-control" name="ds_fornecedor" placeholder="Entre com o fornecedor" required="">
                    </div>
                    <div class="form-group">
                      <label for="endereco">Endereço:</label>
                      <input type="text" class="form-control" name="endereco" placeholder="Entre com o endereço" required="">
                    </div>
                    <div class="form-group">
                      <label for="bairro">Bairro:</label>
                      <input type="text" class="form-control" name="bairro" placeholder="Entre com o bairro" required="">
                    </div>
                    <div class="form-group">
                      <label for="cidade">Cidade</label>
                      <input type="text" class="form-control" name="cidade" placeholder="Entre com cidade" required="">
                    </div>
                    <div class="form-group">
                      <label for="complemento">Complemento</label>
                      <input type="text" class="form-control" name="complemento" placeholder="Entre com o complemento" required="">
                    </div>
                    <div class="form-group">
                    <label for="cnpjcpf">CNPJ:</label>
                      <input type="text" class="form-control" name="cnpjcpf" placeholder="Entre com o CNPJ" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" name="email" placeholder="Entre com o Email" required="">
                    </div>
                    <div class="form-group">
                    <label for="telefone">Telefone:</label>
                      <input type="text" class="form-control" name="telefone" placeholder="Entre com o Telefone" required="">
                    </div>
                    <div class="form-group">
                      <label for="whatsapp">whatsApp:</label>
                      <input type="text" class="form-control" name="whatsapp" placeholder="Entre com o WhatsApp" required="">
                    </div>
                    <div class="form-group">
                      <label for="data_cadastro">Data cadastro:</label>
                      <input type="text" class="form-control" name="data_cadastro" placeholder="Entre com a data" required="">
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