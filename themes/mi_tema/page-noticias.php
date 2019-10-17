<?php get_header() ?>


<h1 class="noticias__titulo">Noticias</h1>

<div class="container noticias__div">
    <div class="noticias">
        <div class="noticia">
            <img class="noticia__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/bailarines.jpeg" alt="">
            <h3 class="noticia__titulo">Titulo Noticia</h3>
            <h6 class="noticia__etiquetas">#etiqueta, #etiqueta</h6>
            <p class="noticia__contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ut eligendi repellat est nulla quasi qui, explicabo beatae perferendis accusamus consequuntur commodi aliquid atque et iste omnis culpa fugit nostrum.</p>
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

    <div class="sidebar">
        <h4 class="sidebar__titulo">Últimas Entradas</h4>
    </div>
</div>

<?php get_footer() ?>