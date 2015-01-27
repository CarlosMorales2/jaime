<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package JaimeOlmo
 * @subpackage JaimeOlmo
 * @since Jaime Olmo 1.0
 */
?>

	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'jaime' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'jaime' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
