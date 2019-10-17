<?php get_header() ?>

<div class="login">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_solo.png" class="login__logo" alt="">
            <form class="container login__form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input class="login__usuario form-control" type="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input class="login__contraseña form-control" type="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn login__btn">Iniciar Sesión</button>
            </form>
        </div>

<?php get_footer() ?>