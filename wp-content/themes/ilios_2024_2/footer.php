<footer>
    <section class="bg-brand-gray-1 pt-5 position-relative">
        <div class="container pb-5">
            <div class="d-md-flex justify-content-between align-items-start">
                <div class="col-md-6 py-5">
                    <div>
                        <h2 class="text-left with-bar">Morada</h2>
                        <p>Rua da república - 0000-000</p>

                        <p>Celular / WhatsApp: +351 999 999 999</p>

                        <p>Fone: 2222-2222</p>

                        <p>E-mail: comercial@thrabe.pt</p>

                        <p>De Segunda a Sexta-feira das 10:00 as 17:00</p>
                    </div>

                    <div class="menu-bar-footer mt-3">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
                            <div class="social-icons d-none">
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

                            <div class="d-none d-md-flex">
                                <?php
                                wp_nav_menu(array(
                                    "theme_location" => "bottomMenu",
                                    "menu_class" => "menu-footer"
                                ))
                                ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card col-md-6 p-5" id="contact">
                    <h2 class="text-left with-bar">Contatos</h2>

                    <div>

                        <!--                    echo do_shortcode('[contact-form-7 id="28fa4a6" title="Form contato 2024"]') -->

                        <form method="post">
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
                                <input type="phone" class="form-control" id="phone"
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
        </div>

        <div class="bg-divider"></div>

        <div class="developer-bar d-flex align-items-center">
            <a href="mailto:wal2.designe@gmail.com"
               class="container text-center text-decoration-none text-brand-gray-5 opacity-50">
                desenvolvido por: IObit | 2024
            </a>
        </div>
    </section>
</footer>

</body>

<?php wp_footer(); ?>

</html>