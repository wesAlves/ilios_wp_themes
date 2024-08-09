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
                    <div class="col-md-6 px-5 px-md-auto">
                        <h5 class="mb-4 slide-title with-bar">
                            Texto de impacto 01
                        </h5>

                        <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat
                            augue sed velit
                            accumsan gravida eget vitae libero.</p>

                        <a href="#contact" class="btn btn-tertiary " style="color: #fff">Entre com contato</a>
                    </div>
                </div>
            </li>

            <li class="splide__slide temp slide-1"
                style="background: url(<?php echo get_theme_file_uri("/build/assets/hero-images/slide_2.png") ?>); background-size: cover; background-position: center center">
                <div class="container h-100 d-flex align-items-center">
                    <div class="col-md-6 offset-md-6 px-5 px-md-auto">
                        <h5 class="mb-4 slide-title with-bar">
                            Texto de impacto 02
                        </h5>

                        <p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat
                            augue sed velit
                            accumsan gravida eget vitae libero.</p>

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

            <div class="div d-md-flex mt-5">

                <!--                TODO: make a loop here and a custom post type-->
                <div class="card" style="max-width: 345px">
                    <img src="<?php //echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt=""
                         class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Nome do item ofertado em destaque</h3>
                        <p class="card-text">
                            Descrição do produto e com algum conteúdo relevante ao que o produto pode ser relacionado ou
                            para o que serve.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 text-white" id="about">
        <div class="container">
            <h2 class="text-left with-bar">Quem é Thrabe e qual nossa missão</h2>

            <div class="p-0 m-0 d-md-flex flex-wrap text-decoration-none">
                <p class="col-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat augue sed
                    velit accumsan
                    gravida eget vitae libero. Cras dignissim convallis orci vitae imperdiet. In ut purus sit amet
                    lacus consequat malesuada vitae quis mi. Phasellus ornare eu leo at bibendum. In pharetra
                    iaculis sodales. Vivamus id eros bibendum, luctus odio non, fringilla odio. </p>

            </div>

            <a href="#contact" class="btn btn-tertiary " style="color: #fff">Entre com contato</a>

        </div>
    </section>

    <section class="bg-brand-gray-1 py-5" id="services">
        <div class="container">
            <div class="row">
                <h2 class="text-left with-bar">Serviços</h2>

                <p class="my-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat augue sed velit accumsan
                    gravida eget vitae libero. Cras dignissim convallis orci vitae imperdiet. In ut purus sit amet lacus
                    consequat malesuada vitae quis mi. Phasellus ornare eu leo at bibendum. In pharetra iaculis sodales.
                    Vivamus id eros bibendum, luctus odio non, fringilla odio. 
                </p>

                <div class="div d-md-flex mt-5">

                    <!--                TODO: make a loop here and a custom post type-->
                    <div class="card" style="max-width: 345px">
                        <img src="<?php //echo get_theme_file_uri("/build/assets/areas/direto_geral.png") ?>" alt=""
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
        </div>
    </section>

    <!--BLOG WHEN AVALIABLE UNCOMMENT THAT-->
    <!--    --><?php
    //
    //    $posts = get_posts(array(
    //        "numberposts" => 3
    //    ));
    //    $counter = 0;
    //
    //    if (count($posts)) {
    //
    //        ?>
    <!---->
    <!--        <section class="py-5 text-white">-->
    <!--            <div class="container">-->
    <!--                <h2 class="text-center mx-auto">Confira nosso blog</h2>-->
    <!---->
    <!--                <div class="d-md-flex mt-5 gap-3">-->
    <!---->
    <!---->
    <!--                    --><?php
    //                    while ($counter < count($posts)) {
    //                        the_post();
    //                        ?>
    <!---->
    <!--                        <a href="--><?php //the_permalink(); ?><!--" class="col-md-4 card mt-5 mt-md-0 ">-->
    <!---->
    <!--                            <div class=" w-100" alt="...">-->
    <!--                                <img src="--><?php //the_post_thumbnail_url("large"); ?><!--"-->
    <!--                                     alt="feature" class="w-100">-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="card-body">-->
    <!--                                <h5 class="card-title">--><?php //the_title(); ?><!--</h5>-->
    <!--                                <p class="card-text">-->
    <!--                                    --><?php //the_excerpt(); ?>
    <!--                                </p>-->
    <!---->
    <!--                            </div>-->
    <!--                            <!--                            </div>-->-->
    <!--                        </a>-->
    <!---->
    <!--                        --><?php
    //                        $counter++;
    //                    }
    //                    ?>
    <!---->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--        </section>-->
    <!---->
    <!--    --><?php //} ?>

</main>

<?php
get_footer();
?>
