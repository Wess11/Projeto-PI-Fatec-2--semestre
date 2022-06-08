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
    $valor_total = $_POST['valor_total'];
    $vl_jurosmes = $_POST['vl_jurosmes'];
    $vl_jurosdia = $_POST['vl_jurosdia'];
    $dt_vencimento = $_POST['dt_vencimento'];
    $dt_recebimento = $_POST['dt_recebimento'];
    $titulo = $_POST['titulo'];
    $bordero = $_POST['bordero'];
    $pix = $_POST['pix'];
    $boletobancario = $_POST['boletobancario'];
    $cpfcnpj = $_POST['cpfcnpj'];
    $observacao = $_POST['observacao'];
    $DBMagico->adicionar_receber($cod_carteira, $cod_banco, $nr_conta, $nr_agencia, $ds_banco,$valor_total,$vl_jurosmes, $vl_jurosdia, $dt_vencimento, $dt_recebimento, $titulo, $bordero, $pix, $boletobancario, $cpfcnpj, $observacao);
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
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Contas Receber</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="contas_receber.php" method="POST">
                  <div class="form-group">
                      <label for="cod_carteira">Código da carteira:</label>
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
                      <label for="ds_banco">Banco:</label>
                      <input type="text" class="form-control" name="ds_banco" placeholder="Entre com o ds Banco" required="">
                    </div>
                    <div class="form-group">
                      <label for="valor_total">Valor Pago:</label>
                      <input type="text" class="form-control" name="valor_total" placeholder="Entre com o valor pago" required="">
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
                      <label for="dt_vencimento">Data Vencimento:</label>
                      <input type="text" class="form-control" name="dt_vencimento" placeholder="Entre com a data de vencimento" required="">
                    </div>
                    <div class="form-group">
                      <label for="dt_recebimento">Data Pagamento:</label>
                      <input type="text" class="form-control" name="dt_recebimento" placeholder="Entre com a data de pagamento" required="">
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
                      <label for="cpfcnpj">CNPJ:</label>
                      <input type="text" class="form-control" name="cpfcnpj" placeholder="Entre com o CNPJ" required="">
                    </div>
                    <div class="form-group">
                      <label for="observacao">Observação:</label>
                      <input type="text" class="form-control" name="observacao" placeholder="Entre com a observacao" required="">
                    </div>
                                
                  


                      
                    <input type="submit" name="cadastro" class="btn btn-primary" style="float:right;" value="Cadastrar">

                      <button class="btn btn-primary mr-2"><a href="update.php?editId=<?php echo $Aluno['id'] ?>">
                      <i class="fa fa-check text-white" aria-hidden="true"></i></a></button>
                      
                    <button class="btn btn-danger mr-2" ><a href="display.php?deleteId=<?php echo $Aluno['id'] ?>" onclick="confirm('Tem certeza que deseja excluir o registro?')">
                     <i class="fa fa-trash text-white" aria-hidden="true"></i>

                     <button class="btn btn-success mr-2"><a href="update.php?editId=<?php echo $Aluno['id'] ?>">
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