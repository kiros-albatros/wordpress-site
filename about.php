<?php
/*
Template Name: about
*/ 
get_header();

?>

<main class="about">
    <h2 class="page-title"><?php wp_title("", true); ?></h2>
    <div class="about__author">
        <div class="about__author-description">
        <?php
global $post;

$about_text = get_posts([ 
	'numberposts' => -1,
  'category'    => "6"
]);

if( $about_text ){
	foreach( $about_text as $post ){
		setup_postdata( $post );
    
		
  the_content();} } else {
    echo ("Постов не найдено");
      // Постов не найдено
  } 
  wp_reset_postdata();
  ?>
        </div>
        <p class="about__author-container">
        <img class="about__author-photo" src="<?php the_field('photo_about') ?>" alt="">
        </p>
    </div>
    <div class="about__feedback">
        <h3 class="page-title">Отзывы</h3>
        <ul class="about__feedback-list">

        <?php 
    global $post;

    $feedbacks = get_posts([ 
	'numberposts' => -1,
    'category'=> "5"
]);


if( $feedbacks ){
	foreach( $feedbacks as $post){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
        <li class="about__feedback-item">
            <p class="about__feedback-name"><?php the_title();?></p>
            <div class="about__feedback-text"><?php the_content();?></div>
        </li>
		<?php 
	}
} else {
  echo ("Постов не найдено");
	// Постов не найдено
} 
wp_reset_postdata(); // Сбрасываем $post
?>
        </ul>
    </div>

</main>


<?php
get_footer();
?>