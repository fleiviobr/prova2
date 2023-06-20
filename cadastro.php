<?php
include('conexao.php');

$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

$sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque) VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";
if (!mysqli_query($con, $sql)) {
    die('Erro: ' . mysqli_error($con));
}else {
echo "1 registro adicionado";
}

?>


