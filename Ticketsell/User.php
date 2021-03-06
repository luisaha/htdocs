<?php

include_once ('DB.php');

class User

{
    private int $userId;
    private string $userName;
    private string $userMail;
    private string $userPassword;
    private bool $viewTitle;
    private bool $viewTable;
    private bool $viewForm;

    public function __construct(int $userId, String $userName, String $userMail, String $userPassword, bool $viewTitle, bool $viewTable, bool $viewForm)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userMail = $userMail;
        $this->userPassword = $userPassword;
        $this->viewTitle = $viewTitle;
        $this->viewTable = $viewTable;
        $this->viewForm = $viewForm;
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
        $view = '1';
        $db = DB::getInstance();
        $sql = "INSERT INTO user (username, mail, password, viewid) VALUES ('$username', '$mail' , '$password', $view);";
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
        $sql = "SELECT * FROM user, view  WHERE user.viewid = view.id AND user.username = '$username' AND user.password = '$password'";
        $i = $db->countQuery($sql);
        $result = $db-query($sql);
        $viewtitle = $result["title"];
        $viewform = $result["form"];
        $viewtable = $result["table"];

        if ($i >0)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['viewtitle'] = $viewtitle;
            $_SESSION['viewform'] = $viewform;
            $_SESSION['viewtable'] = $viewtable;

            header('Location: login.php');
        }
        else
        {
            header('Location: index.php?login=failed');
        }
    }

}
