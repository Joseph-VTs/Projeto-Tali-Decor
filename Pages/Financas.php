<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce e Sonho - Finanças</title>

    <!-- Mobiler First -->

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../Assents/css/Global.css">
    <link rel="stylesheet" href="../Assents/css/Financas.css">

    <!-- Script Estilos de Entrada -->
    <script src="https://kit.fontawesome.com/9543fb2281.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        $link_personalizado = "Nova_Reserva.php";
        $texto_personalizado = '<i class="fa-solid fa-plus"></i> Novo';
        include('../Layouts/Header.php');
    ?>

    <main>
        <section class="Financas">
            <div>
                <p>Valor Pago</p>
                <p>R$<span>00,00</span></p>
            </div>
            <div>
                <p>Valor a ser Pago</p>
                <p>R$<span>00,00</span></p>
            </div>
            <div>
                <p>Valor Total</p>
                <p>R$<span>00,00</span></p>
            </div>
            <div>
                <p>Total de Recebimentos</p>
                <p>R$<span>00,00</span></p>
            </div>
        </section>

        <section class="Pesquisa-Ordenar">
            <div class="Container-Busca">
                <i class="Lupa fa-solid fa-magnifying-glass"></i>
                <input type="text" class="Barra">
            </div>

            <div class="Ordenar">
                <button>
                    <i>
                        Retirar em
                        <i class="fa-solid fa-up-down"></i>
                    </i>
                </button>
            </div>
        </section>

        <section class="Produtos-Reservados">
            <table>
                <tr>
                    <th>N°</th>
                    <th colspan="2">Info do Kit</th>
                    <th>Cliente</th>
                    <th>Status</th>
                    <th>Retirada <i class="fa-solid fa-right-long"></i> Devolução </th>
                    <th>Contato</th>
                    <th>Pagamento</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>#502</td>
                    <td>
                        <img src="../Assents/imagens/kit-pegue-monte-1.jpeg" alt="">
                    </td>
                    <td>
                        <p>R$450,00</p>
                        <p>Kit Minnei</p>
                        <p>Prata</p>
                    </td>
                    <td>
                        <p>Nome:</p>
                        <p>Relialdo Shuenio</p>
                        <br>

                        <p>Contato:</p>
                        <p>51 91234-1234</p>
                    </td>
                    <td style="color: var(--Destaque-Sucesso);">Reservado</td>
                    <td>01.01.2001 <i class="fa-solid fa-right-long"></i> 01.01.2001</td>
                    <td>
                        <button style="color: var(--Destaque-Atencao);">
                            <i>
                                <i class="fa-solid fa-file-signature"></i>
                                Anexar
                            </i>
                        </button>
                    </td>
                    <td style="color: var(--Destaque-Atencao);">Parcial</td>
                    <td>
                        <p>Total: 450.00</p>
                        <p style="color: var(--Destaque-Sucesso);">Pago: 200.00</p>
                        <p style="color: var(--Destaque-Perigo);">Devido: 250.00</p>
                    </td>
                </tr>
                <tr>
                    <td>#502</td>
                    <td>
                        <img src="../Assents/imagens/kit-pegue-monte-2.jpeg" alt="">
                    </td>
                    <td>
                        <p>R$249,90</p>
                        <p>Kit Minnei</p>
                        <p>Prata</p>
                    </td>
                    <td>
                        <p>Nome:</p>
                        <p>Relialdo Shuenio</p>
                        <br>

                        <p>Contato:</p>
                        <p>51 91234-1234</p>
                    </td>
                    <td style="color: var(--Destaque-Sucesso);">Reservado</td>
                    <td>01.01.2001 <i class="fa-solid fa-right-long"></i> 01.01.2001</td>
                    <td>
                        <button style="color: var(--Destaque-Sucesso);">
                            <i>
                                <i class="fa-solid fa-file-signature"></i>
                                Assinado
                            </i>
                        </button>
                    </td>
                    <td style="color: var(--Destaque-Sucesso);">Pago</td>
                    <td>
                        <p>Total: 450.00</p>
                        <p style="color: var(--Destaque-Sucesso);">Pago: 450.00</p>
                        <p style="color: var(--Destaque-Perigo);">Devido: 00.00</p>
                    </td>
                </tr>
            </table>
        </section>
    </main>

    <?php require_once '../Layouts/Footer.php' ?>
</body>

</html>