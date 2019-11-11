<?php get_header() ?>

<div class="registro">
    <h1 class="registro__titulo">Regístrate en UPDANCE</h1>
    <form class="container registro__form">
        <div class="form-group">
            <label for="exampleInputEmail1">Correo Electrónico</label>
            <input class="registro__usuario form-control" type="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input class="registro__contraseña form-control" type="password" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar contraseña</label>
            <input class="registro__contraseña form-control" type="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn registro__btn">Registrarse</button>
    </form>
</div>

<?php get_footer() ?>