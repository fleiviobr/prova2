<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "delete from fluxo_caixa where id = $id";
$result = mysqli_query($con, $sql);
if($result){
    echo "<script>alert('Usuário excluído com sucesso!');";
    echo "location.href='Listar_fluxo_caixa.php';</script>";
}else{
    echo "<script>alert('Erro ao excluir usuário!');";
    echo "location.href='Listar_fluxo_caixa.php';</script>";
}
?>