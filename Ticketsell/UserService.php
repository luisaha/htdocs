<?php

include_once ('DB.php');
include_once ('User.php');
include_once ('includes/config.inc.php');



class UserService
{
    public static function createUser()
    {
        $customer = $_POST['userName'];
        $address = $_POST['userMail'];
        $password = $_POST['userPassword'];
        $db = DB::getInstance();
        $sql = "INSERT INTO user (name, mail, password) VALUES ('$customer','$address','$password');";
        $result = $db->query($sql);
        if ($result)
        {
            header('Location: index.php?signup=success');
        }
    }


}