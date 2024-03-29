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

    public function page($start, $perPage)
    {
        $data['title'] = 'Blog dekadensiotak';
        $data['linkblog'] = '';
        $data['post'] = $this->model('Blog_model')->getAllPostLimitedFrom2($start, $perPage);
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
        $data['linkblog'] = ' / <a href="../../blog">blog</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/post', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function list()
    {
        $data['title'] = 'Post list of Blog dekadensiotak';
        $data['linkblog'] = ' / <a href="../blog">blog</a>';
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
        $data['linkblog'] = ' / <a href="../../blog">blog</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelinkblog', $data);
        $this->view('blog/tag', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }
}