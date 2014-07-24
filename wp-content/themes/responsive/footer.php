<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) { ?>
					<?php wp_nav_menu( array(
										   'container'      => '',
										   'fallback_cb'    => false,
										   'menu_class'     => 'footer-menu',
										   'theme_location' => 'footer-menu'
									   )
					);
					?>
				<?php } ?>
			</div>
			<!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div>
			<!-- end of col-380 fit -->

		</div>
		<!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
      Design by <a href="http://vnaka.com">VNAKA Media</a>
		</div>
		<!-- end of .copyright -->

  <!-- arrow back to top -->
		<div class="grid col-140 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>
  <!-- /end arrow back to top -->
		<div class="grid col-460 fit powered">
			<a href="<?php echo esc_url( 'http://cyberchimps.com/responsive-theme/' ); ?>" title="<?php esc_attr_e( 'Responsive Theme', 'responsive' ); ?>">
        Copyright &copy; American Services Worldwide Ltd. All rights reserved.<br>
        Address: 14 group 21 Hon Chong st, Nha Trang city, Khanh Hoa, Vietnam.<br>
        Tel: +84(0) 978 421 279<br>
        Email: hanh.nguyen.wbbo@gmail.com
      </a>
		</div>
		<!-- end .powered -->

	</div>
	<!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>