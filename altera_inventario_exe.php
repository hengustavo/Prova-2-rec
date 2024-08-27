<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $codigo_patrimonio = $_POST['codigo_patrimonio'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $armazenamento = $_POST['armazenamento'];
    $memoria = $_POST['memoria'];
    $processador = $_POST['processador'];
    $possui_placa_video = intval($_POST['possui_placa_video']);
    $placa_video = $_POST['placa_video'];
    $sistema_operacional = $_POST['sistema_operacional'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração inventário</title>
</head>
<body>
    <h1> Alteração inventário</h1>
    <?php
        echo "<p>ID: $id</p>";
        echo "<p>Codigo patrimônio: $codigo_patrimonio</p>";
        echo "<p>Descrição: $descricao</p>";
        echo "<p>Marca: $marca</p>";
        echo "<p>Modelo: $modelo</p>";
        echo "<p>Armazenamento: $armazenamento</p>";
        echo "<p>Memória: $memoria</p>";
        echo "<p>Processador: $processador</p>";
        echo "<p>Possui placa de vídeo: " . ($possui_placa_video ? "Sim" : "Não") . "</p>";
        echo "<p>Placa de vídeo: $placa_video</p>";
        echo "<p>Sistema operacional: $sistema_operacional</p>";
        $sql = "UPDATE inventario_computadores SET codigo_patrimonio = '$codigo_patrimonio', descricao = '$descricao', marca = '$marca', modelo = '$modelo', armazenamento = '$armazenamento', memoria = '$memoria', processador = '$processador', possui_placa_video = '$possui_placa_video', placa_video = '$placa_video', sistema_operacional = '$sistema_operacional' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados atualizados!";
        else
            echo "Erro ao atualizar dados!\n"
            .mysqli_error($con);
    ?>
</body>
</html>