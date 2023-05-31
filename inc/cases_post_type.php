<?php 

function cptui_register_my_cpts_cases() {

	/**
	 * Post Type: Кейсы.
	 */

	$labels = [
		"name" => __( "Кейсы", "custom-post-type-ui" ),
		"singular_name" => __( "Кейсы", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Кейсы", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "cases", "with_front" => true, "pages" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "cases", $args );

	if ( function_exists( 'add_ux_builder_post_type' ) ) {
		add_ux_builder_post_type( 'cases' );
	}

}

add_action( 'init', 'cptui_register_my_cpts_cases' );


// function override_cases_post_type_title( $title ) {

//     $site_name = get_bloginfo();
//     $sep = apply_filters( 'document_title_separator', '|' );
//     $sep = str_pad( $sep, 30, " ", STR_PAD_BOTH );

//     if(is_post_type_archive( 'cases' )) 
//         return 'Кейсы * ' . $sep . $site_name;

//     return $title;
// }

// // Raise priority above other plugins/themes that 
// // have effect on the title with 900 (the default is 10).
// add_filter( 'wp_title', 'override_cases_post_type_title', 900 ); 
// add_filter( 'get_the_archive_title', 'override_cases_post_type_title', 900 );


// add_theme_support( 'title-tag' );
// add_filter( 'document_title_parts', 'filter_function_name_2114' );
// function filter_function_name_2114( $title ){
// 	$title['title'] = 'test';

// 	return $title;
// }

function sh8der_next_post_link_cases() {
    global $post;
    $next_post = get_next_post(true);
    var_dump($next_post);
    if ( is_a( $next_post , 'WP_Post' ) ) { ?>
          <a title="<?php echo get_the_title( $next_post->ID ); ?>" class="prev-link plain" href="<?php echo get_the_permalink( $next_post->ID ); ?>">
          <?php echo get_the_title($next_post->ID);?>
          <?php echo get_flatsome_icon('icon-angle-right');?>
          </a>
    <?php }
}

function sh8der_previous_post_link_cases() {
    global $post;
    $prev_post = get_previous_post(true);
    var_dump($prev_post);
    if ( is_a( $prev_post , 'WP_Post' ) ) { ?>
      
        <a title="<?php echo get_the_title( $prev_post->ID ); ?>" class="next-link plain" href="<?php echo get_the_permalink( $prev_post->ID ); ?>">
         <?php echo get_flatsome_icon('icon-angle-left');?>
         <?php echo get_the_title($prev_post->ID);?>
        </a>
   
    <?php }
}

add_action( 'pre_get_posts', 'cptui_query_setting_my_cpts_cases' );
function cptui_query_setting_my_cpts_cases( $query ) {
    // only modify front-end category archive pages
    if( is_post_type_archive( 'cases' ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page','20' );
        $query->set( 'orderby','meta_value_num' );
        $query->set( 'meta_key','sort' );
        $query->set( 'order','ASC' );
    }

    return $query;
}