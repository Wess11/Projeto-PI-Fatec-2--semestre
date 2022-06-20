<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $cliente = $DBMagico->selecionar_Registro($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_clientes($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<style>
        body{
    font-family: Roboto Flex;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(11, 30, 54));
}

.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -30%);
    background-color: rgba(0, 0, 0, 0.8);
    padding: 1rem;
    border-radius: 1rem;
    width: 25%;
}
fieldset{
    border: 3px solid dodgerblue;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 8px;
    color: white;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}

.voltar{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    text-decoration: none;
    color: white;
    cursor: pointer;
    border-radius: 10px;
    font-size: 15px;
    padding: 10px;
}

#submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
}
    </style>
<body>
<div class="card text-center" style="padding:15px;">
<legend><b>Fórmulário Clientes</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Atualizar Registros</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update.php" method="POST">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="unome" value="<?php echo $cliente['nome']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="endereco">Endereço:</label>
                      <input type="text" class="form-control" name="uendereco" value="<?php echo $cliente['endereco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="bairro">Bairro:</label>
                      <input type="text" class="form-control" name="ubairro" value="<?php echo $cliente['bairro']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="complemento">Complemento:</label>
                      <input type="text" class="form-control" name="ucomplemento" value="<?php echo $cliente['complemento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cidade">Cidade:</label>
                      <input type="text" class="form-control" name="ucidade" value="<?php echo $cliente['cidade']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cnpjcpf">CNPJ:</label>
                      <input type="text" class="form-control" name="ucpfcnpj" value="<?php echo $cliente['cpfcnpj']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="telefone">Telefone:</label>
                      <input type="text" class="form-control" name="utelefone" value="<?php echo $cliente['telefone']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" name="uemail" value="<?php echo $cliente['email']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="senha">Senha:</label>
                      <input type="text" class="form-control" name="usenha" value="<?php echo $cliente['senha']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="whatsapp">Whatsapp:</label>
                      <input type="text" class="form-control" name="uwhatsapp" value="<?php echo $cliente['whatsapp']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $cliente['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente']; ?>">
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