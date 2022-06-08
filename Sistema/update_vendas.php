<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $venda = $DBMagico->selecionar_vendas1($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_vendas($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Vendas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Dados vendas</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Atualizar Registros</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update_vendas.php" method="POST">
                    <div class="form-group">
                      <label for="id_prod">Id Produtos:</label>
                      <input type="text" class="form-control" name="uid_prod" value="<?php echo $vendas['id_prod']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_cl">id Cliente:</label>
                      <input type="text" class="form-control" name="uid_cl" value="<?php echo $vendas['id_cl']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_fornec">id fornecedor:</label>
                      <input type="text" class="form-control" name="uid_fornec" value="<?php echo $vendas['id_fornec']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_vendatotal">Total venda:</label>
                      <input type="text" class="form-control" name="uvl_vendatotal" value="<?php echo $vendas['vl_vendatotal']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_notafiscal">Nota fiscal:</label>
                      <input type="text" class="form-control" name="vl_notafiscal" value="<?php echo $vendas['vl_notafiscal']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_venda">CNPJ:</label>
                      <input type="text" class="form-control" name="udt_venda" value="<?php echo $vendas['dt_venda']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $vendas['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id_venda" value="<?php echo $vendas['id_venda']; ?>">
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