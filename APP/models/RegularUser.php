<?php
namespace App\Models;

use App\Core\AbstractUser;
use App\Core\AuthInterface;

class RegularUser extends AbstractUser implements AuthInterface {
    public function userRole() {
        return "Regular User";
    }
    public function login($email, $password) {
        return true;
    }

    public function logout() {
        session_destroy();
        return true;
    }
}
?>
