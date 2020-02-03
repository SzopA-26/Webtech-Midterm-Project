<?php

namespace App\Models;

class Post extends Model {
    //เชื่อมกับ table `posts`

    // ถ้า table ไม่ใช่ `posts
    // protected $table = 'my_posts';

    public function select_join_users($post_id) {
        $sql = "SELECT `posts`.`id` AS `posts_id` , `users`.`id` AS `user_id`, `users`.`name`, `posts`.title, `posts`.`detail`"
                ." FROM `posts` JOIN `users` ON `posts`.`user_id` = `users`.`id`"
                ." WHERE `posts`.`id` = :post_id;";
        $data = $this->db->queryFirst($sql . " LIMIT 1", [':post_id' => $post_id]);
        return $data;
    }

    public function select_all_join_users($user_id, array $option = null) {
        $sql = "SELECT `posts`.`id` AS `posts_id` , `users`.`id` AS `user_id`, `users`.`name`, `posts`.title, `posts`.`detail`"
                ." FROM `posts` JOIN `users` ON `posts`.`user_id` = `users`.`id`"
                ." WHERE `users`.`id` = :user_id;";
        if (isset($option['order'])) {
            $sql .= " ORDER BY `posts` . `id` " . $option['order'];
        }
        if (isset($option['limit'])) {
            $sql .= " LIMIT " . $option['limit'];
        }
        $data = $this->db->queryAll($sql, [':user_id' => $user_id]);
        return $data;
    }

    public function insert($title, $detail, $user_id) {
        $sql = "INSERT INTO `posts` (`title`, `detail`, `user_id`) "
                . " VALUES (:title, :detail, :user_id)";
        $data = $this->db->queryAll($sql, [
                ':title' => $title,
                ':detail' => $detail,
                ':user_id' => $ $user_id
        ]);
        return $data;
    }

    public function update($post_id, $title, $detail) {
        $sql = "UPDATE `posts`"
                ." SET `title` = :title, detail = :detail"
                ." WHERE `id` = :post_id;" ;
        $data = $this->db->queryAll($sql, [
            ':title' => $title,
            ':detail' => $detail,
            ':post_id' => $post_id
        ]);
        return $data;
    }
}