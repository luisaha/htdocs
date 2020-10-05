<?php
session_start();
if (isset($_SESSION['lastAccess']) && $_SESSION['lastAccess'] >= time()-3600)
{
    $_SESSION['lastAccess']=time();
}
require_once ('DB.php');
require_once ('User.php');
require_once('Transfer.php');

?>

<!DOCTYPE html>

<html>

    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Ticketverkauf</title>
    </header>


    <body class="pt-5">
        <div class="container p-5">
            <div class="row">
               <? if (isset($_GET['signup']) && $_GET['signup']=='success') {

                   echo '<div class="row alert alert-success" role="alert">
                    Du hast dich erfolgreich registriert. Logge Dich jetzt ein!
                </div>';
               }
               ?>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 bg-light m-3 p-5 rounded">
                    <form action="login.php" method="post">
                        <h1 class="text-center">Login</h1>
                        <br/>
                        <input class="form-control" type="text" name="userName" placeholder="Benutzername"/><br>
                        <input class="form-control" type="password" name="password" placeholder="Passwort"/><br>
                        <button type="submit" class="btn btn-primary align-content-center rounded-pill" name="login" type="submit">Anmelden</button>
                    </form><br>
                    Hast Du dein <a href="forgotPassword.php">Passwort vergessen?</a>
                </div>
                <div class="col-md-3">

                </div>

            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <span class="ml-2">Noch keinen Account? Dann registriere Dich <a href="register.php"> hier!</a></span>
                </div>
                <div class="col-md-3">

                </div>

            </div>
        </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>