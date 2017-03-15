<?php


// surcharge du fichier functions.php du thème parent

// récupérer les styles du thème parent

add_action( 'wp_enqueue_scripts', 'jp_theme_ma', 99);


// fonction PHP jp_theme_ma  : convention julien poujade: jp et ma: maison de l'image => jp_theme_ma 


function jp_theme_ma() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_dequeue_style('sparkling-style');
	wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array('parent-style')
	);

    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/inc/js/al-accordion.js');

}


/**

 *  Register Widget

 */

require_once __DIR__. '/inc/widgets/widget-recent-posts.php';


function jp_register_widgets() {

	register_widget( 'sparkling_recent_posts' );

}


add_action( 'widgets_init', 'jp_register_widgets' );


/*

 * Meta information article

 */


if ( ! function_exists( 'sparkling_posted_on' ) ) :

	/**

	 * Prints HTML with meta information for the current post-date/time and author.

	 */

	function sparkling_posted_on() {

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

			$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';

		}


		$time_string = sprintf( $time_string,

				esc_attr( get_the_date( 'c' ) ),

				esc_html( get_the_date() ),

				esc_attr( get_the_modified_date( 'c' ) ),

				esc_html( get_the_modified_date() )

		);


		printf( '<span class="posted-on"><i class="fa fa-calendar"></i> %1$s</span>',

				sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',

						esc_url( get_permalink() ),

						$time_string

				)

		);


	}

endif;


function custom_sparkling_scripts() {

    wp_dequeue_script('flexslider-customization');

    if( ( is_home() || is_front_page() ) && of_get_option('sparkling_slider_checkbox') == 1 ) {        


        // Flexslider customization


        wp_enqueue_script( 'flexslider-customization2', get_stylesheet_directory_uri() . '/inc/js/flexslider-custom.js', array('jquery', 'flexslider-js'), '20140716', true );


    }

}


add_action( 'wp_enqueue_scripts', 'custom_sparkling_scripts', 99 );


/**

 * Set the content width for full width pages with no sidebar.

 */

function dazzling_content_width() {

  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {

    global $content_width;

    $content_width = 1110; /* pixels */

  }

}

add_action( 'template_redirect', 'dazzling_content_width' );





function jeherve_custom_tiled_gallery_width() {

    return '1038';

}

add_filter( 'tiled_gallery_content_width', 'jeherve_custom_tiled_gallery_width' );

