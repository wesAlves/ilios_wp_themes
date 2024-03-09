<footer>
    <div class="menu-bar-footer">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div>
                <img src="<?php echo get_theme_file_uri("/build/assets/logos/logo_pb.png") ?>">
            </div>

            <div>in | inst | wha | X</div>

            <!--            <nav>-->
            <!--                <ul class="menu-items menu-items-footer h-100">-->
            <!--                    <li class="active">Home</li>-->
            <!--                    <li>Sobre</li>-->
            <!--                    <li>Áreas de atuação</li>-->
            <!--                    <li>Contatos</li>-->
            <!--                    <li>Blog</li>-->
            <!--                </ul>-->
            <!--            </nav>-->


            <?php
            wp_nav_menu(array(
                "theme_location" => "bottomMenu",
                "menu_class" => "menu-footer"
            ))
            ?>

        </div>
    </div>

    <div class="developer-bar">
        desenvolvido por: Wes Benvindo | 2024
    </div>
</footer>

</body>

<?php wp_footer(); ?>

</html>