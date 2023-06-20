<?php
    include('conexao.php');
    $id = $_GET['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "update fluxo_caixa set data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' where id = $id";  
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: Listar_fluxo_caixa.php");
    }else{
       echo "Erro ao atualizar dados!";
    }
?>