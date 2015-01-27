<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
            // Start the loop.
            while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
		
            // Previous/next post navigation.
            the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:' ) . '</span> ' .
				'<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			) );

							
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; 
            
            // End of the loop. 
			endwhile; 
            ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>