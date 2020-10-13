<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 
 * Template Name: About Us
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<div class="about-us-header">
				<h3><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
			</div>		
	</div>
</div>


<div id="primary" class="site-content sidebar">
	<div class="main-content" role="main">
		<div class="about-us-intro">
			<?php the_content(); ?>
		</div>
			<?php while ( have_posts() ) : the_post();
				$image_service_1 = get_field('image_service_1');
				$service_1 = get_field('service_1');
				$service_1_text = get_field('service_1_text');
				$service_2 = get_field('service_2');
				$service_2_text = get_field('service_2_text');
				$image_service_2 = get_field('image_service_2');
				$image_service_3 = get_field('image_service_3');
				$service_3 = get_field('service_3');
				$service_3_text = get_field('service_3_text');
				$image_service_4 = get_field('image_service_4');
				$service_4 = get_field('service_4');
				$service_4_text = get_field('service_4_text');
				$size = "thumbnail";
		?>
		
		<div class="about-us"><!--row-->
			<div class="about-us-img">
				<?php if($image_service_1){
					echo wp_get_attachment_image($image_service_1, $size);
					}?>
			</div>
			<div class="service">
				<h5><?php echo $service_1; ?></h5>
				<p><?php echo $service_1_text; ?></p>
			</div>
			<div class="service">
				<h5><?php echo $service_2; ?></h5>
				<p><?php echo $service_2_text; ?></p>
			</div>
			<div class="about-us-img">
				<?php if($image_service_2){
					echo wp_get_attachment_image($image_service_2, $size);
					}?>				
			</div>
			<div class="about-us-img">
				<?php if($image_service_3){
					echo wp_get_attachment_image($image_service_3, $size);
					}?>
			</div>
			<div class="service">
				<h5><?php echo $service_3; ?></h5>
				<p><?php echo $service_3_text; ?></p>
			</div>
			<div class="service">
				<h5><?php echo $service_4; ?></h5>
				<p><?php echo $service_4_text; ?></p>
			</div>
			<div class="about-us-img">
				<?php if($image_service_4){
					echo wp_get_attachment_image($image_service_4, $size);
					}?>				
			</div>
		</div>
		<!--form-->
		
		<?php endwhile; // end of the loop. ?>
		
	</div><!-- .main-content -->

</div><!-- #primary sidebar-->

<!--form-->

<?php get_footer(); ?>
