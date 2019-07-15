<?php

class Blog extends Controller {
    public function index()
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['post'] = $this->model('Blog_model')->getAllPostLimited();
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

    public function list()
    {
        $data['title'] = 'Post list of Blog dekadensiotak';
        $data['list'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('blog/list', $data);
        $this->view('templates/footer');
    }
}