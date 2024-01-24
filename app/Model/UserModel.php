<?php

require_once ('config/database.php');

class UserModel
{
    public $db;

    public function  __construct()
    {
        $this->db = new database();
    }

    public function findUserByUsername($username)
    {
        // Query the database
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        // If row count is greater than 0, username exists
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        // Query the database
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // If row count is greater than 0, email exists
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($data)
    {
        $this->db->query("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

        // Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}