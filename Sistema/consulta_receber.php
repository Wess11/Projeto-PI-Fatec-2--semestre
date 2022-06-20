<?php
  
  // Incluir arquivo de dados
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // excluir registro da tabela
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $DBMagico->excluir_receber($deleteId);
  }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consulta contas à receber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,600&display=swap" rel="stylesheet">

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
  <h4>Consulta Contas à Receber</h4>
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
                      <label for="cod_carteira">Conta Receber</label>
                      <a href="contas_receber.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Código da Carteira</th>
        <th>Código do banco</th>
        <th>Agência</th>
        <th>Banco</th>
        <th>Valor Pago</th>
        <th>Vencimento</th>
        <th>Pagamento</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
          $rreceber = $DBMagico->selecionar_receber(); 
          foreach ($rreceber as $receber) {
        ?>
        <tr>
          <td><?php echo $receber['cod_carteira'] ?></td>
          <td><?php echo $receber['cod_banco'] ?></td>
          <td><?php echo $receber['nr_agencia'] ?></td>
          <td><?php echo $receber['ds_banco'] ?></td>
          <td><?php echo $receber['valor_total'] ?></td>
          <td><?php echo $receber['dt_vencimento'] ?></td>
          <td><?php echo $receber['dt_recebimento'] ?></td>
          
          <td>
            <button class="btn btn-primary mr-2"><a href="update_receber.php?editId=<?php echo $receber['cod_carteira'] ?>">
              <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
            <button class="btn btn-danger"><a href="consulta_receber.php?deleteId=<?php echo $receber['cod_carteira'] ?>" onclick="confirm('Tem certeza que deseja excluir o registro?')">
              <i class="fa fa-trash text-white" aria-hidden="true"></i>
            
            </a></button>
          </td>
        </tr>
      <?php }

      ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>