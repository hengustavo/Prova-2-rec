<?php
            include('includes/conexao.php');
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
            echo "<h1>Dados do Cliente</h1>";
            echo "Codigo patrimônio: $codigo_patrimonio</br>";
            echo "Descrição: $descricao</br>";
            echo "Marca: $marca</br>";
            echo "Modelo: $modelo</br>";
            echo "Armazenamento: $armazenamento</br>";
            echo "Memória: $memoria</br></br>";
            echo "Processador: $processador</br>";
            echo "Possui placa de vídeo: " . ($possui_placa_video ? "Sim" : "Não") . "</br>";
            echo "Placa de vídeo: $placa_video</br>";
            echo "Sistema operacional: $sistema_operacional</br></br>";
            $sql = "INSERT INTO inventario_computadores (codigo_patrimonio, descricao, marca, modelo, armazenamento, memoria, processador, possui_placa_video, placa_video, sistema_operacional)";
            $sql .= " VALUES('" . $codigo_patrimonio . "', '" . $descricao . "', '" . $marca . "', '" . $modelo . "', '" . $armazenamento . "', '" . $memoria . "', '" . $processador . "', '" . $possui_placa_video . "', '" . $placa_video . "', '" . $sistema_operacional . "')";
            echo $sql;
            // Executa comando no banco de dados
            $result =  mysqli_query($con, $sql);
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo mysqli_error($con);
            }
            ?>
<a href="index.php"><input type="button" value="Voltar ao Inicio"></a>