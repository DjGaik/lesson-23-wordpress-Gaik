<?php

// Меню навигации
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
		)
	);
}

function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}

// Миниатюра
add_theme_support( 'post-thumbnails' );


// Создаем post type для Курсов
add_action( 'init', 'custom_post_courses' );
function custom_post_courses() {
	$labels = array(
		'name'               => _x( 'Курсы', 'post type general name' ),
		'singular_name'      => _x( 'Курсы', 'post type singular name' ),
		'add_new'            => _x( 'Добавить новый', 'courses' ),
		'add_new_item'       => __( 'Добавить новый курс' ),
		'edit_item'          => __( 'Редактировать курс' ),
		'new_item'           => __( 'Новый курс' ),
		'all_items'          => __( 'Все курсы' ),
		'view_item'          => __( 'Просмотр курса' ),
		'search_items'       => __( 'Поиск курса' ),
		'not_found'          => __( 'Курс не найден' ),
		'not_found_in_trash' => __( 'Курс не найден в Корзине' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Курсы'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Для добавления нового курса',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'courses', $args );
}

// Регистрируем виджеты
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'Social share',
		'before_widget' => '<ul class="social">',
		'after_widget' => '</ul>'

	));

	register_sidebar(array(
		'name' => 'vk widget',
		'before_widget' => '<li id="vk_groups">',
		'after_widget' => '</li>'
	));
}
// Создаем post type для Спонсоров
add_action( 'init', 'custom_post_sponsors' );
function custom_post_sponsors() {
	$labels = array(
		'name'               => _x( 'Спонсоры', 'post type general name' ),
		'singular_name'      => _x( 'Спонсоры', 'post type singular name' ),
		'add_new'            => _x( 'Добавить новый', 'sponsors' ),
		'add_new_item'       => __( 'Введите адрес http://' ),
		'edit_item'          => __( 'Редактировать спонсоров' ),
		'new_item'           => __( 'Новый спонсор' ),
		'all_items'          => __( 'Все курсы' ),
		'view_item'          => __( 'Просмотр спонсора' ),
		'search_items'       => __( 'Поиск спонсора' ),
		'not_found'          => __( 'Спонсор не найден' ),
		'not_found_in_trash' => __( 'Спонсор не найден в Корзине' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Спонсоры'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Для добавления нового спонсора',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'sponsors', $args );
}

// Footer copyright
function devise_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; Copyright " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}

?>