<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tog000io
 */

?>

				</div><!-- #content -->
			</div><!-- .row -->
		</div><!-- .container -->
		<footer id="colophon" class="container site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tog000io' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'tog000io' ), 'WordPress' ); ?></a>
				<?php
				 // <span class="sep"> | </span>
				 // <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'tog000io' ), 'tog000io', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' );
				 ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		</div><!-- #page -->
	</div><!-- .container -->
</div><!-- .flex-container -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
