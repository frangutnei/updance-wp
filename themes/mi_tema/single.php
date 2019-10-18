<?php get_header() ?>
	
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<article class="mb-5 mt-5 container principal">
			<div class="text-center my-3">
				<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail('noticias_detalle', array('class'=> 'w-100 h-auto my-4')); ?>
				<p><?php the_tags( '<span class="text-danger">#</span>', ' <span class="text-danger">#</span>', '' ); ?></p>
			</div>
			<div>
				<?php the_content() ?>
			</div>
		</article>
	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>