<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce e Sonho - Nova Reserva</title>
    <!-- Mobiler First -->

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../Assents/css/Global.css">
    <link rel="stylesheet" href="../Assents/css/Nova_Reserva.css">

    <!-- Script Estilos de Entrada -->
    <script src="https://kit.fontawesome.com/9543fb2281.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header + Navbar -->
    <?php 
        $link_personalizado = "Financas.php";
        $texto_personalizado = '<i class="fa-solid fa-arrow-left"></i> Voltar';
        include('../Layouts/Header.php');
    ?>

    <div class="Container">
        <form action="" method="" enctype="multipart/form-data" id="Formulario-Reservas">
            <div class="Formulario-LD">
                <!-- Informações do kit. Produto que será vendido -->
                <fieldset class="Info-Fieldset">
                    <legend>Informações do Kit</legend>
                    <div>
                        <label for="img_kit">Foto ou Imagem:</label>
                        <input type="file" name="img_kit" id="img_kit" required>
                    </div>
                    <div>
                        <label for="Nome_Kit">Nome:</label>
                        <input type="text" name="Nome_Kit" id="Nome_Kit" placeholder="Ex: Kit Fronzen" required>
                    </div>
                    <div>
                        <label for="Tipo_Kit">Tipo:</label>
                        <select name="Tipo_Kit" id="Tipo_Kit" required>
                            <option value="Prata">Prata</option>
                            <option value="Ouro">Ouro</option>
                            <option value="Premium">Premium</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Informações inportante do Cliente, para retirada ou devolução e para dúvidas -->
                <fieldset class="Info-Fieldset">
                    <legend>Dados do Cliente</legend>
                    <div>
                        <label for="Nome_Cliente">Nome:</label>
                        <input type="text" name="Nome_Cliente" id="Nome_Cliente" placeholder="Ex: Relialdo Shuenio"
                            required>
                    </div>
                    <div>
                        <label for="Contato_Cliente">Contato:</label>
                        <input type="text" name="Contato_Cliente" id="Contato_Cliente" placeholder="Ex: 51 9.1234-1234"
                            required>
                    </div>
                </fieldset>

                <!-- Datas -> ver sobre notificações se não for inoportuno -->
                <fieldset class="Info-Fieldset">
                    <legend>Data da Locação</legend>
                    <div>
                        <!-- Terá um Script -->
                        <label for="Data_Atual">Data Atual</label>
                        <input type="text" name="Data_Atual" id="Data_Atual" readonly
                            style="color: var(--Destaque-Sucesso); font-weight: 700;">
                    </div>
                    <div>
                        <label for="Data_Retirada">Data da Retirada:</label>
                        <input type="datetime-local" name="Data_Retirada" id="Data_Retirada" required>
                    </div>
                    <div>
                        <label for="Data_Devolucao">Data da Devolução:</label>
                        <input type="datetime-local" name="Data_Devolucao" id="Data_Devolucao" required>
                    </div>
                </fieldset>

                <!-- Informações sobre o Progresso do Pagamento -->
                <fieldset class="Info-Fieldset">
                    <legend>Info de Pagamento</legend>
                    <div>
                        <label for="Valor_Aluguel">Valor do Aluguel:</label>
                        <input type="number" name="Valor_Aluguel" id="Valor_Aluguel" placeholder="Ex: 600.00">
                    </div>
                    <div>
                        <label for="Valor_Pago">Valor que foi Pago:</label>
                        <input type="number" name="Valor_Pago" id="Valor_Pago" placeholder="Ex: 400.00">
                    </div>

                    <!-- Se valor pago for !diferente! do valor do aluguel aparecer valor devido -->
                    <div>
                        <label for="Valor_Devido">Valor que ficou Devido:</label>
                        <input type="number" name="Valor_Devido" id="Valor_Devido" placeholder="Ex: 200.00">
                    </div>
                </fieldset>

                <!-- Botões de Formulário -->
                <fieldset class="Info-Fieldset">
                    <legend>Ações Finais</legend>
                    <div>
                        <button type="reset">Limpar Campos</button>
                        <button type="button" id="btn-Ver-Previa">Ver Prévia</button>
                    </div>
                    <div>
                        <button type="submit" name="btn-Salvar" id="btn-Salvar">Salvar como nova Reserva</button>
                        <button type="reset" id="btn-Cancelar">Cancelar - Reescrever as Informações</button>
                    </div>
                </fieldset>
            </div>
            <div class="Previa-LE" id="Area-Previa">

            </div>
        </form>
    </div>

    <!-- Footer -->
    <?php require_once '../Layouts/Footer.php' ?>

    <!-- Scripts usados -->
    <script src="../Assents/js/Nova_Reserva.js"></script>
</body>

</html>