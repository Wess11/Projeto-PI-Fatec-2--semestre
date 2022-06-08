<?php
  
  // Incluir arquivo de dados
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // excluir registro da tabela
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $DBMagico->excluir_produto($deleteId);
  }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consulta Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Consulta Produtos</h4>
</div><br><br> 
<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Seu registro foi inserido com sucesso!
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Seu registro foi atualizado com sucesso!
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Registro Excluido com sucesso!
            </div>";
    }
  ?>
  <h2><div class="form-group">
                      <label for="ds_produto">Produto:</label>
                      <input type="text" class="form-control" name="ds_produto" placeholder="Entre com o produto" required="">
                    </div> <button class="btn btn-primary mr-2"><a href="display.php?editId=<?php echo $produto['id_produto'] ?>">
              <i class="fa fa-search text-white" aria-hidden="true"></i></a></button></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id_produto</th>
        <th>Descrição Produto</th>
        <th>Preço</th>
        <th>Marca</th>
        <th>Observação</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $produtos = $DBMagico->selecionar_produto(); 
          foreach ($produtos as $produto) {
        ?>
        <tr>
          <td><?php echo $produto['id_produto'] ?></td>
          <td><?php echo $produto['ds_produto'] ?></td>
          <td><?php echo $produto['preco'] ?></td>
          <td><?php echo $produto['marca'] ?></td>
          <td><?php echo $produto['observacao'] ?></td>
          <td>
            <button class="btn btn-primary mr-2"><a href="update.php?editId=<?php echo $produto['id_produto'] ?>">
              <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
            
            </a></button>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>