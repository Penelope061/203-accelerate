<?php
/**

 The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
	<div class="main-content" role="main">
		
		<div class="error-404-row">
		  <div class="error-404-column left">
			<img src="wp-content\themes\accelerate-theme-child\img\404-map.png">
		  </div>
		  <div class="error-404-column right">
			<h1 class="title-404"><?php _e( 'Whoops, Took a Wrong Turn…', 'accelerate' ); ?></h1>
			<p class="content-404"><?php _e( 'Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.', 'accelerate' ); ?></p>
					
			<p class="content-404"><?php _e( 'Feel free to take a look around our <strong>blog</strong> or some of our featured <strong>work</strong>.', 'accelerate' ); ?></p>
		  </div>
		</div>
		
		
	</div><!-- .main-content -->

</div><!-- #primary -->

<?php get_footer(); ?>
