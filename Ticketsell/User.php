<?php

include_once ('DB.php');

class User

{
    private int $userId;
    private string $userName;
    private string $userMail;
    private string $userPassword;

    public function __construct(int $userId, String $userName, String $userMail, String $userPassword)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userMail = $userMail;
        $this->userPassword = $userPassword;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getUserMail()
    {
        return $this->userMail;
    }

    public function getuserId() {
        return $this->userId;
    }

    public function getUserPassword() {
        return $this->userPassword;
    }

    public static function createUser() {
        $mail = $_POST['userMail'];
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $db = DB::getInstance();
        $sql = "INSERT INTO user (username, mail, password) VALUES ('$username','$mail' , '$password');";
        $result = $db->query($sql);
        if ($result)
        {
            header('Location: index.php?signup=success');
        }
    }

    public static function loginUser() {
        $customer = $_POST['userName'];
        $address = $_POST['password'];
        $db = DB::getInstance();
        $sql = "SELECT username, password FROM user WHERE userName =? && password =?";
        $result = $db->query($sql);
        if ($result)
        {
            header('Location: index.php?signup=success');
        }
    }

}
?>