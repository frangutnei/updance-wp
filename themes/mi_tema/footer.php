<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 footer__logo">
						<img class="footer__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt="">
					</div>
					<div class="col-md-9">
						<div class="footer__links">
							<a  class="footer__link" href="#">Quienes Somos</a>
							<a  class="footer__link" href="contacto">Contacto</a>
						</div>
						<div class="footer__rrss">
							<a href="#" class="footer__rs"><i class="fab fa-instagram fa-3x"></i></a>
							<a href="#" class="footer__rs"><i class="fab fa-facebook-square fa-3x"></i></i></a>
							<a href="#" class="footer__rs"><i class="fab fa-twitter-square fa-3x"></i></a>
						</div>
						<!-- <div class="footer__apps">
							<img class="footer__app" src="<?php echo get_theme_file_uri(); ?>/assets/images/disponible-en-google-play-badge.png" alt="">
							<img class="footer__app" src="<?php echo get_theme_file_uri(); ?>/assets/images/appstore.png" alt="">
						</div> -->
					</div>
				</div>
			</div>
		</footer>
		



		<!--jQuery 3.3.1-->
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

		<!-- Popper JS 1.14.7 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<!--Bootstrap JS 4.3.1-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- this is where we put our custom functions -->
		<!-- <script src="assets/scripts/main.bundle.js"></script> -->


<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
</body>
</html>