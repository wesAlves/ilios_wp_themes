<footer>

    <section class="py-5 text-white" id="contact">
        <div class="container">
            <h2 class="text-center mx-auto">Contatos e localização</h2>

            <div class="d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <p>Rua Feliciano Nunes Pires, 168, Ed. Igor , Salas 05, Centro, Florianópolis - 88015-220.</p>

                    <p>Celular / WhatsApp: (48) 99961 2711</p>

                    <p>Fone: (48) 3207 - 0938</p>

                    <p>E-mail: rossanamc.adv@hotmail.com</p>

                    <p>De Segunda a Sexta-feira das 10:00 as 17:00</p>
                </div>

                <div class="col-6 offset-2">
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name"
                                   aria-describedby="nameHelp">
<!--                            <div id="nameHelp" class="form-text">Entre com o seu nome.</div>-->
                        </div>

                        <div class="mb-3">
                            <label for="email1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                                   aria-describedby="emailHelp">
<!--                            <div id="emailHelp" class="form-text">Entre com seu email.</div>-->
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="email" class="form-control" id="phone"
                                   aria-describedby="phoneHelp">
<!--                            <div id="phoneHelp" class="form-text">Entre com o DD e o número de telefone.</div>-->
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">

            <!--            <iframe id="map-frame"-->
            <!--                    width="100%" height="272"-->
            <!--                    src="https://www.openstreetmap.org/export/embed.html?bbox=-48.549227714538574%2C-27.592694778307255%2C-48.54485839605332%2C-27.590450733624795&amp;layer=mapnik&amp;marker=-27.59157276170745%2C-48.547043055295944&"-->
            <!--                    style="border: 1px solid transparent">-->
            <!--            </iframe>-->

            <!--            <br/>-->


            <a class="d-flex flex-column" href="https://www.openstreetmap.org/#map=19/-27.59178/-48.54734&amp;layers=N"
               target="_blank">

                <img src="<?php echo get_theme_file_uri("/build/assets//map/map_pin.png") ?>" alt="">

                <small class="px-3">
                    Ver o mapa completo
                </small>
            </a>
        </div>

    </section>

    <div class="menu-bar-footer">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div>
                <img src="<?php echo get_theme_file_uri("/build/assets/logos/logo_pb.png") ?>">
            </div>

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

    <div class="developer-bar d-flex align-items-center">
        <a href="mailto:wal2.designe@gmail.com"
           class="container text-center text-decoration-none text-brand-gray-5 opacity-50">
            desenvolvido por: Wes Benvindo | 2024
        </a>
    </div>
</footer>

</body>

<?php wp_footer(); ?>

</html>