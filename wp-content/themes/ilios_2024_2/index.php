<?php
get_header();
?>
<div style="height: 340px; background-image: url(<?php echo get_theme_file_uri('/build/assets/headers/justice.png') ?>), linear-gradient(#cb9f6000, black);"
     class="banner-page bg-brand-yellow-3 d-flex align-items-end">
    <div class="container pb-5">
        <div class="col-5">
            <h1 style="color: #333333">Blog</h1>
            <p style="font-size: 24px; color: #333333" class="mb-0">Seja bem vindo ao blog do site Rossana
                Advocacia.</p>
            <p style="font-size: 24px;  color: #333333">Aqui você encontrará notícias e matérias relavantes às áreas do
                direito.</p>

        </div>
    </div>
</div>

</header>

<section class="bg-white py-5">

    <div class="container">
        <?php
        while (have_posts()) {
            the_post(); ?>

            <div class="row my-5 d-flex">
                <div class="col-auto">
                    <?php the_post_thumbnail("thumbnail"); ?>
                </div>
                <div class="col-auto align-items-center">
                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Ler mais</a>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</section>
<?php
get_footer();
?>

