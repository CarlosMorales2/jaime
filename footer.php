<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Jaime
 * @subpackage Jaime
 * @since Jaime
 */
?>
</div><!-- #main .wrapper -->
<footer id="colophon" role="contentinfo">
    <div class="site-info">
        <span>&copy; <?php echo date('Y'); ?></span> 
        <a href="http://www.jaimeolmo.com"><?php bloginfo('name'); ?></a>
	— Hecho en <a href="http://www.seepuertorico.com/">Puerto Rico</a>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    //Add basic page tracking to your website.
</script>
</body>
</html>