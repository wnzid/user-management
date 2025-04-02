<?php
// /App/Models/Admin.php
namespace App\Models;

use App\Core\AbstractUser;
use App\Core\AuthInterface;
use App\Core\LoggerTrait;

class Admin extends AbstractUser implements AuthInterface {
    use LoggerTrait;

    public function userRole() {
        return "Admin";
    }

    // These methods are placeholders because the actual login/logout
    // logic is handled in AuthService for database integration.
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
