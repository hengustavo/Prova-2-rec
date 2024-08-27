<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listagem.css">
    <title>Lista inventário</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>
                <li><a href="cadastro_inventario.html">Cadastro inventário</a></li>
        </nav>
</div>
    <section>
        <div>
            <?php
            include('includes/conexao.php');
            $sql = "SELECT id, codigo_patrimonio, descricao, marca, modelo, armazenamento, memoria, processador, possui_placa_video, placa_video, sistema_operacional FROM inventario_computadores";
            // Executa a consulta
            $result = mysqli_query($con, $sql);
            ?>
            <h1>Listagem de inventário</h1>
            <table class="content-table" style="text-align:center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código Patrimônio</th>
                        <th>Descrição</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Armazenamento</th>
                        <th>Memória</th>
                        <th>Processador</th>
                        <th>Possui Placa de vídeo</th>
                        <th>Placa de Vídeo</th>
                        <th>Sistema Operacional</th>
                        <th>Alterar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['codigo_patrimonio'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";
                        echo "<td>" . $row['marca'] . "</td>";
                        echo "<td>" . $row['modelo'] . "</td>";
                        echo "<td>" . $row['armazenamento'] . "</td>";
                        echo "<td>" . $row['memoria'] . "</td>";
                        echo "<td>" . $row['processador'] . "</td>";
                        echo "<td>" . $row['possui_placa_video'] . "</td>";
                        echo "<td>" . $row['placa_video'] . "</td>";
                        echo "<td>" . $row['sistema_operacional'] . "</td>";
                        echo "<td><a href='altera_inventario.php?id=" . $row['id'] . "'>Alterar</a></td>";
                        echo "<td><a href='deleta_inventario.php?id=" . $row['id'] . "'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>