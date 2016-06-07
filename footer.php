<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MLA_Wordpress_Theme
 */

?>

				</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="f-phone">
								<i class="fa fa-phone" aria-hidden="true"></i> (+44) 1789 765 850
								</div>
							</div>
							<div class="col-md-4">
								<div class="f-mail">
								<i class="fa fa-envelope" aria-hidden="true"></i> info@atelierdespera.com
								</div>
							</div>
							<div class="col-md-4">
								<div class="f-social">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								</div>								
							</div>
						</div>
						<div class="menu-footer">
							<?php wp_nav_menu( array('theme_location' => 'footer')); ?>
						</div>
						<div class="site-info">						
						<?php printf( esc_html__( '© 2016 web design by: %1$s', 'mla' ),'<a href="#" rel="designer">One Click MS</a>' ); ?>
						</div><!-- .site-info -->
					</div>					
				</footer><!-- #colophon -->
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
