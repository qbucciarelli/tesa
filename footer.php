<?php
// If Single or Archive (Category, Tag, Author or a Date based page).
if (is_single() || is_archive()) :
?>
	</div>
	</div>
	</div>
	</div>
<?php
endif;
?>

</main>
<!-- /#main -->
<footer id="footer">
	<div class="container">
		<div class="row">

			<?php
			if (has_nav_menu('footer-menu')) : // See function register_nav_menus() in functions.php
				/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
						'container'       => 'nav',
						'container_class' => 'footer-menu',
						'fallback_cb'     => '',
						'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
						//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
						'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
					)
				);
			endif;

			if (is_active_sidebar('third_widget_area')) :
			?>
				<div class="third_widget_area">
					<?php
					dynamic_sidebar('third_widget_area');
					?>
				</div>
			<?php
			endif;

			if (is_active_sidebar('third_widget_area_1')) :
			?>
				<div class="third_widget_area">
					<?php
					dynamic_sidebar('third_widget_area_1');
					?>
				</div>
			<?php
			endif;
			if (is_active_sidebar('third_widget_area_2')) :
			?>
				<div class="third_widget_area">
					<?php
					dynamic_sidebar('third_widget_area_2');
					?>
				</div>
			<?php
			endif;
			if (is_active_sidebar('third_widget_area_3')) :
			?>
				<div class="third_widget_area">
					<?php
					dynamic_sidebar('third_widget_area_3');
					?>
				</div>
			<?php
			endif;
			if (is_active_sidebar('third_widget_area_4')) :
			?>
				<div class="third_widget_area">
					<?php
					dynamic_sidebar('third_widget_area_4');
					?>
				</div>
			<?php
			endif;
			?>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<div class="container-fluid">

		<div class="container">
			<div class="row">
				<?php
				if (is_active_sidebar('footer_widget_area')) :
				?>
					<div class="footer_widget_area">
						<?php
						dynamic_sidebar('footer_widget_area');
						?>
					</div>
				<?php
				endif;
				?>

			</div>
		</div>
	</div>

	<div style="display: flex; align-items: center; justify-content: center">
		<!-- Inicio de fragmento de código de HubSpot -->
		<button type="button" id="hs_show_banner_button" style="background-color: #425b76; border: 1px solid #425b76;
         border-radius: 3px; padding: 10px 16px; text-decoration: none; color: #fff;
         font-family: inherit; font-size: inherit; font-weight: normal; line-height: inherit;
         text-align: left; text-shadow: none;" onClick="(function(){
    var _hsp = window._hsp = window._hsp || [];
    _hsp.push(['showBanner']);
  })()">
			<?php esc_html_e('Configuración de cookies', 'tesa-theme'); ?>
		</button>

		<!-- Fin de fragmento de código de HubSpot -->
	</div>
</footer><!-- /#footer -->
</div><!-- /#wrapper -->
<?php
wp_footer();
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
</body>

</html>