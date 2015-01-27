<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package JaimeOlmo
 * @subpackage JaimeOlmo
 * @since Jaime Olmo 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-post">
			<?php _e( 'Featured post', 'jaime' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'jaime' ) ); ?></span>
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'jaime' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			        <?php jaime_posted_date(); ?>
		</header><!-- .entry-header -->
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'jaime' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'jaime' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">			

<?php if ( comments_open() ) : ?>
    <div class="comments-link">
       <i class="fa fa-comments"></i>
        <?php comments_popup_link( '<span class="leave-reply">' . __( '¿Deseas comentar?' ) . '</span>', __( '1 Comentario' ), __( '% Comentarios') ); ?>
				</div><!-- .comments-link -->
				
				<div class="social-buttons">
   <span><i-share class="fa fa-share-alt"></i-share>compártelo</span>
    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="twitter">
        Twitter</a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="facebook">
    Facebook</a>
    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="google-plus">
        Google+</a>
</div>
				
			<?php endif; // comments_open() ?>
		<?php if ( is_single() ) : ?>
			<?php else : ?>
			<?php endif; // is_single() ?>
    <?php edit_post_link( __( 'Editar' ), '<span class="edit-link">', '</span>' ); ?>
</footer><!-- .entry-meta -->
<?php the_tags( '<span class="tag-links">', '', '</span>' ); ?>
</article><!-- #post -->