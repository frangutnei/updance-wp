<?php get_header() ?>


        <div class="aparecer container">
            <h1 class="aparecer__titulo">Aparecer en UpDance</h1>
            <p class="aparecer__parrafo">Si eres administrador de una academia de baile, o un profesor particular y te gustaría ser parte de esta comunidad de danza, te invitamos a llenar el siguiente formulario.</p>
            
            <p>Una vez que nos hayas enviado tus datos, los validaremos y tu academia será publicada en nuestra red.</p>
                
            <p>Ante cualquier consulta no dudes en escribirnos un correo a xxx@xxxx.com o enviarnos un mensaje mediante nuestro formulario de contacto.</p>
        </div>

        <form class="formulario container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control formulario__nombre" id="">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Correo Electrónico</label>
                    <input type="email" class="form-control formulario__correo" id="">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Asunto</label>
                    <input type="text" class="form-control formulario__asunto" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="">Mensaje</label>
                <textarea class="form-control formulario__mensaje" name="" id="" cols="30" rows="7"></textarea>
            </div>
            <div class="formulario__btn">
                <button type="submit" class="btn btn__updance">Enviar</button>
            </div>
        </form>

<?php get_footer() ?>