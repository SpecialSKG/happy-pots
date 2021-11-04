<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Happy Pots">
    <meta name="description" content="">
    <title>Happy Pots - Login</title>
    <link rel="icon" href="<?= base_url() . 'assets/images/happyicon.ico'; ?>" type="image/gif">

    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/login/login_view.css'; ?>">

    <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.css' ?>">
</head>

<body>
    <div class="container">
        <div class="welcome">
            <div class="pinkbox">

                <div class="signup nodisplay">
                    <h1>Registro</h1>
                    <form autocomplete="off">
                        <input type="text" id="r_nombre" name="nombre" placeholder="nombre">
                        <input type="email" id="r_email" name="email" placeholder="email" required>
                        <input type="text" id="r_cell" name="cell" placeholder="telefono">
                        <input type="password" id="r_pass" name="pass" placeholder="password">
                        <input type="button" class="button submit" value="Crear Cuenta" id="registro_cliente">
                    </form>
                </div>

                <div class="signin">
                    <h1>Iniciar Sesion</h1>
                    <form class="more-padding" autocomplete="off">
                        <input type="email" placeholder="Correo" name="email" id="l_email" required>
                        <input type="pass" placeholder="Contraseña" name="pass" id="l_pass">

                        <input type="button" class="button submit" value="Login" id="logeo">
                    </form>
                </div>

            </div>

            <div class="leftbox">
                <h2 class="title"><span>Happy</span>-<br>Pots</h2>
                <p class="desc">Elige tu maceta <span>perfecto</span></p>
                <img class="flower" src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Logo de Happy Pots" width="50" height="50" border="0">
                <p class="account">Tienes una cuenta?</p>
                <button class="button" id="signin">Login</button>
            </div>

            <div class="rightbox">
                <h2 class="title"><span>Happy</span>-<br>Pots</h2>
                <p class="desc">Una maceta para tu <span>vida.</span></p>
                <img class="flower" src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Logo de Happy Pots" width="50" height="50" />
                <p class="account">No tienes una cuenta?</p>
                <button class="button" id="signup">sign up</button>
            </div>

        </div>
    </div>

    </div>
</body>
<script src="<?= base_url() . 'assets/js/jquery.js'; ?>"></script>
<script src="<?= base_url() . 'assets/js/main.js'; ?>"></script>

<script src="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.all.js'; ?>"></script>

<script src="<?= base_url() . 'assets/login/login_view.js'; ?>"></script>
<script src="<?= base_url() . 'assets/login/login.js'; ?>"></script>
