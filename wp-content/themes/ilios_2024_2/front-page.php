<?php
get_header();
?>

<!--TODO: isolate that section in a component and embed here-->
<section class="splide" aria-label="carroulsel">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide temp slide-1"
                style="background: url(<?php echo get_theme_file_uri("/build/assets/hero-images/slide_1.png") ?>); background-size: cover; background-position: center center">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-md-8 px-5 px-md-auto">
                        <h5 class="mb-4 slide-title with-bar">
                            A sua parceira de confiança em peças para tratores.
                        </h5>

                        <p style="color: #fff">Encontre Rolamentos de Esferas, Cônicos, de Agulha, de Roletes e de Super Precisão na Thrabe – Soluções Confiáveis para Todas as Aplicações.</p>

                        <a href="#contact" class="btn btn-tertiary " style="color: #fff">Entre com contato</a>
                    </div>
                </div>
            </li>

            <li class="splide__slide temp slide-2"
                style="background: url(<?php echo get_theme_file_uri("/build/assets/hero-images/slide_2.png") ?>); background-size: cover; background-position: center center">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-md-8 px-5 px-md-auto">
                        <h5 class="mb-4 slide-title with-bar">Produtos essenciais para a manutenção do seu negócio.
                        </h5>

                        <p style="color: #fff">Oferecemos uma linha completa desde filtros diversos e kits de motor até material rodante, reparos e FPS, temos tudo o que precisa para garantir o máximo desempenho dos seus equipamentos.</p>

                        <a href="#contact" class="btn btn-tertiary" style="color: #fff">Entre com contato</a>
                    </div>
                </div>
            </li>

            <li class="splide__slide temp slide-3"
                style="background: url(<?php echo get_theme_file_uri("/build/assets/hero-images/slide_2.png") ?>); background-size: cover; background-position: center center">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-md-8 px-5 px-md-auto">
                        <h5 class="mb-4 slide-title with-bar">Suas operações em pleno funcionamento.
                        </h5>

                        <p style="color: #fff">Escolha Thrabe! Pois contamos ainda com pinos e buchas, correias, mangueiras e muito mais, tudo com a qualidade e durabilidade que você merece.</p>

                        <a href="#contact" class="btn btn-tertiary" style="color: #fff">Entre com contato</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>
</header>

<main class="h-100">
    <section class="bg-brand-gray-1 py-5" id="featured-products">
        <div class="container">
            <h2 class="text-left with-bar">Produtos em destaque</h2>

            <div class="div d-md-flex justify-content-center gap-5 mt-5">

                <!--                TODO: make a loop here and a custom post type-->
                <div class="card" style="max-width: 345px">
                    <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                         class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Nome do item ofertado em destaque</h3>
                        <p class="card-text">
                            Descrição do produto e com algum conteúdo relevante ao que o produto pode ser
                            relacionado ou
                            para o que serve.
                        </p>
                    </div>
                </div>
                <div class="card" style="max-width: 345px">
                    <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                         class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Nome do item ofertado em destaque</h3>
                        <p class="card-text">
                            Descrição do produto e com algum conteúdo relevante ao que o produto pode ser
                            relacionado ou
                            para o que serve.
                        </p>
                    </div>
                </div>
                <div class="card" style="max-width: 345px">
                    <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                         class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Nome do item ofertado em destaque</h3>
                        <p class="card-text">
                            Descrição do produto e com algum conteúdo relevante ao que o produto pode ser
                            relacionado ou
                            para o que serve.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5 text-white" id="about" style="background: url('<?php echo get_theme_file_uri("/build/assets/hero-images/bg_about.png") ?>'); background-size: cover; background-position: center center">
        <div class="container">
            <h2 class="text-left with-bar">Quem é Thrabe e qual nossa missão</h2>

            <div class="p-0 m-0 d-md-flex flex-wrap text-decoration-none">
                <p class="col-6 mb-3">Na Thrabe, somos mais do que uma distribuidora somos a força que mantém a sua produção em movimento. Especializados em peças para tratores, rolamentos de alta performance e soluções completas para manutenção industrial, a nossa missão é garantir que cada equipamento opere no seu máximo potencial.</p>

            </div>

            <a href="#contact" class="btn btn-tertiary " style="color: #fff">Entre com contato</a>

        </div>
    </section>

    <section class="bg-brand-gray-1 py-5" id="services">
        <div class="container">
            <div class="row">
                <h2 class="text-left with-bar">Serviços</h2>

                <p class="my-0">
                    Com um compromisso inabalável com a qualidade e a satisfação do cliente, oferecemos uma vasta gama de produtos das marcas mais renomadas do mercado, aliados a um serviço de atendimento personalizado e ágil. Seja na agricultura, indústria ou qualquer setor que dependa de equipamentos robustos, a Thrabe é a escolha certa para quem valoriza a eficiência, a durabilidade e o suporte técnico especializado.
                </p>

                <h3 class="my-3">Confie na Thrabe para impulsionar o seu negócio e garantir que cada componente esteja à altura dos desafios do dia a dia.</h3>

                <div class="div d-md-flex justify-content-center gap-5 mt-5">

                    <!--                TODO: make a loop here and a custom post type-->
                    <div class="card" style="max-width: 345px">
                        <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Rolamentos diversos</h3>
                            <p class="card-text">
                                Rolamentos de esferas, cônicos, de agulha, de roletes e de super precisão para diversas aplicações, garantindo operação suave e segura.
                            </p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 345px">
                        <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Filtros Diversos</h3>
                            <p class="card-text">
                                Filtros de alta eficiência para todos os tipos de motores e sistemas, mantendo os equipamentos limpos e funcionando no seu melhor.
                            </p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 345px">
                        <img src='<?php echo get_theme_file_uri("/build/assets/placeholder_430_242.png") ?>' alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">FPS</h3>
                            <p class="card-text">
                                Ferramentas de penetração de solo protegem componentes, reduz os custos de operação e maximiza a performance do equipamento.
                                O componente mais importante de uma máquina pesada são suas ferramentas de trabalho, a FPS tem um efeito direto nela.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
