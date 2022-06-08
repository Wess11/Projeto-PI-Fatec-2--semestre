<?php
  
  // Incluir arquivo de dados
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // excluir registro da tabela
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $DBMagico->excluir_fornecedor($deleteId);
  }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consulta </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Consulta Fornecedores</h4>
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
                      <label for="ds_fornecedor">fornecedor:</label>
                      <input type="text" class="form-control" name="ds_fornecedor" placeholder="Entre com o nome" required="">
                    </div> <button class="btn btn-primary mr-2"><a href="display.php?editId=<?php echo $fornecedor['id_fornecedor'] ?>">
              <i class="fa fa-search text-white" aria-hidden="true"></i></a></button></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>Email</th>
        <th>WhatsApp</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
          $fornecedores = $DBMagico->selecionar_fornecedor(); 
          foreach ($fornecedores as $fornecedor) {
        ?>
        <tr>
          <td><?php echo $fornecedor['id_fornecedor'] ?></td>
          <td><?php echo $fornecedor['ds_fornecedor'] ?></td>
          <td><?php echo $fornecedor['endereco'] ?></td>
          <td><?php echo $fornecedor['bairro'] ?></td>
          <td><?php echo $fornecedor['complemento'] ?></td>
          <td><?php echo $fornecedor['email'] ?></td>
          <td><?php echo $fornecedor['whatsapp'] ?></td>
          
          <td>
            <button class="btn btn-primary mr-2"><a href="update_fornecedor.php?editId=<?php echo $fornecedor['id_fornecedor'] ?>">
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