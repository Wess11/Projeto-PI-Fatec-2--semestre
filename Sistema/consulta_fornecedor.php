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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,600&display=swap" rel="stylesheet">

  <!-- favicon  -->
  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">

  <style>
  .home{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    text-decoration: none;
    color: white;
    cursor: pointer;
    border-radius: 10px;
    font-size: 15px;
    padding: 10px;
}
body{
    font-family: Roboto Flex;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
    color: white;
}
.table{
  color:white;
}
.card{
  background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
  color: white;;
}

</style>
</head>
<body>
<a class="home" href="principal.php">Home</a>
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
                      <label for="ds_fornecedor">Fornecedores</label><a href="fornecedor.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a></h2>

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
             <button class="btn btn-danger"><a href="consulta_fornecedor.php?deleteId=<?php echo $fornecedor['id_fornecedor'] ?>" onclick="confirm('Tem certeza que deseja excluir o registro?')">
              <i class="fa fa-trash text-white" aria-hidden="true"></i>
            
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