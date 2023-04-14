<?php
/*
Template Name: home
*/
get_header();

?>
<main>
  <div class="swiper slider">
    <div class="swiper-wrapper slider__wrapper">

      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => -1,
        'category'    => "3",
        'orderby'     => 'date',
      ]);

      if ($myposts) {
        foreach ($myposts as $post) {
          setup_postdata($post);
      ?>
          <div class="swiper-slide slider__slide">
            <a class="slider__link" href="<?php the_permalink(); ?>">
              <h6 class="slider__slide-title"><?php the_title(); ?></h6>
              <img class="slider__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </a>
          </div>

      <?php
        }
      } else {
        echo ("Постов не найдено");
      }

      wp_reset_postdata(); // Сбрасываем $post
      ?>

    </div>
    <div class="slider__arrows">
      <div class="slider__arrow slider__arrow--prev"></div>
      <div class="slider__arrow slider__arrow--next"></div>
    </div>
  </div>
</main>

<?php
get_footer();
?>