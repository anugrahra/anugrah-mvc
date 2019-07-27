<?php

class Blog extends Controller {
    public function index()
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['post'] = $this->model('Blog_model')->getAllPostLimited($perPage = 3);
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function page($start)
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/page', $data);
        $this->view('templates/homelinkbottom', $data);
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
        $data['linkblog'] = '<p><a href="../blog">&lt; blog</a></p>';
        $data['list'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/list', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function tag($tag)
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['bytag'] = $this->model('Blog_model')->getAllPostByTag($tag);
        $data['label'] = $this->model('Blog_model')->forTagLabel($tag);
        $data['linkblog'] = '<p><a href="../../blog">&lt; blog</a></p>';
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/tag', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }
}