<?php
namespace App\Core;
abstract class AbstractUser {
    protected $name;
    protected $email;
    protected $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        // Hashing the password for security
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getEmail() {
        return $this->email;
    }

    // Child classes must define this method
    abstract public function userRole();
}
?>
