<?php
get_header();
?>

</header>

<?php
while (have_posts()) {
    the_post();
    ?>

    <h1><?php the_title(); ?></h1>

    <content><?php the_content() ?></content>

    <?php
}


get_footer();
?>
