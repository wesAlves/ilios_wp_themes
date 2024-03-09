<?php
get_header();
?>

<section class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide temp slide-1">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-4">
                        <p> HTML element represents a paragraph. Paragraphs are usually represented in visual media as
                            blocks of text separated from adjacent blocks by blank lines and/or first-line indentation,
                            but
                            HTML paragraphs can be any structural grouping of related content, such as images or form
                            fields.</p>
                        <button class="btn btn-primary">Click me</button>
                    </div>
                </div>
            </li>

            <li class="splide__slide temp slide-2">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-4 offset-8">
                        <p> HTML element represents a paragraph. Paragraphs are usually represented in visual media as
                            blocks of text separated from adjacent blocks by blank lines and/or first-line indentation,
                            but
                            HTML paragraphs can be any structural grouping of related content, such as images or form
                            fields.</p>
                        <button class="btn btn-primary">Click me</button>
                    </div>
                </div>
            </li>

            <li class="splide__slide temp slide-3">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-4">
                        <p> HTML element represents a paragraph. Paragraphs are usually represented in visual media as
                            blocks of text separated from adjacent blocks by blank lines and/or first-line indentation,
                            but
                            HTML paragraphs can be any structural grouping of related content, such as images or form
                            fields.</p>
                        <button class="btn btn-primary">Click me</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
</header>

<main class="h-100">
    <section class="bg-brand-gray-1 py-5">
        <div class="container">
            <h2 class="text-center mx-auto">Sobre o escritório</h2>

            <div class="row mt-5">
                <div class="col-6">
                    <p>Situado no centro de Florianópolis/SC, o escritório visa à prestação de serviços jurídicos com
                        qualidade, honestidade, segurança e eficiência no âmbito consultivo, consensual, contencioso e
                        preventivo para pessoas físicas ou jurídicas.</p>

                    <p>A boa base profissional será o alicerce para o relacionamento advogado/cliente, sendo
                        imprescindível
                        a orientação precisa ao cliente acerca do direito pretendido ou defendido e tudo mais que disser
                        respeito ao processo já em curso ou ao eventual futuro processo em todas as suas fases.</p>

                    <p>Nossos parceiros acompanham a evolução do direito em decorrência das constantes mudanças na
                        legislação nacional e a modernidade da justiça, já que a nova realidade do mercado jurídico
                        impõe a
                        especialização e constante atualização do conhecimento nas ações profissionais.</p>
                </div>

                <div class="col-6">
                    <p>Tudo para que os trabalhos sejam feitos com a agilidade e a segurança de se cumprir prazos
                        somados à
                        excelência dos serviços que o cliente merece. </p>

                    <p>Compromisso com causas sociais e com a defesa dos direitos humanos. A advocacia tem o dever de
                        construir uma sociedade melhor.</p>

                    <p>Os clientes têm a certeza de que seus processos estão sob constante vigilância profissional. A
                        tríade
                        conhecimento, experiência e reputação profissional é a marca que distingue o escritório e
                        proporciona a seus clientes soluções e resultados efetivos para a tomada de decisões e redução
                        de
                        riscos.</p>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 text-white">
        <div class="container">
            <h2 class="text-center m-auto">Áreas de atuação</h2>

            <div class="my-5">
                <div class="p-0 m-0 d-flex flex-wrap list-unstyled">
                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Direito Trabalhista <br/><span
                                    class="small text-white-50">para empresas</span>
                        </h3>
                    </div>

                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Direito Odontológico <br/><span
                                    class="small text-white-50">para dentistas</span>
                        </h3>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Direito Esteticista <br/><span
                                    class="small text-white-50">para profissionais</span>
                        </h3>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Direito laboratorial</h3>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Direito Médico<br/>
                            <span class="small text-white-50">para médicos</span>
                        </h3>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center mt-5">
                        <div style="width: 204px; height: 204px; overflow: hidden; display: flex; justify-content: center; align-items: center">
                            <img src="<?php echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt="">
                        </div>
                        <h3 class="mt-3 text-center w-75">Atuação em tribunais<br/><span
                                    class="small text-white-50">Direito geral</span>
                        </h3>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="bg-brand-gray-1">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="wp-content/themes/ilios_2024_2/build/assets/fotos_rossana/rossana_fundo_claro_11_23 2.png"
                         alt="" class="w-100">
                </div>

                <div class="col-8 p-5">
                    <h2 class="text-center mx-auto">Quem é Dr. Rossana Mansur Colier</h2>

                    <p>Bacharel em direito pela Pontifícia Universidade Católica de Minas Gerais(PUC-MG) em 1993.</p>

                    <p>Possui pós-graduações em Direito Processual Civil, Direito Processual do Trabalho e Direito
                        Público Municipal. Possui ainda especialização em Direito Médico.</p>

                    <p>Como proprietária de escritório de advocacia nos Estados de Minas Gerais e Santa Catarina atuou
                        como advogada de forma efetiva e ininterrupta durante 30 anos.</p>

                    <p>Dentre diversas atividades jurídicas prestou serviços como advogada para empresas, autarquia
                        federal, procuradoria jurídica municipal, bem como atuações perante Conselhos Regionais de
                        Medicina.</p>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white">
        <div class="container">
            <h2 class="text-center mx-auto">Contatos e localização</h2>

            <div class="row">
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
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
                    View Larger Map
                </small>
            </a>
        </div>

    </section>

    <?php

    $posts = get_posts(array(
        "numberposts" => 3
    ));
    $counter = 0;

    if (count($posts)) {

        ?>

        <section class="py-5 text-white">
            <div class="container">
                <h2 class="text-center mx-auto">Confira nosso blog</h2>

                <div class="d-flex mt-5 gap-3">


                    <?php
                    while ($counter < count($posts)) {
                        the_post();
                        ?>

                        <div class="col-4 bg-brand-gray-1 text-brand-gray-5">
                            <?php the_title(); ?>
                        </div>

                        <?php
                        $counter++;
                    }
                    ?>

                </div>

            </div>
        </section>

    <?php } ?>

</main>

<?php
get_footer();
?>
