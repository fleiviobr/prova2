<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "select * from fluxo_caixa where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form action="Altera_fluxo_caixa_exe.php?id=<?php echo $row['id'] ?>" method="POST">
            <label for="data">Data:</label>
            <input type="date" name="data" value="<?php echo $row['data'] ?>">
            <label for="tipo">Tipo:</label>
            <label for="tipo">Tipo:</label>
            <div>
                <?php
                    if($row['tipo'] == 'entrada'){
                        echo "<input type='radio' id='contactChoice1' name='tipo' value='entrada' checked />";
                        echo "<label for='contactChoice1'>Entrada</label>";
                    }else{
                        echo "<input type='radio' id='contactChoice1' name='tipo' value='entrada' />";
                        echo "<label for='contactChoice1'>Entrada</label>";
                    }
                    ?>
            </div>

            <div>
                <?php
                    if($row['tipo'] == 'saida'){
                        echo "<input type='radio' id='contactChoice2' name='tipo' value='saida' checked />";
                        echo "<label for='contactChoice2'>Saída</label>";
                    }else{
                        echo "<input type='radio' id='contactChoice2' name='tipo' value='saida' />";
                        echo "<label for='contactChoice2'>Saída</label>";
                    }
                    ?>
            </div>

            <label for="valor">Valor:</label>
            <input type="number" step="0.1" name="valor" value="<?php echo $row['valor'] ?>">
            <label for="historico">Histórico:</label>
            <input type="text" name="historico" value="<?php echo $row['historico'] ?>">
            <label for="cheque">Cheque:</label>
            <select name="cheque">
                <?php
                    if($row['cheque'] == 'Sim'){
                        echo "<option value='sim' selected>Sim</option>";
                        echo "<option value='nao'>Não</option>";
                    }else{
                        echo "<option value='sim'>Sim</option>";
                        echo "<option value='nao' selected>Não</option>";
                    }
                    ?>
            </select>
            
            <input type="submit" value="Enviar">
    
            
                <input class="shadow__btn_cancel" value="Cancelar" type="button" onclick="history.back()">
        </form>
    </div>
</body>
</html>
