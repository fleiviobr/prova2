<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "select * from fluxo_caixa";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Listagem</h1>
    <table>
    <tr>
        <th>Código</th>
        <th>Data</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Historico</th>
        <th>Cheque</th>
        <th>Excluir</th>
    </tr>
        <?php
            do {    
                echo "<tr>";
                echo "<td>" . $row ['id'] . "</td>";
                echo "<td>" . $row ['data'] . "</td>";
                echo "<td>" . $row ['tipo'] . "</td>";
                echo "<td>" . $row ['valor'] . "</td>";
                echo "<td>" . $row ['historico'] . "</td>";
                echo "<td>" . $row ['cheque'] . "</td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=" . $row['id'] . "'>Excluir</a></td></tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
        <tr>
            <td><a href="index.php">Vltar</a></td>
        </tr>
        </table>
        <br>
    <h2><a href="../index.php">Back</a></h2>
    </div>
</body>
</html>