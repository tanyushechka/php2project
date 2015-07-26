<?php
namespace App\Models;
use App\Classes\Model;

class User
    extends Model
{
    protected static $tableName = 'users';

    protected $username;
    protected $password;
    protected $status;
    protected $role;
    protected $email;

    public function getUserName() {
        return $this->username;
    }

    public function getUserRole() {
        return $this->role;
    }

    public function getUserEmail() {
        return $this->email;
    }
}
