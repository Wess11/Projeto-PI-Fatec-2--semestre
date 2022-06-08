<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $fornecedor = $DBMagico->selecionar_fornecedor1($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_fornecedor($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Atualizar Fornecedores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Dados Fornecedores</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Atualizar Registros</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update_fornecedores.php" method="POST">
                    <div class="form-group">
                      <label for="ds_fornecedor">Fornecedor:</label>
                      <input type="text" class="form-control" name="uds_fornecedor" value="<?php echo $fornecedor['ds_fornecedor']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="endereco">Endereço:</label>
                      <input type="text" class="form-control" name="uendereco" value="<?php echo $fornecedor['endereco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="bairro">Bairro:</label>
                      <input type="text" class="form-control" name="ubairro" value="<?php echo $fornecedor['bairro']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="complemento">Complemento:</label>
                      <input type="text" class="form-control" name="ucomplemento" value="<?php echo $fornecedor['complemento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cidade">Cidade:</label>
                      <input type="text" class="form-control" name="ucidade" value="<?php echo $fornecedor['cidade']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cnpjcpf">CNPJ:</label>
                      <input type="text" class="form-control" name="ucnpjcpf" value="<?php echo $fornecedor['cnpjcpf']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="telefone">Telefone:</label>
                      <input type="text" class="form-control" name="utelefone" value="<?php echo $fornecedor['telefone']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" name="uemail" value="<?php echo $fornecedor['email']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="whatsapp">Whatsapp:</label>
                      <input type="text" class="form-control" name="uwhatsapp" value="<?php echo $fornecedor['whatsapp']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="data_cadastro">Data Cadastro:</label>
                      <input type="text" class="form-control" name="udata_cadastro" value="<?php echo $fornecedor['data_cadastro']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $fornecedor['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id_fornecedor" value="<?php echo $fornecedor['id_fornecedor']; ?>">
                      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Atualizar">
                    </div>
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