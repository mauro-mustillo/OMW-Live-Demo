<?php get_header(); ?>
<div class="rotator">
	<ul id="rotmenu">
		
				<li>
			<a href="rot1"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Innovate</a>
			<div style="display:none;">
				<div class="info_image">innovate.jpg</div>
				<div class="info_heading">Creating new products and developing existing ideas.

</div>
				
					
			</div>
		</li>
		
		<li>
			<a href="rot2"><i class="fa fa-refresh" aria-hidden="true"></i>Automate</a>
			<div style="display:none;">
				<div class="info_image">1.jpg</div>
				<div class="info_heading">Leveraging technologies to streamline manual paper based workflows.

</div>
			
			</div>
		</li>
		<li>
			<a href="rot3"><i class="fa fa-connectdevelop" aria-hidden="true"></i>Integrate</a>
			<div style="display:none;">
				<div class="info_image">2.jpg</div>
				<div class="info_heading">Facilitate communication between two or more disparate systems.

</div>
				
					
			</div>
		</li>

		<li>
			<a href="rot4"><i class="fa fa-wrench" aria-hidden="true"></i>Upgrade</a>
			<div style="display:none;">
				<div class="info_image">upgrade.jpg</div>
				<div class="info_heading">Replacing aging technologies and systems.

</div>
				
					
			</div>
		</li>
		<li>
			<a href="rot5"><i class="fa fa-cubes" aria-hidden="true"></i>Expand</a>
			<div style="display:none;">
				<div class="info_image">expand.jpg</div>
				<div class="info_heading">Creating additional functionality to enhance currently deployed system.

</div>
				
					
			</div>
		</li>
	</ul>
	<div id="rot1">
		<img src=""  alt=""/>
		<div class="heading">
			<h1></h1>
		</div>
		
	</div>
	
	
	
	
	
	
</div>
	<main role="main">
		<!-- section -->
		<section>

			<?php /*?><h1><?php the_title(); ?></h1><?php */?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				

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
<div id="latest-posts">	
<h2>Latest Work, News & Thoughts</h2>
<ul><?php 
$args = array( 'posts_per_page' => '3' );
$recent_posts = new WP_Query($args);
while( $recent_posts->have_posts() ) :  
    $recent_posts->the_post() ?>
    <li>
       <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('medium') ?>
        <?php endif ?> 
        <h4><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h4> 
         <p> <?php the_excerpt() ?> </p>
    </li>
<?php endwhile; ?>
<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
</ul>
<p style="text-align: center;padding-top: 70px"><a class="transparent-black" href="#">read more blog articles
</a></p>
</div>
<?php get_footer(); ?>
