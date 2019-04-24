<?php 
  session_start();
  if (isset($_SESSION['username'])) header('location: index.php');
?>
<html>
    <head>
         <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="style/style2.css">
        <link rel="stylesheet" type="text/css" href="style/nav.css">
        <link rel="stylesheet" type="text/css" href="style/material.css">
    </head>
    <body>
      <?php include 'components/nav.php'; ?>
        <div class="wrap">
        <div class="wrap-login">
            <div class="logo-login">Balkan Mood</div>
            <form action="scripts/login.php" method="POST">
            <div class="login-form">
                <div class="login-name">Login</div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="username" type="text" class="validate" name="username" minlength="6" required="" aria-required="true">
                        <label class="active" for="username">Username</label>
                    </div>
                </div>
                 <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="username" type="password" class="validate" name="pwd" minlength="6" required="" aria-required="true">
                        <label class="active" for="username">Password</label>
                    </div>
                </div>
                <div class="error-name">
                    Zaboravio lozinku?
                </div>
                <input type="submit" class="dugme" value="Login">
                <div class="error-code">
                    Nemas nalog? Napravi ga.
                </div>
            </div>
            </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>