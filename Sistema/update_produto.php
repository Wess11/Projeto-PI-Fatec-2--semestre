<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $clientes = $DBMagico->selecionar_produto1($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_produto($_POST);
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
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Cadastro</h4>
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
       
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $produto['id_produto']; ?>">
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