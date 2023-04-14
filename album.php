<?php
/*
Template Name: album
*/
get_header();

?>

<main class="album">
    <h2 class="page-title"><?php wp_title("", true); ?></h2>
    <div class="album__description"><?php the_field('description_for_album') ?></div>
    <div class="album__container">
        <?php the_content(); ?>
    </div>
</main>


<?php
get_footer();
?>