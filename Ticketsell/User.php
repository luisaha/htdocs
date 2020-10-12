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

    public static function takenUser() {
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $password = md5($password);
        $db = DB::getInstance();
        $sql = "SELECT * FROM user WHERE userName ='$username';";
        $i = $db->countQuery($sql);
        if ($i != 0)
        {
            header('Location: register.php?register=taken');
        }
        else
        {
            User::createUser();
        }
    }

    public static function createUser() {
        $mail = $_POST['userMail'];
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $password = md5($password);
        $db = DB::getInstance();
        $sql = "INSERT INTO user (username, mail, password) VALUES ('$username', '$mail' , '$password');";
        $result = $db->query($sql);
        if ($result)
        {
            header('Location: index.php?signup=success');
        }
    }

    public static function loginUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        $db = DB::getInstance();
        $sql = "SELECT username, password FROM user WHERE username = '$username' and password = '$password'";
        $i = $db->countQuery($sql);
        if ($i >0)
        {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: login.php');
        }
        else
        {
            header('Location: index.php?login=failed');
        }
    }

}
