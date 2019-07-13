<?php

class Blog extends Controller {
    public function index()
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['post'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog');
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function post($slug)
    {
        $data['post'] = $this->model('Blog_model')->getPostBySlug($slug);
        $data['title'] = $data['post']['judul'] . ' | Blog dekadensiotak';
        $this->view('templates/header', $data);
        $this->view('blog/post', $data);
        $this->view('templates/footer');
    }
}