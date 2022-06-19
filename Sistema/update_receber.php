<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $receber = $DBMagico->selecionar_receber1($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_receber($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contas à receber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

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
    background-color: dodgerblue;
    border-radius: 8px;
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
<div class="card text-center" style="padding:15px;">
<legend><b>Contas à receber</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Atualizar dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update_receber.php" method="POST">
                  <div class="form-group">
                      <label for="cod_carteira">Código da Carteira:</label>
                      <input type="text" class="form-control" name="ucod_carteira" value="<?php echo $receber['cod_carteira']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cod_banco">Código do Banco:</label>
                      <input type="text" class="form-control" name="ucod_banco" value="<?php echo $receber['cod_banco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_conta">Conta:</label>
                      <input type="text" class="form-control" name="unr_conta" value="<?php echo $receber['nr_conta']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_agencia">Agencia:</label>
                      <input type="text" class="form-control" name="unr_agencia" value="<?php echo $receber['nr_agencia']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="ds_banco">Banco:</label>
                      <input type="text" class="form-control" name="uds_banco" value="<?php echo $receber['ds_banco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="valor_total">Valor Total:</label>
                      <input type="text" class="form-control" name="uvalor_total" value="<?php echo $receber['valor_total']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosmes">Juros mês:</label>
                      <input type="text" class="form-control" name="uvl_jurosmes" value="<?php echo $receber['vl_jurosmes']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosdia">Juros dia:</label>
                      <input type="text" class="form-control" name="uvl_jurosdia" value="<?php echo $receber['vl_jurosdia']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_vencimento">Data de Vencimento:</label>
                      <input type="text" class="form-control" name="udt_vencimento" value="<?php echo $receber['dt_vencimento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_recebimento">Data Recebimento:</label>
                      <input type="text" class="form-control" name="udt_recebimento" value="<?php echo $receber['dt_recebimento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="titulo">Título:</label>
                      <input type="text" class="form-control" name="utitulo" value="<?php echo $receber['titulo']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="bordero">Bordero:</label>
                      <input type="text" class="form-control" name="ubordero" value="<?php echo $receber['bordero']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="pix">PIX:</label>
                      <input type="text" class="form-control" name="upix" value="<?php echo $receber['pix']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="boletobancario">Boleto Bancário:</label>
                      <input type="text" class="form-control" name="uboletobancario" value="<?php echo $receber['boletobancario']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cpfcnpj">CNPJ:</label>
                      <input type="text" class="form-control" name="ucpfcnpj" value="<?php echo $receber['cpfcnpj']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $receber['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="cod_carteira" value="<?php echo $receber['cod_carteira']; ?>">

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