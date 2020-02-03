<?php

namespace App\Controllers;
use App\Models\Post;

class PostsController extends Controller {

    public function index() {
        $posts = (new Post())->all();
        return $this->render('posts/index',['posts' => $posts]);
    }

    public function show() {
        if (!isset($this->request->params[0])) {
            throw new Exception("Params[0] is required");
        }
        $post_id = $this->request->params[0];
        $post = (new Post())->select_join_users($post_id);
        return $post;
    }

    public function by_user() {
        if (!isset($this->request->params[0])) {
            throw new Exception("Params[0] is required");
        }
        $user_id = $this->request->params[0];
        $posts = (new Post())->select_all_join_users($user_id,null);
        echo "<pre>";
        var_dump($posts);
        echo "</pre>";
    }

    public function create() {
        return $this->render('posts/create');
    }

    public function store() {

        $input = $this->request->input;

        $title = $input->title;
        $detail = $input->detail;
        $user_id = $input->user_id;
        $result = (new Post())->insert($title, $detail, $user_id);
        // echo "<pre>";
        // var_dump($this->request->input);
        // echo "</pre>";
        return $this->redirect('/posts');
    }

    public function edit() {
        if (!isset($this->request->params[0])) {
            throw new Exception("Params[0] is required");
        }
        $post_id = $this->request->params[0];
        $post = (new Post())->first($post_id);

        return $this->render('posts/edit', ['post' => $post]);
    }

    public function update() {
        $input = $this->request->input;

        $title = $input->title;
        $detail = $input->detail;
        $post_id = $input->post_id;
        $result = (new Post())->update($post_id, $title, $detail);

        return $this->redirect('/posts/show/' . $post_id);
    }

    public function test() {
        return $this->render('posts/test', ['login' => $this->request->params[0]]);

    }
    
}