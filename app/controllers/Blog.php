<?php

class Blog extends Controller {
    public function index()
    {
        $data['title'] = 'Blog';
        $this->view('templates/header', $data);
        $this->view('blog/index');
        $this->view('templates/footer');
    }

    public function post($judul = 'Judul Post')
    {
        $data['title'] = 'Post';
        $data['judul'] = $judul;
        $this->view('templates/header', $data);
        $this->view('blog/post', $data);
        $this->view('templates/footer');
    }
}