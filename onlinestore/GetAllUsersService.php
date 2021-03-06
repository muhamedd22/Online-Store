<?php

require_once('UserModel.php');

class GetAllUsersService
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();  
    }

    public function getAllRegistedUsers()
    {
        return $this->userModel->selectRegistedUsers();
    }
}

?>