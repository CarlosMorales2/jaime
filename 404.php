<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Jaime
 */

get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <article id="post-0" class="post error404 no-results not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'jaime' ); ?></h1>
                </header>

                <div class="entry-content">
                    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jaime' ); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-0 -->
            
            <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>