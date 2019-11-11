<?php get_header() ?>

<div class="login">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_solo.png" class="login__logo" alt="">
    <form action="page-login-php" method="post" class="container login__form">
        <div class="form-group">
            <label>Correo Electrónico</label>
            <input type="text" name="email" class="login__usuario form-control">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" class="login__contraseña form-control">
        </div>
        <input type="submit" value="Iniciar Sesión" class="btn login__btn">
    </form>
</div>

<?php get_footer() ?>