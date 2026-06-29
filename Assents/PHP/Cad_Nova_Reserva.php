<?php 
    require_once('database.php');

    if(isset($_POST['btn-Salvar'])){
        // info do Kit
        $caminho_img = $_POST['img_kit'];
        $nome_kit = $_POST['Nome_Kit'];
        $tipo_kit = $_POST['Tipo_Kit'];

        // Info do Cliente
        $nome_cliente = $_POST['Nome_Cliente'];
        $contato_cliente = $_POST['Contato_Cliente'];

        // Data da Locação
        $data_retirada = $_POST['Data_Retirada'];
        $data_devolucao = $_POST['Data_Devolucao'];

        // Info de Pagamento
        $valor_aluguel = $_POST['Valor_Aluguel'];
        $valor_pago = $_POST['Valor_Pago'];
        $valor_devido = $_POST['Valor_Devido'];

        $db_pdo = Conectar_DB();

        $sql = "INSERT INTO kits_reservados (url_imagem, nome_kit, tipo_kit, nome_cliente, contato_cliente, data_retirada, data_devolucao, valor_aluguel, valor_pago, valor_devido)
                VALUES (:url_imagem, :nome_kit, :tipo_kit, :nome_cliente, :contato_cliente, :data_retirada, ;data_devolucao, :valor_aluguel, ;valor_pago, ;valor_devido)";

        $stmt = $db_pdo->prepare($sql);
        $stmt->execute([
            ':url_imagem' => $caminho_img, 
            ':nome_kit' => $nome_kit,
            ':tipo_kit' => $tipo_kit, 
            ':nome_cliente' => $nome_cliente,
            ':contato_cliente' => $contato_cliente,
            ':data_retirada' => $data_retirada,
            ';data_devolucao' => $data_devolucao,
            ':valor_aluguel' => $valor_aluguel,
            ';valor_pago' => $valor_pago,
            ';valor_devido' => $valor_devido
        ]);

        header('Location: ../../Pages/Financas.php');
        exit;
    }
?>