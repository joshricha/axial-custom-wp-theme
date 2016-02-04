<?php
/**
	Template Name: Home Page
 */

?>

<?php get_header(); ?>

<section id="content">
	<div class="full-screennav-container">

		<?php 

			$args = array(
				'theme_location' => 'fullscreen',
				'container' => 'nav',
				'container_class' => 'full-screen-navigation clearfix',
				'menu_class' => 'clearfix',
				'fallback_cb' => 'wp_page_menu',
				'link_before' => '<span class="nav-border">',
				'link_after' => '</span>'
			);
		
			wp_nav_menu( $args );

		?>

	</div><!-- fullscreen nav container -->
</section><!-- content -->


<?php get_footer(); ?>
