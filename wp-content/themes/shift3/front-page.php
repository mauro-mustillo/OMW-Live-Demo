<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
<div class="container">
			<?php /*?><h1><?php the_title(); ?></h1><?php */?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				
</div>
	<?php

// check if the flexible content field has rows of data
if( have_rows('page_layout') ):

     // loop through the rows of data
    while ( have_rows('page_layout') ) : the_row();
	// Regular Text Layout
        if( get_row_layout() == 'regular_text' ):
echo "<section><div class='container regular-text'>";
        	the_sub_field('regular_text');
echo "</div></section>";
				
				// Full Width Layout
        elseif( get_row_layout() == 'full_width_box' ): 

echo '<section> <div class="full-width-box" style="background: url(';
	 the_sub_field('fwb_background_image') ;
	echo '); background-repeat: no-repeat;background-size: cover"><div class="col-md-5 box-content">';
        	the_sub_field('fwb-content');
echo "</div></div></section>";
	
	// 2 Columns Layout
        elseif( get_row_layout() == '2_columns' ): 

	
echo '<section> <div class="container two-columns"><div class="col-md-6 box-content-left">';
        	the_sub_field('2_columns_left');
echo '</div><div class="col-md-6 box-content-right">';
		the_sub_field('2_columns_right');	
echo '</div></section>';
	
	// Gallery Layout
        elseif( get_row_layout() == 'screenshots' ): 

	echo '<section> <div class="screenshots-gallery">';
        	the_sub_field('add_gallery');

	echo '</div></section>';
	
	// By The Numbers Layout
        elseif( get_row_layout() == 'by_the_numbers' ): 

	echo '<section> <div class="container by-the-numbers">';
        	the_sub_field('stats');

	echo '</div></section>';
	
	
	// Testimonials Layout
        elseif( get_row_layout() == 'testimonials' ): 

	echo '<section> <div class="testimonials"><div class="col-md-6"  style="background: url(';
	 	the_sub_field('testimonials_left-side_image');
	echo '); background-repeat: no-repeat;background-size: cover"><div class="left testimonial-content">';
		the_sub_field('testimonials_left_content');
	echo '</div></div><div class="col-md-6"  style="background: url(';
	 	the_sub_field('testimonials_right_side_image');
	echo '); background-repeat: no-repeat;background-size: cover"><div class="testimonial-content">';
	the_sub_field('testimonials_right_content');
	echo '</div></div>';
	
	
	
	
	
	
        	


	
	echo '</div></section>';
	
	
	
	
	
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
		
		
		
		
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
