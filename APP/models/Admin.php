<?php
namespace App\Models;

use App\Core\AbstractUser;
use App\Core\AuthInterface;
use App\Core\LoggerTrait;

class Admin extends AbstractUser implements AuthInterface {
    use LoggerTrait;

    public function userRole() {
        return "Admin";
    }
    public function login($email, $password) {
        return true;
    }

    public function logout() {
        $this->logActivity("Admin logged out.");
        session_destroy();
        return true;
    }
}
?>
