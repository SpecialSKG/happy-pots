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

        <button class="btn-share" onclick="location.href='<?= base_url(); ?>'">
            <span class="btn-text">Inicio</span>
            <ul class="social-icons">
                <li>
                    <a href="<?= base_url() ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255 255 255);transform: ;msFilter:;">
                            <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm9-8.586 6 6V15l.001 5H6v-9.586l6-6z"></path>
                            <path d="M12 18c3.703 0 4.901-3.539 4.95-3.689l-1.9-.621c-.008.023-.781 2.31-3.05 2.31-2.238 0-3.02-2.221-3.051-2.316l-1.899.627C7.099 14.461 8.297 18 12 18z"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </button>

        <div class="welcome">

            <div class="pinkbox">

                <div class="signup nodisplay">
                    <h1>Registro</h1>
                    <form autocomplete="off">
                        <input type="text" id="r_nombre" name="nombre" placeholder="Nombre Completo" required>
                        <input type="email" id="r_email" name="email" placeholder="Corre Electronico" required>
                        <input type="text" id="r_cell" name="cell" placeholder="Telefono" required>
                        <input type="password" id="r_pass" name="pass" placeholder="Contraseña" required>
                        <input type="button" class="button submit" value="Guardar Cuenta" id="registro_cliente">
                    </form>
                </div>

                <div class="signin">
                    <h1>Iniciar Sesion</h1>
                    <form class="more-padding" autocomplete="off" action="<?php echo base_url(); ?>Login/iniciar_sesion" method="POST">
                        <input type="email" placeholder="Correo" name="email" id="l_email" required>
                        <input type="password" placeholder="Contraseña" name="pass" id="l_pass" required>

                        <!-- <input type="button" class="button submit" value="Login" id="logeo"> -->
                        <button type="submit" class="button submit">Inicio Sesion</button>
                    </form>
                </div>

            </div>

            <div class="leftbox">
                <h2 class="title"><span>Happy</span>-<br>Pots</h2>
                <p class="desc">Elige tu maceta <span>perfecta</span></p>
                <img class="flower" src="<?= base_url() . 'assets/images/happypots.png'; ?>" alt="Logo de Happy Pots" width="50" height="50" border="0">
                <p class="account">Tienes una cuenta?</p>
                <button class="button" id="signin">Inicio Sesion</button>
            </div>

            <div class="rightbox">
                <h2 class="title"><span>Happy</span>-<br>Pots</h2>
                <p class="desc">Una maceta para tu <span>vida.</span></p>
                <img class="flower" src="<?= base_url() . 'assets/images/happypots.png'; ?>" alt="Logo de Happy Pots" width="50" height="50" />
                <p class="account">No tienes una cuenta?</p>
                <button class="button" id="signup">Crear Cuenta</button>
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