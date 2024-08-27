<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM inventario_computadores WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração inventário</title>
</head>
<body>
    <form action="altera_inventario_exe.php" method="post">
        <fieldset>
        <legend>Alteração inventário</legend>
        <br>
        <div>
            <label for="codigo_patrimonio">Código patrimônio</label>
            <input type="text" name="codigo_patrimonio" id="codigo_patrimonio" value="<?php echo $row['codigo_patrimonio']?>">
        </div>
        <br>
        <div>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" value="<?php echo $row['descricao']?>">
        </div>
        <br>
        <div>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" value="<?php echo $row['marca']?>">
        </div>
        <br>
        <div>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" value="<?php echo $row['modelo']?>">
        </div>
        <br>
        <div>
            <label for="armazenamento">Armazenamento</label>
            <input type="number" name="armazenamento" id="armazenamento" value="<?php echo $row['armazenamento']?>">
        </div>
        <br>
        <div>
            <label for="memoria">Memória</label>
            <input type="number" name="memoria" id="memoria" value="<?php echo $row['memoria']?>">
        </div>
        <br>
        <div>
            <label for="processador">Processador</label>
            <input type="text" name="processador" id="processador" value="<?php echo $row['processador']?>">
        </div>
        <br>
        <div>
            <label for="possui_placa_video">Possui placa de vídeo</label>
            <label>Possui placa de vídeo:</label>
            <input type="radio" name="possui_placa_video" id="possui_placa_videoSim" value="1" <?php echo $row['possui_placa_video'] == 1 ? "checked" : "" ?> class="inline" /><label id="possui_placa_videoSim">Sim</label>
            <input type="radio" name="possui_placa_video" id="possui_placa_videoNao" value="0" <?php echo $row['possui_placa_video'] == 0 ? "checked" : "" ?>class="inline" /><label id="possui_placa_videoNao">Não</label>
        </div>
        <br>
        <div>
            <label for="placa_video">Placa vídeo</label>
            <input type="text" name="placa_video" id="placa_video" value="<?php echo $row['placa_video']?>">
        </div>
        <br>
        <div>
            <label for="sistema_operacional">Sistema operacional</label>
            <input type="text" name="sistema_operacional" id="sistema_operacional" value="<?php echo $row['sistema_operacional']?>">
        </div>
        <br>        
        <input type="hidden" name="id" 
               value="<?php echo $row['id']?>">
        <br>
        <div>
            <button type="submit">Alterar</button>
        </div>        
        </fieldset>
    </form>
</body>
</html>