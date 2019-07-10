<?php

class Blog extends Controller {
    public function index()
    {
        $data['title'] = 'Blog';
        $data['post'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function post($id)
    {
        $data['title'] = 'Nanti diambil dari database';
        $data['post'] = $this->model('Blog_model')->getPostById($id);
        $this->view('templates/header', $data);
        $this->view('blog/post', $data);
        $this->view('templates/footer');
    }
}