<?php

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('swipercss', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script('swiperjs', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
});
add_action('after_setup_theme', 'makeMenu');

function makeMenu()
{
	register_nav_menu('top', 'меню в шапке');
	register_nav_menu('bottom', 'меню в подвале');
}

// ДОбавляем классы ссылкам
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
	if ($args->theme_location === 'top') {
		$atts['class'] = 'header__nav-link';

		if ($item->current) {
			$atts['class'] .= ' header__nav-link--active';
		}
	}

	return $atts;
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
