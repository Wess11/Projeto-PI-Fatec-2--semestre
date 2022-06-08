<?php
  
  // Incluir arquivo de dados
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // excluir registro da tabela
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $DBMagico->excluir_venda($deleteId);
  }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consulta Vendas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Consulta Vendas</h4>
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
                      <label for="id_venda">Venda:</label>
                      <input type="text" class="form-control" name="id_venda" placeholder="Entre com a venda" required="">
                    </div> <button class="btn btn-primary mr-2"><a href="display.php?editId=<?php echo $venda['id_venda'] ?>">
              <i class="fa fa-search text-white" aria-hidden="true"></i></a></button></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id_Venda</th>
        <th>Id_cliente</th>
        <th>Valor Total</th>
        <th>Nota Fiscal</th>
        <th>Data da Venda<th>
        <th>Descrição<th>
        <th>Observação</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $vendas = $DBMagico->selecionar_venda(); 
          foreach ($vendas as $venda) {
        ?>
        <tr>
          <td><?php echo $venda['id_venda'] ?></td>
          <td><?php echo $venda['id_cl'] ?></td>
          <td><?php echo $venda['vl_vendatotal'] ?></td>
          <td><?php echo $venda['dt_venda'] ?></td>
          <td><?php echo $venda['ds_venda'] ?></td>
          <td><?php echo $venda['observacao'] ?></td>
          <td>
            <button class="btn btn-primary mr-2"><a href="update_venda.php?editId=<?php echo $venda['id_venda'] ?>">
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