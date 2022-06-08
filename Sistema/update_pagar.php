<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $pagar = $DBMagico->selecionar_pagar1($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_pagar($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contas à pagar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Atualizar contas à pagar</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Atualizar dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update_pagar.php" method="POST">
                  <div class="form-group">
                      <label for="cod_carteira">Código da Carteira:</label>
                      <input type="text" class="form-control" name="ucod_carteira" value="<?php echo $pagar['cod_carteira']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cod_banco">Código do Banco:</label>
                      <input type="text" class="form-control" name="ucod_banco" value="<?php echo $pagar['cod_banco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_conta">Conta:</label>
                      <input type="text" class="form-control" name="unr_conta" value="<?php echo $pagar['nr_conta']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_agencia">Agencia:</label>
                      <input type="text" class="form-control" name="unr_agencia" value="<?php echo $pagar['nr_agencia']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="ds_banco">Banco:</label>
                      <input type="text" class="form-control" name="uds_banco" value="<?php echo $pagar['ds_banco']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_pago">Valor Pagar:</label>
                      <input type="text" class="form-control" name="uvl_pago" value="<?php echo $pagar['vl_pago']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosmes">Juros mês:</label>
                      <input type="text" class="form-control" name="uvl_jurosmes" value="<?php echo $pagar['vl_jurosmes']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosdia">Juros dia:</label>
                      <input type="text" class="form-control" name="uvl_jurosdia" value="<?php echo $pagar['vl_jurosdia']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="data_vencimento">Data de Vencimento:</label>
                      <input type="text" class="form-control" name="udata_vencimento" value="<?php echo $pagar['data_vencimento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_pagamento">Data Recebimento:</label>
                      <input type="text" class="form-control" name="udt_pagamento" value="<?php echo $pagar['dt_pagamento']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="titulo">Título:</label>
                      <input type="text" class="form-control" name="titulo" value="<?php echo $pagar['titulo']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="bordero">Bordero:</label>
                      <input type="text" class="form-control" name="ubordero" value="<?php echo $pagar['bordero']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="pix">PIX:</label>
                      <input type="text" class="form-control" name="upix" value="<?php echo $pagar['pix']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="boletobancario">Boleto Bancário:</label>
                      <input type="text" class="form-control" name="uboletobancario" value="<?php echo $pagar['boletobancario']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="cnpjcpf">CNPJ:</label>
                      <input type="text" class="form-control" name="ucnpjcpf" value="<?php echo $pagar['cnpjcpf']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="uobservacao" value="<?php echo $pagar['observacao']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="cod_carteira" value="<?php echo $pagar['cod_carteira']; ?>">
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