<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 footer__logo">
				<img class="footer__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt="">
			</div>
			<div class="col-md-9">
				<div class="footer__links">
					<!-- <a  class="footer__link" href="#">Quienes Somos</a> -->
					<a  class="footer__link" href="contacto">Contacto</a>
				</div>
				<div class="footer__rrss">
					<a href="#" class="footer__rs"><i class="fab fa-instagram fa-3x"></i></a>
					<a href="#" class="footer__rs"><i class="fab fa-facebook-square fa-3x"></i></i></a>
					<a href="#" class="footer__rs"><i class="fab fa-twitter-square fa-3x"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
</body>
</html>