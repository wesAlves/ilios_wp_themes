<?php
get_header();
?>
<div style="height: 340px" class="bg-brand-yellow-3 d-flex align-items-end">
    <div class="container pb-5">
        <h1>Blog</h1>
        <p>Blog description</p>
    </div>
</div>

</header>

<section class="bg-white py-5">

    <div class="container">
        <?php
        while (have_posts()) {
            the_post(); ?>

            <div class="card mt-3 p-3">
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
            </div>

            <?php
        }
        ?>

    </div>
</section>
<?php
get_footer();
?>

