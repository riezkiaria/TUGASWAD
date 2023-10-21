<?php
namespace Controllers;

include_once "dao/user.php";
use DAO\UserDAO;

class User {
    private $userDAO;

    public function __construct($conn = null) {
        $this->userDAO = new UserDAO($conn);
    }

    public function index() {
        // Function index() - No specific action defined.
    }

    public function register() {
        include_once 'views/register.php'; // Include the registration view.
    }

    public function doRegister() {
        // Handle user registration.
        $this->userDAO->insert($_POST['username'], $_POST['email'], $_POST['password']);
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $imageData = file_get_contents($_FILES['image']['tmp_name']);
            $this->userDAO->move_uploaded_file($imageData);
        }
        
        header('location:/user/showAll'); // Redirect to the "showAll" action.
    }

    public function login() {
        include_once 'views/login.php'; // Include the login view.
    }

    public function doLogin() {
        // Handle user login.
        $user = $this->userDAO->login($_POST['username'], $_POST['password']);
        if($user == null) {
            header('location:/user/login'); // Redirect to the login page in case of login failure.
        }
        else {
            include_once 'views/user.php'; // Include the user view upon successful login.
        }
    }

    public function showAll() {
        // Retrieve and display all users.
        $users = $this->userDAO->getAll();
        include_once 'views/users.php'; // Include the users view.
    }
}
