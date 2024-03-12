<?php
get_header();
?>

<?php
while (have_posts()) {
    the_post();
    ?>
    <div style="height: 340px; background-image: url(<?php echo get_theme_file_uri('/build/assets/headers/justice.png') ?>), linear-gradient(#cb9f6000, black);" class="banner-page bg-brand-yellow-3 d-flex align-items-end">
        <div class="container pb-5">
            <h1><?php the_title(); ?></h1>
            <p><?php
                (); ?></p>
        </div>
    </div>

    </header>

    <section class="bg-white py-5">
        <div class="container">
            <?php the_content() ?>
        </div>
    </section>

    <?php
}


get_footer();
?>
