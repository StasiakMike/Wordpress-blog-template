<?php
/* Menu */
register_nav_menu( 'main', 'Menu główne' );

/* Sidebar */

$args = array(
	'name'          => __( 'sidebar' ),
	'id'            => 'sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<section class="blurb widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>' );

register_sidebar( $args );

/* Post thumbnails */
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 840, 341, true );

/* Read more link */
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="button big" href="' . get_permalink() . '">Continue Reading</a>';
}

?>
