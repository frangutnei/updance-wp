<?php get_header() ?>

<!-- Carousel -->
<?php get_template_part('_includes/carousel') ?>
		
<!-- Cajas -->
<?php get_template_part('_includes/cajas') ?>
		
<div class="funcionamiento container">
	<h1 class="funcionamiento__titulo">¿Cómo funciona UpDance?</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste deleniti aliquid possimus officiis! Praesentium quas deleniti architecto accusamus iure sint maiores, molestiae doloremque minus ab neque voluptas quibusdam delectus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quod doloremque nulla impedit, porro unde aliquid pariatur perferendis magni aspernatur! Repellat nam consequuntur placeat hic quia doloremque quod ratione nulla.</p>
</div>

<div class="nosotros container">
	<h1 class="nosotros__titulo">Nosotros</h1>
	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse tenetur repudiandae facere, ex placeat consequuntur quibusdam molestiae saepe assumenda optio. Reprehenderit, officiis tempore nostrum a tenetur ullam doloribus et aut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta deserunt porro quia doloremque aperiam rem at fuga numquam, vero sit blanditiis libero expedita. Esse sint, doloribus minima exercitationem delectus optio!</p>
</div>
	


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<?php get_footer() ?>