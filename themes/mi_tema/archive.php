<?php get_header() ?>

	<?php if (have_posts()) { ?>

	<ul>
		<?php while ( have_posts() ) { the_post(); ?>
		<li>
					</li>
		<?php }; ?>
	</ul>

	<?php } else { ?>
		<!-- Content -->
		<p>No hay elementosssssssssss</p>
	<?php } wp_reset_query(); ?>

	<?php get_sidebar() ?>
<?php get_footer() ?>