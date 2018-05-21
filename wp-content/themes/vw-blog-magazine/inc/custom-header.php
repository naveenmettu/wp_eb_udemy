<?php
/**
 * @package VW Blog Magazine
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_blog_magazine_header_style()
*/
function vw_blog_magazine_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_blog_magazine_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'vw_blog_magazine_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_blog_magazine_custom_header_setup' );

if ( ! function_exists( 'vw_blog_magazine_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_blog_magazine_custom_header_setup().
 */
function vw_blog_magazine_header_style() {

		$header_text_color = get_header_textcolor();
	?>
		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>
				.logo{
					background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
					background-position: center top;
					height: 400px;
				}
			<?php endif; ?>	
		</style>
	<?php

}
endif; // vw_blog_magazine_header_style