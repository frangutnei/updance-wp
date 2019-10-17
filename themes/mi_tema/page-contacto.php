<?php get_header() ?>

<div class="contacto container">
			<h1 class="contacto__titulo">Contáctanos</h1>
			<!-- <div class="typeform-widget" data-url="https://franciscagutirrez.typeform.com/to/Hb8IH8" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=Hb8IH8&utm_source=typeform.com-14128663-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=ES" style="color: #999" target="_blank">Typeform</a> </div> -->
			<form class="contacto__form">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Correo Electrónico</label>
					<input type="email" class="form-control">
				</div>
				<div class="form-group">
				  	<label>Mensaje</label>
					<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
				</div>
				<div class="contacto__btn">
					<button type="button" class="btn contacto__btn-enviar">Enviar</button>
				</div>
			</form>
        </div>

<?php get_footer() ?>