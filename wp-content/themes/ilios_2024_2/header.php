<!DOCTYPE html>
<html lang="pt">
<head>
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

</head>

<body>

<header>
    <div class="social-bar">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
            <h1 style="font-size: 1em">Rossana Advocacia e consultoria - OAB 323232/SC</h1>

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

            <button class="btn text-white d-md-none" data-bs-toggle="modal" data-bs-target="#mobile-menu">
                <i class="fa-solid fa-bars"></i>
            </button>


            <div class="d-none d-md-flex">
                <?php wp_nav_menu(array(
                    "theme_location" => 'mainMenu',
                )); ?>
            </div>


        </div>
    </div>

    <div class="modal " id="mobile-menu" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-brand-gray-5">
                <button class="btn py-3 text-white mb-5 w-100" data-bs-dismiss="modal">
                    fechar <i class="fa-solid fa-xmark flex-1 ml-3"></i>
                </button>

                <?php wp_nav_menu(array(
                    "theme_location" => 'mainMenu',
                )); ?></div>
        </div>

        <script>
            const contact = document.querySelectorAll("[href='#contact']");
            const closeBtn = document.querySelector("[data-bs-dismiss]");

            if (contact) {
                contact.forEach(contactLink => {
                    contactLink.addEventListener("click", () => {
                        closeBtn.click();
                    })
                })
            }

        </script>

    </div>
