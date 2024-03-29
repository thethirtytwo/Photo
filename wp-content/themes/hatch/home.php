<?php
/**
 * Home Template
 *
 * A custom home page template.
 *
 * @package Hatch
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>
	
	<?php do_atomic( 'before_masthead' ); // hatch_before_masthead ?>
	
	 <div id="masthead">
		
		<?php do_atomic( 'open_masthead' ); // hatch_open_masthead ?>
		
		<?php $hatch_author_bio = hybrid_get_setting( 'hatch_author_bio' ) ? hybrid_get_setting( 'hatch_author_bio' ) : '1'; ?>
		
		<div id="author-bio"><?php the_author_meta( 'description', $hatch_author_bio ); ?></div>

         <?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>

         <div id="header-banner" role="banner">



             <?php // Check to see if the header image has been removed
			$header_image = get_header_image();
			
			if ( ! empty( $header_image ) ) : ?>
					
				<img src="<?php header_image(); ?>" alt="" />
						
			<?php endif; // end check for removed header image ?>
		
		</div>
		
		<?php do_atomic( 'close_masthead' ); // hatch_close_masthead ?>
		
	</div>

	<?php do_atomic( 'before_content' ); // hatch_before_content ?>	

	<div id="content">

		<?php do_atomic( 'open_content' ); // hatch_open_content ?>

		<div class="hfeed">
			
			<?php if ( have_posts() ) : ?>
			
				<?php $counter = 1; ?>

				<?php while ( have_posts() ) : the_post(); ?>

						<?php do_atomic( 'before_entry' ); // hatch_before_entry ?>
					
						<?php if ( ( $counter % 4 ) == 0 ) { ?>

							<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?> last">
							
						<?php } else { ?>
						
							<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
						
						<?php } ?>													
	
								<?php do_atomic( 'open_entry' ); // hatch_open_entry ?>
	
								<?php if ( current_theme_supports( 'get-the-image' ) ) {
										
									get_the_image( array( 'size' => 'archive-thumbnail', 'image_class' => 'featured', 'width' => 220, 'height' => 150, 'default_image' => get_template_directory_uri() . '/images/archive_image_placeholder.png' ) );
										
								} ?>					
										
								<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>						
	
								<?php do_atomic( 'close_entry' ); // hatch_close_entry ?>							
	
							</div><!-- .hentry -->

						<?php do_atomic( 'after_entry' ); // hatch_after_entry ?>
					
					<?php $counter++; ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // hatch_close_content ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // hatch_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>