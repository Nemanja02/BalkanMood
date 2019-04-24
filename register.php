<?php session_start(); 
    $error = "/";
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error']['message'];
        unset($_SESSION['error']);
    }
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
        <link rel="stylesheet" type="text/css" href="style/material.css">
        <link rel="stylesheet" type="text/css" href="style/nav.css">
    </head>
    <body>
        <?php include 'components/nav.php'; ?>     
        <div class="wrap">
        <div class="wrap-reg">
            <div class="logo-login">Balkan Mood</div>
            <form action="scripts/register.php" method="POST">
            <div class="login-form">
                <div class="login-name">Register</div>
                

                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="first_name" type="text" class="validate" name="first_name" minlength="4" required="" aria-required="true">
                        <label class="active" for="first_name">First Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="last_name" type="text" class="validate" name="last_name" minlength="4" required="" aria-required="true">
                        <label class="active" for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="username" type="text" class="validate" name="username" minlength="6" required="" aria-required="true">
                        <label class="active" for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="pwd" type="password" class="validate" name="pwd" minlength="8" required="" aria-required="true">
                        <label class="active" for="pwd">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="pwd_conf" type="password" class="validate" name="pwd_conf" minlength="8" required="" aria-required="true">
                        <label class="active" for="pwd_conf">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="mail" type="email" class="validate" name="mail" required="" aria-required="true">
                        <label class="active" for="mail">Email</label>
                    </div>
                </div>

                <div class="terms">
                    <div>
                      <input type="checkbox" class="filled-in" id="check">
                      <label for="check">Prihvatam <a href="">Uslove koriscenja</a></label>
                    </div>
                </div><br><br><br>

                <input type="submit" class="dugme" value="Register" disabled>
            
            </div>
            </form>
            </div>
        </div>
        <div class="error-message"></div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript">
             $(document).ready(function() {
                M.updateTextFields();
              });
             $(".filled-in").click( function(){
               if( $(this).is(':checked') ) $(".dugme").removeAttr("disabled");
            });
             var error = "<?php echo $error ?>";
             if (error != "/") {
                $(".error-message").text(error);
                $(".error-message").show('slide', {direction: 'right'});
                setTimeout(function(){
                    $(".error-message").hide('slide', {direction: 'right'});
                }, 5000); 
             }
        </script>
    </body>
</html>