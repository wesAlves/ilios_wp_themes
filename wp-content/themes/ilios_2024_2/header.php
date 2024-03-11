<!DOCTYPE html>
<html lang="pt">
<head>
    <?php wp_head(); ?>
</head>

<body>

<header>
    <div class="social-bar">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div>Rossana Advocacia e consultoria - OAB 323232/SC</div>

            <div class="social-icons">
                <a href="" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>

        </div>
    </div>

    <div class="menu-bar">
        <div class="container d-flex justify-content-between align-items-center h-100 overflow-hidden">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri("/build/assets/logos/logo_color.png") ?>">
            </div>

            <!--            <nav>-->
            <!--                <ul class="menu">-->
            <!--                    <li class="menu-item active">Home</li>-->
            <!--                    <li class="menu-item">Sobre</li>-->
            <!--                    <li class="menu-item">Áreas de atuação</li>-->
            <!--                    <li class="menu-item">Contatos</li>-->
            <!--                    <li class="menu-item">Blog</li>-->
            <!--                </ul>-->
            <!--            </nav>-->

            <?php wp_nav_menu(array(
                "theme_location" => 'mainMenu',
            )); ?>

        </div>
    </div>

