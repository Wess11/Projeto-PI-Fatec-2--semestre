<?php
    class BancoDados
    {
        private $servername = "localhost" ; 
        private $username    = "root" ; 
        private $password    = "" ; 
        private $dbname    = "bancoprojeto" ; 
        private $conn ;  
        //Conexão de banco de dados
        
    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

        //Insere os dados do cliente na tabela do cliente
        private function validar_id_cliente($id_cliente){
            if ($id_cliente < 0){
                echo "Cliente não cadastrado";
                return FALSE;
            }
            return TRUE;
        }
        
        public function adicionar_cliente($nome, $cidade, $endereco, $bairro, $complemento, $cpfcnpj, $telefone, $email, $whatsapp, $observacao)
        {
            if ($this->validar_id_cliente($id_cliente))
            {   
                $sql = "INSERT INTO clientes ( `nome`, `cidade`, `endereco`, `bairro`, `complemento`, `cpfcnpj`, `telefone`, `email`, `whatsapp`, `observacao` ) ";
                $sql = $sql."VALUES ('".$nome."', '".$cidade."', '".$endereco."', '".$bairro."', '".$complemento."','".$cpfcnpj."','".$telefone."','".$email."','".$whatsapp."','".$observacao."')";
                if (mysqli_query($this->conn, $sql)) {
                  echo "Cadastro feito com sucesso";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error(conn);
              }
             
          }
        }

        // Busca registros de clientes para listagem de shows
        public function selecionar_clientes ()  
        {
            $query = "SELECT * FROM clientes" ;
            $result = $this->conn->query($query);
        if ( $result->num_rows > 0 ) {   
            $data = array () ;
            while ($row = $result->fetch_assoc ()) {  
                   $data[] = $row;
            }
             return $data ; 
            } else {
             echo "Nenhum registro encontrado" ; 
            }
        }
        // Busca dados únicos para edição da tabela de alunos
        public function selecionar_Registro ($id_cliente)  
        {
            $query = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente'" ;
            $result = $this->conn->query($query) ;
        if ( $result->num_rows > 0 ) {   
            $row = $result->fetch_assoc () ;
            return $row ; 
            } else {
            echo "Registro não encontrado" ; 
            }
        }
        // Atualiza os dados do cliente na tabela do cliente
        public function atualizar_clientes ($postData)  
        {
            $nome = $this->conn-> real_escape_string ($_POST['unome'] ) ;
            $cidade = $this->conn->real_escape_string ($_POST['ucidade'] ) ;
            $endereco = $this->conn->real_escape_string ($_POST['uendereco'] ) ;
            $bairro = $this->conn->real_escape_string ($_POST['ubairro'] ) ;
            $complemento = $this->conn->real_escape_string ($_POST['ucomplemento'] ) ;
            $cpfcnpj = $this->conn->real_escape_string ($_POST['ucpfcnpj'] ) ;
            $telefone = $this->conn->real_escape_string ($_POST['utelefone'] ) ;
            $email = $this->conn->real_escape_string ($_POST['uemail'] ) ;
            $whatsapp = $this->conn->real_escape_string ($_POST['uwhatsapp'] ) ;
            $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
            $id_cliente = $this->conn->real_escape_string ($_POST['id_cliente '] ) ;
        if (!empty($id_cliente) && !empty($postData)) {  
            $query = "UPDATE clientes SET nome = '$nome', cidade = '$cidade', endereco = '$endereco', bairro = '$bairro', complemento = '$complemento', cpfcnpj = '$cpfcnpj', telefone = '$telefone', email = '$email', whatssapp = '$whatsapp', observacao = '$observacao' WHERE id_cliente = '$id_cliente'" ;
            $sql = $this->conn->query ($query) ;
            if ( $sql == true ) {  
                header ( "Location:display.php?msg2=update" ) ;
            } else {
                echo "Falha no registro atualizado, tente novamente!" ; 
            }
            }
            
        }
        // Excluir dados do cliente da tabela de clientes
        public function excluir_cliente( $id_cliente )  
        {
            $query = "Delete from clientes WHERE id = '$id_cliente'" ;
            $sql = $this-> $conn->query($query) ;
        if ( $sql == true ) {  
            header ( "Location:cadastro.php?msg3=delete" ) ;
        } else {
            echo "O registro não exclui tente novamente" ; 
            }
        }
 
//------------------------------------------------------------------------------------

private function validar_id_produto($id_produto){
            if ($id_produto < 0){
                echo "Produto não cadastrado";
                return FALSE;
            }
            return TRUE;
        }
        
        public function adicionar_produto($ds_produto, $preco, $marca, $observacao)
        {
            if ($this->validar_id_produto($id_produto))
            {   
                $sql = "INSERT INTO produtos ( `ds_produto`, `preco`, `marca`, `observacao` ) ";
                $sql = $sql."VALUES ('".$ds_produto."', '".$preco."', '".$marca."', '".$observacao."')";
                if (mysqli_query($this->$conn, $sql)) {
                  echo "Cadastro feito com sucesso";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
             
          }
        }

        // Busca registros de clientes para listagem de shows
        public function selecionar_produto ()  
        {
            $query = "SELECT * FROM produtos" ;
            $result = $this->conn->query($query);
        if ( $result->num_rows > 0 ) {   
            $data = array () ;
            while ( $row = $result->fetch_assoc ()) {  
                   $data[] = $row;
            }
             return $data ; 
            } else {
             echo "Nenhum registro encontrado" ; 
            }
        }
        // Busca dados únicos para edição da tabela de alunos
        public function selecionar_produto1 ($ds_produto)  
        {
            $query = "SELECT * FROM produtos WHERE id_produto = '$id_produto'" ;
            $result = $this->conn->query($query) ;
        if ( $result->num_rows > 0 ) {   
            $row = $result->fetch_assoc () ;
            return $row ; 
            } else {
            echo "Registro não encontrado" ; 
            }
        }
        // Atualiza os dados do cliente na tabela do cliente
        public function atualizar_produto ($postData)  
        {
            $ds_produto = $this->conn-> real_escape_string ($_POST['uds_produto'] ) ;
            $preco = $this->conn->real_escape_string ($_POST['upreco'] ) ;
            $marca = $this->conn->real_escape_string ($_POST['umarca'] ) ;
            $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
            $id_produto = $this->conn->real_escape_string ($_POST['id_produto '] ) ;
        if (!empty($id_produto) && !empty($postData)) {  
            $query = "UPDATE produtos SET ds_produto = '$ds_produto', preco = '$preco', marca = '$marca', observacao = '$observacao' WHERE id_produto = '$id_produto'" ;
            $sql = $this->conn->query ($query) ;
            if ( $sql == true ) {  
                header ( "Location:display.php?msg2=update" ) ;
            } else {
                echo "Falha no registro atualizado, tente novamente!" ; 
            }
            }
            
        }
        // Excluir dados do cliente da tabela de clientes
        public function excluir_produto( $id )  
        {
            $query = "Delete from produtos WHERE id = '$id_cliente'" ;
            $sql = $this-> conn->query($query) ;
        if ( $sql == true ) {  
            header ( "Location:update.php?msg3=delete" ) ;
        } else {
            echo "O registro não exclui tente novamente" ; 
            }
        }


        //-----------------------------------------------------------------------------
        private function validar_receber($cod_carteira){
            if ($cod_carteira < 0){
                echo "Conta não cadastrado";
                return FALSE;
            }
            return TRUE;
        }
        
        public function adicionar_receber($cod_carteira, $cod_banco, $nr_conta, $nr_agencia, $ds_banco, $valor_total, $vl_jurosmes, $vl_jurosdia, $dt_vencimento, $dt_recebimento, $titulo, $bordero, $pix, $boletobancario, $cpfcnpj, $observacao)
        {
            if ($this->validar_receber($cod_carteira))
            {   
                $sql = "INSERT INTO contas_receber ( `cod_carteira`, `cod_banco`, `nr_conta`,`nr_agencia`,`ds_banco`,`valor_total`,`vl_jurosmes`,`vl_jurosdia`,`dt_vencimento`,`dt_recebimento`,`titulo`,`bordero`,`pix`,`boletobancario`,`cpfcnpj`, `observacao` ) ";
                $sql = $sql."VALUES ('".$cod_carteira."', '".$cod_banco."', '".$nr_conta."','".$nr_agencia."','".$ds_banco."','".$valor_total."','".$vl_jurosmes."', '".$vl_jurosdia."','".$dt_vencimento."','".$dt_recebimento."','".$titulo."','".$bordero."','".$pix."','".$boletobancario."','".$cpfcnpj."', '".$observacao."')";
                if (mysqli_query($this->conn,$sql)) {
                  echo "Cadastro feito com sucesso";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error(conn);
              }
             
          }
        }

        // Busca registros de clientes para listagem de shows
        public function selecionar_receber ()  
        {
            $query = "SELECT * FROM contas_receber" ;
            $result = $this->conn->query($query);
        if ( $result->num_rows > 0 ) {   
            $data = array () ;
            while ( $row = $result->fetch_assoc ()) {  
                   $data[] = $row;
            }
             return $data ; 
            } else {
             echo "Nenhum registro encontrado" ; 
            }
        }
        // Busca dados únicos para edição da tabela de alunos
        public function selecionar_receber1 ($cod_carteira)  
        {
            $query = "SELECT * FROM contas_receber WHERE cod_carteira = '$cod_carteira'" ;
            $result = $this->conn->query($query) ;
        if ( $result->num_rows > 0 ) {   
            $row = $result->fetch_assoc () ;
            return $row ; 
            } else {
            echo "Registro não encontrado" ; 
            }
        }
        // Atualiza os dados do cliente na tabela do cliente
        public function atualizar_receber($postData)  
        {
            $cod_banco = $this->conn-> real_escape_string ($_POST['ucodbanco'] ) ;
            $nr_conta = $this->conn->real_escape_string ($_POST['unr_conta'] ) ;
            $nr_agencia = $this->conn->real_escape_string ($_POST['unr_agencia'] ) ;
            $ds_banco = $this->conn->real_escape_string ($_POST['uds_banco'] ) ;
            $valor_total = $this->conn->real_escape_string ($_POST['uvalor_total'] ) ;
            $vl_jurosmes = $this->conn->real_escape_string ($_POST['uvl_jurosmes'] ) ;
            $vl_jurosdia = $this->conn->real_escape_string ($_POST['uvl_jurosdia'] ) ;
            $dt_vencimento = $this->conn->real_escape_string ($_POST['udt_vencimento'] ) ;
            $dt_recebimento = $this->conn->real_escape_string ($_POST['udt_recebimento'] ) ;
            $titulo = $this->conn->real_escape_string ($_POST['utitulo'] ) ;
            $bordero = $this->conn->real_escape_string ($_POST['ubordero'] ) ;
            $pix = $this->conn->real_escape_string ($_POST['upix'] ) ;
            $boletobancario = $this->conn->real_escape_string ($_POST['uboletobancario'] ) ;
            $cpfcnpj = $this->conn->real_escape_string ($_POST['ucpfcnpj'] ) ;
            $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
            $cod_carteira = $this->conn->real_escape_string ($_POST['cod_carteira '] ) ;
        if (!empty($cod_carteira) && !empty($postData)) {  
            $query = "UPDATE contas_receber SET codbanco = '$cod_banco', nr_conta = '$nr_conta', nr_agencia = '$nr_agencia',ds_banco = '$ds_banco',valor_total = '$valor_total',vl_jurosmes = '$vl_jurosmes',vl_jurosdia = '$vl_jurosdia',dt_vencimento = '$dt_vencimento',dt_recebimento = '$dt_recebimento',bordero = '$bordero', pix = '$pix',titulo = '$titulo', cpfcnpj = '$cpfcnpj',boletobancario = '$boletobancario', observacao = '$observacao' WHERE cod_carteira = '$cod_carteira'" ;
            $sql = $this->conn->query ($query) ;
            if ( $sql == true ) {  
                header ( "Location:update_receber.php?msg2=update" ) ;
            } else {
                echo "Falha no registro atualizado, tente novamente!" ; 
            }
            }
            
        }
        // Excluir dados do cliente da tabela de clientes
        public function excluir_receber( $cod_carteira)  
        {
            $query = "Delete from contas_receber WHERE cod_carteira = '$cod_carteira'" ;
            $sql = $this-> conn->query($query) ;
        if ( $sql == true ) {  
            header ( "Location:update_receber.php?msg3=delete" ) ;
        } else {
            echo "O registro não exclui tente novamente" ; 
            }
        }
    //--------------------------------------------------------------------------------------------------------------------------------
    private function validar_pagar($cod_carteira){
        if ($cod_carteira < 0){
            echo "Conta não cadastrado";
            return FALSE;
        }
        return TRUE;
    }
    
    public function adicionar_pagar($cod_carteira, $cod_banco, $nr_conta, $nr_agencia, $ds_banco,$vl_pago,$vl_jurosmes, $vl_jurosdia, $data_vencimento, $dt_pagamento, $titulo, $bordero, $pix, $boletobancario,$vl_parcela, $cnpjcpf, $observacao)
    {
        if ($this->validar_pagar($cod_carteira))
        {   
            $sql = "INSERT INTO contas_pagar ( `cod_carteira`, `cod_banco`, `nr_conta`,`nr_agencia`,`ds_banco`,`vl_pago`,`vl_jurosmes`,`vl_jurosdia`,`data_vencimento`,`dt_pagamento`,`titulo`,`bordero`,`pix`,`boletobancario`,`cnpjcpf`,`vl_parcela`, `observacao` ) ";
            $sql = $sql."VALUES ('".$cod_carteira."', '".$cod_banco."', '".$nr_conta."','".$nr_agencia."','".$ds_banco."','".$vl_pago."','".$vl_jurosmes."','".$vl_jurosdia."','".$data_vencimento."','".$dt_pagamento."','".$titulo."','".$bordero."','".$pix."','".$boletobancario."','".$cnpjcpf."','".$vl_parcela."', '".$observacao."')";
            if (mysqli_query($this->conn, $sql)) {
              echo "Cadastro feito com sucesso";
          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error(conn);
          }
         
      }
    }

    // Busca registros de clientes para listagem de shows
    public function selecionar_pagar ()  
    {
        $query = "SELECT * FROM contas_pagar" ;
        $result = $this->conn->query($query);
    if ( $result->num_rows > 0 ) {   
        $data = array () ;
        while ( $row = $result->fetch_assoc ()) {  
               $data[] = $row;
        }
         return $data ; 
        } else {
         echo "Nenhum registro encontrado" ; 
        }
    }
    // Busca dados únicos para edição da tabela de alunos
    public function selecionar_pagar1 ($cod_carteira)  
    {
        $query = "SELECT * FROM contas_pagar WHERE cod_carteira = '$cod_carteira'" ;
        $result = $this->conn->query($query) ;
    if ( $result->num_rows > 0 ) {   
        $row = $result->fetch_assoc () ;
        return $row ; 
        } else {
        echo "Registro não encontrado" ; 
        }
    }
    // Atualiza os dados do cliente na tabela do cliente
    public function atualizar_pagar ($postData)  
    {
        $cod_banco = $this->conn-> real_escape_string ($_POST['ucod_banco'] ) ;
        $nr_conta = $this->conn->real_escape_string ($_POST['unr_conta'] ) ;
        $nr_agencia = $this->conn->real_escape_string ($_POST['unr_agencia'] ) ;
        $ds_banco = $this->conn->real_escape_string ($_POST['uds_banco'] ) ;
        $valor_total = $this->conn->real_escape_string ($_POST['uvalor_total'] ) ;
        $vl_jurosmes = $this->conn->real_escape_string ($_POST['uvl_jurosmes'] ) ;
        $vl_jurosdia = $this->conn->real_escape_string ($_POST['uvl_jurosdia'] ) ;
        $dt_vencimento = $this->conn->real_escape_string ($_POST['udt_vencimento'] ) ;
        $dt_recebimento = $this->conn->real_escape_string ($_POST['udt_recebimento'] ) ;
        $titulo = $this->conn->real_escape_string ($_POST['utitulo'] ) ;
        $bordero = $this->conn->real_escape_string ($_POST['ubordero'] ) ;
        $pix = $this->conn->real_escape_string ($_POST['upix'] ) ;
        $boletobancario = $this->conn->real_escape_string ($_POST['uboletobancario'] ) ;
        $cpfcnpj = $this->conn->real_escape_string ($_POST['ucpfcnpj'] ) ;
        $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
        $cod_carteira = $this->conn->real_escape_string ($_POST['cod_carteira '] ) ;
    if (!empty($cod_carteira) && !empty($postData)) {  
        $query = "UPDATE contas_pagar SET cod_banco = '$cod_banco', nr_conta = '$nr_conta', nr_agencia = '$nr_agencia',ds_banco = '$ds_banco',valor_total = '$valor_total',vl_jurosmes = '$vl_jurosmes',vl_jurosdia = '$vl_jurosdia',dt_vencimento = '$dt_vencimento',dt_recebimento = '$dt_recebimento',bordero = '$bordero', pix = '$pix',titulo = '$titulo', cpfcnpj = '$cpfcnpj',boletobancario = '$boletobancario', observacao = '$observacao' WHERE cod_carteira = '$cod_carteira'" ;
        $sql = $this->conn->query ($query) ;
        if ( $sql == true ) {  
            header ( "Location:consulta_pagar.php?msg2=update" ) ;
        } else {
            echo "Falha no registro atualizado, tente novamente!" ; 
        }
        }
        
    }
    // Excluir dados do cliente da tabela de clientes
    public function excluir_pagar( $cod_carteira )  
    {
        $query = "Delete from contas_pagar WHERE cod_carteira = '$cod_carteira'" ;
        $sql = $this-> conn->query($query) ;
    if ( $sql == true ) {  
        header ( "Location:update_pagar.php?msg3=delete" ) ;
    } else {
        echo "O registro não exclui tente novamente" ; 
        }
    }

//-------------------------------------------------------------------------------------------------------------------------------------
private function validar_fornecedor($cnpjcpf){
    if ($cnpjcpf < 0){
        echo "Fornecedor não cadastrado";
        return FALSE;
    }
    return TRUE;
}

public function adicionar_fornecedor($ds_fornecedor, $endereco, $bairro, $complemento, $cidade, $cnpjcpf, $telefone, $email, $whatsapp, $data_cadastro, $observacao)
{
    if ($this->validar_fornecedor($cnpjcpf))
    {   
        $sql = "INSERT INTO fornecedor ( `ds_fornecedor`, `endereco`, `bairro`, `complemento`,`cidade`, `cnpjcpf`, `telefone`, `email`, `whatsapp`, `data_cadastro`, `observacao` ) ";
        $sql = $sql."VALUES ('".$ds_fornecedor."', '".$endereco."', '".$bairro."', '".$complemento."','".$cidade."','".$cnpjcpf."','".$telefone."','".$email."','".$whatsapp."','".$data_cadastro."','".$observacao."')";
        if (mysqli_query($this->conn,$sql)) {
          echo "Cadastro feito com sucesso";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error(conn);
      }
     
  }
}

// Busca registros de clientes para listagem de shows
public function selecionar_fornecedor ()  
{
    $query = "SELECT * FROM fornecedor" ;
    $result = $this->conn->query($query);
if ( $result->num_rows > 0 ) {   
    $data = array () ;
    while ( $row = $result->fetch_assoc ()) {  
           $data[] = $row;
    }
     return $data ; 
    } else {
     echo "Nenhum registro encontrado" ; 
    }
}
// Busca dados únicos para edição da tabela de alunos
public function selecionar_fornecedor1($id_fornecedor)  
{
    $query = "SELECT * FROM fornecedor WHERE id_fornecedor = '$id_fornecedor'" ;
    $result = $this->conn->query($query) ;
if ( $result->num_rows > 0 ) {   
    $row = $result->fetch_assoc () ;
    return $row ; 
    } else {
    echo "Registro não encontrado" ; 
    }
}
// Atualiza os dados do cliente na tabela do cliente
public function atualizar_fornecedor ($postData)  
{
    $ds_fornecedor = $this->conn-> real_escape_string ($_POST['uds_fornecedor'] ) ;
    $cidade = $this->conn->real_escape_string ($_POST['ucidade'] ) ;
    $endereco = $this->conn->real_escape_string ($_POST['uendereco'] ) ;
    $bairro = $this->conn->real_escape_string ($_POST['ubairro'] ) ;
    $complemento = $this->conn->real_escape_string ($_POST['ucomplemento'] ) ;
    $cpfcnpj = $this->conn->real_escape_string ($_POST['ucpfcnpj'] ) ;
    $telefone = $this->conn->real_escape_string ($_POST['utelefone'] ) ;
    $email = $this->conn->real_escape_string ($_POST['uemail'] ) ;
    $whatsapp = $this->conn->real_escape_string ($_POST['uwhatsapp'] ) ;
    $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
    $id_fornecedor = $this->conn->real_escape_string ($_POST['id_fornecedor '] ) ;
if (!empty($id_fornecedor) && !empty($postData)) {  
    $query = "UPDATE fornecedor SET ds_fornecedor = '$ds_fornecedor', cidade = '$cidade', endereco = '$endereco', bairro = '$bairro', complemento = '$complemento', cpfcnpj = '$cpfcnpj', telefone = '$telefone', email = '$email', whatssapp = '$whatsapp', observacao = '$observacao' WHERE id_fornecedor = '$id_fornecedor'" ;
    $sql = $this->conn->query ($query) ;
    if ( $sql == true ) {  
        header ( "Location:display.php?msg2=update" ) ;
    } else {
        echo "Falha no registro atualizado, tente novamente!" ; 
    }
    }
    
}
// Excluir dados do cliente da tabela de fornecedor
public function excluir_fornecedor( $id )  
{
    $query = "Delete from fornecedor WHERE id = '$id_venda'" ;
    $sql = $this->conn->query($query) ;
if ( $sql == true ) {  
    header ( "Location:cadastro.php?msg3=delete" ) ;
} else {
    echo "O registro não exclui tente novamente" ; 
    }



    }
    

    //***************************************************************************************************************************************************************** */
    private function validar_venda($id_venda){
        if ($id_venda < 0){
            echo "Venda não cadastrada";
            return FALSE;
        }
        return TRUE;
    }
    
    public function adicionar_venda($id_prod, $id_cl, $id_fornec, $vl_vendatotal, $vl_produto, $vl_notafiscal, $dt_venda, $dt_compra, $ds_venda, $observacao)
    {
        if ($this->validar_venda($id_venda))
        {   
            $sql = "INSERT INTO vendas ( `id_prod`, `id_cl`, `id_fornec`, `vl_vendatotal`,`vl_produto`, `vl_notafiscal`, `dt_venda`, `dt_compra`, `ds_venda`, `observacao` ) ";
            $sql = $sql."VALUES ('".$id_prod."', '".$id_cl."', '".$id_fornec."', '".$vl_vendatotal."','".$vl_produto."','".$vl_notafiscal."','".$dt_venda."','".$dt_compra."','".$ds_venda."','".$observacao."')";
            if (mysqli_query($this->conn,$sql)) {
              echo "Cadastro feito com sucesso";
          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error(conn);
          }
         
      }
    }
    
    // Busca registros de clientes para listagem de shows
    public function selecionar_venda ()  
    {
        $query = "SELECT * FROM vendas" ;
        $result = $this->conn->query($query);
    if ( $result->num_rows > 0 ) {   
        $data = array () ;
        while ( $row = $result->fetch_assoc ()) {  
               $data[] = $row;
        }
         return $data ; 
        } else {
         echo "Nenhum registro encontrado" ; 
        }
    }
    // Busca dados únicos para edição da tabela de alunos
    public function selecionar_venda1($id_venda)  
    {
        $query = "SELECT * FROM vendas WHERE id_venda = '$id_venda'" ;
        $result = $this->conn->query($query) ;
    if ( $result->num_rows > 0 ) {   
        $row = $result->fetch_assoc () ;
        return $row ; 
        } else {
        echo "Registro não encontrado" ; 
        }
    }
    // Atualiza os dados do cliente na tabela venda
    public function atualizar_venda ($postData)  
    {
        $id_prod = $this->conn-> real_escape_string ($_POST['uid_prod'] ) ;
        $id_cl = $this->conn->real_escape_string ($_POST['uid_cl'] ) ;
        $id_fornec = $this->conn->real_escape_string ($_POST['uidfornec'] ) ;
        $vl_vendatotal = $this->conn->real_escape_string ($_POST['uvl_vendatotal'] ) ;
        $vl_produto = $this->conn->real_escape_string ($_POST['uvl_produto'] ) ;
        $vl_notafiscal = $this->conn->real_escape_string ($_POST['vl_notafiscal'] ) ;
        $dt_venda = $this->conn->real_escape_string ($_POST['udt_venda'] ) ;
        $dt_compra = $this->conn->real_escape_string ($_POST['udt_compra'] ) ;
        $ds_venda = $this->conn->real_escape_string ($_POST['uds_venda'] ) ;
        $observacao = $this->conn->real_escape_string ($_POST['uobservacao'] ) ;
        $id_venda = $this->conn->real_escape_string ($_POST['id_venda '] ) ;
    if (!empty($id_venda) && !empty($postData)) {  
        $query = "UPDATE vendas SET id_prod = '$id_prod', id_cl = '$id_cl', id_fornec = '$id_fornec', vl_vendatotal = '$vl_vendatotal', vl_produto = '$vl_produto', vl_notafiscal = '$vl_notafiscal', dt_venda = '$dt_venda', dt_compra = '$dt_compra', ds_venda = '$ds_venda', observacao = '$observacao' WHERE id_venda = '$id_venda'" ;
        $sql = $this->conn->query ($query) ;
        if ( $sql == true ) {  
            header ( "Location:display.php?msg2=update" ) ;
        } else {
            echo "Falha no registro atualizado, tente novamente!" ; 
        }
        }
        
    }
    // Excluir dados do cliente da tabela venda
    public function excluir_venda( $id )  
    {
        $query = "Delete from vendas WHERE id = '$id_venda'" ;
        $sql = $this-> conn->query($query) ;
    if ( $sql == true ) {  
        header ( "Location:cadastro.php?msg3=delete" ) ;
    } else {
        echo "O registro não exclui tente novamente" ; 
        }
    }
    
    
}     
   
   
   ?>

    