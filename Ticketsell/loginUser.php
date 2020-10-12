<?php
    require_once ('User.php');

    if (empty($_POST['username']) OR empty($_POST['password']))
    {
        header('Location: index.php?login=empty');
    }
    else {
        User::loginUser();
    }
