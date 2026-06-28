// Isso impede que ao clicar no botão limpar campos não limpe a data do input que é fixa
    const input_data_atual = document.getElementById('Data_Atual');

    function Definida_Data_Atual(){
        const data_atual = new Date().toLocaleDateString('pt-BR');
        input_data_atual.value = data_atual;
        input_data_atual.defaultValue = data_atual;
    };
    Definida_Data_Atual();



// Informações sobre o Pagamento
    const input_valor_aluguel = document.getElementById('Valor_Aluguel');
    const input_valor_pago = document.getElementById('Valor_Pago');
    const input_valor_devido = document.getElementById('Valor_Devido');

    // Autalizar valor devido em tempo real
    function Atualiza_Valor_Devido(){
        const aluguel = Number(input_valor_aluguel.value) ?? 0;
        const pago = Number(input_valor_pago.value) ?? 0;

        if(input_valor_devido){
            input_valor_devido.value = (aluguel - pago).toFixed(2);
        }
    }
    input_valor_aluguel.addEventListener('input', Atualiza_Valor_Devido);
    input_valor_pago.addEventListener('input', Atualiza_Valor_Devido);



// Formatar Saída de Data e Hora
function Formatar_Data_Hora(data_nativa){
    if(!data_nativa) return "Não informada";

    // Separa data e hora
    const [data, hora] = data_nativa.split('T');
    const [ano, mes, dia] = data.split('-');

    // Remontar
    return `${dia}-${mes}-${ano} às ${hora}`;
}



// Area da Previa
    document.getElementById('btn-Ver-Previa').addEventListener('click', () => {

        // Informações do Kit
        const imagem_kit = document.getElementById('img_kit').files[0];
        const nome_kit = document.getElementById('Nome_Kit').value;
        const tipo_kit = document.getElementById('Tipo_Kit').value;

        // Informações do Cliente
        const nome_cliente = document.getElementById('Nome_Cliente').value;
        const contato_cliente = document.getElementById('Contato_Cliente').value;

        // Data Locação
        const data_retirada_br = Formatar_Data_Hora(document.getElementById('Data_Retirada').value);
        const data_devolucao_br = Formatar_Data_Hora(document.getElementById('Data_Devolucao').value);

        // Captura o valor calculado que já está na tela
        const valor_devido_final = input_valor_devido ? input_valor_devido.value : "0.00";

        // Botões de Ações
        // const btn_ver_previa = document.getElementById('btn-Ver-Previa');

        if(!imagem_kit || !input_valor_aluguel){
            alert("Preencha todos os Campos!");
            return;
        }

        const reader = new FileReader();
        reader.onload = (exemplo) => {
            document.getElementById('Area-Previa').innerHTML = `
                <div>
                    <img src="${exemplo.target.result}" alt="Kit Reservado" style="max-width: 300px;">
                </div>

                <div class="Infos">
                    <div>
                        <legend>Info do Kit Reservado</legend>
                        <p>Nome do Kit: <br> <i>${nome_kit}</i></p>
                        <p>Tipo do Kit: <i>${tipo_kit}</i></p>
                    </div>

                    <div>
                        <legend>Info da Reserva</legend>
                        <p>Data da Retirada: <br> <i>${data_retirada_br}</i></p>
                        <p>Data da Devolução: <br> <i>${data_devolucao_br}</i></p>
                        <br>
                        <p>Valor Total: <i>${input_valor_aluguel.value}</i></p>
                        <p>Valor Pago: <i>${input_valor_pago.value}</i></p>
                        <p>Valor Devido: <i>${valor_devido_final}</i></p>
                    </div>

                    <div>
                        <legend>Info do Cliente</legend>
                        <p>Nome: <i>${nome_cliente}</i></p>
                        <p>Contato: <i>${contato_cliente}</i></p>
                    </div>
                </div>
            `;

            // Mostrar os botões salvar e cancelar
            document.getElementById('btn-Salvar').style.display = 'inline-block';
            document.getElementById('btn-Cancelar').style.display = 'inline-block';
        };
        reader.readAsDataURL(imagem_kit);
    });

// Cancelar
    document.getElementById('btn-Cancelar').addEventListener('click', () => {
        document.getElementById('Area-Previa').innerHTML = "";
        document.getElementById('btn-Salvar').style.display = 'none';
        document.getElementById('btn-Cancelar').style.display = 'none';
    });