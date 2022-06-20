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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,600&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  
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
    background-color: rgba(0, 0, 0, 0.8);;
    border-radius: 8px;
    color : white;
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
</head>
<body>
<body>
<div class="card text-center" style="padding:15px;">
<legend><b>Formulário Vendas</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Atualizar dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update_vendas.php" method="POST">
                    <div class="form-group">
                      <label for="id_prod">Id Produtos:</label>
                      <input type="text" class="form-control" name="uid_prod" value="<?php echo $venda['id_prod']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_cl">id Cliente:</label>
                      <input type="text" class="form-control" name="uid_cl" value="<?php echo $venda['id_cl']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="id_fornec">id fornecedor:</label>
                      <input type="text" class="form-control" name="uid_fornec" value="<?php echo $venda['id_fornec']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_vendatotal">Total venda:</label>
                      <input type="text" class="form-control" name="uvl_vendatotal" value="<?php echo $venda['vl_vendatotal']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_produto">Valor Produto:</label>
                      <input type="text" class="form-control" name="uvl_produto" value="<?php echo $venda['vl_produto']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_notafiscal">Nota fiscal:</label>
                      <input type="text" class="form-control" name="uvl_notafiscal" value="<?php echo $venda['vl_notafiscal']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_venda">Data Venda:</label>
                      <input type="text" class="form-control" name="udt_venda" value="<?php echo $venda['dt_venda']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="ds_venda">Data Venda:</label>
                      <input type="text" class="form-control" name="uds_venda" value="<?php echo $venda['ds_venda']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $venda['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id_venda" value="<?php echo $venda['id_venda']; ?>">
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