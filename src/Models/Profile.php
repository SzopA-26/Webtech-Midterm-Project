<?php

namespace App\Models;

class Profile extends Model {
    protected $table = 'users';

    public function showProfile($username) {
        $sql = "SELECT * FROM `users` WHERE `users`.`username` = :username";
        $data = $this->db->queryFirst($sql . " LIMIT 1", [
            ':username' => $username,
            ':email' => $email,
            ':image_path' => $image_path,
            ':point' => $point,
            ':role' => $role

        ]);

    }
}