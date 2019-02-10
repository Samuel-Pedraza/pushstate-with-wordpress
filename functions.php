<?php 

add_action( 'wp_ajax_fetch_categories_post', 'fetch_categories');
add_action( 'wp_ajax_nopriv_fetch_categories_post', 'fetch_categories');

function load_js(){
	wp_enqueue_script('jquery', '', '', '', TRUE);
	wp_enqueue_script('mainJS', get_template_directory_uri() . '/main.js', '', '', TRUE);
}

add_action('wp_enqueue_scripts', 'load_js');

function fetch_categories(){
	$cat_slug = $_POST['category_slug'];

	$list_of_posts = Array();
	
	$subcat_posts = get_posts('category=' . get_cat_ID($cat_slug));

	foreach ($subcat_posts as $individual_post) {
		array_push($list_of_posts, $individual_post);
	}

	echo json_encode($list_of_posts);
	die();

}


 ?>