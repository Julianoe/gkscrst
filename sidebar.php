<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Geeks_Curiosity
 * @since Geeks Curiosity v0
 */
?>

<?php if ( is_active_sidebar( 'sidebar' )  ) : ?>
  <div class="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- .sidebar -->
<?php endif; ?>
