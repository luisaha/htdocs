<?php

    require_once ('User.php');


    if (empty($_POST['userMail']) OR empty($_POST['userName']) OR empty($_POST['password']))
    {
        header('Location: register.php?register=empty');
    }
    else {
        User::takenUser();
    }



?>