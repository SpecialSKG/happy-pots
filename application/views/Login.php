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
    <link type="text/css" rel="stylesheet" href="assets/login/login_view.css">
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
                    <h1>sign in</h1>
                    <form class="more-padding" autocomplete="off" action="<?php echo base_url();?>Login/iniciar_sesion" method="POST">
                        <input type="text" placeholder="username" name="user" required>
                        <input type="password" placeholder="password" name="pass" required>
                        <div class="checkbox">
                            <input type="checkbox" id="remember" /><label for="remember">remember me</label>
                        </div>

                        <button class="button submit">login</button>
                    </form>
                </div>
            </div>
            <div class="leftbox">
                <h2 class="title"></h2>
                <p class="desc"></p>
                <img class="flower smaller" src="" alt="1357d638624297b" border="0">
                <p class="account"></p>
                
            </div>
            <div class="rightbox">
                <h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
                <p class="desc"> pick your perfect <span>bouquet</span></p>
                <img class="flower" src="<?= base_url() . 'assets/login/flores2.jpg'; ?>" />
                <p class="account"></p>
                
            </div>
        </div>
    </div>

    </div>
</body>

<script src="<?= base_url() . 'assets/js/jquery-3.6.0.js'; ?>"></script>
<script src="<?= base_url() . 'assets/login/login_view.js'; ?>"></script>
<script src="<?= base_url() . 'assets/js/jquery.js'; ?>"></script>
<script src="<?= base_url() . 'assets/js/main.js'; ?>"></script>
<script src="assets/login/login_view.js"></script>
<script>
    $(document).ready(function() {
        $('#signup').click(function() {
            $('.pinkbox').css('transform', 'translateX(80%)');
            $('.signin').addClass('nodisplay');
            $('.signup').removeClass('nodisplay');
        });

        $('#signin').click(function() {
            $('.pinkbox').css('transform', 'translateX(0%)');
            $('.signup').addClass('nodisplay');
            $('.signin').removeClass('nodisplay');
        });
    });
</script>