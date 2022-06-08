<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cpfcnpj = $_POST['cpfcnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_cliente($nome, $cidade, $endereco, $bairro, $complemento, $cpfcnpj, $telefone, $email, $whatsapp, $observacao);
    
  }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Cadastro Clientes</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="cadastro.php" method="POST">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="Entre com o nome" required="">
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
                      <label for="numero">Número</label>
                      <input type="text" class="form-control" name="numero" placeholder="Entre com o Número" required="">
                    </div>
                    <div class="form-group">
                      <label for="complemento">Complemento</label>
                      <input type="text" class="form-control" name="complemento" placeholder="Entre com o complemento" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" name="email" placeholder="Entre com o Email" required="">
                    </div>
                    <div class="form-group">
                      <label for="whatsapp">whatsApp:</label>
                      <input type="text" class="form-control" name="whatsapp" placeholder="Entre com o WhatsApp" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="observacao" placeholder="Entre com a observação" required="">
                    </div>
                                
                  

                    <input type="submit" name="cadastro" class="btn btn-primary" style="float:right;" value="Cadastrar">
                   
                      <button class="btn btn-primary mr-2"><a href="cadastro.php?editId=<?php echo $clientes['id_cliente'] ?>">
                      <i class="fa fa-check text-white" name = "cadastro" aria-hidden="true"></i></a></button>
                    
                      <button class="btn btn-success mr-2"><a href="display.php?editId=<?php echo $Aluno['id'] ?>">
                      <i class="fa fa-search text-white" aria-hidden="true"></i></a></button>
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