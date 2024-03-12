<?php
get_header();
?>

<?php
while (have_posts()) {
    the_post();

    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');

    ?>
    <div style="height: 340px; background-image: url(<?php echo $image[0]; ?>), linear-gradient(#cb9f6000, black);"
         class="banner-page bg-brand-yellow-3 d-flex align-items-end">
        <div class="container pb-5">
            <h1><?php the_title(); ?></h1>
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
