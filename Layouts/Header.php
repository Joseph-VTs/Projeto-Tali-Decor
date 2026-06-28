<?php 
    $link_btn = isset($link_personalizado) ? $link_personalizado : '../index.html';

    // Ver logout
    $texto_btn = isset($texto_personalizado) ? $texto_personalizado : '<i class="fa-solid fa-arrow-left"></i> Sair';
?>

<head>
    <link rel="stylesheet" href="../Assents/css/Header.css">

    <!-- Script Estilos de Entrada -->
    <script src="https://kit.fontawesome.com/9543fb2281.js" crossorigin="anonymous"></script>
</head>

<header>
    
    <a href="../index.php" class="Logo">
        <img src="../Assents/imagens/logo-doce-sonho.jpeg" alt="Logo">
    </a>
    
    <nav>
        <ul>
            <a href="#">Meus Kits</a>
            <a href="#">Concluidas</a>
            <a href="#">Em aberto</a>
            <a href="#">Opção</a>
            <a href="#">Opção</a>
        </ul>
    </nav>

    <div class="btn-Header-Acao">
        <a href="<?php echo $link_btn; ?>">
            <i>
                <?php echo $texto_btn; ?>
            </i>
        </a>
    </div>
</header>