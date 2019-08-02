<?php

class Admin extends Controller {
    public function index()
    {
        $data['title'] = 'Admin';
        $data['linkblog'] = '';
        $data['error'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function menu()
    {
        $data['title'] = 'Menu | Admin';
        $data['linkblog'] = ' / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/menu', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addpost()
    {
        $data['title'] = 'Admin | Add New Post';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/addpost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editpost()
    {
        $data['title'] = 'Admin | Edit Post';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editpost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addepisode()
    {
        $data['title'] = 'Admin | Add New Episode';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/addepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editepisode()
    {
        $data['title'] = 'Admin | Edit Episode';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        $this->view('admin/logout');
    }
}