<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
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
</head>

<body>
    <div class="container">
        <div class="welcome">
            <div class="pinkbox">
                <div class="signup nodisplay">
                    <h1>register</h1>
                    <form autocomplete="off">
                        <input type="text" placeholder="username">
                        <input type="email" placeholder="email">
                        <input type="password" placeholder="password">
                        <input type="password" placeholder="confirm password">
                        <button class="button submit">create account </button>
                    </form>
                </div>
                <div class="signin">
                    <h1>Iniciar Sesion</h1>
                    <form class="more-padding" autocomplete="off" action="<?php echo base_url();?>Login/iniciar_sesion"
                        method="POST">
                        <input type="text" placeholder="Usuario" name="user" required>
                        <input type="password" placeholder="Contraseña" name="pass" required>
                        
                        <button class="button submit">Login</button>
                    </form>
                </div>
            </div>
            <div class="rightbox">
                <h2 class="title"><span>Happy</span>-<br>Pots</h2>
                <p class="desc">---------------------</p>
                <img class="flower" src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Logo de Happy Pots" width="50" height="50" />
                <p class="account">-----------------------</p>
            </div>
        </div>
    </div>

    </div>
</body>
<script src="<?= base_url() . 'assets/js/jquery.js'; ?>"></script>
<script src="<?= base_url() . 'assets/login/login_view.js'; ?>"></script>