<?php

require_once('app/Model/UserModel.php');

class UserController
{
    public $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function view($view, $data = [])
    {
        if (file_exists('template/front/' . $view . '.php')) {
            require_once 'template/front/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }

    public function login()
    {
        $this->view('/login');
    }

    public function register()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'username' => isset($_POST['username']) ? trim($_POST['username']) : '',
            'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
            'password' => isset($_POST['password']) ? trim($_POST['password']) : '',
            'confirm_password' => isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '',
            'username_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Populate data array with submitted form data
            $data = [
                'username' => isset($_POST['username']) ? trim($_POST['username']) : '',
                'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
                'password' => isset($_POST['password']) ? trim($_POST['password']) : '',
                'confirm_password' => isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '',
                'username_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Username validation
            if (empty($data['username']) || strlen($data['username']) < 6) {
                $data['username_err'] = 'Username must be at least 6 characters';
            }

            if ($this->model->findUserByUsername($data['username'])) {
                $data['username_err'] = 'Username already exists';
            }

            // Check if email exists
            if ($this->model->findUserByEmail($data['email'])) {
                $data['email_err'] = 'An account with this email already exists';
            }


            // Email validation
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter a valid email';
            }

            // Password validation
            if (empty($data['password']) || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/", $data['password'])) {
                $data['password_err'] = 'Password must be at least 8 characters and contain at least one uppercase letter, one number, and one special character';
            }

            // Confirm password validation
            if ($data['password'] !== $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            // If there are no errors, proceed with registration
            if (empty($data['username_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Insert user into database
                if ($this->model->registerUser($data)) {
                    // Set success message
                    $_SESSION['register_success'] = 'Registration successful. Please log in.';
                    header('location: /login');
                    exit();
                } else {
                    $_SESSION['register_error'] = 'Something went wrong. Please try again.';
                    // Do not redirect, load the view with errors
                    $this->view('/register', $data);
                    exit();
                }
            } else {
                // Do not redirect, load the view with errors
                $this->view('/register', $data);
                exit();
            }
        }

        $this->view('/register', $data);
    }
}

$init = new UserController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['type'])) { // Check if the "type" key exists
        switch ($_POST['type']) {
            case 'register':
                $init->register();
                break;
        }
    }
}