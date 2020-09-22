<?php

include_once('UserService.php');

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

}
?>