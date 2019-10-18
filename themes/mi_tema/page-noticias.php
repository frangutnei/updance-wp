<?php get_header() ?>


<h1 class="noticias__titulo">Noticias</h1>

<div class="container noticias__div">
    <div class="noticias">
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
                    <!-- <img class="" src="<?php echo get_theme_file_uri(); ?>/assets/images/bailarines.jpeg" alt=""> -->
                    <?php the_post_thumbnail('noticias');?>
                    <h3 class="noticia__titulo mt-2"><?php the_title() ?></h3>
                    <p></p>
                    <h6 class="noticia__etiquetas"><?php the_tags( '<span class="text-danger">#</span>', ' <span class="text-danger">#</span>', '' ); ?></h6>
                    <p class="noticia__contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ut eligendi repellat est nulla quasi qui, explicabo beatae perferendis accusamus consequuntur commodi aliquid atque et iste omnis culpa fugit nostrum.</p>
                    <a class="btn btn__updance">Ver noticia</a>
                    <p class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-outline-danger">Ver entrada</a></p>
                </div>
        
            <?php } wp_reset_postdata();
        ?>
        <div class="noticia">
            <img class="noticia__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/bailarines.jpeg" alt="">
            <h3 class="noticia__titulo">Titulo Noticia</h3>
            <h6 class="noticia__etiquetas">#etiqueta, #etiqueta</h6>
            <p class="noticia__contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ut eligendi repellat est nulla quasi qui, explicabo beatae perferendis accusamus consequuntur commodi aliquid atque et iste omnis culpa fugit nostrum.</p>
            <button class="btn btn__updance">Ver noticia</button>
        </div>
        <div class="noticia">
            <img class="noticia__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pexels-photo-1640776.jpeg" alt="">
            <h3 class="noticia__titulo">Titulo Noticia</h3>
            <h6 class="noticia__etiquetas">#etiqueta, #etiqueta</h6>
            <p class="noticia__contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ut eligendi repellat est nulla quasi qui, explicabo beatae perferendis accusamus consequuntur commodi aliquid atque et iste omnis culpa fugit nostrum.</p>
        </div>
        <div class="noticia">
            <img class="noticia__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/friends.jpeg" alt="">
            <h3 class="noticia__titulo">Titulo Noticia</h3>
            <h6 class="noticia__etiquetas">#etiqueta, #etiqueta</h6>
            <p class="noticia__contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ut eligendi repellat est nulla quasi qui, explicabo beatae perferendis accusamus consequuntur commodi aliquid atque et iste omnis culpa fugit nostrum.</p>
        </div>
    </div>
<!-- 
    <div class="sidebar">
        <h4 class="sidebar__titulo">Últimas Entradas</h4>
    </div> -->
</div>

<?php get_footer() ?>