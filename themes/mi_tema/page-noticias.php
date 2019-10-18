<?php get_header() ?>


<h1 class="noticias__titulo">Noticias</h1>

<div class="noticias container">
    <?php
        $arg = array(
            'post_type'		 => 'post',
            'category_name'	 => '',
            'posts_per_page' => -1,
            'offset'		 => 0,
            'post__not_in'	 => array($post->ID),
            'paged'			 => $paged
        );
        
        $get_arg = new WP_Query( $arg );
    
        while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
        ?>
    
            
        <div class="noticia">
            <?php the_post_thumbnail('noticias');?>
            <h3 class="noticia__titulo mt-2"><?php the_title() ?></h3>
            <h6 class="noticia__etiquetas"><?php the_tags( '<span class="text-danger">#</span>', ' <span class="text-danger">#</span>', '' ); ?></h6>
            <?php the_excerpt(); ?>
            <p  class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn__updance">Ver noticia</a></p>
        </div>
        
        <?php } wp_reset_postdata();?>

</div>

<?php get_footer() ?>