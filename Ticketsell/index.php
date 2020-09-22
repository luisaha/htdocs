<?php
session_start();
if (isset($_SESSION['lastAccess']) && $_SESSION['lastAccess'] >= time()-3600)
{
    $_SESSION['lastAccess']=time();
}
require_once ('DB.php');
require_once ('User.php');
require_once ('UserService.php');
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
                <div class="col-md-4">

                </div>
                <div class="col-md-4 bg-light">
                    <form action="login.php" method="post">
                        Login
                        <br/>
                        <input type="text" name="userName" placeholder="Name"/><br>
                        <input type="password" name="password" placeholder="Passwort"/><br>
                        <input type="Submit" name="login" placeholder="Anmelden"/>
                    </form>
                </div>
                <div class="col-md-4">

                </div>

            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>