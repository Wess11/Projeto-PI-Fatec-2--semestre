<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastro'])) {
    $cod_carteira = $_POST['cod_carteira'];
    $cod_banco = $_POST['cod_banco'];
    $nr_conta = $_POST['nr_conta'];
    $nr_agencia = $_POST['nr_agencia'];
    $ds_banco = $_POST['ds_banco'];
    $vl_pago = $_POST['vl_pago'];
    $vl_jurosmes = $_POST['vl_jurosmes'];
    $vl_jurosdia = $_POST['vl_jurosdia'];
    $data_vencimento = $_POST['data_vencimento'];
    $dt_pagamento = $_POST['dt_pagamento'];
    $titulo = $_POST['titulo'];
    $bordero = $_POST['bordero'];
    $pix = $_POST['pix'];
    $boletobancario = $_POST['boletobancario'];
    $cnpjcpf = $_POST['cnpjcpf'];
    $vl_parcela = $_POST['vl_parcela'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_pagar($cod_carteira, $cod_banco, $nr_conta, $nr_agencia, $ds_banco,$vl_pago,$vl_jurosmes, $vl_jurosdia, $data_vencimento, $dt_pagamento, $titulo, $bordero, $pix, $boletobancario, $cnpjcpf, $vl_parcela,  $observacao);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contas Pagar</title>
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
</head>
<body>
<a class="voltar" href="consulta_pagar.php">Voltar</a>
<div class="card text-center" style="padding:15px;">
<legend><b>Fórmulário Contas à Pagar</b></legend>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="contas_pagar.php" method="POST">
                  <div class="form-group">
                      <label for="cod_carteira">Código da Carteira:</label>
                      <input type="text" class="form-control" name="cod_carteira" placeholder="Entre com o código da carteira" required="">
                    </div>
                    <div class="form-group">
                      <label for="cod_banco">Código do Banco:</label>
                      <input type="text" class="form-control" name="cod_banco" placeholder="Entre com o código do Banco" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_conta">Número da Conta:</label>
                      <input type="text" class="form-control" name="nr_conta" placeholder="Entre com o número da Conta" required="">
                    </div>
                    <div class="form-group">
                      <label for="nr_agencia">Agência:</label>
                      <input type="text" class="form-control" name="nr_agencia" placeholder="Entre com a Agência" required="">
                    </div>
                    <div class="form-group">
                      <label for="ds_banco">dsBanco:</label>
                      <input type="text" class="form-control" name="ds_banco" placeholder="Entre com o ds Banco" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_pago">Valor Pago:</label>
                      <input type="text" class="form-control" name="vl_pago" placeholder="Entre com o valor pago" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosmes">Juros Mês:</label>
                      <input type="text" class="form-control" name="vl_jurosmes" placeholder="Entre com os juros mensais" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_jurosdia">Juros Dia:</label>
                      <input type="text" class="form-control" name="vl_jurosdia" placeholder="Entre com os juros diários" required="">
                    </div>
                    <div class="form-group">
                      <label for="data_vencimento">Data Vencimento:</label>
                      <input type="text" class="form-control" name="data_vencimento" placeholder="Entre com a data de vencimento" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_pagamento">Data Pagamento:</label>
                      <input type="text" class="form-control" name="dt_pagamento" placeholder="Entre com a data de pagamento" required="">
                    </div>
                    <div class="form-group">
                      <label for="titulo">Título:</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Entre com o título" required="">
                    </div>
                    <div class="form-group">
                      <label for="bordero">Borderô:</label>
                      <input type="text" class="form-control" name="bordero" placeholder="Entre com o borderô" required="">
                    </div>
                    <div class="form-group">
                      <label for="pix">PIX:</label>
                      <input type="text" class="form-control" name="pix" placeholder="Entre com o PIX" required="">
                    </div>
                    <div class="form-group">
                      <label for="boletobancario">Boleto Bancário:</label>
                      <input type="text" class="form-control" name="boletobancario" placeholder="Entre com o boleto bancário" required="">
                    </div>
                    <div class="form-group">
                      <label for="vl_parcela">Valor Parcela:</label>
                      <input type="text" class="form-control" name="vl_parcela" placeholder="Entre com o valor da parcela" required="">
                    </div>
                    <div class="form-group">
                      <label for="cnpjcpf">CNPJ:</label>
                      <input type="text" class="form-control" name="cnpjcpf" placeholder="Entre com o CNPJ" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="observacao" placeholder="Entre com a observacao" required="">
                    </div>
                                
                  
                    <input type="submit" name="cadastro" class="btn btn-primary" style="float:right;" value="Cadastrar">

                   
                      
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